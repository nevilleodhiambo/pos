@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>

        <form method="post" action="{{route('sales.update', $sale->id)}}">
          @csrf
            @method('put')

            <div class="form-group col-md-4">
              <label for="inputState">Quantity Bought</label>
              <select id="inputState" class="form-control" name="quantity_id" value="{{$sale->quantity_id}}">
                {{-- <option selected>Choose Category</option> --}}
                @foreach ($stocks as $stock)
                   <option selected value="{{$stock->id}}">{{$stock->quantity}}</option>                      
                @endforeach
              </select>
            </div>
  
            <div class="form-group col-md-4">
              <label for="inputState">Price</label>
              <select id="inputState" class="form-control" name="price_id" value="{{$sale->price_id}}">
                {{-- <option selected>Choose Category</option> --}}
                @foreach ($stocks as $stock)
                   <option selected value="{{$stock->id}}">{{$stock->price}}</option>                      
                @endforeach
              </select>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Number Sold</label>
              <input type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the Number Sold" name="pieces" value="{{$sale->pieces}}">        
            </div> 

            <div class="form-group">
              <label for="exampleInputEmail1">Price</label>
              <input type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price" name="price" value="{{$sale->price}}">        
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Date</label>
              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date" value="{{$sale->date}}"> 
            </div>

          <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </main>

    @endsection 