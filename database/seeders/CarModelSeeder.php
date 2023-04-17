<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car_models = ["145", "146", "147", "155", "156", "159", "164", "166", "1750-2000", "2300", "33", "4C", "6", "75", "8C", "90", "ALFASUD", "ALFETTA", "AR", "ARNA", "BERLINA", "BRERA", "GIULIA", "GIULIETTA", "GT", "GTA", "GTV", "MITO", "MONTREAL", "RZ", "SPIDER", "STELVIO", "SZ", "TONALE"];
        for($i=0; $i<sizeof($car_models); $i++){
            DB::table('car_models')->insert([
                'name' => $car_models[$i],
                'car_id' => 1
            ]);
        }
    }
}
