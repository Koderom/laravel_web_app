@extends('Layouts.BaseLayer')

@section('title', 'Login')

@section('content')
  
  <form class="col-6 align-self-center card m-3 p-3" action="{{route('iniciar-sesion')}}" method="POST">
    @csrf
    <h1 class="text-center">Iniciar sesion</h1>
    <div class="mb-3">
      <label for="name" class="form-label">Usuario</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="User name">
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" aria-describedby="User password">
    </div>  

    <button class="btn btn-primary">Login</button>
  </form>
  
@endsection
