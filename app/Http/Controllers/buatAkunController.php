<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class buatAkunController extends Controller
{
    public function index()
    {
    	return view('buatAkun.index');
    }
}
