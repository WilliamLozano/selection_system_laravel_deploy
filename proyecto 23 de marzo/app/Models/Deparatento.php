<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deparatento extends Model
{
    use HasFactory;
    protected $table='departaments';

    protected $fillable =[
        'nombre_departamento'

    ];
}
