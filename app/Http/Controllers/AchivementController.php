<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Achivement;
class AchivementController extends Controller
{
    public function list_achivement()
    {
        return view('admin.pages.achivement.list');
    }
    public function add_achivement()
    {
        return view('admin.pages.achivement.create');
    }
     public function addAchivement(Request $request)
    {
        $request->validate([
            'subject_id'   => 'required',
            'session'           => 'required',
            'student_number'    => 'required',
            'type_assistance'   => 'required|string|max:255',
        ]);
        $table = new Achivement;
        $table->subject_id = $request->subject_id;
        $table->session = $request->session;
        $table->student_number = $request->student_number;
        $table->type_assistance = $request->type_assistance;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Achivement submitted successfully!');
    }
    public function edit_achivement($id)
    {
        $data = Achivement::findOrFail($id);
        return view("admin.pages.achivement.edit", compact('data'));
    }
    public function editAchivement(Request $request, $id)
    {
        $request->validate([
            'subject_id'   => 'required',
            'session'           => 'required|string|max:20',
            'student_number'    => 'required|integer',
            'type_assistance'   => 'required|string|max:255',
        ]);
        $data = Achivement::findOrFail($id);
        $data->subject_id = $request->subject_id;
        $data->session = $request->session;
        $data->student_number = $request->student_number;
        $data->type_assistance = $request->type_assistance;
        $data->status = 1;
        $data->save();
        return redirect()->back()->with('success', 'Achivement updated successfully!');
    }
    public function deleteAchivement(Request $request,$id)
    {
        $table = Achivement::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Achivement Deleted successfully!');
    }
    public function achivementStatusChange(Request $request, $id)
    {
        $table = Achivement::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Placement Progression status updated successfully!');
    }
}
