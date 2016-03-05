<?php

namespace ventas\Http\Controllers;

use Illuminate\Http\Request;

use ventas\Http\Requests;
use ventas\Http\Controllers\Controller;
use \ventas\Categorias;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function rendercategorias($categoriaAgregada){
        $categorias = Categorias::select('nombre as Nombre','descripcion as Descripción','id')->get();
        $vista = view('administrar.categorias.index')->with("categorias",$categorias)->with("categoriaAgregada",$categoriaAgregada)->render();
        return $vista;
    }

    public function index()
    {
        // $vista = $this->rendercategorias(False);
        return response()->json(['HTML'=>$this->rendercategorias(False)]);
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
        if ($request->ajax()) {
            Categorias::create($request->all());
            return response()->json([
                "HTML"=> $this->rendercategorias(True)
            ]);
        }
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
        
    }
}
