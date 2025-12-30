<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommitteeAssign;
class CommitteeAssignController extends Controller
{
    public function list_committee_assign(Request $request)
    {
        return view('admin.pages.committee_assign.list',compact("request"));
    }

    public function add_committee_assign()
    {
        return view("admin.pages.committee_assign.create");
    }
    public function addCommitteeAssign(Request $request)
    {
        $request->validate([
            'faculty_id'  => 'required',
            'subject_id' => 'required',
            'faculty_new_designation' => 'required|string|max:255',
            'committee_sl_no' => 'required|unique:committee_assigns',
            'committee_id' => 'required',
            'committee_type' => 'required',
        ]);

        $table = new CommitteeAssign;
        $table->faculty_id = $request->faculty_id;
        $table->subject_id = $request->subject_id;
        $table->faculty_new_designation = $request->faculty_new_designation;
        $table->committee_sl_no = $request->committee_sl_no;
        $table->committee_id = $request->committee_id;
        $table->committee_type = $request->committee_type;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Committee Assign submitted successfully!');
    }
    public function edit_committee_assign($id)
    {
        $data = CommitteeAssign::findOrFail($id);
        return view("admin.pages.committee_assign.edit", compact('data'));
    }
    public function editCommitteeAssign(Request $request, $id)
    {
        $request->validate([
            'faculty_id'  => 'required',
            'subject_id' => 'required',
            'faculty_new_designation' => 'required|string|max:255',
            'committee_sl_no' => 'required',
            'committee_id' => 'required',
            'committee_type' => 'required',
        ]);

        $data = CommitteeAssign::findOrFail($id);
        $data->faculty_id = $request->faculty_id;
        $data->subject_id = $request->subject_id;
        $data->faculty_new_designation = $request->faculty_new_designation;
        $data->committee_sl_no = $request->committee_sl_no;
        $data->committee_id = $request->committee_id;
        $data->committee_type = $request->committee_type;
        $data->status="1";
        $data->save();
        return redirect()->back()->with('success', 'Committee Assign updated successfully!');
    }

    public function deleteCommitteeAssign(Request $request,$id)
    {
        $table = CommitteeAssign::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Committee Assign Deleted successfully!');
    }
    public function CommitteeAssignStatusChanger(Request $request, $id)
    {
        $table = CommitteeAssign::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Committee Assign status updated successfully!');
    }
}
