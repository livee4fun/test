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
<div class="container">
 <center>
  <div class="row">
    <div class="col" >
      @foreach ($juegos as $juego)
        @if ($juego->nombre_juego == "REELS OF WEALTH")
        <div class="card" style="width: 18rem;">
          <img src="https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <center><strong><h5 class="card-nombre">{{ $juego->nombre_juego }}</h5></strong></center>
            <p class="card-descripcion">{{ $juego->descripcion_juego }}</p>
            <p class="card-text"><small class="text-muted">Valoración: </small >{{ $juego->estatus_juego }} <i class="fa fa-star"></i></p>
            <center>
              <a href="{{ $juego->url_juego }}" class="btn btn-primary">Ir al juego</a>
            </center>
          </div>
        </div>
        @endif
      @endforeach
    </div>
    <div class="col">
      @foreach ($juegos as $juego)
        @if ($juego->nombre_juego == "BAMBOO RUSH")
        <div class="card" style="width: 18rem;">
          <img src="https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <center><strong><h5 class="card-nombre">{{ $juego->nombre_juego }}</h5></strong></center>
            <p class="card-descripcion">{{ $juego->descripcion_juego }}</p>
            <p class="card-text"><small class="text-muted">Valoración: </small >{{ $juego->estatus_juego }} <i class="fa fa-star"></i></p>
            <center>
              <a href="{{ $juego->url_juego }}" class="btn btn-primary">Ir al juego</a>
            </center>
          </div>
        </div>
        @endif
      @endforeach
    </div>
    <div class="w-100"></div>
    <div class="col">
      @foreach ($juegos as $juego)
        @if ($juego->nombre_juego == "GEMMED!")
        <div class="card" style="width: 18rem;">
          <img src="https://winchiletragamonedas.com/public/images/games/gemmed.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <center><strong><h5 class="card-nombre">{{ $juego->nombre_juego }}</h5></strong></center>
            <p class="card-descripcion">{{ $juego->descripcion_juego }}</p>
            <p class="card-text"><small class="text-muted">Valoración: </small >{{ $juego->estatus_juego }} <i class="fa fa-star"></i></p>
            <center>
              <a href="{{ $juego->url_juego }}" class="btn btn-primary">Ir al juego</a>
            </center>
          </div>
        </div>
        @endif
      @endforeach
    </div>
    <div class="col">
      @foreach ($juegos as $juego)
        @if ($juego->nombre_juego == "DRAGON & PHOENIX")
        <div class="card" style="width: 18rem;">
          <img src="https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <center><strong><h5 class="card-nombre">{{ $juego->nombre_juego }}</h5></strong></center>
            <p class="card-descripcion">{{ $juego->descripcion_juego }}</p>
            <p class="card-text"><small class="text-muted">Valoración: </small >{{ $juego->estatus_juego }} <i class="fa fa-star"></i></p>
            <center>
              <a href="{{ $juego->url_juego }}" class="btn btn-primary">Ir al juego</a>
            </center>
          </div>
        </div>
        @endif
      @endforeach
    </div>
    <div class="w-100"></div>
    <div class="col">
      @foreach ($juegos as $juego)
        @if ($juego->nombre_juego == "CAISHEN’S ARRIVAL")
        <div class="card" style="width: 18rem;">
          <img src="https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <center><strong><h5 class="card-nombre">{{ $juego->nombre_juego }}</h5></strong></center>
            <p class="card-descripcion">{{ $juego->descripcion_juego }}</p>
            <p class="card-text"><small class="text-muted">Valoración: </small >{{ $juego->estatus_juego }} <i class="fa fa-star"></i></p>
            <center>
              <a href="{{ $juego->url_juego }}" class="btn btn-primary">Ir al juego</a>
            </center>
          </div>
        </div>
        @endif
      @endforeach
    </div>
    <div class="col">
      @foreach ($juegos as $juego)
        @if ($juego->nombre_juego == "TAKE THE BANK")
        <div class="card" style="width: 18rem;">
          <img src="https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <center><strong><h5 class="card-nombre">{{ $juego->nombre_juego }}</h5></strong></center>
            <p class="card-descripcion">{{ $juego->descripcion_juego }}</p>
            <p class="card-text"><small class="text-muted">Valoración: </small >{{ $juego->estatus_juego }} <i class="fa fa-star"></i></p>
            <center>
              <a href="{{ $juego->url_juego }}" class="btn btn-primary">Ir al juego</a>
            </center>
          </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>
 </center>
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
