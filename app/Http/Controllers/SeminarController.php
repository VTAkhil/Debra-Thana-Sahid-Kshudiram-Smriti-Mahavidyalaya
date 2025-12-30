<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
use Illuminate\Support\Facades\File;
class SeminarController extends Controller
{
    public function list_seminar()
    {
        return view('admin.pages.seminar.list');
    }

    public function add_seminar()
    {
        return view("admin.pages.seminar.create");
    }
    public function addSeminar(Request $request)
    {
        $request->validate([
            'faculty_id'  => 'required|string|max:255',
            'subject_id'   => 'required|string|max:255',
            'seminar_title'   => 'required|string|max:255',
            'enter_level'   => 'required|string|max:255',
            'organiser'   => 'required|string|max:255',
            'invited_speaker'   => 'required|string|max:255',
            'wheather_present_paper'   => 'required|string|max:255',
            'paper_title'   => 'required|string|max:255',
            'seminar_file'   => 'nullable|required_without:seminar_link|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'seminar_link'   => 'nullable|required_without:seminar_file|url',
        ]);

        $table = new Seminar;
        $table->faculty_id = $request->faculty_id;
        $table->subject_id = $request->subject_id;
        $table->seminar_title = $request->seminar_title;
        $table->enter_level = $request->enter_level;
        $table->organiser= $request->organiser;
        $table->invited_speaker= $request->invited_speaker;
        $table->wheather_present_paper= $request->wheather_present_paper;
        $table->paper_title= $request->paper_title;
        $table->seminar_link= $request->seminar_link;
        if ($request->hasFile('seminar_file')) {
            $file = $request->file('seminar_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/seminar'), $filename);
            $table->seminar_file = $filename;
        }
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Seminar submitted successfully!');
    }
    public function edit_seminar($id)
    {
        $data = Seminar::findOrFail($id);
        return view("admin.pages.seminar.edit", compact('data'));
    }
    public function editSeminar(Request $request, $id)
    {
         $request->validate([
            'faculty_id'  => 'required|string|max:255',
            'subject_id'   => 'required|string|max:255',
            'seminar_title'   => 'required|string|max:255',
            'enter_level'   => 'required|string|max:255',
            'organiser'   => 'required|string|max:255',
            'invited_speaker'   => 'required|string|max:255',
            'wheather_present_paper'   => 'required|string|max:255',
            'paper_title'   => 'required|string|max:255',
        ]);
        $data = Seminar::findOrFail($id);
        $data->faculty_id = $request->faculty_id;
        $data->subject_id = $request->subject_id;
        $data->seminar_title = $request->seminar_title;
        $data->enter_level = $request->enter_level;
        $data->organiser= $request->organiser;
        $data->invited_speaker= $request->invited_speaker;
        $data->wheather_present_paper= $request->wheather_present_paper;
        $data->paper_title= $request->paper_title;
        $data->seminar_link= $request->seminar_link;
        if ($request->hasFile('seminar_file')) {
            if (!empty($data->seminar_file) && File::exists(public_path('uploads/seminar/' . $data->seminar_file))) {
                File::delete(public_path('uploads/seminar/' . $data->seminar_file));
            }
            $file = $request->file('seminar_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/seminar'), $filename);
            $data->seminar_file = $filename;
        }
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Seminar updated successfully!');
    }

    public function deleteSeminar(Request $request,$id)
    {
        $table = Seminar::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Seminar Deleted successfully!');
    }
    public function SeminarStatusChanger(Request $request, $id)
    {
        $table = Seminar::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Seminar status updated successfully!');
    }
}
