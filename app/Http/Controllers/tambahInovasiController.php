<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;
use App\Institute;
use App\Pilar;
use App\Step;

class tambahInovasiController extends Controller
{
    public function create()
    {
        // $ins = Institute::all();
        // dd($ins);
        $institute = Institute::all();
        $type = Type::all();
        $pilar = Pilar::all();
        $step = Step::all();
    	return view('tambahInovasi.index', compact('institute', 'type', 'pilar', 'step'));
    }

    public function store(Request $request)
    {
        Innovation::create($request->all());
        return redirect('/inovasi')->with('status', 'Data Inovasi Berhasil Ditambah');
    }
}
