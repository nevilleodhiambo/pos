@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>

        <form method="post" action="{{route('category.update', $category->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <input type="text" id="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name" name="name" value="{{$category->name}}">        
            </div>           
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        
    </main>

    @endsection 