<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Item;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = category::get();
        $items = Item::get();
        return view('admin.index', compact('categories', 'items'));
        // return view('admin.index')->with('categories', category::get());
    }


    public function create()
    {
        return view('admin.category.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'category_name'       => 'required',
            'category_image'       => 'required | mimes:jpg,png,jpeg,gif|max:5048'
        ]);
        $newImageName = uniqid() . '-' . $request->hasFile('category_image') . '.' . $request->category_image->extension();
        $request->category_image->move(public_path('images/category'), $newImageName);
        category::create([
            'Name'        => $request->input('category_name'),
            'cat_pic'   => $newImageName
        ]);
        return redirect('/admin');
    }


    public function show(string $cat)
    {
    }



    public function edit(string $id)
    {
        return view('admin.category.edit')->with('cat', category::where('c_id', $id)->first());
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_name' => 'required',
            'category_image' => 'mimes:jpg,png,jpeg,gif|max:5048'
        ]);
        $newImageName = $request->input('category_oldimage');
        if ($request->hasFile('category_image')) {

            $newImageName = uniqid() . '.' . $request->category_image->extension();
            $request->category_image->move(public_path('images/category'), $newImageName);
        }
        category::where('c_id', $id)->update([
            'Name'       => $request->input('category_name'),
            'cat_pic'    => $newImageName
        ]);
        return redirect('/admin')->with('message', 'updated successfully');
    }


    public function destroy(string $id)
    {
        category::where('c_id', $id)->delete();
        return redirect('/admin')->with('message', 'deleted successfully');
    }
}
