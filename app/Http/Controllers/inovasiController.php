<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\View;
use Illuminate\Support\Facades\DB;
use App\Innovation;
use App\Innovation_step;

class inovasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response// $detail = Innovation::find('$Innovation');
        $detail = Innovation::find($Innovation);
        return view::make('detailInovasi.index')->with('detail', $detail);
        // return view('detailInovasi.index', ['detail' => $detail]);
        // Innovation::all();
     */
    public function index()
    {
        // dibawah ini adalah cara lain pemanggilan
        // $inovasi_step = Innovation_step::get();
        // $inovasi_step = Innovation::find(2)->innovation_step()->get();
        // $ino_step = Innovation_step::all();
        // $inovasi = Innovation::with(['pilar', 'innovation_step'])->get();
        // $inovasi = Pilar::all();
        // $inovasi =DB::table('innovations')
        //         ->join('pilars', 'pilars.id', 'innovations.pilar_id')
        //         ->join('innovation_steps', 'innovation_steps.innovation_id', 'innovations.id')
        //         ->join('steps', 'steps.id', 'innovation_steps.step_id')
        //         ->select('innovations.name as name_ino', 'innovations.description as decs_ino', 'innovations.*', 'pilars.*')
        //         ->get();
                // select * from x where (select * from x where ())
        
        $inovasi = Innovation::all();
        // dd($inovasi);
        return view('inovasi.index', compact('inovasi'));
    }

    public function detail(Innovation $detail_info){
        return view('inovasi.detail', compact('detail_info'));

        // dibawah ini cara lain return
        // return view('detailInovasi.index', ['detail' => $detail]);
    }

    public function hapus($id){
        $inovasi = Innovation::find($id);
        $inovasi->delete();

        return redirect('inovasi');
    }
}
