<?php

use Illuminate\Database\Seeder;
use App\Models\RequestOrder;

class RequestOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$status_Arr = ['Waiting comfirm', 'Completed'];
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 15; $i++) {
        	RequestOrder::create([
        		'code' => $faker->word,
        		'department' => $faker->sentence(2),
        		'user_id' => 1,
                'create_day' => $faker->dateTimeBetween('+0 days', '+3 days'),
        		'status_complete' => $status_Arr[$i % 2],
                'deadline_complete' => $faker->dateTimeBetween('+4 days', '+8 days'),
        		'note' => $faker->sentence(6)
        	]);
        }
    }
}
