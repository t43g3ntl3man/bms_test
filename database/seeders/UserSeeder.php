<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker as Faker;
use Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<5; $i++){
            $faker = Faker\Factory::create();
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->name.'@gmail.com',
                'password' => Hash::make($faker->name),
            ]);
        }
    }
}
