<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Syllabus;
use Illuminate\Support\Facades\File;
class SyllabusController extends Controller
{
    public function list_syllabus()
    {
        return view('admin.pages.syllabus.list');
    }

    public function add_syllabus()
    {
        return view("admin.pages.syllabus.create");
    }
    public function addSyllabus(Request $request)
    {
        $request->validate([
            'syllabus_title'  => 'required|string|max:255',
            'syllabus_date'   => 'required|date',
            'subject_id'     => 'required',
            'syllabus_file'   => 'nullable|required_without:syllabus_link|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'syllabus_link'   => 'nullable|required_without:syllabus_file|url',
            'syllabus_value'  => 'required',
        ]);

        $table = new Syllabus;
        $table->syllabus_title = $request->syllabus_title;
        $table->syllabus_date = date('Y-m-d', strtotime($request->syllabus_date));
        $table->subject_id = $request->subject_id;
        if ($request->hasFile('syllabus_file')) {
            $file = $request->file('syllabus_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/syllabus'), $filename);
            $table->syllabus_file = $filename;
        }
        $table->syllabus_link = $request->syllabus_link;
        $table->syllabus_value= $request->syllabus_value;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Syllabus submitted successfully!');
    }
    public function edit_syllabus($id)
    {
        $data = Syllabus::findOrFail($id);
        return view("admin.pages.syllabus.edit", compact('data'));
    }
    public function editSyllabus(Request $request, $id)
    {
        $data = Syllabus::findOrFail($id);
         $request->validate([
            'syllabus_title'  => 'required|string|max:255',
            'syllabus_date'   => 'required|date',
            'subject_id'      => 'required',
            'syllabus_value'  => 'required',
        ]);
        $data->syllabus_title = $request->syllabus_title;
        $data->syllabus_date = date('Y-m-d', strtotime($request->syllabus_date));
        $data->subject_id = $request->subject_id;
        if ($request->hasFile('syllabus_file')) {
            if (!empty($data->syllabus_file) && File::exists(public_path('uploads/syllabus/' . $data->syllabus_file))) {
                File::delete(public_path('uploads/syllabus/' . $data->syllabus_file));
            }
            $file = $request->file('syllabus_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/syllabus'), $filename);
            $data->syllabus_file = $filename;
        }
        $data->syllabus_link = $request->syllabus_link;
        $data->syllabus_value= $request->syllabus_value;
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Syllabus updated successfully!');
    }

    public function deleteSyllabus(Request $request,$id)
    {
        $table = Syllabus::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Syllabus Deleted successfully!');
    }
    public function SyllabusStatusChanger(Request $request, $id)
    {
        $table = Syllabus::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Syllabus status updated successfully!');
    }
}
