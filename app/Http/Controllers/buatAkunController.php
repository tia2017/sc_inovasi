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

    public function update(Request $request, buatAkun $buatAkun)
    {
        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $dataAkun->update($request->all());
        return redirect('users.index');
    }

    public function store (Request $request)
    {

    	$buatAkun = User::create($request->all());
        $buatAkun = user::update($request->all());

        // buatAkunController::index($request->all());
    	
        // User::create(create->all());
    	return redirect('buatAkun/store');


    }
}
