<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class inovasiController extends Controller
{
    public function index()
    {
    	return view('inovasi.index');
    }
}
