<?php

namespace ventas;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    protected $table = 'productos';
    protected $fillable = ['nombre', 'contenido', 'precio_proveedor','precio_publico','precio_mayoreo','descripcion','enventa','codigodebarras'];

}
