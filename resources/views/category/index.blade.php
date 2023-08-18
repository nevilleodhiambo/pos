@extends('inc/main/master')

@section('content')
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>

        <div class="d-flex justify-content-end">
        <a href="{{route('category.create')}}" class="btn btn-success">Add Category</a>
        </div>

        <table class="table" id="usersTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($categories as $category)
                    
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{route('category.edit', $category->id)}}" class="btn btn-primary">Edit</a>
                    <form method ="post" action="{{route('category.destroy', $category->id)}}">
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

    @section('footer')
  <script>
    $(document)
    .ready(function(){
      $('#usersTable')
      .DataTable()
    });
  </script>
@endsection