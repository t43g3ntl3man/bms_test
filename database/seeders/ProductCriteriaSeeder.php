<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=5; $i++){
            if($i==0){
                $criteria = [
                    'product_id' => $i,
                    'grooves' => rand(1, 5),
                    'cylinder_bore' => rand(1, 9),
                    'standard_size' => rand(1, 10),
                    'full_set' => rand(1, 10)
                ];
                DB::table('products')->where('id', $i)->update([
                    'criteria' => json_encode($criteria)
                ]);

            } 
            if($i==1){
                $criteria = [
                    'inner_diameter_1' => rand(1, 11),
                    'inner_diameter_2' => rand(1, 30),
                    'outer_diameter' => rand(1, 30)
                ];
                DB::table('products')->where('id', $i)->update([
                    'criteria' => json_encode($criteria)
                ]);
            }
            if($i==2){
                $criteria = [
                    'inner_diameter_1' => rand(1, 11),
                    'grooves' => rand(1, 5),
                    'cylinder_bore' => rand(1, 9)
                ];
                DB::table('products')->where('id', $i)->update([
                    'criteria' => json_encode($criteria)
                ]);
            }
            if($i==3){
                $criteria = [
                    'grooves' => rand(1, 5),
                    'cylinder_bore' => rand(1, 9)
                ];
                DB::table('products')->where('id', $i)->update([
                    'criteria' => json_encode($criteria)
                ]);
            }
            if($i==4){
                $criteria = [
                    'standard_size' => rand(1, 10),
                    'full_set' => rand(1, 10),
                    'inner_diameter_2' => rand(1, 30),
                    'outer_diameter' => rand(1, 30)
                ];
                DB::table('products')->where('id', $i)->update([
                    'criteria' => json_encode($criteria)
                ]);
            }
            if($i==5){
                $criteria = [
                    'inner_diameter_1' => rand(1, 11),
                    'inner_diameter_2' => rand(1, 30),
                    'outer_diameter' => rand(1, 30)
                ];
                DB::table('products')->where('id', $i)->update([
                    'criteria' => json_encode($criteria)
                ]);
            }
        }
    }
}
