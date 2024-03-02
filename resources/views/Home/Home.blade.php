@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
    <h1>Home Page</h1>
@stop

@section('content')
    <p>Welcome to this beautiful Home page.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop