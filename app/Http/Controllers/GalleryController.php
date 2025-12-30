<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;
class GalleryController extends Controller
{
    public function list_gallery()
    {
        return view('admin.pages.gallery.list');
    }

    public function add_gallery()
    {
        return view("admin.pages.gallery.create");
    }
    public function addGallery(Request $request)
    {
        $request->validate([
            'gallery_title' => 'required|string|max:255',
            'subject_id' => 'required|string|max:255',
            'gallery_image' => 'required|string|max:255',
            'gallery_image' => 'required|mimes:jpg,jpeg,png|max:2048',
        ],
        [
            'gallery_image.mimes' => 'Only JPG, JPEG and PNG images are allowed.',
        ]);

        $table = new Gallery;
        $table->gallery_title = $request->gallery_title;
        $table->subject_id = $request->subject_id;
        if ($request->hasFile('gallery_image')) {
            $file = $request->file('gallery_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $filename);
            $table->gallery_image = $filename;
        }
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Gallery submitted successfully!');
    }
    public function edit_gallery($id)
    {
        $data = Gallery::findOrFail($id);
        return view("admin.pages.gallery.edit", compact('data'));
    }
    public function editGallery(Request $request, $id)
    {
        $data = Gallery::findOrFail($id);
        $request->validate([
            'gallery_title'  => 'required|string|max:255',
            'subject_id'   => 'required|string|max:255',
            'gallery_image' => 'mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        $data->gallery_title = $request->gallery_title;
        $data->subject_id = $request->subject_id;
        if ($request->hasFile('gallery_image')) {
            if (!empty($data->gallery_image) && File::exists(public_path('uploads/gallery/' . $data->gallery_image))) {
                File::delete(public_path('uploads/gallery/' . $data->gallery_image));
            }
            $file = $request->file('gallery_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $filename);
            $data->gallery_image = $filename;
        }
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Gallery updated successfully!');
    }

    public function deleteGallery(Request $request,$id)
    {
        $table = Gallery::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Gallery Deleted successfully!');
    }
    public function GalleryStatusChanger(Request $request, $id)
    {
        $table = Gallery::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Gallery status updated successfully!');
    }
}
