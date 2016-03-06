<?php

namespace ventas\Http\Controllers;

use Illuminate\Http\Request;

use ventas\Http\Requests;
use ventas\Http\Controllers\Controller;
use \ventas\Categorias;
use \ventas\Productos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categorias = Categorias::lists('nombre','id');
        $productos = Productos::select('nombre AS Nombre',
                                        'descripcion as Descripción',
                                        // 'contenido as Contenido',
                                        'precio_publico as PrecioPublico',
                                        'precio_proveedor as PrecioProveedor',
                                        'precio_mayoreo as PrecioMayoreo',
                                        'codigodebarras as CodigoDeBarras'
                                        )->get();
        return view('administrar.productos.index')->with("categorias",$categorias)
                                                  ->with("productos",$productos);
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
        //
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
    public function destroy($id)
    {
        //
    }
}
