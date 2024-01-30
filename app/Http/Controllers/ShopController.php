<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // Show a list of items in the shop
    public function index()
    {
        $items = Shop::all();
        return view('admin.shop.index', compact('items'));
    }

    // Show the form to add a new item to the shop
    public function create()
    {
        return view('admin.shop.create');
    }

    // Store a newly created item in the shop
    public function store(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'price' => 'required',
        ]);

        Shop::create($request->all());

        return redirect()->route('admin.shop.index')
            ->with('success', 'Item added to the shop successfully!');
    }

    // Show details of a specific item in the shop
    public function show(Shop $item)
    {
        return view('admin.shop.show', compact('item'));
    }

    // Show the form to edit an item in the shop
    public function edit(Shop $item)
    {
        return view('admin.shop.edit', compact('item'));
    }

    // Update an item in the shop after the form is submitted
    public function update(Request $request, Shop $item)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'price' => 'required',
        ]);

        $item->update($request->all());

        return redirect()->route('admin.shop.index')
            ->with('success', 'Item in the shop updated successfully!');
    }

    // Remove an item from the shop
    public function destroy(Shop $item)
    {
        $item->delete();
        return redirect()->route('admin.shop.index')
            ->with('success', 'Item removed from the shop successfully!');
    }
}
