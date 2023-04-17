<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReference extends Model
{
    use HasFactory;
    protected $fillable = ['references_id', 'products_id'];
}
