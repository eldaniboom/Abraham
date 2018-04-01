<?php

namespace abraham1;

use Illuminate\Database\Eloquent\Model;

class administrator extends Model
{
    //a que tabla hace referencia este modelo
    protected $table = 'administrators';
    // los campos que son asignables masivamente
    protected $fillable =[
      'nombre'
    ]
}
