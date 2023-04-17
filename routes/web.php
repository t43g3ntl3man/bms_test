<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Square\SquareClient;
use Square\Environment;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\SquarePaymentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Models\Products;
use App\Models\CarModels;
use App\Models\Vehicle;
use App\Models\VehicleBrandModel;
use App\Models\Cars;
use App\Models\Brand;
use App\Models\ProductCars;
use App\Models\Engine;
use App\Models\ProductVehicle;
use App\Models\ProductReference;
use App\Models\Reference;
use App\Models\ProductEngine;
use App\Models\Categories;
use App\Models\SubCategory;
use Validator as Vali;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // dd(Auth::user());
    $products = Products::all();
    $recomended = [];
    $cars_search = Cars::get();
    foreach($cars_search as $car){
        $vehicle_list = [];
        $vehs_cars = VehicleBrandModel::select('id', 'name')->where('cars_id', $car->id)->get();
        foreach($vehs_cars as $a_car){
            $carObj = [
                'id' => $a_car->id,
                'name' => $a_car->name,
            ];
            $vehs = Vehicle::select('id', 'kw_hp', 'ccm', 'valves', 'years_active')->where('vehicle_brand_models_id', $a_car->id)->get();
            if($vehs == null){
                continue;
            }
            $veh_names = [];
            
            foreach($vehs as $veh){
                // dd($veh);
                $obj = [
                    'id' => $veh->id,
                    'name' => $veh->kw_hp . ' - ' . $veh->ccm . ' ' . $veh->valves . ' ' . $veh->years_active
                ];
                array_push($veh_names, $obj);
            }
            $carObj['veh_names'] = $veh_names;
            array_push($vehicle_list, $carObj);
        }
        $car->veh_list = $vehicle_list;
    }
    $eng_car_list = Cars::get();
    foreach($eng_car_list as $eng_car){
        $engs = Engine::select('id', 'name', 'kw_hp', 'ccm', 'cylinders', 'valves')->where('cars_id', $eng_car->id)->get();
        $all_eng_list = [];
        foreach($engs as $eng){
            $obj = [
                'id' => $eng->id,
                'name' => $eng->name . ' - ' . $eng->hw_hp . ' ' . $eng->ccm . ' ' . $eng->cylinders . ' ' . $eng->valves
            ];
            array_push($all_eng_list, $obj);
        }
        $eng_car->all_eng_list = $all_eng_list;
    }
    for($i=0; $i<sizeof($products); $i++){
        $name = "";
        $prod = $products[$i];
        $cars = $products[$i]->productCars;
        for($j=0; $j<sizeof($cars); $j++){
            $model = CarModels::where('id', $cars[$j]->car_models_id)->get();
            $name = $name." ".$model[0]->name;
        }
        $criterias = $products[$i]->criteria;
        // dd($criterias);
        $all_criterias = [];
        $values = [];
        foreach($criterias as $criteria => $value) {
            array_push($values, $value);
            array_push($all_criterias, ucwords(str_replace('_', ' ', $criteria)));
        }
        $prod->carName = $name;
        $prod->brandName = $products[$i]->brand->name;
        $prod->categoryName = $products[$i]->category->name;
        $prod->subCategoryName = $products[$i]->sub_category->name;
        $prod->criteria_names = $all_criterias;
        $prod->criteria_value = $values;
        array_push($recomended, $prod);
    }
        // dd($cars_search[3]) ;
    $name = "";
    return view('dashboard', compact('recomended', 'all_criterias', 'values', 'cars_search', 'eng_car_list'));
});

Route::get('/product/{id}', function ($id) {
    $product = Products::find($id);
    $name = "";
    $prod = $product;
    $criterias = $product->criteria;
    // dd($criterias);
    $all_criterias_product = [];
    $values_product = [];
    foreach($criterias as $criteria => $value) {
        array_push($values_product, $value);
        array_push($all_criterias_product, ucwords(str_replace('_', ' ', $criteria)));
    }
    $cars = $product->productCars;
    for($j=0; $j<sizeof($cars); $j++){
        $model = CarModels::where('id', $cars[$j]->car_models_id)->get();
        $name = $name." ".$model[0]->name;
    }

    $usedIn_vehicles = ProductVehicle::where('products_id', $id)->get();
    $usedIn_engines = ProductEngine::where('products_id', $id)->get();

    $vehicles = [];
    $engines = [];


    $car_ids = [];
    $veh_ids = [];
    for($i=0; $i<sizeof($usedIn_vehicles); $i++){
        $used = [];
        $veh = [];
        $vehicle = Vehicle::where('id', $usedIn_vehicles[$i]['vehicles_id'])->first();
        $vehicle_parent = VehicleBrandModel::where('id', $vehicle['vehicle_brand_models_id'])->first();
        $used = [
            'name' => $vehicle['name'],
            'kw_hp' => $vehicle['kw_hp'],
            'ccm' => $vehicle['ccm'],
            'cylinders' => $vehicle['cylinders'],
            'valves' => $vehicle['valves'],
            'gas' => $vehicle['gas']
        ];
        $veh = [
            'title' => $vehicle_parent['name'],
            'car_id' => $vehicle_parent['cars_id'],
            'veh_parent_id' => $vehicle_parent['id'],
            'used_vehs' => $used
        ];
        array_push($car_ids, $vehicle_parent['cars_id']);
        array_push($veh_ids, $vehicle_parent['id']);
        array_push($vehicles, $veh);
    }
    $car_ids = array_values(array_unique($car_ids));
    $veh_ids = array_values(array_unique($veh_ids));
    // dd($car_ids, $veh_ids);

    $sorted_veh_by_car = [];
    for($i=0; $i<sizeof($car_ids); $i++){
        $existing_vehs = [];
        $car = Cars::where('id', $car_ids[$i])->first();
        for($j=0; $j<sizeof($vehicles); $j++){
            if($car_ids[$i] == $vehicles[$j]['car_id']){
                array_push($existing_vehs, $vehicles[$j]);
            }
        }
        $car_vise = [
            'car_title' => $car['name'],
            'car_id' => $car_ids[$i],
            'vehicles' => $existing_vehs
        ];
        array_push($sorted_veh_by_car, $car_vise);
    }

    $sorted_veh_by_veh_brand = [];
    for($i=0; $i<sizeof($veh_ids); $i++){
        $existing_vehs = [];
        $veh_brand = VehicleBrandModel::where('id', $veh_ids[$i])->first();
        for($j=0; $j<sizeof($sorted_veh_by_car); $j++){
            // dd($sorted_veh_by_car[$j]);
            if($veh_brand['cars_id'] == $sorted_veh_by_car[$j]['car_id']){
                $existing_vehs = [];
                for($k = 0; $k<sizeof($sorted_veh_by_car[$j]['vehicles']); $k++){
                    if($veh_ids[$i] == $sorted_veh_by_car[$j]['vehicles'][$k]['veh_parent_id']){
                        array_push($existing_vehs, $sorted_veh_by_car[$j]['vehicles'][$k]['used_vehs']);
                    }
                }
                // dd($veh_brand, $existing_vehs);
                $brand_vise = [
                    'car_title' => $sorted_veh_by_car[$j]['car_title'],
                    'cars_id' => $veh_brand['cars_id'],
                    'vehs_brands' => [
                        'veh_brand_name' => $veh_brand['name'],
                        'vehs' => $existing_vehs
                    ]
                ];
                array_push($sorted_veh_by_veh_brand, $brand_vise);
            }
        }
    }
    $final_used_in_engines = [];
    for($i=0; $i<sizeof($car_ids); $i++){
        $existing_vehs = [];
        $car = Cars::where('id', $car_ids[$i])->first();
        for($j=0; $j<sizeof($sorted_veh_by_veh_brand); $j++){
            if($car_ids[$i] == $sorted_veh_by_veh_brand[$j]['cars_id']){
                // dd($sorted_veh_by_veh_brand[$j]);
                array_push($existing_vehs, $sorted_veh_by_veh_brand[$j]['vehs_brands']);
            }
        }
        $car_vise = [
            'car_title' => $car['name'],
            'car_id' => $car_ids[$i],
            'vehicles' => $existing_vehs
        ];
        array_push($final_used_in_engines, $car_vise);
    }

    $all_engines = [];
    for($i=0; $i<sizeof($usedIn_engines); $i++){
        $eng = Engine::where('id', $usedIn_engines[$i]['engines_id'])->first();
        array_push($car_ids, $eng['cars_id']);
        $used = [
            'name' => $eng['name'],
            'kw_hp' => $eng['kw_hp'],
            'ccm' => $eng['ccm'],
            'cylinders' => $eng['cylinders'],
            'valves' => $eng['valves'],
        ];
        $engine = [
            'car_id' => $eng['cars_id'],
            'engines' => $used
        ];

        array_push($all_engines, $engine);
    }
    $car_ids = array_values(array_unique($car_ids));
    $final_used_in_engines = [];
    for($i=0; $i<sizeof($car_ids); $i++){
        $existing_engs = [];
        for($j=0; $j<sizeof($all_engines); $j++){
            if($car_ids[$i] == $all_engines[$j]['car_id']){
                array_push($existing_engs, $all_engines[$j]['engines']);
            }
        }
        $car = Cars::where('id', $car_ids[$i])->first();
        $engine_vise = [
            'car' => $car['name'],
            'engines' => $existing_engs 
        ];
        array_push($final_used_in_engines, $engine_vise);
    }
    $prod_ref = ProductReference::where('products_id', $id)->get();
    $all_refs = [];
    for($i=0; $i<sizeof($prod_ref); $i++){
        $ref = Reference::where('id', $prod_ref[$i]['references_id'])->first();
        $obj = [
            'ref_of' => $ref['ref_name'], 
            'ref' => $ref['reference_number'], 
        ];
        array_push($all_refs, $obj);
    }

    $all_ref_id = [];
    for($i=0; $i<sizeof($prod_ref); $i++){
        $ref = Reference::where('id', $prod_ref[$i]['references_id'])->first();
        // $product = Products::find($prod_ref[$i]['references_id']);
        array_push($all_ref_id, $ref['id']);
    }
    $product_alts = [];
    $alt_ids = [];
    for($i=0; $i<sizeof($all_ref_id); $i++){
        $ref = ProductReference::where('references_id', $all_ref_id[$i])->get();
        for($j=0; $j<sizeof($ref); $j++){
            if($ref[$j]['products_id'] != $id && !in_array($ref[$j]['products_id'], $alt_ids)){
                $product_alt = Products::where('id', $ref[$j]['products_id'])->first();
                $cars = $product_alt->productCars;
                $alt_car_name = "";
                for($k=0; $k<sizeof($cars); $k++){
                    $model = CarModels::where('id', $cars[$k]->car_models_id)->get();
                    $alt_car_name = $alt_car_name." ".$model[0]->name;
                }
                $criterias = $product_alt->criteria;
                $all_criterias = [];
                $values = [];
                foreach($criterias as $criteria => $value) {
                    array_push($values, $value);
                    array_push($all_criterias, ucwords(str_replace('_', ' ', $criteria)));
                }
                $product_alt->car_name = $alt_car_name;
                $product_alt->criteria_names = $all_criterias;
                $product_alt->criteria_value = $values;
                $product_alt->after_vat = $product_alt->price - (($product_alt->price * 40) / 100);
                array_push($product_alts, $product_alt);
                array_push($alt_ids, $ref[$j]['products_id']);
            }
        }
    }
    
    $return_data = [
        'car_name' => $name,
        'product' => $product,
        'product_price_after_vat' => $product->price - (($product->price * 40) / 100),
        'criteria_name' => $all_criterias_product,
        'criteria_value' => $values_product,
        'used_in' => [
            'vehicles' => $sorted_veh_by_veh_brand,
            'engines' => $final_used_in_engines
        ],
        'references' => $all_refs,
        'alternatives' => $product_alts
    ];
    
    return view('product', compact('return_data'));
});

Route::get('/products', function() {
    $categories = Categories::all();
    $products = Products::all();
    $recomended = [];
    for($i=0; $i<sizeof($products); $i++){
        $name = "";
        $prod = $products[$i];
        $cars = $products[$i]->productCars;
        for($j=0; $j<sizeof($cars); $j++){
            $model = CarModels::where('id', $cars[$j]->car_models_id)->get();
            $name = $name." ".$model[0]->name;
        }
        $criterias = $products[$i]->criteria;
        $all_criterias = [];
        $values = [];
        foreach($criterias as $criteria => $value) {
            array_push($values, $value);
            array_push($all_criterias, ucwords(str_replace('_', ' ', $criteria)));
        }
        $prod->carName = $name;
        $prod->brandName = $products[$i]->brand->name;
        $prod->categoryName = $products[$i]->category->name;
        $prod->subCategoryName = $products[$i]->sub_category->name;
        $prod->criteria_names = $all_criterias;
        $prod->criteria_value = $values;
        array_push($recomended, $prod);
    }
    return view('products', compact('categories', 'recomended', 'all_criterias', 'values'));
});

Route::get('/category/{id}', function ($id){
    $category = Categories::where('id', $id)->get();
    $subs = SubCategory::where('categories_id', $category[0]->id)->get();
    dd($subs);
    $products = Products::where('category_id', $category[0]->id)->get();
    // dd($products);
    $recomended = [];
    for($i=0; $i<sizeof($products); $i++){
        $name = "";
        $prod = $products[$i];
        $cars = $products[$i]->productCars;
        for($j=0; $j<sizeof($cars); $j++){
            $model = CarModels::where('id', $cars[$j]->car_models_id)->get();
            $name = $name." ".$model[0]->name;
        }
        $criterias = $products[$i]->criteria;
        // dd($criterias);
        $all_criterias = [];
        $values = [];
        foreach($criterias as $criteria => $value) {
            array_push($values, $value);
            array_push($all_criterias, ucwords(str_replace('_', ' ', $criteria)));
        }
        $prod->carName = $name;
        $prod->brandName = $products[$i]->brand->name;
        $prod->categoryName = $products[$i]->category->name;
        $prod->subCategoryName = $products[$i]->sub_category->name;
        $prod->criteria_names = $all_criterias;
        $prod->criteria_value = $values;
        array_push($recomended, $prod);
    }
    $return_data = [
        'category' => $category[0],
        'sub_category' => $subs[0],
        'products' => $recomended
    ];
    // dd($return_data['sub_category']);
    return view('category-home', compact('return_data'));
});

Route::get('/brands', function() {
    $brands = Brand::orderBy('ratings')->get();
    return view('brands', compact('brands'));
});

Route::get('/contact-us', function() {
    return view('contact');
});
Route::get('/faqs', function() {
    return view('faqs');
});

Route::get('/terms-and-condition', function() {
    return view('complaints');
});

Route::get('/abput-us', function() {
    return view('returns');
});

Route::post('/search', function(Request $request){
    $brand_vise_prods = [];
    $cat_vise_prods = [];
    $prod_ids = [];
    $brand_vise = Brand::where('name', 'LIKE', '%'.$request->searchString.'%')->get();
    // dd($brand_vise);
    $category_vise = Categories::where('name', 'LIKE', '%'.$request->searchString.'%')->get();
    // dd(sizeof($product_vise));
    $product_vise = Products::select('id')->where('title', 'LIKE', '%'.$request->searchString.'%')->orWhere('code', 'LIKE', '%'.$request->searchString.'%')->orWhere('ean', 'LIKE', '%'.$request->searchString.'%')->get();
    for($i=0; $i<sizeof($product_vise); $i++){
        $cat_prods = Products::where('category_id', $product_vise[$i]['id'])->get();
        array_push($prod_ids, $product_vise[$i]['id']);        
    }
    for($i=0; $i<sizeof($brand_vise); $i++){
        $brand_prods = Products::where('brand_id', $brand_vise[$i]['id'])->get();
        for($j=0; $j<sizeof($brand_prods); $j++){
            array_push($prod_ids, $brand_prods[$j]['id']);
        }
    }
    for($i=0; $i<sizeof($category_vise); $i++){
        $cat_prods = Products::where('category_id', $category_vise[$i])->get();
        for($j=0; $j<sizeof($cat_prods); $j++){
            array_push($prod_ids, $cat_prods[$j]->id);
        }        
    }
    $recomended = [];
    $name = "";
    $prod_ids=array_unique($prod_ids);
    for($i=0; $i<sizeof($prod_ids); $i++){
        $product = Products::where('id', $prod_ids[$i])->first();
        $prod = $product;
        $cars = $product->productCars;
        for($j=0; $j<sizeof($cars); $j++){
            $model = CarModels::where('id', $cars[$j]->car_models_id)->get();
            $name = $name." ".$model[0]->name;
        }
        $criterias = $product->criteria;
        $all_criterias = [];
        $values = [];
        foreach($criterias as $criteria => $value) {
            array_push($values, $value);
            array_push($all_criterias, ucwords(str_replace('_', ' ', $criteria)));
        }
        $prod->carName = $name;
        $prod->brandName = $product->brand->name;
        $prod->categoryName = $product->category->name;
        $prod->subCategoryName = $product->sub_category->name;
        $prod->criteria_names = $all_criterias;
        $prod->criteria_value = $values;
        array_push($recomended, $prod);
    }
    $return_data = $recomended;
    $keyword = $request->searchString;
    // dd($return_data);
    return view('search', compact('return_data', 'keyword'));
});

Route::get('cart', function(){
    $cart_list = DB::table('carts')->where('user_id', Auth::user()->id)->get();
    // dd($cart_list);
    $prods = [];
    $total = 0;
    if(sizeof($cart_list)>0){
        foreach($cart_list as $item){
            $prod = Products::where('id', $item->product_id)->first();
            $total = (int)$prod['price'] + $total;
            $prod->brandName = $prod->brand->name;
            $prod->categoryName = $prod->category->name;
            $prod->subCategoryName = $prod->sub_category->name;
            array_push($prods, $prod);
        }
    }
    return view('cart-list', compact('prods', 'total'));
});

Route::get('checkout', function(){
    
    return view('check-out');
});

Route::post('checkout', function(Request $request){
    $attr = Vali::make($request->all(), [
        'setAddressLine1' => "required",
        'setAddressLine2' => "required",
        'setAddressLine3' => "required",
        'setPostalCode' => "required",
        'cco' => "required",
        'setFirstName' => "required",
        'setLastName' => "required",
        'setBuyerEmailAddress' => "required",
    ]);
    if ($attr->fails()) {
        return Redirect::back()->withErrors(['msg' => $attr->messages()->first()]);
    } else {
        $attr = $request->all();
    }
    // dd($request);
    $client = new SquareClient([
        'accessToken' => 'EAAAEMqsr8MRxHrjt_3VVVrMf8ugqUomuz3TCYFFBedPreR2U4AjBRmVzNxR7Hdy',
        'environment' => 'sandbox', // or 'production'
    ]);
    $cart_list = DB::table('carts')->where('user_id', Auth::user()->id)->get();
    // dd($cart_list);
    $prods = [];
    $total = 0;
    if(sizeof($cart_list)>0){
        foreach($cart_list as $item){
            $prod = Products::where('id', $item->product_id)->first();
            $total = (int)$prod['price'] + $total;
        }
    }
    try {

        $apiResponse = $client->getLocationsApi()->listLocations();
    
        if ($apiResponse->isSuccess()) {
            $result = $apiResponse->getResult();
            $amount_money = new \Square\Models\Money();
            $amount_money->setAmount($total);
            $amount_money->setCurrency('GBP');


            $billing_address = new \Square\Models\Address();
            $billing_address->setAddressLine1($request['setAddressLine1']);
            $billing_address->setAddressLine2($request['setAddressLine2']);
            $billing_address->setAddressLine3($request['setAddressLine3']);
            $billing_address->setPostalCode($request['setPostalCode']);
            $billing_address->setCountry('GB');
            $billing_address->setFirstName($request['setFirstName']);
            $billing_address->setLastName($request['setLastName']);
            $body = new \Square\Models\CreatePaymentRequest(
                $request['cco'],
                md5(uniqid(rand(), true)),
                $amount_money
            );
            $body->setBuyerEmailAddress($request['setBuyerEmailAddress']);
            $body->setBillingAddress($billing_address);
            // $body->setAppFeeMoney($app_fee_money);
            // $body->setAutocomplete(true);
            // $body->setCustomerId('W92WH6P11H4Z77CTET0RNTGFW8');
            // $body->setLocationId('L88917AVBK2S5');
            // $body->setReferenceId('123456');
            // $body->setNote('Brief description');

            $api_response = $client->getPaymentsApi()->createPayment($body);
            dd($api_response);
            if ($api_response->isSuccess()) {
                $result = $api_response->getResult();
            } else {
                $errors = $api_response->getErrors();
            }
            dd($result);
            # Your business logic here
    
        } else {
            $errors = $apiResponse->getErrors();
            # Your error-handling code here
        }
    
    } catch (ApiException $e) {
        dd($e);
        echo "ApiException occurred: <b/>";
        echo $e->getMessage() . "<p/>";
    }

    return view('check-out');
});

Route::get('card', function(){
    
    return view('card');
});

//03212791689
Route::post('/add-to-cart', function(Request $request){
    // dd($request->all());
    DB::table('carts')->insert([
        'quantity' => $request['articleQuantity'],
        'product_id' => $request['articleId'],
        'user_id' => Auth::user()->id
    ]);
    return Redirect::to(url()->previous());
});
//AuthenticationController routes
Route::get('register', [AuthenticationController::class, 'register'])->name('register');
Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('custom-login', [AuthenticationController::class, 'customLogin'])->name('login.custom'); 
Route::post('register', [AuthenticationController::class, 'customRegisterCompany'])->name('register_company.custom'); 
Route::get('logout', function (){
    Auth::logout();
    return redirect("/");
})->name('register_company.custom'); 

//User routes
Route::get('user-dashboard', [UserController::class, 'dashboard'])->name('user-dashboard');

//Company routes
Route::get('company-dashboard', [CompanyController::class, 'dashboard'])->name('company-dashboard');







Route::get('admin/login', function(){
    return view('admin-login');
});

Route::post('admin/login', function(Request $request){
    $input = $request->all();
    // dd($input);
    $creds['email'] = $input['adminLogin']['userEmail'];
    $creds['password'] = $input['adminLogin']['userPassword'];
    if (Auth::guard('admin')->attempt($creds)) {
        dd(Auth::guard('admin')->user());
        return redirect("/");
    }
    return redirect("/");

    dd($request->all());
});

Route::get('admin/product-list', function(){
    $categories = Categories::all();
    $products = Products::orderBy('id', 'DESC')->get();
    $recomended = [];
    for($i=0; $i<sizeof($products); $i++){
        $name = "";
        $prod = $products[$i];
        $cars = $products[$i]->productCars;
        if($i>5){
            // dd($products[$i], $cars);
        }
        for($j=0; $j<sizeof($cars); $j++){
            $model = CarModels::where('id', $cars[$j]->car_models_id)->get();
            $name = $name." ".$model[0]->name;
        }
        $criterias = $products[$i]->criteria;
        $all_criterias = [];
        $values = [];
        foreach($criterias as $criteria => $value) {
            array_push($values, $value);
            array_push($all_criterias, ucwords(str_replace('_', ' ', $criteria)));
        }
        $prod->carName = $name;
        $prod->brandName = $products[$i]->brand->name;
        $prod->categoryName = $products[$i]->category->name;
        $prod->subCategoryName = $products[$i]->sub_category->name;
        $prod->criteria_names = $all_criterias;
        $prod->criteria_value = $values;
        array_push($recomended, $prod);
    }
    return view('admins-products', compact('categories', 'recomended', 'all_criterias', 'values'));
});

Route::get('admin/create-product', function(){
    
    $categories = Categories::get();
    $sub_categories = SubCategory::get();
    $brands = Brand::get();
    $vehicles = Vehicle::get();
    $refs = Reference::get();
    $engs = Engine::get();
    $cars = Cars::get();
    $models = CarModels::get();
    $return_data = [
        'categories' => $categories, 
        'sub_categories' => $sub_categories, 
        'brands' => $brands, 
        'vehicles' => $vehicles, 
        'refs' => $refs, 
        'engs' => $engs, 
        'cars' => $cars,
        'models' => $models
    ];
    return view('create-product', compact('return_data'));
});

Route::post('admin/create_product', function(Request $request) {
    // dd($request->criteria);
    $obj = '{}';
    $obj = json_decode($obj);

    foreach($request->criteria as $crit){
        $key = $crit['name'];
        $obj->$key = $crit['value'];
    }
    $attr = Vali::make($request->all(), [
        "title" => "required",
        "price" => "required",
        "code" => "required",
        "ean" => "required",
        "weight" => "required",
        "image" => "required"
    ]);
    if ($attr->fails()) {
        return Redirect::back()->withErrors(['msg' => $attr->messages()->first()]);
    } else {
        $attr = $request->all();
    }
    $upload_folder = 'products';
    // dd($request->all());
    $img_path = $attr['image']->store($upload_folder, 'public');    
    // dd($img_path);
    $created_prod = Products::create([
        'sub_category_id' => $request->sub_category,
        'category_id' => $request->category,
        'brand_id' => $request->brand,
        'title' => $attr['title'],
        'price' => $attr['price'],
        'code' => $attr['code'],
        'EAN' => $attr['ean'],
        'weight' => $attr['weight'],
        'criteria' => $obj,
        'image' => $img_path
    ]);

    $veh_added = ProductVehicle::create([
        'vehicles_id' => $request->vehicle,
        'products_id' => $created_prod->id
    ]);

    $ref_added = ProductReference::create([
        'references_id' => $request->ref,
        'products_id' => $created_prod->id
    ]);

    $eng_added = ProductEngine::create([
        'engines_id' =>  $request->eng,
        'products_id' => $created_prod->id
    ]);

    $car_added = ProductCars::create([
        'products_id' => $created_prod->id,
        'car_id' => $request->car,
        'car_models_id' => $request->model
    ]);
    return redirect('/admin/product-list');
});

Route::get('admin/create_car', function(){
    return view('create-car');
});

Route::post('admin/create_car_post', function(Request $request){
    // dd($request->all());
    Cars::create([
        'name' => $request->title
    ]);
    return redirect('/admin/product-list');
});

Route::get('admin/create_category', function(){
    return view('create-category');
});


Route::post('admin/create_category_post', function(Request $request){
    Categories::create([
        'name' => $request->title
    ]);
    return redirect('/admin/product-list');
});

Route::get('admin/create_sub_category', function(){
    $categories = Categories::get();
    $return_data = [
        'categories' => $categories,
    ];
    return view('create-sub-category', compact('return_data'));
});

Route::get('admin/category-list', function(){
    $categories = Categories::get();
    $return_data = [
        'categories' => $categories,
    ];
    return view('category-list', compact('return_data'));
});

Route::get('admin/sub-category-list', function(){
    $sub_categories = SubCategory::get();
    $return_data = [
        'sub_categories' => $sub_categories,
    ];
    // dd(Categories::where('id', $sub_categories[0]['categories_id'])->first()->name);
    return view('sub-category-list', compact('return_data'));
});

Route::post('admin/create_sub_category_post', function(Request $request){
    SubCategory::create([
        'name' => $request->title,
        'categories_id' => $request->category
    ]);
    return redirect('/admin/product-list');
});



Route::get('admin/create_engine', function(){
    $cars = Cars::get();
    $return_data = [
        'cars' => $cars,
    ];
    return view('create-engine', compact('return_data'));
});

Route::get('admin/all-cars-list', function(){
    $cars = Cars::get();
    $return_data = [
        'cars' => $cars,
    ];
    return view('cars-list', compact('return_data'));
});


Route::get('admin/all-vehicle-brand-model-list', function(){
    $brandList = VehicleBrandModel::get();
    $return_data = [
        'brandList' => $brandList,
    ];
    return view('veh-brand-model-list', compact('return_data'));
});



Route::get('admin/all-engs-list', function(){
    $engs = Engine::get();
    $return_data = [
        'engs' => $engs,
    ];
    return view('eng-list', compact('return_data'));
});

Route::get('admin/all-vehs-list', function(){
    $vehs = Vehicle::get();
    $return_data = [
        'vehs' => $vehs,
    ];
    return view('veh-list', compact('return_data'));
});


Route::post('admin/create_engine_post', function(Request $request){
    // dd($request->all());
    Engine::create([
        'cars_id' => $request->cars_id,
        'name' => $request->engine_name,
        'kw_hp' => $request->kw.' kw / '.$request->hp.' hp',
        'ccm' => $request->ccm.' ccm',
        'cylinders' => $request->cylinders.' cylinders',
        'valves' => $request->valves.' valves',
    ]);
    return redirect('/admin/product-list');
});

Route::get('admin/create_vehicle_brand_model', function(){
    $cars = Cars::get();
    $return_data = [
        'cars' => $cars
    ];
    return view('create_veh_brand_model', compact('return_data'));
});

Route::post('admin/create_veh_brand_model_post', function(Request $request){
    VehicleBrandModel::create([
        'name' => $request->title,
        'cars_id' =>$request->car
    ]);
    return redirect('/admin/product-list');
});

Route::get('admin/create-vehicle', function(){
    $veh_brand = VehicleBrandModel::get();
    $return_data = [
        'veh_brands' => $veh_brand
    ];
    return view('create-vehicle', compact('return_data'));
});


Route::post('admin/create_vehicle_post', function(Request $request){
    // dd($request->all());
    $insert_data = [
        'vehicle_brand_models_id' => $request->veh_brand_id,
        'name' => $request->engine_name,
        'kw_hp' => $request->kw.' kw / '.$request->hp.' hp',
        'ccm' => $request->ccm.' ccm',
        'cylinders' => $request->cylinders.' cylinders',
        'valves' => $request->valves.' valves',
        'gas' => $request->gas,
        'years_active' => $request->years_active,
        'tec_doc' => json_encode([])
    ];
    DB::table('vehicles')->insert($insert_data); 
    return redirect('/admin/product-list');
});

Route::get('admin/create-reference-get', function(){
    return view('create-reference');
});

Route::post('admin/create_refference_post', function(Request $request){
    Reference::create([
        'ref_name' => $request->title,
        'reference_number' => $request->number,
    ]);
    return redirect('admin/product-list');
});

Route::get('admin/reference-list', function(){
    $refs = Reference::get();
    $return_data = [
        'refs' => $refs
    ];
    return view('ref-list', compact('return_data'));
});

Route::get('admin/home', function(){
    $prods = Products::all();
    $return_data = [
        'products' => $prods
    ];
    return view('admin-home', compact('return_data'));
});

Route::post('/search-data-vehicle', function(Request $request){
    // dd($request->all());
    $veh_prods = ProductVehicle::where('vehicles_id', $request->car)->get();
    $recomended = [];
    foreach($veh_prods as $veh_prod){
        $product = Products::where('id', $veh_prod->id)->first();
        if($product == null){
            continue;
        }
        $prod = $product;
        try{
            $cars = $product->productCars;
        } catch (\Throwable $rex){
            dd($product);
        }
        $name = '';
        for($j=0; $j<sizeof($cars); $j++){
            $model = CarModels::where('id', $cars[$j]->car_models_id)->get();
            $name = $name." ".$model[0]->name;
        }
        $criterias = $product->criteria;
        $all_criterias = [];
        $values = [];
        foreach($criterias as $criteria => $value) {
            array_push($values, $value);
            array_push($all_criterias, ucwords(str_replace('_', ' ', $criteria)));
        }
        $prod->carName = $name;
        $prod->brandName = $product->brand->name;
        $prod->categoryName = $product->category->name;
        $prod->subCategoryName = $product->sub_category->name;
        $prod->criteria_names = $all_criterias;
        $prod->criteria_value = $values;
        array_push($recomended, $prod);
    }
    $return_data = $recomended;
    $keyword = "Vehicle";
    // dd($return_data);
    return view('search', compact('return_data', 'keyword'));
});

Route::post('/search-by-engine', function(Request $request){
    if($request->motorCode != null && $request->manu_motor == null){
        $engs = Engine::where('name', 'LIKE', '%'.$request->motorCode.'%')->get();
        // dd($engs, $request->all());
        $recomended = [];
        foreach($engs as $eng){
            $eng_prods = ProductEngine::where('engines_id', $eng->id)->get();
            // dd($eng_prods);
            foreach($eng_prods as $eng_prod){
                $product = Products::where('id', $eng_prod->id)->first();
                // dd($product);
                if($product == null){
                    continue;
                }
                $prod = $product;
                try{
                    $cars = $product->productCars;
                } catch (\Throwable $rex){
                    dd($product);
                }
                $name = '';
                for($j=0; $j<sizeof($cars); $j++){
                    $model = CarModels::where('id', $cars[$j]->car_models_id)->get();
                    $name = $name." ".$model[0]->name;
                }
                $criterias = $product->criteria;
                $all_criterias = [];
                $values = [];
                foreach($criterias as $criteria => $value) {
                    array_push($values, $value);
                    array_push($all_criterias, ucwords(str_replace('_', ' ', $criteria)));
                }
                $prod->carName = $name;
                $prod->brandName = $product->brand->name;
                $prod->categoryName = $product->category->name;
                $prod->subCategoryName = $product->sub_category->name;
                $prod->criteria_names = $all_criterias;
                $prod->criteria_value = $values;
                array_push($recomended, $prod);
            }
        }
        $return_data = $recomended;
        $keyword = "Engine Code";
        // dd($return_data);
        return view('search', compact('return_data', 'keyword'));
    }
    $eng_prods = ProductEngine::where('engines_id', $request->motor)->get();
    $recomended = [];
    foreach($eng_prods as $eng_prod){
        $product = Products::where('id', $eng_prod->id)->first();
        if($product == null){
            continue;
        }
        $prod = $product;
        try{
            $cars = $product->productCars;
        } catch (\Throwable $rex){
            dd($product);
        }
        $name = '';
        for($j=0; $j<sizeof($cars); $j++){
            $model = CarModels::where('id', $cars[$j]->car_models_id)->get();
            $name = $name." ".$model[0]->name;
        }
        $criterias = $product->criteria;
        $all_criterias = [];
        $values = [];
        foreach($criterias as $criteria => $value) {
            array_push($values, $value);
            array_push($all_criterias, ucwords(str_replace('_', ' ', $criteria)));
        }
        $prod->carName = $name;
        $prod->brandName = $product->brand->name;
        $prod->categoryName = $product->category->name;
        $prod->subCategoryName = $product->sub_category->name;
        $prod->criteria_names = $all_criterias;
        $prod->criteria_value = $values;
        array_push($recomended, $prod);
    }
    $return_data = $recomended;
    $keyword = "Engine";
    // dd($return_data);
    return view('search', compact('return_data', 'keyword'));
});


Route::post('/square/payment', [SquarePaymentController::class, 'handlePayment'])->name('square.payment');
// Route::post('/search-by-eng-code', function(Request $request){
//     dd($request->all());
//     $eng_prods = ProductEngine::where('engines_id', $request->motor)->get();
//     $recomended = [];
//     foreach($eng_prods as $eng_prod){
//         $product = Products::where('id', $eng_prod->id)->first();
//         if($product == null){
//             continue;
//         }
//         $prod = $product;
//         try{
//             $cars = $product->productCars;
//         } catch (\Throwable $rex){
//             dd($product);
//         }
//         $name = '';
//         for($j=0; $j<sizeof($cars); $j++){
//             $model = CarModels::where('id', $cars[$j]->car_models_id)->get();
//             $name = $name." ".$model[0]->name;
//         }
//         $criterias = $product->criteria;
//         $all_criterias = [];
//         $values = [];
//         foreach($criterias as $criteria => $value) {
//             array_push($values, $value);
//             array_push($all_criterias, ucwords(str_replace('_', ' ', $criteria)));
//         }
//         $prod->carName = $name;
//         $prod->brandName = $product->brand->name;
//         $prod->categoryName = $product->category->name;
//         $prod->subCategoryName = $product->sub_category->name;
//         $prod->criteria_names = $all_criterias;
//         $prod->criteria_value = $values;
//         array_push($recomended, $prod);
//     }
//     $return_data = $recomended;
//     $keyword = "Engine Code";
//     // dd($return_data);
//     return view('search', compact('return_data', 'keyword'));
// });
// #273628