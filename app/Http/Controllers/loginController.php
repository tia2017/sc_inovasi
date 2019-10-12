<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

class loginController extends Controller
{


    public function index()
    {	
    	// if (!Session::get('login.index')) {
    	// 	return redirect('login.index')->with('alert','Login dulu!');
    	// }
    	// else{
    	// 	return view('dashboard.index');
    	// }

    	// $users = User::all();
    	// return view('login.index', ['user' => $users]);
    }
    public function login(){

    	return view('login.index');
    }

    public function loginPost(Request $request){
    	$email=$request->email;
    	$password=$request->password;

    	$data=User::where('email',$email)->first();
    	if ($data) {
            if(Hash::check($password,$data->password)){
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('dashboard');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
    	}
    	else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }



}