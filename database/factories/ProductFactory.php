<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'email' => $this->faker->paragraph(1),
            'quantiy'=>$this->faker->numberBetween(1, 10),
            'status'=>$this->faker->randomElement(Product::AVAILABLE_PRODUCT, Product::UNAVAILABLE_PRODUCT),
            'image'=>$this->faker->randomElement('1.jpg', '2.jpeg','3.jpg'),
            'seller_id'=>User::all()->random()->id,


        ];
    }
}
