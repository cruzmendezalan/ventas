<?php

namespace ventas\Http\Controllers;

use Illuminate\Http\Request;
// use Request;
use Response;
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
    public function index(Request $request){
        $categorias = Categorias::lists('nombre','id');
        $productos = Productos::select('nombre AS Nombre',
                                        'descripcion as Descripción',
                                        'precio_publico as PrecioPublico',
                                        'codigodebarras as CodigoDeBarras',
                                        'id'
                                        )->orderBy('Nombre','asc')->paginate(15);
        if ($request->ajax()) {
                return Response::json(['productos'=>view('administrar.productos.productos-tabla')->with("productos",$productos)->render(),'paginador'=>view('administrar.productos.paginador')->with('productos',$productos)->render()]);
            }
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
        $proveedor_id = 1;
        $producto = Productos::create([
            'nombre'           => $request->input('nombre'),
            'descripcion'      => $request->input('descripcion'),
            'precio_proveedor' => $request->input('precio_proveedor'),
            'precio_publico'   => $request->input('precio_publico'),
            'precio_mayoreo'   => $request->input('precio_mayoreo'),
            'codigodebarras'   => $request->input('codigodebarras'),
            'proveedores_id'   => $proveedor_id,
            'categorias_id'    => $request->input('categorias_id'),
        ]);
        return redirect()->route('administrar.productos.index')->with('creado',"El producto [".$producto->nombre."] se ha creado exitosamente.");
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
    public function edit($id, Request $request)
    {
        //
        $categorias = Categorias::lists('nombre','id');
        $producto = Productos::find($id);
        if ($request->ajax()) {
            return Response::json(view('administrar.productos.set-form')->with("producto",$producto)->with("categorias",$categorias)->render());
        }
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
