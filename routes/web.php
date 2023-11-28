<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;

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
    return view('welcome');
});

Route::resource('conductores', 'App\Http\Controllers\ConductoresController');
Route::resource('vehiculos', 'App\Http\Controllers\VehiculosController');
Route::resource('viajes', 'App\Http\Controllers\ViajesController');
Route::resource('soportes','App\Http\Controllers\SoportesController');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/monitoreo', function () {
    return view('administracion.monitoreo');
})->name('monitoreo');

// Route::get('/soportes', function () {
//     return view('administracion.soporte');
// })->name('soportes');

Route::get('/', function () {
    return view('welcome');
})->name('soporte');

// Route::get('/', function () {
//     return view('welcome');
// })->name('soporte');

Route::get('/perfil', function () {
    return view('profile.show');
})->name('perfil');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
});
