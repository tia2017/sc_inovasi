<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\ModelUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{


    public function index()
    {	
    	if (!Session::get('login')) {
    		 return redirect('login')->with('alert','Login dulu!');
    	}
    	else{
    		return view('dashboard.index');
    	}

    	// $users = User::all();
    	// return view('login.index', ['user' => $users]);
    }
    public function login(){

    	return view('login.index');
    }

    public function loginPost(Request $request){
    	$email=$request->email;
    	$password=$request->password;

        // $data = new loginController;
        // $data->email = $data->email;
        // $data->password = $data->password;
    	$data=ModelUser::where('email',$email)->first();
    	if ($data) {
            if(
                $password==$data->password){
                // Hash::check($password,$data->password)){
                // Session::put('email',$data->email);
                 Session::put('login',TRUE);
                 return redirect('dashboard');
            }
            else{

                //return redirect('login')->with('alert','Password atau Email, Salah !');
                return("index login nih 1");
            }
    	}
    	else{
            //return redirect('login')->with('alert','Password atau Email, Salah!');
            return("index login nih 2");
        }
    }



}