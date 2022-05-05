<?php

namespace App\Models;

class Seller extends User
{
    const AVAILABLE_PRODUCT= 'available';
    const UNAVAILABLE_PRODUCT= 'unavailable';

    protected $fillable = [
        'name',
        'description',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }



}
