<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;
use App\Institute;
use App\Pilar;
use App\Step;
use App\Partner;
use App\Innovation;
use App\Innovation_step;
use App\Innovation_partner;
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
        $partner = Innovation_partner::all();
    	return view('tambahInovasi.index', compact('institute', 'type', 'pilar', 'step', 'partner'));
    }

    public function store(Request $request)
    {       

        // dd($coba = $request->all());

        // echo "<pre>";
        // print_r($_POST);
        // die();
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
            'file' => 'required',
            //validate innovations_step
            'step_id' => 'required',
            'explaination' => 'required',
            'progress_persentage' => 'required|numeric|min:0|max:100'

        ]);


        // input innovation
        $data = Innovation::create($request->all());

        // input innovation_step
        $id_inovasinya = $data->id;

        //input partner
        for($i = 0; $i < count($request->mitraBentuk) ;$i++){
            $data_partner =  Partner::create([
                'name' => $request->mitraNama[$i],
                'form' => $request->mitraBentuk[$i]
            ]);
            $id_partner = $data_partner->id;

            // input innovation_partner
            Innovation_partner::create([
                'innovation_id' => $id_inovasinya,
                'partner_id' => $data_partner->id
            ]);         

        }           
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
 
        $nama_file = time()."_".$file->getClientOriginalName();
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        for($i = 1; $i <= 6;$i++){
            if($request['step_id']>$i){
                $data_step = Innovation_step::create([
                    'innovation_id' => $id_inovasinya,
                    'step_id' => $i,
                    'explaination' => '',
                    'file' => $nama_file,
                    'progress_persentage' => 100
                ]);
            }
            elseif($request['step_id']==$i){
                $data_step = Innovation_step::create([
                    'innovation_id' => $id_inovasinya,
                    'step_id' => $i,
                    'explaination' => $request['explaination'],
                    'file' => $nama_file,
                    'progress_persentage' => $request['progress_persentage']
                ]);
            }
            else{
                $data_step = Innovation_step::create([
                    'innovation_id' => $id_inovasinya,
                    'step_id' => $i,
                    'explaination' => '',
                    'file' => $nama_file,
                    'progress_persentage' => 0
                ]);
            }
        }

        
        // dd($data_step);
        // dd($request->all());

        return redirect('/inovasi')->with('status', 'Data Inovasi Berhasil Ditambah');
    }
}
