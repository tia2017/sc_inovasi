<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Innovation;

class tambahInovasiController extends Controller
{
    public function create()
    {
    	return view('tambahInovasi.index');
    }

    public function store(Request $request)
    {

        Innovation::create($request->all());
        return redirect('/inovasi')->with('status', 'Data Inovasi Berhasil Ditambah');
    }
}
