<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class RolesController extends Controller
{
    
    public function index(){
        $roles = Role::all();
        return view('roles',['roles' => $roles ]);
    }
    public function delete($id){
        $role = Role::find($id);
        $role->delete();

        return redirect('/dashboard/roles');
    }
    public function create(){
        return view('AjouterRole');
    }
    public function edit($id){
        $role = Role::find($id);
        return view('modifierRoles',['role'=>$role]);
    }
    public function update(Request $req){
        $role = Role::find($req->id);
        $role->Nom=$req->Nom;
        $role->Description=$req->Description;
        $role->Nombre_Postulations=$req->Nombre_Postulations;
        $role->Nombre_Projets=$req->Nombre_Projets;
        $role->Maniere_Affectation=$req->Maniere_Affectation;
        $role->save();
        return redirect('/dashboard/roles');
    }
    public function store(){

        

        $role = new Role();

        $role->Nom = request('rolename');
        $role->Description = request('inlineRadioOptions');
        

        $role->save();

        return redirect('/dashboard/roles');
    }
}
