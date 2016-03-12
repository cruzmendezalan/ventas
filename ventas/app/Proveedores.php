<?php

namespace ventas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedores extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'proveedores';
    protected $fillable = ['empresa', 'nombre', 'direccion','telefono','celular','email', 'descripcion'];

}
