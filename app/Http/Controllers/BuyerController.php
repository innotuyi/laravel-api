<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends ApiController
{
    public function index()
    {
        $buyers = Buyer::has('transactions')->get();
        return $this->showAll($buyers);
    }

    public function show($id)
    {
        $buyer = Buyer::has('transactions')->findorFail($id);
        return $this->showOne($buyer);
    }




}
