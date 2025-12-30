<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyQualification;
class FacultyQualificationController extends Controller
{
    public function list_faculty_qualification()
    {
        return view('admin.pages.faculty_qualification.list');
    }

    public function add_faculty_qualification()
    {
        return view("admin.pages.faculty_qualification.create");
    }
    public function addFacultyQualification(Request $request)
    {
        $request->validate([
            'faculty_id'  => 'required',
            'subject_id' => 'required',
            'faculty_qualification' => 'required|string|max:255',
            'year_of_passing' => 'required|string|max:255',
            'institute_name' => 'required|string|max:255',
        ]);

        $table = new FacultyQualification;
        $table->faculty_id = $request->faculty_id;
        $table->subject_id = $request->subject_id;
        $table->faculty_qualification = $request->faculty_qualification;
        $table->year_of_passing = $request->year_of_passing;
        $table->institute_name = $request->institute_name;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Faculty Qualification submitted successfully!');
    }
    public function edit_faculty_qualification($id)
    {
        $data = FacultyQualification::findOrFail($id);
        return view("admin.pages.faculty_qualification.edit", compact('data'));
    }
    public function editFacultyQualification(Request $request, $id)
    {
        $request->validate([
            'faculty_id'  => 'required',
            'subject_id' => 'required',
            'faculty_qualification' => 'required|string|max:255',
            'year_of_passing' => 'required|string|max:255',
            'institute_name' => 'required|string|max:255',
        ]);
        $data = FacultyQualification::findOrFail($id);
        $data->faculty_id = $request->faculty_id;
        $data->subject_id = $request->subject_id;
        $data->faculty_qualification = $request->faculty_qualification;
        $data->year_of_passing = $request->year_of_passing;
        $data->institute_name = $request->institute_name;
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Faculty Qualification updated successfully!');
    }

    public function deleteFacultyQualification(Request $request,$id)
    {
        $table = FacultyQualification::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Faculty Qualification Deleted successfully!');
    }
    public function facultyQualificationStatusChanger(Request $request, $id)
    {
        $table = FacultyQualification::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Faculty Qualification status updated successfully!');
    }
}
