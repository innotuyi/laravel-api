<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Traits\Responser;
use Illuminate\Http\Request;
class BuyerController extends ApiController
{
    use Responser;
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
