<?php

namespace App\Http\Controllers;

use App\Models\registration;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'mot_de_passe'=>'required',
        ]);
        User::create([
            "id"=>$request->id,
            "role_id"=>2,
            "name"=>$request->nom,
            "email"=>$request->email,
            "avatar"=>$request->avatar,
            "password"=>$request->password,
    ]);

        // $chercheur=new registration();

        // $chercheur->nom=$request->nom;
        // $chercheur->prenom=$request->nom;
        // $chercheur->email=$request->nom;
        // $chercheur->mot_de_passe=$request->nom;
        return redirect()->route('login')
        ->with('success , chercheur enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(registration $registration)
    {
        //
    }
}
