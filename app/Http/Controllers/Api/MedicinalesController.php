<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class MedicinalesController extends Controller
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
        $medicinal= $request->all();
        $medicinal  = new Producto();
        

        $file=$request->file("imagen");
        $nombreArchivo = "img_".time().".".$file->guessExtension();
        $request->file('imagen')->storeAs('public/productos', $nombreArchivo );
        $medicinal['imagen'] = $nombreArchivo;
       
                 
        
        $medicinal->nombre = $request->nombre;
        $medicinal->descripcion = $request->descripcion;
        $medicinal->categoria_id = $request->categoria_id="1";
        $medicinal->beneficios = $request->beneficios;
        $medicinal->usos = $request->usos;
        $medicinal->preparacion = $request->preparacion;
        $medicinal->precio = $request->precio;
        $medicinal->cantidad = $request->cantidad;
        $medicinal->ubicacion = $request->ubicacion;
        $medicinal->save();
        return redirect('http://127.0.0.1:8000/plantasmedicinales');
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
