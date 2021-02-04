<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('usuarios', 'UsuarioController');
Route::apiResource('consultas', 'ConsultaController');
Route::apiResource('enderecos', 'EnderecoController');
Route::apiResource('exames', 'ExameController');
Route::apiResource('pacientes', 'PacienteController');
Route::apiResource('medicos', 'MedicoController');

Auth::routes();
