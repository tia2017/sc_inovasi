<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class tambahInovasiController extends Controller
{
    public function index()
    {
    	return view('tambahInovasi.index');
    }
}
