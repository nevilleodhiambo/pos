@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>

        <div class="d-flex justify-content-end">
            <a href="{{route('records.create')}}" class="btn btn-success">Add Record</a>
        </div>
        {{-- <a href="{{route('records.create')}}" class="btn btn-success"></a> --}}
        <table class="table" id="usersTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Buying Price</th>
                <th scope="col">Selling Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
             <tbody>
                <tr>
                     @foreach ($records as $record)
                       
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$record->name}}</td>
                    <td>{{$record->category?->name}}</td>
                    <td>{{$record->bprice}}</td>
                    <td>{{$record->sprice}}</td>
                    {{-- <td>{{$record->category?->name}}</td> --}}
                    <td>
                        <a href="{{route('records.edit', $record->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('records.show', $record->id)}}" class="btn btn-primary">Show</a>
                    </td>
                </tr>
                    @endforeach
                   
            </tbody>
        </table>

    </main>

    @endsection 