<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use Illuminate\Support\Facades\File;
class NoticeController extends Controller
{
    public function list_notice()
    {
        $notices = Notice::with('subject')->get();
        return view('admin.pages.notice.list', compact('notices'));
    }

    public function add_notice()
    {
        return view("admin.pages.notice.create");
    }
    public function addNotice(Request $request)
    {
        $request->validate([
            'notice_title'  => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after:start_date',
            'subject_id'    => 'required',
            'notice_file'   => 'nullable|required_without:notice_link|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'notice_link'   => 'nullable|required_without:notice_file|url',
            'notice_value'  => 'required',
        ],
        [
            'end_date.after' => 'End date must be greater than start date.',
        ]);

        $table = new Notice;
        $table->notice_title = $request->notice_title;
        $table->start_date = date('Y-m-d', strtotime($request->start_date));
        $table->end_date = date('Y-m-d', strtotime($request->end_date));
        $table->subject_id = $request->subject_id;
        if ($request->hasFile('notice_file')) {
            $file = $request->file('notice_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/notice'), $filename);
            $table->notice_file = $filename;
        }
        $table->notice_link = $request->notice_link;
        $table->notice_value = $request->notice_value;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Notice submitted successfully!');
    }
    public function edit_notice($id)
    {
        $data = Notice::findOrFail($id);
        return view("admin.pages.notice.edit", compact('data'));
    }
    public function editNotice(Request $request, $id)
    {
        $data = Notice::findOrFail($id);
         $request->validate([
            'notice_title'  => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after:start_date',
            'subject_id'    => 'required',
            'notice_value'  => 'required',
        ],
        [
            'end_date.after' => 'End date must be greater than start date.',
        ]);
        $data->notice_title = $request->notice_title;
        $data->start_date = date('Y-m-d', strtotime($request->start_date));
        $data->end_date = date('Y-m-d', strtotime($request->end_date));
        $data->subject_id = $request->subject_id;
        if ($request->hasFile('notice_file')) {
            if (!empty($data->notice_file) && File::exists(public_path('uploads/notice/' . $data->notice_file))) {
                File::delete(public_path('uploads/notice/' . $data->notice_file));
            }
            $file = $request->file('notice_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/notice'), $filename);
            $data->notice_file = $filename;
        }
        $data->notice_link = $request->notice_link;
        $data->notice_value= $request->notice_value;
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Notice updated successfully!');
    }

    public function deleteNotice(Request $request,$id)
    {
        $table = Notice::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Notice Deleted successfully!');
    }
    public function Noticestatuschanger(Request $request, $id)
    {
        $table = Notice::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Notice status updated successfully!');
    }
    
}
