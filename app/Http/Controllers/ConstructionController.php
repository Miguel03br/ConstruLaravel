<?php

namespace App\Http\Controllers;

use App\Models\constructions;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{


    /**
     * Display a listing of the resource.
     */            
    public function index()
    {
        $Constructions = constructions::all();

        return view('constructions', ['constructions' => $Constructions]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Constructions = new constructions;

        $Constructions->string = $request->string('nome');  
        $Constructions->data = $request->date('data de finalização');
        $Constructions->string = $request->string('solicitação de materiais');

        $Constructions->save();

        return redirect('/'); 

        /*$request->validate([
            'email' => 'required/email',
            'password' => 'required/password'
        ]);

        $credentials = $request->only('email', 'password');
        $authenticated = Auth::attempt($credentials);

        if(!authenticated){
            return redrect()->route('login')->withErrors(['error' => 'Email ou senha inválidos']);
        }
        */
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
