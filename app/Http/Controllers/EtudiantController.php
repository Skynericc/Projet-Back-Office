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
    public function edit($id){
        $etudiant = Etudiant::find($id);
        return view('modifierEtudiant',['etudiant'=>$etudiant]);
    }
    public function update(Request $req){
        $etudiant = Etudiant::find($req->id);
        $etudiant->Nom_Complet=$req->Nom_Complet;
        $etudiant->Email=$req->Email;
        $etudiant->Mot_de_passe=$req->Mot_de_passe;
        $etudiant->Fillière=$req->Fillière;
        $etudiant->Téléphone=$req->Téléphone;
        $etudiant->Compétences=$req->Compétences;
        $etudiant->save();
        return redirect('/dashboard/etudiants');
    }
    
}
