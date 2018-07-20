<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title', 'Teacher-Module Management System')</title>

<!-- jQuery library -->
@section('assets')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"> -->
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
@show()
</head>
<body>
@section('header')
@show()
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('page-info')
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
            @endforeach
        </div>
    </div>
</div>
@yield('content')

@section('footer')
@show()

@section('imports')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script>
        var base_url = '{{ url('') }}';

        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
@show()
</body>
</html>