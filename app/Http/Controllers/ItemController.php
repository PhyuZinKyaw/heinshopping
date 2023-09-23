<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $items = Item::all();
        return view('items.index',compact('items','categories'));
    }

    //Filter items with category_id
    public function itemCategory(string $category_id)
    {
        $itemCategories = Item::where('category_id',$category_id)->get();
        //dd($item_categories);
        return view('items.item_category',compact('itemCategories'));
    }

    public function itemCart(){
        return view('items.item_carts');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = Item::find($id);
        $item_category_id = $items->category_id;
        $item_categories = Item::where('category_id',$item_category_id)->orderBy('id','DESC')->limit(4)->get();
        // dd($item_categories);
        return view('items.item_detail',compact('items','item_categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
