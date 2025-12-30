<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
class SubjectController extends Controller
{
    public function list_subject()
    {
        return view("admin.pages.subject.list");
    }

    public function add_subject()
    {
        return view("admin.pages.subject.create");
    }

    public function addSubject(Request $request)
    {
        $request->validate([
            'subject'=>'required|string|max:255',
            'category_id'=>'required',
        ]);
        $table = new Subject;
        $table->subject = $request->subject;
        $table->category_id = $request->category_id;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Subject submitted successfully!');
    }
    public function edit_subject($id)
    {
        $data = Subject::findOrFail($id);
        return view("admin.pages.subject.edit", compact('data'));
    }
    public function editSubject(Request $request,$id)
    {
        $request->validate([
            'subject'=>'required|string|max:255',
            'category_id'=>'required',
        ]);
        $data = Subject::findOrFail($id);
        $data->subject = $request->subject;
        $data->category_id = $request->category_id;
        $data->status="1";
        $data->save();
        return redirect()->back()->with('success', 'Subject updated successfully!');
    }
    public function deleteSubject(Request $request,$id)
    {
        $table = Subject::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Subject Deleted successfully!');
    }
    public function SubjectStatusChanger(Request $request, $id)
    {
        $table = Subject::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Subject status updated successfully!');
    }
}
