<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebidasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::prefix('/')
    ->middleware(['auth'])
    ->controller(BebidasController::class)
    ->group(function ()
    {
        route::get('/', 'index')->name('home.index');
        route::get('/novo', 'create')->name('home.create');
        route::get('/editar/{id}', 'edit')->name('home.edit');
        route::get('/mostrar/{id}', 'show')->name('home.show');

        route::post('/cadastrar', 'store')->name('home.store');
        route::post('/atualizar/{id}', 'update')->name('home.update');
        route::get('/deletar/{id}', 'destroy')->name('home.destroy');
  ;
    });

require __DIR__.'/auth.php';
