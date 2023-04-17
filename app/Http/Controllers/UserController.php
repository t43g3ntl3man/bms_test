<?php

namespace App\Http\Controllers;
use App\Models\ProductCars;
use App\Models\Products;
use App\Models\CarModels;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function dashboard(){
        $prods = Products::find(1)->productCars;
        $name = "";
        // for($i=0; $i<sizeof($prods); $i++){
        //     $model = CarModels::where('id', $prods[$i]->car_models_id)->get();
        //     $name = $name." ".$model[0]->name;

        // }
        // $prod
        // dd('User dashboard', $prods->all());
        return view('dashboard');
    }
}
