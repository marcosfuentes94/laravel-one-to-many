<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUtenteRequest;
use App\Http\Requests\UpdateUtenteRequest;
use App\Models\User;

class UtenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.posts.users',compact('users'));
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
     * @param  \App\Http\Requests\StoreUtenteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUtenteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utente  $utente
     * @return \Illuminate\Http\Response
     */
    public function show(Utente $utente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utente  $utente
     * @return \Illuminate\Http\Response
     */
    public function edit(Utente $utente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUtenteRequest  $request
     * @param  \App\Models\Utente  $utente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUtenteRequest $request, Utente $utente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utente  $utente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utente $utente)
    {
        //
    }
}
