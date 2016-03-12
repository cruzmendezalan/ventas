<?php

namespace ventas\Http\Controllers;
use Illuminate\Http\Request;
use Response;
use ventas\Http\Requests;
use \ventas\Proveedores;
use ventas\Http\Controllers\Controller;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function display(){
        $objetosporpagina = 15;
        $proveedores = Proveedores::select(
            'empresa AS Empresa',
            'nombre AS Nombre',
            // 'direccion as Dirección',
            // 'telefono AS Télefono',
            'celular AS Celular',
            // 'email AS Correo',
            'descripcion AS Descripción',
            'id'
            )
            ->orderBy('Empresa','asc')
            ->paginate();
        return $proveedores;
    }

    public function index(Request $request){
        $proveedores = $this->display();
        if ($request->ajax()) {
                return Response::json(['proveedores'=>view('administrar.proveedores.proveedores-tabla')->with("proveedores",$proveedores)->render(),'paginador'=>view('administrar.proveedores.paginador')->with('proveedores',$proveedores)->render()]);
            }
        return view('administrar.proveedores.index')
                    ->with("proveedores",$proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        if ($request->ajax()) {
            return Response::json(view('administrar.proveedores.nuevo-form')->render());
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
        $proveedor = Proveedores::create([
            'nombre'    =>  strtoupper($request->input('nombre')), 
            'empresa'   =>  strtoupper($request->input('empresa')),
            'direccion' =>  strtoupper($request->input('direccion')),
            'telefono'  =>  $request->input('telefono'),
            'celular'   =>  $request->input('celular'),
            'descripcion'=> strtoupper($request->input('descripcion')),
        ]);
        return redirect()->route('administrar.proveedores.index')->with('creado',"El proveedor [".$proveedor->nombre."] se ha creado exitosamente.");
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
        $proveedor = Proveedores::find($id);
        if ($request->ajax()) {
            return Response::json(view('administrar.proveedores.set-form')->with("proveedor",$proveedor)->render());
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
        $proveedor = Proveedores::find($id);
        $proveedor->fill($request->all());
        $proveedor->save();

        return redirect()->back()->with('actualizado','El proveedor ['.$proveedor->nombre.'] se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedores::find($id);
        $proveedor->delete();
        return redirect()->back()->with('eliminado','El proveedor ['.$proveedor->nombre.'] ha sido eliminado exitosamente.');
    }
}
