<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;

    protected $fillable = [
        'utilisateur',
        'password',
        'passwordh',
        'type_compte',
        'structure_iap_id'
    ];
}
