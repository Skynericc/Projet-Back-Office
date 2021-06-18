<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\RolesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/dashboard', function(){
    return view('layout');
});

Route::get('/dashboard/etudiants', [EtudiantController::class,'index']);


Route::get('/dashboard/enseignants', [EnseignantController::class,'index']);


Route::get('/dashboard/roles', [RolesController::class,'index']);

Route::get('/dashboard/etudiants/ajouteretudiant', function () {
    return view('AjouterEtudiant');
});
Route::get('/dashboard/roles/ajouterrole', function () {
    return view('AjouterRole');
});
Route::get('/dashboard/enseignants/ajouterenseignant', function () {
    return view('AjouterEnseignant');
});

Route::get('/dashboard/delete/{id}', [EtudiantController::class,'delete']);
Route::get('/dashboard/delete/{id}', [EnseignantController::class,'delete']);
Route::get('/dashboard/delete/{id}', [RolesController::class,'delete']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
