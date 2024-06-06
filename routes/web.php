<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

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

Route::get('/', function () {
    return view('index');
})->name('home');

//ENVIAR EMAIL DE CONTATO
Route::post('/enviar-email', [ContatoController::class, 'store']);

//ORÇAMENTO
Route::get('/orcamento', function () {
    return view('site-ghc.orcamento');
})->name('orcamento');

//APP MOBILE
Route::get('/aplicativo-mobile', function () {
    return view('site-ghc.aplicativo-mobile');
})->name('aplicativo-mobile');

//SISTEMAS
Route::get('/sistemas', function () {
    return view('site-ghc.sistemas');
})->name('sistemas');

//SITES
Route::get('/sites', function () {
    return view('site-ghc.sites');
})->name('sites');

//CONTATO
Route::get('/contato', function () {
    return view('site-ghc.contato');
})->name('contato');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //APENAS REGISTRO DE USUÁRIO SE ESTIVER AUTENTICADO
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');


});