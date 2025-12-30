<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Committee;
class CommitteeController extends Controller
{
    public function list_committee()
    {
        return view("admin.pages.committee.list");
    }
    public function add_committee()
    {
        return view("admin.pages.committee.create");
    }
    public function addCommittee(Request $request)
    {
        $request->validate([
            'committee'=>'required|string|max:255',
        ]);
        $table = new Committee;
        $table->committee = $request->committee;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Committee submitted successfully!');
    }
    public function edit_committee($id)
    {
        $data = Committee::findOrFail($id);
        return view("admin.pages.committee.edit", compact('data'));
    }
    public function editCommittee(Request $request,$id)
    {
        $request->validate([
            'committee'=>'required|string|max:255',
        ]);
        $table = Committee::findOrFail($id);
        $table->committee = $request->committee;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Committee updated successfully!');
    }
    public function deleteCommittee(Request $request,$id)
    {
        $table = Committee::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Committee Deleted successfully!');
    }
    public function CommitteeStatusChanger(Request $request, $id)
    {
        $table = Committee::findOrFailOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Committee status updated successfully!');
    }
}
