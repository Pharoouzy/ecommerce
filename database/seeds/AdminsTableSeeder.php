<?php

use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();

        Admin::create([
            'first_name' => $faker->name,
            'last_name' => $faker->name,
            'other_name' => $faker->name,
            'email' => 'admin@ecommerce.io',
            'phone_number' => '+2348078780858',
            'password' => bcrypt('password')
        ]);
    }
}
