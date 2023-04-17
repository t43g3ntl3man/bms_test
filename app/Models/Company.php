<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;


class Company extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'companyObj',
        'contactPersonObj',
        'differentAddrCheck',
        'shippingAddrObj',
        'companyNewsletterCheck',
    ];
}
