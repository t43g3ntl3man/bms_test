<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;

class AuthenticationController extends Controller
{
    public function register(){
        $countries = DB::table('countries')->select()->get();
        return view('register', compact('countries'));
    }

    public function customRegisterCompany(Request $request){
        if($request['_do'] == 'customerPersonFormRegister-customerRegisterForm-submit'){
            $input = [
                'email' => $request['userSignUp']['userEmail'],
                'password' => Hash::make($request['userSignUp']['userPassword']),
                'name' => $request['customerContainer']['user']['userFullName'],
                'phone' => $request['customerContainer']['user']['userPhoneNumber'],
                'is_company' => 0,
                'company_id_no' => null,
                'contact' => null,
                'billing_addr' => json_encode($request['address']),
                'shipping_addr' => json_encode($request['deliveryAddress']),
                'agree_data' => $request['gdprConfirm'],
                'discount_news_check' => $request['userNewsletter'],
            ];
        } else {
            $input = [
                'email' => $request['userSignUp']['userEmail'],
                'password' => Hash::make($request['userSignUp']['userPassword']),
                'name' => $request['customerContainer']['customer']['customerName'],
                'phone' => $request['customerContainer']['customer']['customerPhoneNumber'],
                'is_company' => 1,
                'company_id_no' => $request['customerID'],
                'contact' => json_encode($request['customerContainer']['user']),
                'shipping_addr' => json_encode($request['address']),
                'billing_addr' => json_encode($request['deliveryAddress']),
                'agree_data' => $request['gdprConfirm'],
                'discount_news_check' => $request['userNewsletter'],
            ];
        }
        $user = User::create($input);
        $credentials = [
            'email' => $request['userSignUp']['userEmail'],
            'password' => $request['userSignUp']['userPassword']
        ];
        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }

    }

    public function login(){
        return view('login');
    }

    public function customLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect("/");
        }
        return redirect("/");
    }

    public function customRegister(Request $request){
        
    }
}
