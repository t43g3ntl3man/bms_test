<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker as Faker;
use Hash;
use DB;

class AdminSeeder extends Seeder
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
            DB::table('admins')->insert([
                'email' => strtolower($faker->firstName).'@gmail.com',
                'password' => Hash::make('123456'),
            ]);
        }
    }
}
