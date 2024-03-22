<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;
    protected $table = 'competencias';

    protected $fillable =[
        'competencia',
        'id_cargo'
    ];

    public function cargo(){
        return $this->belongs(Cargo::class, 'id_cargo', 'id');
    }

}
