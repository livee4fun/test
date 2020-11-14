@extends('adminlte::page')

@section('title', 'Juegos')

@section('content_header')
    <h1>Juegos</h1>
@stop

@section('content')

<ol class="breadcrumb">
  <li><a href="/home"><i class="fa fa-calendar-check-o"></i> Inicio</a> -  </li>
  <li class="active"> Juegos</li>
</ol>
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                <center>
                  <div class="card-body">
                    <form action="{{ route('juegos.store') }}" method="POST">
                      <div class="form">
                        <div class="row">
                            <div class="col">
                              <div class="col-sm-auto">
                                <input type="number" name="id" class="form-control" placeholder="Código" value="{{ old('id') }}">
                              </div>
                            </div>
                            <div class="col">
                              <div class="col-sm-auto">
                                <input type="text" name="nombre_juego" class="form-control" placeholder="Nombre Juego" value="{{ old('nombre_juego') }}">
                              </div>
                            </div>
                            <div class="col">
                              <div class="col-sm-auto">
                                <input type="text" name="url_juego" class="form-control" placeholder="Link Juego" value="{{ old('url_juego') }}">
                              </div>
                            </div>
                            <div class="w-100"><br></div>
                            <div class="col">
                              <div class="col-sm-auto">
                                <input type="text" name="descripcion_juego" class="form-control" placeholder="Descripción Juego">
                              </div>
                            </div>
                            <div class="col">
                              <div class="col-sm-auto">
                                <input type="text" name="url_imagen_juego" class="form-control" placeholder="Imagen" value="{{ old('url_imagen_juego') }}">
                              </div>
                            </div>
                            <div class="col">
                              <div class="col-sm-auto">
                                <input type="text" name="estatus_juego" class="form-control" placeholder="Estatus" value="{{ old('estatus_juego') }}">
                              </div>
                            </div>
                          </div>
                        <div class="col-auto">
                        @csrf
                        <br>
                       <button type="submit" class="btn btn-primary">Ingresar juego</button>
                       </div>
                      </div>
                    </center>
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
                      <table id="tabla_juegos" class="table table-striped table-bordered hover" style="width: 100%">
                          <thead class="thead">
                              <tr>
              <th>Código</th>
              <th>Nombre juego</th>
              <th>Enlace</th>
              <th>Descripción</th>
              <th>Imágen</th>
              <th>Estatus</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($juegos as $juego)
                                  <tr>
                <td>{{ $juego->id }}</td>
                <td>{{ $juego->nombre_juego }}</td>
                <td>{{ $juego->url_juego }}</td>
                <td>{{ $juego->descripcion_juego }}</td>
                <td>{{ $juego->url_imagen_juego }}</td>
                <td>{{ $juego->estatus_juego }}</td>
                                      <td style="width:5%;">
                                        <form action="{{ route('juegos.destroy', $juego) }}" method="POST">
                                          @method('DELETE')
                                          @csrf
                                          <input
                                              type="submit"
                                              value="Eliminar"
                                              class="btn btn-sm btn-danger fa fa-trash"
                                              onclick="return confirm('¿Estás seguro que deseas eliminar este juego?')">
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
        $('#tabla_juegos').DataTable({
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
