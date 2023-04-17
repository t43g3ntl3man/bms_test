<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    protected $fillable = ['cars_id', 'name', 'kw_hp', 'ccm', 'cylinders', 'valves'];
    use HasFactory;
}
