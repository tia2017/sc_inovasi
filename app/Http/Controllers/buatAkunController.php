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

    public function create()
    {
    	return view('buatAkun.create');
    }

    public function store (Request $request)
    {
    	$buatAkun = new buatAkun;
    	$buatAkun->nama = $buatAkun->nama;
    	$buatAkun->email = $buatAkun->email;
    	$buatAkun->password = $buatAkun->password;
    	$buatAkun->phoneNo = $buatAkun->phoneNo;
    	$buatAkun->message = $buatAkun->message;
    	$buatAkun->selectCountry = $buatAkun->selectCountry;

    	$buatAkun->save();

    	return redirect('/daftarRole');


    }
}
