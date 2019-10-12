<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class buatAkunController extends Controller
{
    public function index()
    {
    	return view('buatAkun.index');
    }

    public function create()
    {
    	return view('buatAkun.create');
    }

    public function store (Request $request)
    {
        print_r($request);
    	$buatAkun = User::create($request->all());

        // buatAkunController::index($request->all());
    	
        // User::create(create->all());
    	return redirect('buatAkun/store');


    }
}
