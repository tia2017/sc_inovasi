<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\m_inovasi;

class tambahInovasiController extends Controller
{
    public function create()
    {
    	return view('tambahInovasi.index');
    }

    public function store(Request $request)
    {
        m_inovasi::create([
            'nama' => $request->nama
        ]);
    }
}
