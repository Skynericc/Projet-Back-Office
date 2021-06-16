<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;
class EnseignantController extends Controller
{
    public function index(){
        $enseignants = Enseignant::all();
        return view('enseignants',['enseignants' => $enseignants ]);
    }
}
