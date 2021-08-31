<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id' => 1,
        'titre',
        'categorie_id',
        'day',
        'time',
        'duree',
        'description',
        'addrese',
        'citie_id',
        'status'=> "open",
        'active'=> 1,
    ];
}
