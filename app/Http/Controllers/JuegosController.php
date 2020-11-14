<?php

namespace App\Http\Controllers;

use App\Juego;
use Illuminate\Http\Request;

class JuegosController extends Controller
{
    //CRUD Juegos para Administrador
    public function index_admin()
    {
      $juegos = Juego::latest()->get();

      return view('juegos.index_admin', [
        'juegos' => $juegos
      ]);
    }

    //Vista para Usuario
    public function index_all()
    {
      $juegos = Juego::latest()->get();

      return view('juegos.index_all', [
        'juegos' => $juegos
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Validaciones juegos
        $request->validate([
          'id'                => ['required'],
          'nombre_juego'      => ['required'],
          'url_juego'         => ['required'],
          'descripcion_juego' => ['required'],
          'url_imagen_juego'  => ['required'],
          'estatus_juego'     => ['required'],
        ]);

      //Ingresar juegos
        Juego::create([
          'id'                => $request->id,
          'nombre_juego'      => $request->nombre_juego,
          'url_juego'         => $request->url_juego,
          'descripcion_juego' => $request->descripcion_juego,
          'url_imagen_juego'  => $request->url_imagen_juego,
          'estatus_juego'     => $request->estatus_juego,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juego $juego)
    {
      $juego->delete();

      return back();
    }
}
