<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Timingparts", "Camshafts", "Pistons/liners/rings", "Pumps", "Cylinderheads", "Electricparts", "Filters", "Crankshafts", "Gaskets/screws", "Valves", "Other", "Universalparts", "Timingparts", "Camshafts", "Pistons/liners/rings", "Pumps", "Cylinderheads", "Electricparts", "Filters", "Crankshafts", "Gaskets/screws", "Valves", "Other", "Universalparts", "Timingparts", "Camshafts", "Pistons/liners/rings", "Pumps", "Cylinderheads", "Electricparts", "Filters", "Crankshafts", "Gaskets/screws", "Valves", "Other", "Universalparts"];
        for($i=0; $i<sizeof($categories); $i++){
            DB::table('categories')->insert([
                'name' => $categories[$i]
            ]);
        }
    }
}
