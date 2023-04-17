<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEngine extends Model
{
    use HasFactory;
    protected $fillable = ['products_id', 'engines_id'];
}
