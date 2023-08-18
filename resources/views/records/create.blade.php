@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
        <form method="post" action="{{route('records.store')}}">
            @csrf

            <div class="form-group col-md-4">
              <label for="inputState">Category</label>
              <select id="inputState" class="form-control" name="category_id">
                @foreach ($categories as $category)
                <option selected value="{{$category->id}}">{{$category->name}}</option>
                    
                @endforeach
              </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name" name="name">        
              </div> 

              <div class="form-group">
                <label for="exampleInputEmail1">Buying Price</label>
                <input type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter buying Price" name="bprice">        
              </div> 

              <div class="form-group">
                <label for="exampleInputEmail1">Selling Price</label>
                <input type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter selling price" name="sprice">        
              </div> 

           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        
    </main>

    @endsection 