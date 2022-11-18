<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class SemillasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto= Producto::included()
        ->filter()
        ->sort()
        ->get();
        return $producto;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $semilla  = new Producto();

        $file=$request->file("imagen");
        $nombreArchivo = "img_".time().".".$file->guessExtension();
        $request->file('imagen')->storeAs('public/productos', $nombreArchivo );
        $semilla->imagen = $nombreArchivo;
       
        $semilla->nombre = $request->nombre;
        $semilla->descripcion = $request->descripcion;
        $semilla->cuidados = $request->cuidados; 
        $semilla->tiempo_germinacion = $request->tiempo_germinacion;
        $semilla->categoria_id = $request->categoria_id="3";
        $semilla->cantidad = $request->cantidad;   
        $semilla->precio = $request->precio;
        $semilla->ubicacion = $request->ubicacion;
        $semilla->save();
        return redirect('http://127.0.0.1:8000/semillas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto =   Producto::included()->findOrFail($id);
        return $producto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
