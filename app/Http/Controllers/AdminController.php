<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin; 
use App\Models\Setting; 
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.pages.authentication.login');
    }

    public function register()
    {
        return view('admin.pages.authentication.register');
    }

    public function list_user()
    {
        return view('admin.pages.register.list');
    }

    public function add_user()
    {
        return view('admin.pages.register.create');
    }

    public function AddRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => [
                'required',
                'confirmed',
                Password::min(6)->letters()->numbers()->symbols(),
                'not_in:123456,000000,111111,password,admin',
            ],
        ]);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->type = 'user'; 
        $admin->save();

        return redirect('/vtadmin')->with('success', 'Registration successful!');
    }

    public function AddUser(Request $request)
    {
        $request->validate([
            'email'    => 'required|email|unique:admins,email',
            'password' => [
                'required',
                Password::min(6)->letters()->numbers()->symbols(),
                'not_in:123456,000000,111111,password,admin',
            ],
        ]);
        $emailName = strstr($request->email, '@', true);
        $username  = 'dtsksm' . strtolower($emailName);
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->designation = $request->designation;
        $admin->username = $username;
        $admin->password = Hash::make($request->password);
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/profile'), $filename);
            $admin->profile_image = $filename;
        }
        $admin->status = "1";
        $admin->type = 'user'; 
        $admin->save();
        Auth::guard('admin')->login($admin);
        return back()->with('success', 'User Profile Regsitered Successfully');
    }

     public function edit_user($id)
    {
        $data = Admin::findOrFail($id);
        return view('admin.pages.register.edit',compact("data"));
    }

    public function EditUser(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('admins', 'email')->ignore($admin->id),
            ],
            'password' => [
                'nullable',
                Password::min(6)->letters()->numbers()->symbols(),
                'not_in:123456,000000,111111,password,admin',
            ],
        ]);
        $admin->name  = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->designation = $request->designation;
        if ($admin->isDirty('email')) {
            $emailName = strstr($request->email, '@', true);
            $admin->username = 'dtsksm' . strtolower($emailName);
        }
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }
        if ($request->hasFile('profile_image')) {
            if (!empty($admin->profile_image) && File::exists(public_path('uploads/profile/' . $admin->profile_image))) {
                File::delete(public_path('uploads/profile/' . $admin->profile_image));
            }
            $file = $request->file('profile_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/profile'), $filename);
            $admin->profile_image = $filename;
        }
        $admin->status = "1";
        $admin->save();
        return back()->with('success', 'User Profile updated successfully!');
    }

    // public function AddLogin(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $user = Admin::where('email', $request->email)->first();
    //     if (!$user || !Hash::check($request->password, $user->password)) {
    //         return back()->with('error', 'Email or Password is incorrect!');
    //     }
    //     if ($user->type === 'admin') {
    //         Auth::guard('admin')->login($user);
    //         return redirect('/vtadmin/dashboard')->with('success', 'Welcome Admin!');
    //     } elseif ($user->type === 'user') {
    //         Auth::guard('admin')->login($user);
    //         return redirect('/vtadmin/dashboard')->with('success', 'Welcome '.$user->name.'!');
    //     } else {
    //         return back()->with('error', 'Invalid account type.');
    //     }
    // }

    public function AddLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        $user = Admin::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Username or Password is incorrect!');
        }

        Auth::guard('admin')->login($user);

        return redirect('/vtadmin/dashboard')
            ->with('success', 'Welcome '.$user->name.'!');
    }


    public function dashboard()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect('/vtadmin')
                ->with('error', 'Please login first.');
        }

        return view('admin.pages.dashboard');
    }

    public function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }

        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }

        return redirect('/vtadmin')->with('success', 'Logged out successfully');
    }

    public function edit_profile($id)
    {
        $profile = Admin::findOrFail($id);
        return view('admin.pages.authentication.edit_profile',compact('profile'));
    }

    public function editProfile(Request $request, $id)
    {
        if (Auth::guard('admin')->check()) {
            $authUser = Auth::guard('admin')->user();
        } elseif (Auth::guard('web')->check()) {
            $authUser = Auth::guard('web')->user();
        } else {
            return redirect('/vtadmin')->with('error', 'Please login first.');
        }

        if ($authUser->type !== 'admin' && $authUser->id != $id) {
            return back()->with('error', 'You are not allowed to edit this profile.');
        }

        $profile = Admin::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $id,
            'phone' => 'nullable|string|max:10',
            'designation' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->filled('password')) {
            $request->validate([
                'password' => [
                    'confirmed',
                    Password::min(6)->letters()->numbers()->symbols(),
                    'not_in:123456,000000,111111,password,admin',
                ],
            ]);

            if ($authUser->type !== 'admin') {
                return back()->with('error', 'You are not allowed to change password.');
            }

            $profile->password = Hash::make($request->password);
        }

        $profile->update($request->only('name', 'email', 'phone', 'designation'));

        if ($request->hasFile('profile_image')) {
            if ($profile->profile_image && File::exists(public_path('uploads/profile/' . $profile->profile_image))) {
                File::delete(public_path('uploads/profile/' . $profile->profile_image));
            }

            $file = $request->file('profile_image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/profile'), $filename);
            $profile->profile_image = $filename;
            $profile->save();
        }

        return back()->with('success', 'Profile updated successfully!');
    }

    public function deleteUser(Request $request,$id)
    {
        $table = Admin::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Download Deleted successfully!');
    }
    public function UserStatusChanger(Request $request, $id)
    {
        $table = Admin::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Download status updated successfully!');
    }
}
