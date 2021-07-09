<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;
class EnseignantController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
    }
    
    public function index(){
        $enseignants = Enseignant::all();
        return view('enseignants',['enseignants' => $enseignants ]);
    }
    public function delete($id){
        $enseignant = Enseignant::find($id);
        $enseignant->delete();

        return redirect('/dashboard/enseignants');
    }
    public function edit($id){
        $enseignant = Enseignant::find($id);
        return view('modifierEnseignant',['enseignant'=>$enseignant]);
    }
    public function update(Request $req){
        $enseignant = Enseignant::find($req->id);
        $enseignant->Nom_Complet=$req->Nom_Complet;
        $enseignant->Email=$req->Email;
        $enseignant->Mot_de_passe=$req->Mot_de_passe;
        $enseignant->Roles=$req->Roles;
        $enseignant->Téléphone=$req->Téléphone;
        $enseignant->Projets=$req->Projets;
        $enseignant->save();
        return redirect('/dashboard/enseignants');
    }
    public function create(){
        return view('AjouterEnseignant');
    }
    public function store(){

        $roles = request('role');

        $rolesArray = array();
    
        foreach($roles as $role){
           $rolesArray[] = $role;
        }

        $enseignant = new Enseignant();

        $enseignant->Nom_Complet = request('name');
        $enseignant->Email = request('email');
        $enseignant->Mot_de_passe = request('mdp');
        $enseignant->Téléphone = request('tel');
        $enseignant->roles = json_encode($rolesArray);
        
        $enseignant->Projets = request('projets');
        

        $enseignant->save();

        return redirect('/dashboard/enseignants');
    }
    public function search(){
        $search_text=$_GET['query'];

        $search_enseignant=Enseignant::where('Nom_Complet','LIKE','%'.$search_text.'%')->get();
        
        return view('SearchEnseignant',compact('search_enseignant'));
    }
}
