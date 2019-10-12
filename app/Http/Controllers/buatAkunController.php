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
    	// $buatAkun = new buatAkunController;
    	// $buatAkun->nama = $buatAkun->nama;
    	// $buatAkun->email = $buatAkun->email;
    	// $buatAkun->password = $buatAkun->password;
    	// $buatAkun->repassword = $buatAkun->repassword;
    	// $buatAkun->nik = $buatAkun->nik;
    	// $buatAkun->nip = $buatAkun->nip;
    	// $buatAkun->telepon = $buatAkun->telepon;
    	// $buatAkun->jeniskelamin = $buatAkun->jeniskelamin;
    	// $buatAkun->alamat = $buatAkun->alamat;
    	// $buatAkun->role = $buatAkun->role;

    	// $buatAkun->save();

        buatAkunController::index($request->all());
    	

    	return redirect('buatAkun/store');


    }
}
