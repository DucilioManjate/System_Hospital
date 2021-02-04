<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exame;

use App\Http\Resources\ExameResource;

class ExameController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ExameResource::collection(Exame::all());
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
        return new ExameResource(Exame::create($request->all()));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function show(Exame $exame)
    {
        return new ExameResource($exame);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exame $exame)
    {
        $exame->update($request->all());
        return new ExameResource($exame);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exame $exame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exame $exame)
    {
        $exame->delete();
        return response()->json('Exame Deletado com sucessos');
        
        //
    }
    //
}
