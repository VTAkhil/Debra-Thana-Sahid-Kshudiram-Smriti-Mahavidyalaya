<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publications;
class PublicationsController extends Controller
{
    public function list_publications()
    {
        return view('admin.pages.publications.list');
    }

    public function add_publications()
    {
        return view("admin.pages.publications.create");
    }
    public function addPublications(Request $request)
    {
        $request->validate([
            'faculty_id'  => 'required|max:255',
            'subject_id' => 'required|max:255',
            'publications_paper_title' => 'required|string|max:255',
            'publications_name' => 'required|string|max:255',
            'publications_date' => 'required|string|max:255',
            'publications_category' => 'required|string|max:255',
            'published_in' => 'required|string|max:255',
            'volume' => 'required|string|max:255',
            'issn_no' => 'required|string|max:255',
            'publications_paper_link' => 'required|string|max:255',
            'sort_by' => 'required|string|max:255',
            'publications_file'   => 'nullable|required_without:publications_link|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'publications_link'   => 'nullable|required_without:publications_file|url',
        ]);

        $table = new Publications;
        $table->faculty_id = $request->faculty_id;
        $table->subject_id = $request->subject_id;
        $table->publications_paper_title = $request->publications_paper_title;
        $table->publications_name = $request->publications_name;
        $table->publications_date = date('Y-m-d', strtotime($request->publications_date));
        $table->publications_category = $request->publications_category;
        $table->published_in = $request->published_in;
        $table->volume = $request->volume;
        $table->issn_no = $request->issn_no;
        $table->publications_paper_link = $request->publications_paper_link;
        $table->sort_by = $request->sort_by;
        $table->publications_link = $request->publications_link;
        if ($request->hasFile('publications_file')) {
            $file = $request->file('publications_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/publication'), $filename);
            $table->publications_file = $filename;
        }
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Publications submitted successfully!');
    }
    public function edit_publications($id)
    {
        $data = Publications::findOrFail($id);
        return view("admin.pages.publications.edit", compact('data'));
    }
    public function editPublications(Request $request, $id)
    {
        $request->validate([
            'faculty_id'  => 'required|max:255',
            'subject_id' => 'required|max:255',
            'publications_paper_title' => 'required|string|max:255',
            'publications_name' => 'required|string|max:255',
            'publications_date' => 'required|string|max:255',
            'publications_category' => 'required|string|max:255',
            'published_in' => 'required|string|max:255',
            'volume' => 'required|string|max:255',
            'issn_no' => 'required|string|max:255',
            'publications_paper_link' => 'required|string|max:255',
            'sort_by' => 'required|string|max:255',
        ]);
        $data = Publications::findOrFail($id);
        $data->faculty_id = $request->faculty_id;
        $data->subject_id = $request->subject_id;
        $data->publications_paper_title = $request->publications_paper_title;
        $data->publications_name = $request->publications_name;
        $data->publications_date = $request->publications_date;
        $data->publications_date = date('Y-m-d', strtotime($request->publications_date));
        $data->publications_category = $request->publications_category;
        $data->published_in = $request->published_in;
        $data->volume = $request->volume;
        $data->issn_no = $request->issn_no;
        $data->publications_paper_link = $request->publications_paper_link;
        $data->sort_by = $request->sort_by;
        $data->publications_link = $request->publications_link;
        if ($request->hasFile('publications_file')) {
            if (!empty($data->publications_file) && File::exists(public_path('uploads/publication/' . $data->publications_file))) {
                File::delete(public_path('uploads/publication/' . $data->publications_file));
            }
            $file = $request->file('publications_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/publication'), $filename);
            $data->publications_file = $filename;
        }
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Publications updated successfully!');
    }

    public function deletePublications(Request $request,$id)
    {
        $table = Publications::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Publications Deleted successfully!');
    }
    public function PublicationsStatusChanger(Request $request, $id)
    {
        $table = Publications::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Publications status updated successfully!');
    }
}
