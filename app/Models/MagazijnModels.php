<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allergeen extends Model
{
    protected $table = 'Allergeen';
    protected $fillable = ['Naam', 'Omschrijving'];
}

class Leverancier extends Model
{
    protected $table = 'Leverancier';
    protected $fillable = ['Naam', 'ContactPersoon', 'LeverancierNummer', 'Mobiel'];
}

class Magazijn extends Model
{
    protected $table = 'Magazijn';
    protected $fillable = ['ProductId', 'VerpakkingseenheidKg', 'AantalAanwezig'];
    protected $casts = ['ProductId' => 'integer'];
}

class ProductPerAllergeen extends Model
{
    protected $table = 'ProductPerAllergeen';
    protected $fillable = ['ProductId', 'AllergeenId'];
}

class ProductPerLeverancier extends Model
{
    protected $table = 'ProductPerLeverancier';
    protected $fillable = ['LeverancierId', 'ProductId', 'DatumLevering', 'Aantal', 'DatumEerstVolgendeLevering'];
}
