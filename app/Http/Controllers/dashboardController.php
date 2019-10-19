<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< Updated upstream
=======
use Illuminate\Support\Facades\DB;
use App\Innovation;
use App\Innovation_step;
use App\Institute;
>>>>>>> Stashed changes

class dashboardController extends Controller
{
    public function index()
    {
<<<<<<< Updated upstream
    	return view('dashboard.index');
=======
    	$ino_steps = Innovation_step::with('innovation')
        ->where('progress_persentage', '>', '0')
        ->where('progress_persentage', '<', '100')
        ->get();

        $inovasi = Innovation::all();
    	$jumlah_inovasi = $inovasi->count();

    	$institute = Institute::all();
    	$jumlah_institute = $institute->count();

    	$ino_diskominfo = Innovation::with('institute')
    	->where('institute_id','=','1')
    	->get();

    	$ino_diskes = Innovation::with('institute')
    	->where('institute_id','=','2')
    	->get();

    	$ino_disdik = Innovation::with('institute')
    	->where('institute_id','=','3')
    	->get();

    	$ino_diskarpus = Innovation::with('institute')
    	->where('institute_id','=','4')
    	->get();

        return view('dashboard.index', [
        	'ino_steps'=>$ino_steps,
        	'jumlah_inovasi'=>$jumlah_inovasi,
        	'jumlah_perangkat_daerah'=>$jumlah_institute,
        	'ino_diskominfo'=>$ino_diskominfo,
        	'ino_diskes'=>$ino_diskes,
        	'ino_disdik'=>$ino_disdik,
        	'ino_diskarpus'=>$ino_diskarpus
        ]);

    	// return view('dashboard.index');
>>>>>>> Stashed changes
    }

}
