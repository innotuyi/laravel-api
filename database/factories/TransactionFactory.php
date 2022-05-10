<?php

namespace Database\Factories;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        $seller =Seller::has('products')->get()->random();
        $buyer = User::all()->except($seller->id)->random();

        return [
            'quantiy'=>$this->faker->numberBetween(1, 3),
            'buyer_id'=>$buyer->id,
            'product_id'=>$seller->products->random()->id, 



        ];
    }
}