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
    public function index(Request $request)
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

        // $inovasi = Innovation::all();

        $ino_steps = Innovation_step::with('innovation')
        ->where('progress_persentage', '>', '0')
        ->where('progress_persentage', '<', '100')
        ->paginate($request->advanced_table_length);
        // ->get();
        // dd($inovasi);
        return view('inovasi.index', compact('ino_steps'));
    }

    public function detail($id){
        $inovasi = Innovation::find($id);
        $step = Innovation_step::where('innovation_id',$id)
                ->orderBy('id', 'asc')
                ->get();
        return view('inovasi.detail', compact('inovasi','step'));

        // dibawah ini cara lain return
        // return view('detailInovasi.index', ['detail' => $detail]);
    }

    public function hapus($id){
        $inovasi = Innovation::find($id);
        $inovasi->delete();

        return redirect('inovasi')->with('status', 'Data Inovasi Berhasil Dihapus');
    }

    public function edit($id){
        $inovasi = Innovation::find($id);
        $step = Innovation_step::where('innovation_id',$id)
                ->orderBy('id', 'asc')
                ->get();
        return view('inovasi.edit', compact('inovasi','step'));
    }
    public function store(Request $request){
        for($i=0;$i<=5;$i++){
            if($request->keterangan[$i]==NULL){
                $step = Innovation_step::find($request->id_step[$i]);
                $step->progress_persentage = $request->progress_inovasi[$i];
                $step->explaination = '';
                $step->save();
            }
            else{
                $step = Innovation_step::find($request->id_step[$i]);
                $step->progress_persentage = $request->progress_inovasi[$i];
                $step->explaination = $request->keterangan[$i];
                $step->save();
            }
        }
        return redirect('inovasi')->with('status', 'Data Inovasi Berhasil Diubah');
    }
    // public function update($id, Request $request){
    //     $id_step = Innovation_step::where('innovation_id',$id)
    //             ->get('id');
    //     foreach($id_step as $id_s){
    //         $data = Innovation_step::find($id_s);

    //             $data->progress_persentage = $request->progress_inovasi;
    //             $data->explaination = $request->keterangan;

    //             $data->save();
    //     }

    //     return redirect('inovasi')->with('status', 'Data Inovasi Berhasil Diubah');
    // }
}
