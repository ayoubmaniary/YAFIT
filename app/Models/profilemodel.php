<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profilemodel extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable=[
        'name',
        'prenom',
        'email',
        'telephone',
        'password',
        'age',
        'sexe',
    ];
}
