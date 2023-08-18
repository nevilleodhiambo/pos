@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>

        <form method="post" action="{{route('sales.store')}}">
          @csrf        
         
         {{-- <div class="form-group col-md-4">
              <label for="inputState">Product</label>
              <select id="inputState" class="form-control" name="product_id">
                <option selected>Choose Category</option>
                @foreach ($records as $record)
                   <option selected value="{{$record->id}}">{{$record->name}}</option>                      
                @endforeach
              </select>
            </div> --}}

            <input type="hidden" value="{{$record_id}}" name="product_id">
            
            <div class="form-group">
              <label for="exampleInputEmail1">Quantities Sold</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the Number Sold" name="pieces"> 
            </div> 

            <div class="form-group">
              <label for="exampleInputEmail1">Date</label>
              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date">        
            </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </main>

    @endsection 