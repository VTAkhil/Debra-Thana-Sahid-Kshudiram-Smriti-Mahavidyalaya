<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
class FacultyController extends Controller
{
    public function list_faculty()
    {
        return view("admin.pages.faculty.list");
    }
    public function add_faculty()
    {
        return view("admin.pages.faculty.create");
    }
    public function addFaculty(Request $request)
    {
        $request->validate([
            'faculty_name'=>'required|string|max:255',
        ]);
        $table = new Faculty;
        $table->faculty_name = $request->faculty_name;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Faculty submitted successfully!');
    }
    public function edit_faculty($id)
    {
        $data = Faculty::findOrFail($id);
        return view("admin.pages.faculty.edit", compact('data'));
    }
    public function editfaculty(Request $request,$id)
    {
        $request->validate([
            'faculty_name'=>'required|string|max:255',
        ]);
        $table = Faculty::findOrFail($id);
        $table->faculty_name = $request->faculty_name;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Faculty updated successfully!');
    }
    public function deleteFaculty(Request $request,$id)
    {
        $table = Faculty::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Faculty Deleted successfully!');
    }
    public function FacultyStatusChanger(Request $request, $id)
    {
        $table = Faculty::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Faculty status updated successfully!');
    }
}
