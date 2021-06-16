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
}
