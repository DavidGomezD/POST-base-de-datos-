<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoModel extends Model
{
   protected $table = 'empleados';
   public $timestamps = true;
   protected $fillable =  ['nombre', 'apaterno', 'amaterno'];
}
