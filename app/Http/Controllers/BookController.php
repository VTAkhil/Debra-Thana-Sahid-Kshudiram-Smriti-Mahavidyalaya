<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\File;
class BookController extends Controller
{
    public function list_book()
    {
        return view('admin.pages.book.list');
    }

    public function add_book()
    {
        return view("admin.pages.book.create");
    }
    public function addBook(Request $request)
    {
        $request->validate([
            'faculty_id'  => 'required|string|max:255',
            'subject_id'   => 'required|string|max:255',
            'paper_title'   => 'required|string|max:255',
            'author_name'   => 'required|string|max:255',
            'publications_date'   => 'required|string|max:255',
            'publisher_name'   => 'required|string|max:255',
            'isbn_no'   => 'required|string|max:255',
            'paper_link'   => 'required|string|max:255',
            'sort_by'   => 'required|string|max:255',
            'book_file'   => 'nullable|required_without:book_link|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'book_link'   => 'nullable|required_without:book_file|url',
        ]);

        $table = new Book;
        $table->faculty_id = $request->faculty_id;
        $table->subject_id = $request->subject_id;
        $table->paper_title = $request->paper_title;
        $table->author_name = $request->author_name;
        $table->publications_date = date('Y-m-d', strtotime($request->publications_date));
        $table->publisher_name= $request->publisher_name;
        $table->isbn_no= $request->isbn_no;
        $table->paper_link= $request->paper_link;
        $table->sort_by= $request->sort_by;
        $table->book_link= $request->book_link;
        if ($request->hasFile('book_file')) {
            $file = $request->file('book_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/book'), $filename);
            $table->book_file = $filename;
        }
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Book submitted successfully!');
    }
    public function edit_book($id)
    {
        $data = Book::findOrFail($id);
        return view("admin.pages.book.edit", compact('data'));
    }
    public function editBook(Request $request, $id)
    {
        $request->validate([
            'faculty_id'  => 'required|string|max:255',
            'subject_id'   => 'required|string|max:255',
            'paper_title'   => 'required|string|max:255',
            'author_name'   => 'required|string|max:255',
            'publications_date'   => 'required|string|max:255',
            'publisher_name'   => 'required|string|max:255',
            'isbn_no'   => 'required|string|max:255',
            'paper_link'   => 'required|string|max:255',
            'sort_by'   => 'required|string|max:255',
        ]);
        $data = Book::findOrFail($id);
        $data->faculty_id = $request->faculty_id;
        $data->subject_id = $request->subject_id;
        $data->paper_title = $request->paper_title;
        $data->author_name = $request->author_name;
        $data->publications_date = date('Y-m-d', strtotime($request->publications_date));
        $data->publisher_name= $request->publisher_name;
        $data->isbn_no= $request->isbn_no;
        $data->paper_link= $request->paper_link;
        $data->sort_by= $request->sort_by;
        $data->book_link= $request->book_link;
        if ($request->hasFile('book_file')) {
            if (!empty($data->book_file) && File::exists(public_path('uploads/book/' . $data->book_file))) {
                File::delete(public_path('uploads/book/' . $data->book_file));
            }
            $file = $request->file('book_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/book'), $filename);
            $data->book_file = $filename;
        }
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Book updated successfully!');
    }

    public function deleteBook(Request $request,$id)
    {
        $table = Book::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Book Deleted successfully!');
    }
    public function BookStatusChanger(Request $request, $id)
    {
        $table = Book::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Book status updated successfully!');
    }
}
