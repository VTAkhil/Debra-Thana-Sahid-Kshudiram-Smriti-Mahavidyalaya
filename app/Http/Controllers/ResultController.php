<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
class ResultController extends Controller
{
    public function list_result()
    {
        return view("admin.pages.result.list");
    }
    public function add_result()
    {
        return view("admin.pages.result.create");
    }
    public function addResult(Request $request)
    {
        $request->validate([
            'subject_id'=>'required',
            'session'=>'required',
            'student_passed'=>'required',
            'student_appeared'=>'required',
            // 'pass_percentage'=>'required',
        ]);
        $percentage = ($request->student_passed / $request->student_appeared) * 100;
        $table = new Result;
        $table->subject_id = $request->subject_id;
        $table->session = $request->session;
        $table->student_passed = $request->student_passed;
        $table->student_appeared = $request->student_appeared;
        $table->pass_percentage = $percentage;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Result submitted successfully!');
    }
    public function edit_result($id)
    {
        $data = Result::findOrFail($id);
        return view("admin.pages.result.edit", compact('data'));
    }
    public function editResult(Request $request, $id)
    {
        $request->validate([
            'subject_id'=>'required',
            'session'=>'required',
            'student_passed'=>'required',
            'student_appeared'=>'required',
        ]);
        $data = Result::findOrFail($id);
        $data->subject_id = $request->subject_id;
        $data->session = $request->session;
        $data->student_appeared = $request->student_appeared;
        $data->student_passed = $request->student_passed;
        if ($request->student_appeared > 0) {
            $data->pass_percentage = ($request->student_passed / $request->student_appeared) * 100;
        } else {
            $data->pass_percentage = 0;
        }
        $data->save();
        return redirect()->back()->with('success', ' Result submitted successfully!');
    }

    public function deleteResult(Request $request,$id)
    {
        $table = Result::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Result Deleted successfully!');
    }
    public function ResultStatusChanger(Request $request, $id)
    {
        $table = Result::findOrFailOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Result status updated successfully!');
    }
}
