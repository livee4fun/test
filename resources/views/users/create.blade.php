@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Bienvenido a Juegos ProMarketing</h1>
@stop

@section('content')
    <p>Aquí podrás encontrar los mejores juegos</p>

    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-bar-chart"></i> Inicio</a></li>
        <li><a href="{{ URL::previous() }}">Usuarios</a></li>
        <li class="active">Agregar usuarios</li>
    </ol>
                  @includeif('partials.errors')
                  <div class="card card-default">
                      <div class="card-body">
                          <form action="{{ route('users.store') }}" method="POST" role="form" enctype="multipart/form-data">
                            <div class="col-sm-3">
                              <input type="text" name="name" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col-sm-4">
                              <input type="text" name="email" class="form-control" placeholder="Correo electrónico">
                            </div>
                            <div class="col-sm-3">
                              <input type="password" name="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="col-auto">
                              @csrf
                              <button type="submit" class="btn btn-primary">Crear usuario</button>
                            </div>
                          </form>
                      </div>
                  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('test-home'); </script>
@stop
