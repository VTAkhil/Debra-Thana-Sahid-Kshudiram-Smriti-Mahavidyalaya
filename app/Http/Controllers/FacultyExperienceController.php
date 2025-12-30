<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyExperience;
class FacultyExperienceController extends Controller
{
    public function list_faculty_experience()
    {
        return view('admin.pages.faculty_experience.list');
    }

    public function add_faculty_experience()
    {
        return view("admin.pages.faculty_experience.create");
    }
    public function addFacultyExperience(Request $request)
    {
        $request->validate([
            'faculty_id'  => 'required',
            'subject_id' => 'required',
            'faculty_experience' => 'required|string|max:255',
        ]);

        $table = new FacultyExperience;
        $table->faculty_id = $request->faculty_id;
        $table->subject_id = $request->subject_id;
        $table->faculty_experience = $request->faculty_experience;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Faculty Experience submitted successfully!');
    }
    public function edit_faculty_experience($id)
    {
        $data = FacultyExperience::findOrFail($id);
        return view("admin.pages.faculty_experience.edit", compact('data'));
    }
    public function editFacultyExperience(Request $request, $id)
    {
        $request->validate([
            'faculty_id'  => 'required',
            'subject_id' => 'required',
            'faculty_experience' => 'required|string|max:255',
        ]);
        $data = FacultyExperience::findOrFail($id);
        $data->faculty_id = $request->faculty_id;
        $data->subject_id = $request->subject_id;
        $data->faculty_experience = $request->faculty_experience;
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Faculty Experience updated successfully!');
    }

    public function deleteFacultyExperience(Request $request,$id)
    {
        $table = FacultyExperience::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Faculty Experience Deleted successfully!');
    }
    public function facultyExperienceStatusChanger(Request $request, $id)
    {
        $table = FacultyExperience::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Faculty Experience status updated successfully!');
    }
}
