<?php

namespace App\Http\Controllers;

use App\User;
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


         $df_role = DaftraUser::query()
         ->leftJoin("roles","roles.id","=","users.role_id")
         ->get(['roles.name AS role_name','users.*']);
            return view('daftarRole.index', compact('df_role'));

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
