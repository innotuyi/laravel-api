<?php
namespace Database\Seeders;
//use \Illuminate\Database\Eloquent\Factory $factory ;
//use Illuminate\Database\Eloquent\Factories\Factory ;

use App\Models\Buyer;
use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Faker\Factory;
//use Faker\Factory as factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
       $usersQuantity = 200;
       User::factory($usersQuantity)->create();
       DB::table('category_product')->truncate();

      
     

     
        
    }

   
}
