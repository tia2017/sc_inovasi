<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Innovation;
use App\Institute;

class tambahInovasiController extends Controller
{
    public function create()
    {
        // $ins = Institute::all();
        // dd($ins);
    	return view('tambahInovasi.index');
    }

    public function store(Request $request)
    {

        Innovation::create($request->all());
        return redirect('/inovasi')->with('status', 'Data Inovasi Berhasil Ditambah');
    }
}
