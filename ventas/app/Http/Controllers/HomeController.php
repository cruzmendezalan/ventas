<?php

namespace ventas\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Contracts\View;
use ventas\Http\Requests;
use ventas\Http\Controllers\Controller;
use \ventas\ProductosAntiguos;
use \ventas\Productos;
use \ventas\Roles;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function migracionproductos()
    {   
        $productosantiguos = ProductosAntiguos::all();
        DB::beginTransaction();
        foreach ($productosantiguos as $productoantiguo) {
            Productos::create([
                'nombre'            =>$productoantiguo->nombre,
                'precio_publico'    =>number_format((float)($productoantiguo->precio),2, '.', ''),
                'precio_proveedor'  =>number_format((float)($productoantiguo->precio),2, '.', ''),
                'precio_mayoreo'    =>number_format((float)($productoantiguo->precio),2, '.', ''),
                'descripcion'       =>$productoantiguo->descripcion,
                'codigodebarras'    =>$productoantiguo->codigodebarras,
                'categorias_id'     =>1,
                'proveedores_id'    =>1
              ]);
        }
        DB::commit();
        $productos = Productos::all();
        // $productos = 3;
        return view('test.migracionproductos')->with("productos",$productos);


    }
    public function crearroles()
    {
        Roles::create([
            'tipo'=>'ADMINISTRADOR'
        ]);
        Roles::create([
            'tipo'=>'EMPLEADO'
        ]);
        return "Roles inserrtados"; 
    }
}
