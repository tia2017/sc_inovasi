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

        

        // $dataInnovations = array(
        //     'innovation_id' => '2',
        //     'name' =>  $post['name'],
        //     'date' => date('Y-m-d'),
        //     'verification_status' => 'True',
        //     'institute_id' => $post['institute_id'],
        //     'innovation_type_id' => $post['innovation_type_id'],
        //     'pilar_id' => $post['pilar_id'],
        //     'created_by' => $post['created_by'],
        //     'description' => $post['description'],
        //     'benefit' => $post['benefit'],
        //     'unique_creativity' => $post['unique_creativity'],
        //     'potency' => $post['potency'],
        //     'strategy' => $post['strategy'],
        //     'risk_analysis' => $post['risk_analysis'],
        //     'resource' => $post['resource']
        // );

        // $data = Innovation::create($dataInnovations);
        //  echo "<pre>";
        // print_r($data);       
        // die();

        // $dataSteps = array(
        //     'innovation_id' => $data->id,
        //     'step_id' => $post['step_id'],
        //     'explaination' => $post['explaination'],
        //     'created_at' => date('Y-m-d h:i:s'),
        //     'updated_at' => date('Y-m-d h:i:s')
        // );


        // Innovation_step::create($dataSteps);

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
            'innovation_id' => 'required',
            'step_id' => 'required',
            'explaination' => 'required',
            'file' => 'required' 
        ]);
        
        $data = Innovation::create($request->all());
        // $request->file->store('public/upload');
        $data_step = Innovation_step::create([
            'innovation_id' => $data->id,
            'step_id' => $request['step_id'],
            'explaination' => $request['explaination'],
            'file' => $request['file_name']   
        ]);
        
        // dd($data_step);
        // dd($request->all());

        Innovation_step::create($data->id());
        return redirect('/inovasi')->with('status', 'Data Inovasi Berhasil Ditambah');
    }
}
