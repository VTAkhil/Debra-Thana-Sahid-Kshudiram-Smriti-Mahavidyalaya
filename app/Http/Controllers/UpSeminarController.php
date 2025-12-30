<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UpSeminar;
use DB;
class UpSeminarController extends Controller
{
    public function list_upseminar()
    {
        return view("admin.pages.upSeminar.list");
    }
    public function add_upseminar()
    {
        return view("admin.pages.upSeminar.create");
    }
    public function addUpSeminar(Request $request)
    {
        $request->validate([
            'seminar_titile'  => 'required|string|max:255',
            'Seminar_level'   => 'required|string|max:255',
            'seminar_type'    => 'required|string|max:255',
            'speakers_name'   => 'required|string|max:255',
            'enter_duration'  => 'required|string|max:255',
            'subject_id'      => 'required|string|max:255',
            'seminar_file'    => 'nullable|required_without:seminar_link|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'seminar_link'    => 'nullable|required_without:seminar_file|url',
            'seminar_date'    => 'required|date',
        ]);
        $table = new UpSeminar;
        $table->seminar_titile = $request->seminar_titile;
        $table->Seminar_level = $request->Seminar_level;
        $table->seminar_type = $request->seminar_type;
        $table->speakers_name = $request->speakers_name;
        $table->enter_duration = $request->enter_duration;
        $table->subject_id = $request->subject_id;
        if ($request->hasFile('seminar_file')) {
            $file = $request->file('seminar_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/upseminar'), $filename);
            $table->seminar_file = $filename;
        }
        $table->seminar_link = $request->seminar_link;
        $table->seminar_date = date('Y-m-d', strtotime($request->seminar_date));
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Seminar submitted successfully!');
    }
    public function edit_upseminar($id)
    {
       $data = UpSeminar::findOrFail($id);
        return view("admin.pages.upSeminar.edit", compact('data'));
    }
    public function editUpSeminar(Request $request, $id)
    {
        $request->validate([
            'seminar_titile'  => 'required|string|max:255',
            'Seminar_level'   => 'required|string|max:255',
            'seminar_type'    => 'required|string|max:255',
            'speakers_name'   => 'required|string|max:255',
            'enter_duration'  => 'required|string|max:255',
            'subject_id'      => 'required|string|max:255',
            'seminar_date'    => 'required|date',
        ]);
        $data = UpSeminar::findOrFail($id);
        $data->seminar_titile = $request->seminar_titile;
        $data->Seminar_level = $request->Seminar_level;
        $data->seminar_type = $request->seminar_type;
        $data->speakers_name = $request->speakers_name;
        $data->enter_duration = $request->enter_duration;
        $data->subject_id = $request->subject_id;
        if ($request->hasFile('seminar_file')) {
            if ($data->seminar_file && file_exists(public_path('uploads/upseminar/'.$data->seminar_file))) {
                unlink(public_path('uploads/upseminar/'.$data->seminar_file));
            }
            $file = $request->file('seminar_file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/upseminar'), $filename);
            $data->seminar_file = $filename;
        }
        $data->seminar_link = $request->seminar_link;
        $data->seminar_date = date('Y-m-d', strtotime($request->seminar_date));
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Seminar updated successfully!');
    }
    public function deleteUpSeminar(Request $request,$id)
    {
        $table = UpSeminar::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Seminar Deleted successfully!');
    }
    public function UpSeminarstatuschanger(Request $request, $id)
    {
        $table = UpSeminar::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Notice status updated successfully!');
    }
}
