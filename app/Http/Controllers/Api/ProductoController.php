<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
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

        $producto = $request->all();
        $file = $request->file("imagen");
        $nombreArchivo = "img_" . time() . "." . $file->guessExtension();
        $request->file('imagen')->storeAs('public/productos', $nombreArchivo);
        $producto['imagen'] = "$nombreArchivo";
        Producto::create($producto);

       // return $pro;
        // $request->validate([
        //     'nombre' => 'required|max:255',
        //     'categoria_id' => 'required|max:255',
        //     'user_id' => 'required|max:255',
        //     'descripcion' => 'required|max:255',
        //     'precio' => 'required|max:255',
        //     'cantidad' => 'required|max:255',
        //     'imagen' => 'required|max:255',
        // ]);
        // $producto=Producto::create($request->all());

         return $producto;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {


        $producto->update($request->all());
       // if ($request->imagen !='')
        // {
        //     $nombreArchivo =rand().'.'.$producto->imagen->getClientOriginalExtension();
        //     $request->file('imagen')->storeAs('public/productos', $nombreArchivo );
        // }
        
        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return $producto;
    }
}
