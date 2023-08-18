@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>

        <a href="{{route('purchase.create')}}" class="btn btn-success">Add Stock-In</a>

        <table class="table" id="usersTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($purchases as $purchase)
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$purchase->record->name}}</td>
                <td>{{$purchase->quantity}}</td>
                <td>{{$purchase->date}}</td>
              </tr>                
                @endforeach
            </tbody>
            <table>
    </main>

    @endsection 