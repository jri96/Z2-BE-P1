<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPerAllergeen extends Model
{
    protected $table = 'ProductPerAllergeen';
    protected $fillable = ['ProductId', 'AllergeenId'];
}
