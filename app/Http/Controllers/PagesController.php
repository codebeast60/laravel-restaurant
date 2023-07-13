<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Item;


class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index')->with('items', Item::inRandomOrder()->take(3)->get());
    }

    public function about()
    {
        return view('pages.about');
    }
    public function items()
    {
        // $categories = category::get();
        // $items = Item::get();

        // return view('pages.items', compact('categories', 'items'));
        $categories = category::with('item')->get();

        return view('pages.items', compact('categories'));
    }
}
