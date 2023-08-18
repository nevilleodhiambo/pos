<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Record;
use App\Models\Sale;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Record::all();
        return view('records.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $records = Record::all();
        $categories = Category::all();
        return view('records.create', compact('categories', 'records'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new Record();
        $record->name = $request->name;
        $record->category_id = $request->category_id;
        $record->bprice = $request->bprice;
        $record->sprice = $request->sprice;
        $record->save();
        return redirect(route('records.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sales = Sale::where('record_id', $id)->get();

        $record = Record::where('id', $id)->first();
        return view('records.show', compact('record', 'sales'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all();
        $record = Record::where('id', $id)->first();
        return view('records.edit', compact('record', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $record = Record::where('id', $id)->first();
        $record->name = $request->name;
        $record->bprice = $request->bprice;
        $record->sprice = $request->sprice;
        $record->save();
        return redirect(route('records.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
        //
    }
}
