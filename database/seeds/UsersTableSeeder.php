<?php

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();

        User::create([
            'first_name' => $faker->name,
            'last_name' => $faker->name,
            'other_name' => $faker->name,
            'email' => 'user@ecommerce.io',
            'phone_number' => '+2348078780859',
            'password' => bcrypt('password')
        ]);
    }
}
