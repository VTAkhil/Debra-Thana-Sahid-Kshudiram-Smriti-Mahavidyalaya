<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyAssign;
use Illuminate\Support\Facades\DB;
class FacultyAssignController extends Controller
{
    public function list_faculty_assign()
    {
        return view('admin.pages.faculty_assign.list');
    }

    public function add_faculty_assign(Request $request)
    {
        return view("admin.pages.faculty_assign.create",compact('request'));
    }
    public function addFacultyAssign(Request $request)
    {
        $request->validate([
            'faculty_id'  => 'required',
            'subject_id' => 'required',
            'faculty_new_designation' => 'required|string|max:255',
            'another_subject_id' => 'required|different:subject_id',
        ],
        [
            'another_subject_id.unique' => 'This subject is already assigned and cannot be selected again.',
        ]);

        $table = new FacultyAssign;
        $table->faculty_id = $request->faculty_id;
        $table->subject_id = $request->subject_id;
        $table->faculty_new_designation = $request->faculty_new_designation;
        $table->another_subject_id = $request->another_subject_id;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Faculty Assign submitted successfully!');
    }
    public function edit_faculty_assign($id)
    {
        $data = FacultyAssign::findOrFail($id);
        return view("admin.pages.faculty_assign.edit", compact('data'));
    }
    public function editFacultyAssign(Request $request, $id)
    {
        $request->validate([
            'faculty_id'  => 'required',
            'subject_id' => 'required',
            'faculty_new_designation' => 'required|string|max:255',
            'another_subject_id' => 'required|different:subject_id',
        ],
        [
            'another_subject_id.unique' => 'This subject is already assigned and cannot be selected again.',
        ]);
        $data = FacultyAssign::findOrFail($id);
        $data->faculty_id = $request->faculty_id;
        $data->subject_id = $request->subject_id;
        $data->faculty_new_designation = $request->faculty_new_designation;
        $data->another_subject_id = $request->another_subject_id;
        $data->status="1";
        $data->save();
        return redirect()->back()->with('success', 'Faculty Assign updated successfully!');
    }

    public function deleteFacultyAssign(Request $request,$id)
    {
        $table = FacultyAssign::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Faculty Assign Deleted successfully!');
    }
    public function FacultyAssignStatusChanger(Request $request, $id)
    {
        $table = FacultyAssign::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Faculty Assign status updated successfully!');
    }
    public function getSubjectByFaculty(Request $request)
    {
        $facultyId = $request->faculty;
        $faculty = DB::table('faculty_registrations')->where('id', $facultyId)->where('status', '1')->first();
        if (!$faculty) {
            return response()->json([
                'subject_id' => '',
                'subject_name' => ''
            ]);
        }
        $subject = DB::table('subjects')->where('id', $faculty->subject_id)->where('status', '1')->first();
        return response()->json([
            'subject_id'   => $subject->id ?? '',
            'subject_name' => $subject->subject ?? ''
        ]);
    }
}
