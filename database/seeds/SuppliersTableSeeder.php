<?php

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 20; $i++){
        	Supplier::create([
                'code'                => $faker->word,
                'name'                => $faker->company,
                'person_contact_name' => $faker->name($gender = null|'male'|'female'),
                'phone'               => $faker->phoneNumber,
                'address'             => $faker->address,
                'fax'                 => $faker->phoneNumber,
                'note'                => $faker->sentence(10)
        	]);
        }
    }
}
