@extends('layout')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="div-tab">
    
<h2>Modifier un etudiant 
<button id='right' class='btn btn-outline-primary'><a style="text-decoration:none" href="/dashboard/etudiants"><- retour a la liste</a></button>

</h2>

<form action="/dashboard/edit/etudiant" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$etudiant->id}}">
  <div class="form-group">
    <label for="exampleInputPassword1">Nom complet</label>
    <input type="text" name ="Nom_Complet" class="form-control" id="exampleInputPassword1" value="{{$etudiant->Nom_Complet}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" value="{{$etudiant->Email}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Mot_de_passe"value="{{$etudiant->Mot_de_passe}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmer le Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" value="{{$etudiant->Mot_de_passe}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Filière</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="Fillière" value="{{$etudiant->Fillière}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Téléphone</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="Téléphone" value="{{$etudiant->Téléphone}}">
  </div>
  <div class="form-group">
    <label for="">Compétences</label>
    <textarea cols='40' rows='5' class="form-control" name="Compétences">{{$etudiant->Compétences}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>



@endsection
</div>