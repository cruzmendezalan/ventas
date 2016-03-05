<?php

namespace ventas;

use Illuminate\Database\Eloquent\Model;

class ProductosAntiguos extends Model
{
    protected $connection = 'dbantigua';
    protected $table = 'productos';
}
