<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Category;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = Stock::all();
        return view('stock.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('stock.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stock = new Stock();
        $stock->quantity = $request->quantity;
        $stock->price = $request->price;
        $stock->category_id = $request->category_id;
        $stock->date = $request->date;
        $stock->save();
        return redirect(route('stock.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $stock = Stock::where('id', $id)->first();
        $categories = Category::all();
        return view('stock.edit', compact('categories','stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $stock = Stock::where('id', $id)->first();
        $stock->quantity = $request->quantity;
        $stock->price = $request->price;
        $stock->category_id = $request->category_id;
        $stock->date = $request->date;
        $stock->save();
        return redirect(route('stock.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $stock = Stock::where('id', $id)->first();
        $stock->delete();
        return redirect()->back();
    }
}
