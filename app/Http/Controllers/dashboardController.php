<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Innovation;
use App\Innovation_step;

class dashboardController extends Controller
{
    public function index()
    {
    	$ino_steps = Innovation_step::with('innovation')
        ->where('progress_persentage', '>', '0')
        ->where('progress_persentage', '<', '100')
        ->get();
        return view('dashboard.index', compact('ino_steps'));
    	// return view('dashboard.index');
    }
}
