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
    	$users = User::all();
    	return view('login.index', ['user' => $users]);


    }
}