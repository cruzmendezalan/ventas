<?php

namespace ventas;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    //
    protected $table = 'proveedores';
    protected $fillable = ['empresa', 'nombre', 'direccion','telefono','celular','email', 'descripcion'];

}
