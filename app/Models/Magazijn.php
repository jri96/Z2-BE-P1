<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magazijn extends Model
{
    protected $table = 'Magazijn';
    protected $fillable = ['ProductId', 'VerpakkingseenheidKg', 'AantalAanwezig'];
    protected $casts = ['ProductId' => 'integer'];
}
