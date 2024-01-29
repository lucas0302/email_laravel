<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;
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

Route::get('/', [ContatosController::class,'index']);

Route::get('/contato', [ContatosController::class,'index'])->name("contato.index");
Route::post('/contato', [ContatosController::class,'store'])->name("contato.store");
