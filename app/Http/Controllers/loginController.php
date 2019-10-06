<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Role;

class loginController extends Controller
{
    // public function index()
    // {
    // 	return view('login.index');
    // }

    public function index()
    {
    	$roles = Role::all();
    	return view('login.index', ['roles' => $roles]);
    	//return view ('login.delete');

    }
}