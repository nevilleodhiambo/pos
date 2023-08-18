<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Record;
use App\Models\Stock;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $record_id = $request->record_id;
        $stocks = Stock::all();
        $records = Record::all();
        $categories = Category::all();
        return view('sales.create', compact('categories','records','stocks', 'record_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sales = new Sale();
        $sales->record_id = $request->product_id;
        $sales->pieces = $request->pieces;
        $sales->date = $request->date;
        $sales->save();
        return redirect(route('records.show', $request->product_id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $stocks = Stock::where('id', $id)->get();
        $sale = Sale::where('id', $id)->first();
        return view('sales.edit', compact('sale', 'stocks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sale = Sale::where('id', $id)->first();
        $sale->pieces = $request->pieces;
        $sale->price_id = $request->price_id;
        $sale->quantity_id = $request->quantity_id;
        $sale->date = $request->date;
        $sale->save();
        return redirect(route('records.show', $sale->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sales = Sale::where('id', $id)->first();
        $sales->delete();
        return redirect()->back();
    }
}
