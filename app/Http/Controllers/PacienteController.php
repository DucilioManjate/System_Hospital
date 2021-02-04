<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

use App\Http\Resources\PacienteResource;

class PacienteController extends Controller
{
    public function index()
    {
        return PacienteResource::collection(Paciente::all());
        //listar todos usuarios
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return new PacienteResource(Paciente::create($request->all()));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return new PacienteResource($paciente);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $paciente->update($request->all());
        return new PacienteResource($paciente);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return response()->json('Apagou com sucessos');
        
        //
    }
    

    //
}
