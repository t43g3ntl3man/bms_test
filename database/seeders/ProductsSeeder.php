<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<5; $i++){
            DB::table('products')->insert([
                'sub_category_id' => rand(1, 130),
                'category_id' => rand(1, 11),
                'brand_id' => rand(1, 30),
                'title' => 'Timing Chain Kit',
                'code' => 'RS0008'.rand(1, 5),
                'ean' => rand(80000000, 90000000),
                'weight' => rand(0.01, 10)
            ]);
        }
    }
}
