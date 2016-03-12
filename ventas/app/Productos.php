<?php

namespace ventas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productos extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'productos';
    protected $fillable = ['nombre', 'contenido', 'precio_proveedor','precio_publico','precio_mayoreo','descripcion','enventa','codigodebarras','categorias_id','proveedores_id'];

}
