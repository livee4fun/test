<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
  protected $fillable = [
      'id', 'nombre_juego', 'url_juego', 'descripcion_juego', 'url_imagen_juego', 'estatus_juego',
  ];
}
