<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\SiteController;

use App\Http\Controllers\PainelController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\EventoController;



// -------------------------- SITE -----------------------------
Route::get('/', [SiteController::class, 'index']);


Route::prefix('admin')->group(function () {
    // -=----------------------- ADMIN -----------------------------
    Route::get('/painel', [PainelController::class, 'index']);

    //-------------------------- POST ------------------------------
    Route::resource('post', PostController::class);

    //-------------------------- EVENTOS ----------------------------
    Route::resource('evento', EventoController::class);
});

