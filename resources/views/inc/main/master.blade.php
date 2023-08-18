<!DOCTYPE html>
<html lang="en">
    @include('inc/main/header')
<body>
    @if (auth()->user())
        @include('inc/main/nav')
    @endif

    <div class="container-fluid">
        <div class="row">
            @if (auth()->user())
                @include('inc/main/sidebar')
            @endif
            @section('content')
               @show


        </div>
    </div>
    @include('inc/main/footer')
        @section('footer')
            @show
        
</body>
</html>