<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPerLeverancier extends Model
{
    protected $table = 'ProductPerLeverancier';
    protected $fillable = ['LeverancierId', 'ProductId', 'DatumLevering', 'Aantal', 'DatumEerstVolgendeLevering'];
}
