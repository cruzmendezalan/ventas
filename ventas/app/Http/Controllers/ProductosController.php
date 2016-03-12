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
    
    private function display($categoria){
        $objetosporpagina = 15;
        if ($categoria == null) {
            $categoria = 1;
        }
        $productos = Productos::join('categorias','productos.categorias_id','=','categorias.id')
                                ->where('productos.categorias_id','=',$categoria)
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
        $productos = $this->display($request->input('categoria'));
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
            'nombre'           => strtoupper($request->input('nombre')),
            'descripcion'      => strtoupper($request->input('descripcion')),
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
        $producto = Productos::find($id);
        $producto->delete();
        return redirect()->back()->with('eliminado','El producto[ '.$producto->nombre.' ] ha sido eliminado exitosamente.');
    }
}
