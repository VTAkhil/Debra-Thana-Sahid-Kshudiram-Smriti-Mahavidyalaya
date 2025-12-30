<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\File;
class EventsController extends Controller
{
    public function list_events()
    {
        return view('admin.pages.events.list');
    }

    public function add_events()
    {
        return view("admin.pages.events.create");
    }
    public function addEvents(Request $request)
    {
        $request->validate([
            'events_title'  => 'required|string|max:255',
            'events_date'   => 'required|date',
            'events_file'   => 'nullable|required_without:events_link|mimes:jpg,jpeg,png,webp,pdf|max:2048',
            'events_link'   => 'nullable|required_without:events_file|url',
        ]);

        $table = new Event;
        $table->events_title = $request->events_title;
        $table->events_date = date('Y-m-d', strtotime($request->events_date));
        if ($request->hasFile('events_file')) {
            $file = $request->file('events_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/events'), $filename);
            $table->events_file = $filename;
        }
        $table->events_link = $request->events_link;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Events submitted successfully!');
    }
    public function edit_events($id)
    {
        $data = Event::findOrFail($id);
        return view("admin.pages.events.edit", compact('data'));
    }
    public function editEvents(Request $request, $id)
    {
        $data = Event::findOrFail($id);
         $request->validate([
            'events_title'  => 'required|string|max:255',
            'events_date'   => 'required|date',
        ]);
        $data->events_title = $request->events_title;
        $data->events_date = date('Y-m-d', strtotime($request->events_date));
        if ($request->hasFile('events_file')) {
            if (!empty($data->events_file) && File::exists(public_path('uploads/events/' . $data->events_file))) {
                File::delete(public_path('uploads/events/' . $data->events_file));
            }
            $file = $request->file('events_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/events'), $filename);
            $data->events_file = $filename;
        }
        $data->events_link = $request->events_link;
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Events updated successfully!');
    }

    public function deleteEvents(Request $request,$id)
    {
        $table = Event::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Events Deleted successfully!');
    }
    public function EventsStatusChanger(Request $request, $id)
    {
        $table = Event::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Events status updated successfully!');
    }
}
