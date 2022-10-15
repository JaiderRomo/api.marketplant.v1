<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TipoIdentificacion;
use Illuminate\Http\Request;

class TipoIdentificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoId=TipoIdentificacion::included()
        ->filter()
        ->sort()
        ->get();
        return $tipoId;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',


        ]);

        $tipoId = TipoIdentificacion::create($request->all());
        return $tipoId;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoIdentificacion  $tipoIdentificacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoId =   TipoIdentificacion::included()->findOrFail($id);
        return $tipoId;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoIdentificacion  $tipoIdentificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoIdentificacion $tipoIdentificacion)
    {
   
    

        $tipoIdentificacion->update($request->all());

        return $tipoIdentificacion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoIdentificacion  $tipoIdentificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoIdentificacion $tipoIdentificacion)
    {
        $tipoIdentificacion->delete();
        return $tipoIdentificacion;
    }
}
