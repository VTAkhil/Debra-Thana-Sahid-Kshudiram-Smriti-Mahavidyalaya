<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyRegistration;
use App\Models\Gallery;
class FrnontendController extends Controller
{
    public function index()
    {
        return view("front.pages.index");
    }

    public function department(Request $request)
    {
        return view("front.pages.department",compact('request'));
    }

    public function FacultyProfile(Request $request,$id)
    {
        $faculty = FacultyRegistration::findOrFail($id);
        return view('front.pages.FacultyProfile', compact('faculty','request'));
    }

    public function PhotoImages(Request $request,$id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('front.pages.PhotoImages', compact('gallery','request'));
    }


}
