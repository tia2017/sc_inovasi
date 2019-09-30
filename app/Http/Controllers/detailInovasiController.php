<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class detailInovasiController extends Controller
{
    public function index()
    {
    	return view('detailInovasi.index');
    }
}
