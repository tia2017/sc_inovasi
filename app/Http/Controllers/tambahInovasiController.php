<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;
use App\Institute;
use App\Pilar;
use App\Step;
use App\Innovation;
use App\Innovation_step;
use Illuminate\Support\Facades\Cache;

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
        // $post = $_POST;
        // // echo "<pre>";
        // // print_r($post);
        // // print_r($request->all());
        // // die();

        $request->validate ([
            //validate innovation
            'name' => 'required', 
            'institute_id' => 'required', 
            'innovation_type_id' => 'required', 
            'pilar_id' => 'required', 
            'created_by' => 'required',
            'description' => 'required', 
            'benefit' => 'required', 
            'unique_creativity' => 'required', 
            'potency' => 'required', 
            'strategy' => 'required', 
            'risk_analysis' => 'required',
            'resource' => 'required',
            //validate innovations_step
            'step_id' => 'required',
            'explaination' => 'required',
            'progress_persentage' => 'required'
            
        ]);
        
        $data = Innovation::create($request->all());
        $data_step = Innovation_step::create([
            'innovation_id' => $data->id,
            'step_id' => $request['step_id'],
            'explaination' => $request['explaination'],
            'file' => $request['file'],   
            'progress_persentage' => $request['progress_persentage']   
        ]);
        
        // dd($data_step);
        // dd($request->all());
        return redirect('/inovasi')->with('status', 'Data Inovasi Berhasil Ditambah');
    }
}
