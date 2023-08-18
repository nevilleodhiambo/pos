@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>

        <form method="post" action="{{route('stock.update', $stock->id)}}">
            @csrf
            @method('put')
            <div class="form-group col-md-4">
                <label for="inputState">Category</label>
                <select id="inputState" class="form-control" name="category_id" value="{{$stock->category_id}}">
                  {{-- <option selected>Choose Category</option> --}}
                  @foreach ($categories as $category)
                     <option selected value="{{$category->id}}">{{$category->name}}</option>                      
                  @endforeach
                </select>
              </div>
    
  

            <div class="form-group">
              <label for="exampleInputEmail1">Quantity</label>
              <input type="integer" id="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Quantity" name="quantity" value="{{$stock->quantity}}">        
            </div>   
            
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="integer" id="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price" name="price" value="{{$stock->price}}">        
              </div>  

              <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <input type="date" id="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name" name="date" value="{{$stock->date}}">        
              </div>  

            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        
    </main>

    @endsection 