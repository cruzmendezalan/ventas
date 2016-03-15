<?php

namespace ventas\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use ventas\Http\Requests;
use ventas\Http\Controllers\Controller;
use \ventas\Categorias;
use \ventas\Productos;
use \ventas\Proveedores;

class ProductosController extends Controller
{
    
    private function display($categoria,$proveedor){
        $objetosporpagina = 15;
        if ($categoria == null) {
            $categoria = 1;
        }
        if ($proveedor == null) {
            $proveedor = 1;
        }
        $productos = Productos::join('categorias','productos.categorias_id','=','categorias.id')
                                ->join('proveedores','productos.proveedores_id','=','proveedores.id')
                                ->where('productos.categorias_id','=',$categoria)
                                ->where('productos.proveedores_id','=',$proveedor)
                                ->select('productos.nombre AS Nombre',
                                        'productos.descripcion as Descripción',
                                        'categorias.nombre as Categoría',
                                        'precio_publico as PrecioPublico',
                                        'codigodebarras as CodigoDeBarras',
                                        'productos.id'
                                        )
                                ->orderBy('Nombre','asc')
                                ->paginate($objetosporpagina);
        return $productos;
    }

    /**
     * Mostrar la lista de productos, dependiendo de la categoria.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $categorias = Categorias::lists('nombre','id');
        $proveedores = Proveedores::lists('empresa','id');
        $productos = $this->display($request->input('categoria'),$request->input('proveedor'));
        if ($request->ajax()) {
                return Response::json(['productos'=>view('administrar.productos.productos-tabla')->with("productos",$productos)->render(),'paginador'=>view('administrar.productos.paginador')->with('productos',$productos)->render()]);
            }
        return view('administrar.productos.index')->with("categorias",$categorias)
                                                  ->with("productos",$productos)
                                                  ->with("proveedores",$proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categorias = Categorias::lists('nombre','id');
        if ($request->ajax()) {
            return Response::json(view('administrar.productos.nuevo-form')->with("categorias",$categorias)->render());
        }
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
            'nombre'           => strtoupper($request->input('nombre')),
            'descripcion'      => strtoupper($request->input('descripcion')),
            'precio_proveedor' => $request->input('precio_proveedor'),
            'precio_publico'   => $request->input('precio_publico'),
            'precio_mayoreo'   => $request->input('precio_mayoreo'),
            'codigodebarras'   => $request->input('codigodebarras'),
            'proveedores_id'   => $request->input('proveedores_id'),
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
        $proveedores = Proveedores::lists('empresa','id');

        $producto = Productos::find($id);
        if ($request->ajax()) {
            return Response::json(view('administrar.productos.set-form')->with("producto",$producto)->with("categorias",$categorias)->with('proveedores',$proveedores)->render());
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
        $producto = Productos::find($id);
        $producto->fill($request->all());
        $producto->save();

        return redirect()->back()->with('actualizado','El producto ['.$producto->nombre.'] se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Productos::find($id);
        $producto->delete();
        return redirect()->back()->with('eliminado','El producto ['.$producto->nombre.'] ha sido eliminado exitosamente.');
    }
}
