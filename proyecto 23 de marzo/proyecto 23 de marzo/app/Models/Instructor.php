<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table='recruiters';

    protected $fillable=[
        'admission_date'
        
    ];

    public function users(){
        return $this->hasMany(User::class);
    } 
}
