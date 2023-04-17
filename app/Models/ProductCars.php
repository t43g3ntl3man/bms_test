<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCars extends Model
{
    use HasFactory;
    protected $fillable = ['car_id', 'products_id', 'car_models_id'];
    public function carModels()
    {
        // return $this->hasMany(CarModels::class);
        return $this->hasManyThrough(ProductCars::class, CarModels::class);
    }
}
