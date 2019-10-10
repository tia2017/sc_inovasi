<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dokumentasiController extends Controller
{
    public function index()
    {
    	return view('dokumentasi.index');
    }
}
