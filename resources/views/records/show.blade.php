@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
        <div class="d-flex justify-content-end">
            <a href="{{route('sales.create',['record_id' => $record->id])}}" class="btn btn-success">Add Sales</a> <br>
        </div>
<br>
        <div class="d-flex justify-content-end">
        <a href="{{route('purchase.create')}}" class="btn btn-primary">Add purchase</a>

        </div>



        <h1>
               {{$record->name}} 
        </h1>
        
        <table class="table" id="usersTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Quantity In Stock</th>
                <th scope="col">Buying Price</th>
                <th scope="col">Items Sold</th>
                <th scope="col">Remaining Items</th>
                {{-- <th scope="col">Buying Price</th> --}}
                <th scope="col">Price Sold</th>
                <th scope="col">Expected Profit</th>
                <th scope="col">Total Sold</th>
                <th scope="col">Date Sold</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
             <tbody>
                <tr>
                    @php
                         $bp = 0;
                        $total = 0;
                        $profit = 0;
                        $items=0;
                    @endphp

                    @foreach ($sales as $sale)

                    @php
                    $bp += 0.9 * $sale->price;
                        $total += $sale->pieces * $sale->price;
                        $profit += 0.1 * $sale->price * $sale->pieces;
                    @endphp
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$sale->category?->name}}</td>
                    <td>{{$sale->stock?->quantity}}</td>
                    <td>{{$record->bprice}}</td>
                    <td>{{$sale->pieces}}</td>
                    <td>{{$sale->stock?->quantity - $sale->pieces}}</td>
                    {{-- <td>{{0.9 * $sale->price}}</td> --}}
                    <td>{{$record->sprice}}</td>
                    <td>{{$record->record * 0.1 * $sale->pieces}}</td>
                    <td>{{$record->record * $sale->pieces}}</td>
                    <td>{{$sale->date}}</td>

                    <td>
                        <a href="{{route('sales.edit', $sale->id)}}" class="btn btn-primary">Edit</a>
                        <form method="post" action="{{route('sales.destroy', $sale->id)}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                        
                </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        {{-- <td></td> --}}
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{$profit}}</td>
                        <td>{{$total}}</td>
                        <td></td>
                        <td></td>
                    </tr>

            </tbody>
        </table>
       
        
    </main>

    @endsection 