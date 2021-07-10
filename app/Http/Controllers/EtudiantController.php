<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
class EtudiantController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
    }
    public function index(){
        $etudiants = Etudiant::all();
        return view('etudiants',['etudiants' => $etudiants ]);
    }
    public function delete($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return redirect('/dashboard/etudiants');
    }
    public function create(){
        return view('AjouterEtudiant');
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
    public function store(){
        try{
            $etudiant = new Etudiant();

            $etudiant->Nom_Complet = request('name');
            $etudiant->Email = request('email');
            $etudiant->Mot_de_passe = request('mdp');
            $etudiant->Fillière = request('filiere');
            $etudiant->Téléphone = request('tel');
            $etudiant->Compétences = request('compt');
    
            $etudiant->save();
        } catch (\Exception $exception){
            /*echo "
                <script type=\"text/javascript\">;
                var email = document.getElementById(\"exampleInputEmail1\");
                email.setCustomValidity(\"Cet Email existe déja!\");
                </script>
            ";*/
            echo "Cet Email existe déja!";
            //return view('AjouterEtudiant');
        }
        

        return redirect('/dashboard/etudiants');
    }
    
    public function search(){
        $search_text=$_GET['query'];

        $search_etudiant=Etudiant::where('Nom_Complet','LIKE','%'.$search_text.'%')->orWhere('Fillière', 'LIKE','%'.$search_text.'%')->orWhere('Compétences', 'LIKE','%'.$search_text.'%')->orWhere('id', 'LIKE',$search_text)->get();
        
        return view('SearchEtudiant',compact('search_etudiant'));
    }
    
}
