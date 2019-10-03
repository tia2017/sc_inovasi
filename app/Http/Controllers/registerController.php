<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class registerController extends Controller
{
    public function index()
    {
    	return view('register.index');
    }
}
