<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) 
        	for ($j = 0; $j < 10; $j++) {
        		Product::create([
        			'supplier_id' => $i + 1,
        			'code'        => $faker->word,
        			'name'        => $faker->company,
        			'description' => $faker->sentence(5),
        			'note'        => $faker->sentence(10)
        		]);
        	}
    }
}
