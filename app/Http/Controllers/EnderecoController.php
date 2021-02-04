<?php

namespace App\Http\Controllers;

use App\Endereco;
use Illuminate\Http\Request;
use App\Http\Resources\EnderecoResource;

class EnderecoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EnderecoResource::collection(Endereco::all());
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return new EnderecoResource(Endereco::create($request->all()));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function show(Endereco $endereco)
    {
        return new EnderecoResource($endereco);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Endereco $endereco)
    {
        $endereco->update($request->all());
        return new EnderecoResource($endereco);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Endereco $endereco)
    {
        $endereco->delete();
        return response()->json('Apagou o endereco com sucessos');
        
        //
    }
    //
}
