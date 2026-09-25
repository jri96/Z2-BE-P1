<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    protected $table = 'Leverancier';
    protected $fillable = ['Naam', 'ContactPersoon', 'LeverancierNummer', 'Mobiel'];
}
