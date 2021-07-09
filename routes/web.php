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

Route::get('/dashboard/delete/etudiant/{id}', [EtudiantController::class,'delete']);
Route::get('/dashboard/delete/enseignant/{id}', [EnseignantController::class,'delete']);

Route::get('/dashboard/delete/role/{id}', [RolesController::class,'delete']);

Route::get('/dashboard/delete/{id}', [RolesController::class,'delete']);


Route::get('/dashboard/edit/etudiant/{id}', [EtudiantController::class,'edit']);
Route::post('/dashboard/edit/etudiant', [EtudiantController::class,'update']);

Route::get('/dashboard/edit/enseignant/{id}', [EnseignantController::class,'edit']);
Route::post('/dashboard/edit/enseignant', [EnseignantController::class,'update']);


Route::get('/dashboard/edit/role/{id}', [RolesController::class,'edit']);
Route::post('/dashboard/edit/role', [RolesController::class,'update']);

Route::get('/dashboard/etudiants/AjouterEtudiant', [EtudiantController::class,'create']);
Route::post('/dashboard/etudiants', [EtudiantController::class,'store']);

Route::get('/dashboard/enseignant/AjouterEnseignant', [EnseignantController::class,'create']);
Route::post('/dashboard/enseignants', [EnseignantController::class,'store']);

Route::get('/dashboard/roles/AjouterRole', [RolesController::class,'create']);
Route::post('/dashboard/roles', [RolesController::class,'store']);

Route::get('/search', [EtudiantController::class,'search']);
Route::get('/searchRoles', [RolesController::class,'search']);
Route::get('/searchEnseignant', [EnseignantController::class,'search']);





Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
