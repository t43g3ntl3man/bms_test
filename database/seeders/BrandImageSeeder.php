<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BrandImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imgs = array (
          0 => 
          array (
            'name' => 'ET ENGINETEAM',
            'file' => '4514.jpg',
          ),
          1 => 
          array (
            'name' => 'KOLBENSCHMIDT',
            'file' => '432.jpg',
          ),
          2 => 
          array (
            'name' => 'PIERBURG',
            'file' => '5.jpg',
          ),
          3 => 
          array (
            'name' => 'BF',
            'file' => '352.jpg',
          ),
          4 => 
          array (
            'name' => 'ELRING',
            'file' => '10.jpg',
          ),
          5 => 
          array (
            'name' => 'TRW Engine Component',
            'file' => '347.jpg',
          ),
          6 => 
          array (
            'name' => 'BOSCH',
            'file' => '30.jpg',
          ),
          7 => 
          array (
            'name' => 'MAGNETI MARELLI',
            'file' => '95.BMP',
          ),
          8 => 
          array (
            'name' => 'MEC-DIESEL',
            'file' => '6470.png',
          ),
          9 => 
          array (
            'name' => 'HOFFER',
            'file' => '341.jpg',
          ),
          10 => 
          array (
            'name' => 'MAHLE',
            'file' => '287.jpg',
          ),
          11 => 
          array (
            'name' => 'NE',
            'file' => '4717.jpg',
          ),
          12 => 
          array (
            'name' => 'AE',
            'file' => '141.jpg',
          ),
          13 => 
          array (
            'name' => 'GLYCO',
            'file' => '202.jpg',
          ),
          14 => 
          array (
            'name' => 'MANN-FILTER',
            'file' => '4.BMP',
          ),
          15 => 
          array (
            'name' => 'VICTOR REINZ',
            'file' => '9.jpg',
          ),
          16 => 
          array (
            'name' => 'FRECCIA',
            'file' => '235.jpg',
          ),
          17 => 
          array (
            'name' => 'OE Germany',
            'file' => '6466.jpg',
          ),
          18 => 
          array (
            'name' => 'KING',
            'file' => '4460.jpg',
          ),
          19 => 
          array (
            'name' => 'AJUSA',
            'file' => '139.jpg',
          ),
          20 => 
          array (
            'name' => 'DT Spare Parts',
            'file' => '355.jpg',
          ),
          21 => 
          array (
            'name' => 'AMC',
            'file' => '277.BMP',
          ),
          22 => 
          array (
            'name' => 'GOETZE ENGINE',
            'file' => '385.jpg',
          ),
          23 => 
          array (
            'name' => 'BorgWarner (Wahler)',
            'file' => '79.jpg',
          ),
          24 => 
          array (
            'name' => 'NÜRAL',
            'file' => '216.jpg',
          ),
          25 => 
          array (
            'name' => 'PAYEN',
            'file' => '113.jpg',
          ),
          26 => 
          array (
            'name' => 'FEBI BILSTEIN',
            'file' => '101.jpg',
          ),
          27 => 
          array (
            'name' => 'IAP QUALITY PARTS',
            'file' => '6359.BMP',
          ),
          28 => 
          array (
            'name' => 'GLASER',
            'file' => '88.jpg',
          ),
          29 => 
          array (
            'name' => 'CONTINENTAL CTAM',
            'file' => '31.jpg',
          ),
        );
        for($i=0; $i<sizeof($imgs); $i++){
            DB::table('brands')->where('name', $imgs[$i]['name'])->update([
                'image' => 'images/brand-logo/'.$imgs[$i]['file'],
                'ratings' => $i+1
            ]);
        }
    }
}
