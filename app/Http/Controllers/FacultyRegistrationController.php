<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyRegistration;
use Illuminate\Support\Facades\File;
class FacultyRegistrationController extends Controller
{
    public function list_faculty_registration()
    {
        return view('admin.pages.faculty_registration.list');
    }

    public function add_faculty_registration()
    {
        return view("admin.pages.faculty_registration.create");
    }
    public function addFacultyRegistration(Request $request)
    {
        $request->validate([
            'faculty_name'  => 'required|string|max:255',
            'faculty_email' => 'required|unique:faculty_registrations|string|max:255',
            'faculty_mobile' => 'required|unique:faculty_registrations|string|max:255',
            'subject_id' => 'required|string|max:255',
            'faculty_designation' => 'required|string|max:255',
            'faculty_type' => 'required|string|max:255',
            'faculty_employee_id' => 'required|unique:faculty_registrations|string|max:255',
            'faculty_specialization' => 'required|string|max:255',
            'area_of_research' => 'required|string|max:255',
            'faculty_qualification' => 'required|string|max:255',
            'faculty_image' => 'required',
        ]);

        $table = new FacultyRegistration;
        $table->faculty_name = $request->faculty_name;
        $table->faculty_email = $request->faculty_email;
        $table->faculty_mobile = $request->faculty_mobile;
        $table->subject_id = $request->subject_id;
        $table->faculty_designation = $request->faculty_designation;
        $table->faculty_type = $request->faculty_type;
        $table->faculty_employee_id = $request->faculty_employee_id;
        $table->faculty_specialization = $request->faculty_specialization;
        $table->faculty_qualification = $request->faculty_qualification;
        $table->area_of_research = $request->area_of_research;
        if ($request->hasFile('faculty_image')) {
            $file = $request->file('faculty_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/faculty'), $filename);
            $table->faculty_image = $filename;
        }
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Faculty Registration submitted successfully!');
    }
    public function edit_faculty_registration($id)
    {
        $data = FacultyRegistration::findOrFail($id);
        return view("admin.pages.faculty_registration.edit", compact('data'));
    }
    public function editFacultyRegistration(Request $request, $id)
    {
        $request->validate([
            'faculty_name'  => 'required|string|max:255',
            'faculty_email' => 'required|string|max:255',
            'faculty_mobile' => 'required|string|max:255',
            'subject_id' => 'required|string|max:255',
            'faculty_designation' => 'required|string|max:255',
            'faculty_type' => 'required|string|max:255',
            'faculty_employee_id' => 'required|string|max:255',
            'faculty_specialization' => 'required|string|max:255',
            'area_of_research' => 'required|string|max:255',
            'faculty_qualification' => 'required|string|max:255',
        ]);
        $data = FacultyRegistration::findOrFail($id);
        $data->faculty_name = $request->faculty_name;
        $data->faculty_email = $request->faculty_email;
        $data->faculty_mobile = $request->faculty_mobile;
        $data->subject_id = $request->subject_id;
        $data->faculty_designation = $request->faculty_designation;
        $data->faculty_type = $request->faculty_type;
        $data->faculty_employee_id = $request->faculty_employee_id;
        $data->faculty_specialization = $request->faculty_specialization;
        $data->faculty_qualification = $request->faculty_qualification;
        $data->area_of_research = $request->area_of_research;
        if ($request->hasFile('faculty_image')) {
            if (!empty($data->faculty_image) && File::exists(public_path('uploads/faculty/' . $data->faculty_image))) {
                File::delete(public_path('uploads/faculty/' . $data->faculty_image));
            }
            $file = $request->file('faculty_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/faculty'), $filename);
            $data->faculty_image = $filename;
        }
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Faculty Registration updated successfully!');
    }

    public function deleteFacultyRegistration(Request $request,$id)
    {
        $table = FacultyRegistration::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Faculty Registration Deleted successfully!');
    }
    public function facultyRegistrationStatusChanger(Request $request, $id)
    {
        $table = FacultyRegistration::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Faculty Registration status updated successfully!');
    }
}
