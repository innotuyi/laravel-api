<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends ApiController
{
    public function index()
    {
        $sellers = Seller::has('products')->get();
        return $this->showAll($sellers);
    }


  
    public function show($id)
    {
        $seller = Seller::has('products')->findorFail($id);
        return $this->showOne($seller);
    }


}
