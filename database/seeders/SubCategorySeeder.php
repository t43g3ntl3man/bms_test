<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subs = ["Tools", "Oil", "Fluid", "Car battery" ];
        for($i=0; $i<sizeof($subs); $i++){
            DB::table('sub_categories')->insert([
                'name' => $subs[$i],
                'category_id' => 12
            ]);
        }
    }
}
