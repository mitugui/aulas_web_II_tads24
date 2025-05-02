<?php

use App\Http\Controllers\NivelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas.index');
// Route::get('/pessoas/create', [PessoaController::class, 'create']);
// Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas.store');

// Route::get('/', function () {
//     return view('home', ['idade' => 18, 'frutas' => ['banana', 'maçã', 'laranja']]);
// })->name('home');

Route::resource('/niveis', NivelController::class);
