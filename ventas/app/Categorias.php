<?php

namespace ventas;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nombre', 'descripcion'];

}
