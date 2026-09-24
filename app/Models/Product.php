<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Product';
    protected $fillable = ['Naam', 'Barcode'];
    protected $casts = ['Id' => 'integer'];

    public function magazijn()
    {
        return $this->hasOne(Magazijn::class, 'ProductId');
    }

    public function productPerAllergeen()
    {
        return $this->hasMany(ProductPerAllergeen::class, 'ProductId');
    }

    public function productPerLeverancier()
    {
        return $this->hasMany(ProductPerLeverancier::class, 'ProductId');
    }
}
