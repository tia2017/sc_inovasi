<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Innovation;
use view;

class detailInovasiController extends Controller
{
    public function index($Innovation )
    {    	
    	dd($Innovation);
    	// $detail = Innovation::find('$Innovation');
    	$detail = Innovation::find($Innovation);
    	return view::make('detailInovasi.index')->with('detail', $detail);
    	// return view('detailInovasi.index', ['detail' => $detail]);
    	// Innovation::all();

    }
}
