<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductCarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<30; $i++){
            DB::table('product_cars')->insert([
                'product_id' => rand(1, 5),
                'car_model_id' => rand(1, 34)
            ]);
        }
    }
}
