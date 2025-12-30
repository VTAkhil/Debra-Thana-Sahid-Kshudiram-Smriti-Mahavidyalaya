<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryAlbum;
use Illuminate\Support\Facades\File;
class GalleryAlbumController extends Controller
{
    public function list_galleryAlbum()
    {
        return view('admin.pages.galleryAlbum.list');
    }
    public function add_galleryAlbum()
    {
        return view("admin.pages.galleryAlbum.create");
    }
    public function addGalleryAlbum(Request $request)
    {
        $request->validate([
            'gallery_id' => 'required',
            'album_image' => 'required|mimes:jpg,jpeg,png|max:2048',
        ],
        [
            'album_image.mimes' => 'Only JPG, JPEG and PNG images are allowed.',
        ]);

        $table = new GalleryAlbum;
        $table->gallery_id = $request->gallery_id;
        if ($request->hasFile('album_image')) {
            $file = $request->file('album_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/galleryAlbum'), $filename);
            $table->album_image = $filename;
        }
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Gallery Album submitted successfully!');
    }
    public function edit_galleryAlbum($id)
    {
        $data = GalleryAlbum::findOrFail($id);
        return view("admin.pages.galleryAlbum.edit", compact('data'));
    }
    public function editGalleryAlbum(Request $request, $id)
    {
        $request->validate([
            'gallery_id' => 'required',
            'album_image' => 'mimes:jpg,jpeg,png|max:2048',
        ],
        [
            'album_image.mimes' => 'Only JPG, JPEG and PNG images are allowed.',
        ]);
        $data = GalleryAlbum::findOrFail($id);
        $data->gallery_id = $request->gallery_id;
        if ($request->hasFile('album_image')) {
            if (!empty($data->album_image) && File::exists(public_path('uploads/galleryAlbum/' . $data->album_image))) {
                File::delete(public_path('uploads/galleryAlbum/' . $data->album_image));
            }
            $file = $request->file('album_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/galleryAlbum'), $filename);
            $data->album_image = $filename;
        }
        $data->status = "1";
        $data->save();
        return redirect()->back()->with('success', 'Gallery Album updated successfully!');
    }
    public function deleteGalleryAlbum(Request $request,$id)
    {
        $table = GalleryAlbum::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Gallery Album Deleted successfully!');
    }
    public function GalleryAlbumStatusChanger(Request $request, $id)
    {
        $table = GalleryAlbum::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Gallery Album status updated successfully!');
    }
}
