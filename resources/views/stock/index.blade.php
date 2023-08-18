@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>

        <table class="table" id="usersTable">
            <div class="d-flex justify-content-end">
                <a href="{{route('stock.create')}}" class="btn btn-success">Add Stock</a>
            </div>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
             <tbody>
                <tr>
                    @foreach ($stocks as $stock)
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$stock->category->name}}</td>
                    <td>{{$stock->quantity}}</td>
                    <td>{{$stock->price}}</td>
                    <td>{{$stock->date}}</td>
                    <td>
                        <a href="{{route('stock.edit', $stock->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('stock.destroy',$stock->id)}}" method="post">
                        @csrf 
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr> 
                    @endforeach
                   
             </tbody>
            </table>
        
    </main>

    @endsection 