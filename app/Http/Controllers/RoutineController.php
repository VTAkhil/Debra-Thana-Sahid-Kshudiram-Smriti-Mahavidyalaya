<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine;
use Illuminate\Support\Facades\File;
class RoutineController extends Controller
{
    public function list_routine()
    {
        return view('admin.pages.routine.list');
    }

    public function add_routine()
    {
        return view("admin.pages.routine.create");
    }
    public function addRoutine(Request $request)
    {
        $request->validate([
            'routine_title'  => 'required|string|max:255',
            'routine_date'   => 'required|date',
            'subject_id'     => 'required',
            'routine_file'   => 'nullable|required_without:routine_link|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'routine_link'   => 'nullable|required_without:routine_file|url',
        ]);

        $table = new Routine;
        $table->routine_title = $request->routine_title;
        $table->routine_date = date('Y-m-d', strtotime($request->routine_date));
        $table->subject_id = $request->subject_id;
        if ($request->hasFile('routine_file')) {
            $file = $request->file('routine_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/routine'), $filename);
            $table->routine_file = $filename;
        }
        $table->routine_link = $request->routine_link;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Routine submitted successfully!');
    }
    public function edit_routine($id)
    {
        $data = Routine::findOrFail($id);
        return view("admin.pages.routine.edit", compact('data'));
    }
    public function editRoutine(Request $request, $id)
    {
        $data = Routine::findOrFail($id);
         $request->validate([
            'routine_title'  => 'required|string|max:255',
            'routine_date'   => 'required|date',
            'subject_id'     => 'required',
        ]);
        $data->routine_title = $request->routine_title;
        $data->routine_date = date('Y-m-d', strtotime($request->routine_date));
        $data->subject_id = $request->subject_id;
        if ($request->hasFile('routine_file')) {
            if (!empty($data->routine_file) && File::exists(public_path('uploads/routine/' . $data->routine_file))) {
                File::delete(public_path('uploads/routine/' . $data->routine_file));
            }
            $file = $request->file('routine_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/routine'), $filename);
            $data->routine_file = $filename;
        }
        $data->routine_link = $request->routine_link;
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Routine updated successfully!');
    }

    public function deleteRoutine(Request $request,$id)
    {
        $table = Routine::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Routine Deleted successfully!');
    }
    public function RoutineStatusChanger(Request $request, $id)
    {
        $table = Routine::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Routine status updated successfully!');
    }
}
