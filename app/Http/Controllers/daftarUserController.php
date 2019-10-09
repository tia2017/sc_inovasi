<?php

namespace App\Http\Controllers;

use App\DaftraUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daftarUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
         $df_role = Role::all();
            return view('daftarRole.index', compact('df_role');
=======
         $df_role = DaftraUser::all();
            return view('daftarRole.index', compact('df_role'));
>>>>>>> 67f42ef725bcaebd04f1d89fb2fe7d6fd4323532
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DaftraUser  $daftraUser
     * @return \Illuminate\Http\Response
     */
    public function show(DaftraUser $daftraUser)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DaftraUser  $daftraUser
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftraUser $daftraUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DaftraUser  $daftraUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftraUser $daftraUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DaftraUser  $daftraUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftraUser $daftraUser)
    {
        //
    }
}
