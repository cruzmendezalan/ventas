<?php

namespace ventas\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Contracts\View;
use ventas\Http\Requests;
use ventas\Http\Controllers\Controller;
use \ventas\ProductosAntiguos;
use \ventas\Productos;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $productosantiguos = ProductosAntiguos::all();
        DB::beginTransaction();
        foreach ($productosantiguos as $productoantiguo) {
            Productos::create([
                'nombre'=>$productoantiguo->nombre,
                'precio_publico'=>$productoantiguo->precio,
                'precio_proveedor'=>$productoantiguo->precio,
                'precio_mayoreo'=>$productoantiguo->precio,
                'descripcion'=>$productoantiguo->descripcion,
                'codigodebarras'=>$productoantiguo->codigodebarras,
                'categorias_id'=>1,
                'proveedores_id'=>1
              ]);
        }
        DB::commit();
        $productos = Productos::all();
        return view('test.migracionproductos')->with("productos",$productos);

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
