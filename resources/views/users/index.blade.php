@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')

<ol class="breadcrumb">
  <li><a href="/home"><i class="fa fa-calendar-check-o"></i> Inicio</a> -  </li>
  <li class="active"> Usuarios</li>
</ol>
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                      <div class="form-row">
                               <div class="col-sm-3">
                                 <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
                               </div>
                               <div class="col-sm-4">
                                 <input type="text" name="email" class="form-control" placeholder="Correo electrónico" value="{{ old('email') }}">
                               </div>
                               <div class="col-sm-3">
                                 <input type="password" name="password" class="form-control" placeholder="Contraseña">
                               </div>
                               <div class="col-auto">
                                 @csrf
                                 <button type="submit" class="btn btn-primary">Crear usuario</button>
                               </div>
                      </div>
                    </form>
                    @if($errors->any())
                    <br>
                    <div class="alert alert-danger">
                      @foreach($errors->all() as $error)
                      - {{ $error }} <br>
                      @endforeach
                    <div>
                    @endif
                  </div>
              </div>
              <br>

              <div class="card-body">
                      <table id="tabla_users" class="table table-striped table-bordered hover" style="width: 100%">
                          <thead class="thead">
                              <tr>
              <th style="width:25%;">Nombre</th>
              <th>Email</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($users as $user)
                                  <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                                      <td style="width:14%;">
                                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                                          @method('DELETE')
                                          @csrf
                                          <input
                                              type="submit"
                                              value="Eliminar"
                                              class="btn btn-sm btn-danger"
                                              onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?')">
                                          </input>
                                        </form>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
              </div>
          </div>
      </div>
  </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    $(document).ready( function () {
        $('#tabla_users').DataTable({
          "responsive": true,
          dom:'Bfrtip',
          lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 filas', '25 filas', '50 filas', 'Mostrar todo' ]
         ],
          "language": {
            'url' : '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
          },
          buttons: [
            {
              extend: 'pageLength', text: 'N° filas',
              titleAttr: 'Número de filas para mostrar'},
            {
              extend:    'excelHtml5',
              text:      '<i class="fa fa-file-excel-o"></i>',
              titleAttr: 'Excel'
            },
            {
              extend:    'csvHtml5',
              text:      '<i class="fa fa-file-text-o"></i>',
              titleAttr: 'CSV'
            },
            {
              extend:    'pdfHtml5',
              text:      '<i class="fa fa-file-pdf-o"></i>',
              titleAttr: 'PDF'
            }
          ],
          "order": [[0, 'desc']],
          searchDelay: 350
        });
    } );
    </script>
@stop
