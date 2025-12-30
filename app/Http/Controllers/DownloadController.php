<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Download;
use Illuminate\Support\Facades\File;
class DownloadController extends Controller
{
    public function list_download()
    {
        return view('admin.pages.downloads.list');
    }

    public function add_download()
    {
        return view("admin.pages.downloads.create");
    }
    public function addDownload(Request $request)
    {
        $request->validate([
            'download_title'  => 'required|string|max:255',
            'download_date'   => 'required|date',
            'subject_id'     => 'required',
            'download_file'   => 'nullable|required_without:download_link|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'download_link'   => 'nullable|required_without:download_file|url',
            'download_value'  => 'required',
        ]);
        $table = new Download;
        $table->download_title = $request->download_title;
        $table->download_date = date('Y-m-d', strtotime($request->download_date));
        $table->subject_id = $request->subject_id;
        if ($request->hasFile('download_file')) {
            $file = $request->file('download_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/download'), $filename);
            $table->download_file = $filename;
        }
        $table->download_link = $request->download_link;
        $table->download_value = $request->download_value;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Download submitted successfully!');
    }
    public function edit_download($id)
    {
        $data = Download::findOrFail($id);
        return view("admin.pages.downloads.edit", compact('data'));
    }
    public function editDownload(Request $request, $id)
    {
        $data = Download::findOrFail($id);
         $request->validate([
            'download_title'  => 'required|string|max:255',
            'download_date'   => 'required|date',
            'subject_id'     => 'required',
        ]);
        $data->download_title = $request->download_title;
        $data->download_date = date('Y-m-d', strtotime($request->download_date));
        $data->subject_id = $request->subject_id;
        if ($request->hasFile('download_file')) {
            if (!empty($data->download_file) && File::exists(public_path('uploads/download/' . $data->download_file))) {
                File::delete(public_path('uploads/download/' . $data->download_file));
            }
            $file = $request->file('download_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/download'), $filename);
            $data->download_file = $filename;
        }
        $data->download_link = $request->download_link;
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Download updated successfully!');
    }

    public function deleteDownload(Request $request,$id)
    {
        $table = Download::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Download Deleted successfully!');
    }
    public function DownloadStatusChanger(Request $request, $id)
    {
        $table = Download::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Download status updated successfully!');
    }
}
