<?php

namespace ventas;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    protected $table = 'roles';
    protected $fillable = ['tipo'];
}
