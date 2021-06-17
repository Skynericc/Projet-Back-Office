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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/dashboard', function(){
    return view('layout',['name'=>'yahya']);
});
use App\Http\Controllers\EtudiantController;
Route::get('/dashboard/etudiants', [EtudiantController::class,'index']);

use App\Http\Controllers\EnseignantController;
Route::get('/dashboard/enseignants', [EnseignantController::class,'index']);

use App\Http\Controllers\RolesController;
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