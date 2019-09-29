<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\m_inovasi;

class inovasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $inovasi = m_inovasi::all();
        $inovasi =DB::table('progres_inovasi')
                ->join('inovasi', 'progres_inovasi.id_inovasi', 'inovasi.id')
                ->get();
        // return ($inovasi);
        // return ($progres);

        return view('inovasi.index', compact('inovasi'));
    }