<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookChapter;
use Illuminate\Support\Facades\File;
class BookChapterController extends Controller
{
    public function list_chapter()
    {
        return view('admin.pages.book_chapter.list');
    }

    public function add_chapter()
    {
        return view("admin.pages.book_chapter.create");
    }
    public function addChapter(Request $request)
    {
        $request->validate([
            'faculty_id'  => 'required|string|max:255',
            'subject_id'   => 'required|string|max:255',
            'paper_title'   => 'required|string|max:255',
            'chapter_name'   => 'required|string|max:255',
            'publications_date'   => 'required|string|max:255',
            'category'   => 'required|string|max:255',
            'publisher_name'   => 'required|string|max:255',
            'volume'   => 'required|string|max:255',
            'isbn_no'   => 'required|string|max:255',
            'paper_link'   => 'required|string|max:255',
            'sort_by'   => 'required|string|max:255',
            'chapter_file'   => 'nullable|required_without:chapter_link|mimes:jpg,jpeg,png,webp|max:2048',
            'chapter_link'   => 'nullable|required_without:chapter_file|url',
        ]);

        $table = new BookChapter;
        $table->faculty_id = $request->faculty_id;
        $table->subject_id = $request->subject_id;
        $table->paper_title = $request->paper_title;
        $table->chapter_name = $request->chapter_name;
        $table->publications_date = date('Y-m-d', strtotime($request->publications_date));
        $table->category= $request->category;
        $table->publisher_name= $request->publisher_name;
        $table->volume= $request->volume;
        $table->isbn_no= $request->isbn_no;
        $table->paper_link= $request->paper_link;
        $table->sort_by= $request->sort_by;
        $table->chapter_link= $request->chapter_link;
        if ($request->hasFile('chapter_file')) {
            $file = $request->file('chapter_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/chapter'), $filename);
            $table->chapter_file = $filename;
        }
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Book Chapter submitted successfully!');
    }
    public function edit_chapter($id)
    {
        $data = BookChapter::findOrFail($id);
        return view("admin.pages.book_chapter.edit", compact('data'));
    }
    public function editChapter(Request $request, $id)
    {
        $request->validate([
            'faculty_id'  => 'required|string|max:255',
            'subject_id'   => 'required|string|max:255',
            'paper_title'   => 'required|string|max:255',
            'chapter_name'   => 'required|string|max:255',
            'publications_date'   => 'required|string|max:255',
            'category'   => 'required|string|max:255',
            'publisher_name'   => 'required|string|max:255',
            'volume'   => 'required|string|max:255',
            'isbn_no'   => 'required|string|max:255',
            'paper_link'   => 'required|string|max:255',
            'sort_by'   => 'required|string|max:255',
        ]);
        $data = BookChapter::findOrFail($id);
        $data->faculty_id = $request->faculty_id;
        $data->subject_id = $request->subject_id;
        $data->paper_title = $request->paper_title;
        $data->chapter_name = $request->chapter_name;
        $data->publications_date = date('Y-m-d', strtotime($request->publications_date));
        $data->category= $request->category;
        $data->publisher_name= $request->publisher_name;
        $data->volume= $request->volume;
        $data->isbn_no= $request->isbn_no;
        $data->paper_link= $request->paper_link;
        $data->sort_by= $request->sort_by;
        $data->chapter_link= $request->chapter_link;
        if ($request->hasFile('chapter_file')) {
            if (!empty($data->chapter_file) && File::exists(public_path('uploads/chapter/' . $data->chapter_file))) {
                File::delete(public_path('uploads/chapter/' . $data->chapter_file));
            }
            $file = $request->file('chapter_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/chapter'), $filename);
            $data->chapter_file = $filename;
        }
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Book Chapter updated successfully!');
    }

    public function deleteChapter(Request $request,$id)
    {
        $table = BookChapter::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Book Chapter Deleted successfully!');
    }
    public function ChapterStatusChanger(Request $request, $id)
    {
        $table = BookChapter::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Book Chapter status updated successfully!');
    }
}
