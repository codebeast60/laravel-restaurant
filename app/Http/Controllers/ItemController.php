<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Item;

class ItemController extends Controller
{

    public function index()
    {
        // return view('admin.index')->with('items', Item::get());
    }


    public function create()
    {
        return view('admin.item.create')->with('categories', category::get());
    }


    public function store(Request $request)
    {
        $request->validate([
            'item_name'           => 'required',
            'item_price'          => 'required',
            'item_category'       => 'required',
            'item_picture'        => 'required | mimes:jpg,png,jpeg,gif|max:5048'
        ]);
        $newImageName = uniqid() . '-' . $request->hasFile('item_picture') . '.' . $request->item_picture->extension();
        $request->item_picture->move(public_path('images/products'), $newImageName);
        Item::create([
            'Name'        => $request->input('item_name'),
            'description' => 'null',
            'price'       => $request->input('item_price'),
            'created_at'  => now(),
            'Cat_id'      => $request->input('item_category'),
            'Member_id'   => '1',
            'image_path'  => $newImageName
        ]);
        return redirect('/admin');
    }


    public function show(string $id)
    {

        $item = Item::where('item_id', $id)->first();
        $items = Item::inRandomOrder()->take(3)->get();

        return view('admin.item.show', compact('item', 'items'));
    }


    public function edit(string $id)
    {
        return view('admin.item.edit')->with('item', Item::where('item_id', $id)->first());
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'item_name'  => 'required',
            'item_price' => 'required',
            'item_image' => 'mimes:jpg,png,jpeg,gif|max:5048'
        ]);
        $newImageName = $request->input('item_oldimage');
        if ($request->hasFile('item_image')) {

            $newImageName = uniqid() . '-' .  $request->input('item_name') . '.' . $request->item_image->extension();
            $request->item_image->move(public_path('images/products'), $newImageName);
        }
        Item::where('item_id', $id)->update([
            'Name'       => $request->input('item_name'),
            'price'      => $request->input('item_price'),
            'Cat_id'     => $request->input('item_category'),
            'Member_id'  => '1',
            'image_path' => $newImageName
        ]);
        return redirect('/admin')->with('message', 'updated successfully');
    }


    public function destroy(string $id)
    {
        Item::where('item_id', $id)->delete();
        return redirect('/admin')->with('message', 'deleted successfully');
    }
}
