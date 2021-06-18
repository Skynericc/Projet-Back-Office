<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
class EtudiantController extends Controller
{
    
    public function index(){
        $etudiants = Etudiant::all();
        return view('etudiants',['etudiants' => $etudiants ]);
    }
    public function delete($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return redirect('/dashboard/etudiants');
    }
}
