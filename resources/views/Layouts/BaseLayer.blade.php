<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('libraries/bootstrap-5.3.3/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('libraries/fontawesome-free-6.5.1/css/all.min.css')}}">
    <title>{{env('APP_NAME')}} - @yield('title')</title>
    <style>
        html{
            border: 0;
            margin: 0;
            height: 100vh;
            width: 100vw;
        }
    </style>
</head>
<body>
    <div class="w-100 h-100">
        @yield('content')
    </div>
</body>
<script src="{{asset('libraries/bootstrap-5.3.3/js/bootstrap.bundle.js')}}"></script>
</html>