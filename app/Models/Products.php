<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['sub_category_id', 'category_id', 'brand_id', 'title', 'price', 'code', 'car', 'cars_id', 'EAN', 'weight', 'criteria', 'image'];
    public function productCars()
    {
        return $this->hasMany(ProductCars::class);
    }
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function products_criterias()
    {
        return $this->hasMany(ProductsCriterias::class, 'products_id');
    }
    protected $casts = [
        'criteria' => 'array',
    ];
}
