<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function index()
    {
         $df_role = User::query()
         ->leftJoin("roles","roles.id","=","users.role_id")
         ->get(['roles.name AS role_name','users.*']);
            return view('users.index', compact('df_role'));

    }

    public function create()
    {
    	return view('users.create');
    }

    public function edit()
    {
        return view('buatAkun');
    }


    public function store(Request $request){

        // $buatAkun = User::create($request->all());   

        $dataAkun =  new User;

        $dataAkun->name = $request->name;
        $dataAkun->email = $request->email;
        $dataAkun->password = $request->password;
        $dataAkun->role_id = $request->role_id;
        $dataAkun->remember_token = '';
        $dataAkun->user_id = 1;
        $dataAkun->created_at = date('Y-m-d H:i:s');
        $dataAkun->updated_at = date('Y-m-d H:i:s');
        

        $data = $dataAkun->save();


        return redirect('users');
    }
}
