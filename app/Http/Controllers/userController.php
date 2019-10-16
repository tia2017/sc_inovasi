<?php

namespace App\Http\Controllers;


use App\User;
use App\ModelUser; //untuk mengambil data dari tabel roles
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
         $df_role = ModelUser::get();
            return view('users.create', compact('df_role'));

    	//return view('users.create');
    }

    public function store(Request $request){

        // $buatAkun = User::create($request->all());   
        
         


        $dataAkun =  new User;

        $dataAkun->name = $request->name;
        $dataAkun->email = $request->email;
        $dataAkun->password = $request->password;
        $dataAkun->role_id = $request->role;
        $dataAkun->remember_token = '';
        $dataAkun->user_id = 1;
        $dataAkun->created_at = date('Y-m-d H:i:s');
        $dataAkun->updated_at = date('Y-m-d H:i:s');
        

        $data = $dataAkun->save();


        return redirect('users');
    }
}
