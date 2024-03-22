<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;
    protected $table ='role';

    protected $fillable =[
        'user_id',
        'admission_date'
    ];

    public function user(){
        return $this->HasMany(User::class, 'role_id', 'id');
    }

}
