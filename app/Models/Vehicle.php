<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['vehicle_brand_models_id', 'name', 'kw_hp', 'ccm', 'cylinders', 'valves', 'gas', 'years_active', 'tec_doc'];
    use HasFactory;
}
