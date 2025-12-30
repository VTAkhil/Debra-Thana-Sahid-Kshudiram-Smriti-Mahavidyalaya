<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use Illuminate\Support\Facades\File;
class LessonController extends Controller
{
    public function list_lesson()
    {
        return view('admin.pages.lesson.list');
    }

    public function add_lesson()
    {
        return view("admin.pages.lesson.create");
    }
    public function addLesson(Request $request)
    {
        $request->validate([
            'lesson_title'  => 'required|string|max:255',
            'lesson_date'   => 'required|date',
            'subject_id'     => 'required',
            'lesson_file'   => 'nullable|required_without:lesson_link|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'lesson_link'   => 'nullable|required_without:lesson_file|url',
            'lesson_value'  => 'required',
        ]);

        $table = new Lesson;
        $table->lesson_title = $request->lesson_title;
        $table->lesson_date = $request->lesson_date;
        $table->lesson_date = date('Y-m-d', strtotime($request->lesson_date));
        $table->subject_id = $request->subject_id;
        if ($request->hasFile('lesson_file')) {
            $file = $request->file('lesson_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/lesson'), $filename);
            $table->lesson_file = $filename;
        }
        $table->lesson_link = $request->lesson_link;
        $table->lesson_value= $request->lesson_value;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Lesson submitted successfully!');
    }
    public function edit_Lesson($id)
    {
        $data = Lesson::findOrFail($id);
        return view("admin.pages.lesson.edit", compact('data'));
    }
    public function editLesson(Request $request, $id)
    {
        $data = Lesson::findOrFail($id);
         $request->validate([
            'lesson_title'  => 'required|string|max:255',
            'lesson_date'   => 'required|date',
            'subject_id'      => 'required',
            'lesson_value'  => 'required',
        ]);
        $data->lesson_title = $request->lesson_title;
        $data->lesson_date = $request->lesson_date;
        $data->lesson_date = date('Y-m-d', strtotime($request->lesson_date));
        $data->subject_id = $request->subject_id;
        if ($request->hasFile('lesson_file')) {
            if (!empty($data->lesson_file) && File::exists(public_path('uploads/lesson/' . $data->lesson_file))) {
                File::delete(public_path('uploads/lesson/' . $data->lesson_file));
            }
            $file = $request->file('lesson_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/lesson'), $filename);
            $data->lesson_file = $filename;
        }
        $data->lesson_link = $request->lesson_link;
        $data->lesson_value= $request->lesson_value;
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Lesson updated successfully!');
    }

    public function deleteLesson(Request $request,$id)
    {
        $table = Lesson::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Lesson Deleted successfully!');
    }
    public function LessonStatusChanger(Request $request, $id)
    {
        $table = Lesson::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Lesson status updated successfully!');
    }
}
