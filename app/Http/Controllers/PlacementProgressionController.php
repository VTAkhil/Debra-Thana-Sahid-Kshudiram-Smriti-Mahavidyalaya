<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PlacementProgression;
class PlacementProgressionController extends Controller
{
    public function list_placementProgression()
    {
        return view('admin.pages.placementProgression.list');
    }
    public function add_placementProgression()
    {
        return view('admin.pages.placementProgression.create');
    }
     public function addPlacementProgression(Request $request)
    {
        $request->validate([
            'subject_id' => 'required',
            'student_name' => 'required',
            'placement_progression' => 'required',
            'year' => 'required',
        ]);
        $table = new PlacementProgression;
        $table->subject_id = $request->subject_id;
        $table->student_name = $request->student_name;
        $table->placement_progression = $request->placement_progression;
        $table->year = $request->year;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Placement Progression submitted successfully!');
    }
     public function edit_placementProgression($id)
    {
        $data = PlacementProgression::findOrFail($id);
        return view("admin.pages.placementProgression.edit", compact('data'));
    }

     public function editPlacementProgression(Request $request, $id)
    {
        $table = PlacementProgression::findOrFail($id);
        $request->validate([
            'subject_id' => 'required',
            'student_name' => 'required',
            'placement_progression' => 'required',
            'year' => 'required',
        ]);
        $table->subject_id = $request->subject_id;
        $table->student_name = $request->student_name;
        $table->placement_progression = $request->placement_progression;
        $table->year = $request->year;
        
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Placement Progression submitted successfully!');
    }
     public function deletePlacementProgression($id)
    {
        $table = PlacementProgression::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Placement Progression deleted successfully!');
    }
     public function PlacementProgressionStatusChange(Request $request, $id)
    {
        $table = PlacementProgression::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Placement Progression status updated successfully!');
    }

}
