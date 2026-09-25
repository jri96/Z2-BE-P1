<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allergeen extends Model
{
    protected $table = 'Allergeen';
    protected $fillable = ['Naam', 'Omschrijving'];
}
