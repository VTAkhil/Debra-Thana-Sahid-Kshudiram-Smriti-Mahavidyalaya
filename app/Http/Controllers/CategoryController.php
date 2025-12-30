<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function list_category()
    {
        return view("admin.pages.category.list");
    }
    public function add_category()
    {
        return view("admin.pages.category.create");
    }
    public function addCategory(Request $request)
    {
        $request->validate([
            'category_name'=>'required|string|max:255',
        ]);
        $table = new Category;
        $table->category_name = $request->category_name;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Category submitted successfully!');
    }
    public function edit_category($id)
    {
        $data = Category::findOrFail($id);
        return view("admin.pages.category.edit", compact('data'));
    }
    public function editCategory(Request $request,$id)
    {
        $request->validate([
            'category_name'=>'required|string|max:255',
        ]);
        $table = Category::findOrFail($id);
        $table->category_name = $request->category_name;
        $table->status="1";
        $table->save();
        return redirect()->back()->with('success', 'Category updated successfully!');
    }
    public function deleteCategory(Request $request,$id)
    {
        $table = Category::findOrFail($id);
        $table->status = "2";
        $table->save();
        return redirect()->back()->with('success', 'Category Deleted successfully!');
    }
    public function CategoryStatusChanger(Request $request, $id)
    {
        $table = Category::findOrFail($id);
        $table->status = $table->status === '0' ? '1' : '0';
        $table->save();
        return redirect()->back()->with('success', 'Category status updated successfully!');
    }
}
