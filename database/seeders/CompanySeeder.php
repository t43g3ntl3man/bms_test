<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<5; $i++){
            DB::table('companies')->insert([
                // 'name' => $faker->name,
                'email' => $faker->name.'@gmail.com',
                'password' => Hash::make($faker->name),
            ]);
        }
    }
}
