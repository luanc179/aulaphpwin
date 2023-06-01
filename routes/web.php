<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\NomeController;



Route::get('/', [HelloWorldController::class);

Route::view('/ola','hello_world.index',['hello' => 'Olá Juquinha']);


Route::resourse('/nome', NomeController::class);



// Route::prefix('nome/')->name('nome.')->group(function ()
// {
//     Route::get('deletar/{id}/', [NomeController::class,'destroy'])->where(['id' => '[0-9]+'])->name('deletar');


//     Route::get('alterar/{id}/', function ($id = null)
//     {
//         dd("Alterar: $id");
//     })->where(['id' => '[0-9]+'])->name('alterar');

//     Route::get('inserir/', function ()
//     {
//         dd('Inserir');
//     })->name('inserir');
// });







