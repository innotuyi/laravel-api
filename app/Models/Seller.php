<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends User
{
    use HasFactory;
    const AVAILABLE_PRODUCT= 'available';
    const UNAVAILABLE_PRODUCT= 'unavailable';

    protected $fillable = [
        'name',
        'description',
    ];

 
    public function products()
    {
    	return $this->hasMany(Product::class);
    }



}
