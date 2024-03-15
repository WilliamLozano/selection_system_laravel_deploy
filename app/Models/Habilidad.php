<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;

    protected $table = 'habilidades';

    protected $fillable = [
        'habilidad',
        'id_cargo'
    ];

    public function cargo(){
        return $this->belongs(User::class, 'id_cargo', 'id');
    }
}
