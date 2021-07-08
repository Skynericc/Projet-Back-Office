@extends('layout')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="div-tab">
    
<h2>Ajouter enseignant
<a href="/dashboard/enseignants"><button id='right' class='btn btn-outline-primary'><- retour a la liste</button></a>

</h2>

<form action='/dashboard/enseignants' method='POST'>
@csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Nom complet</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Nom complet">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" name='email' aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="mdp" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmer le Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmer mdp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Téléphone</label>
    <input type="tel" class="form-control" id="exampleInputPassword1" name="tel" placeholder="Téléphone">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Projets</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="projets" rows="3" placeholder="Saisir les projets proposés par cet enseignant"></textarea>
  </div>
  <label for="exampleInputPassword1">Les roles</label><br>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="role[]" value="Post3">
  <label class="form-check-label" for="inlineCheckbox1">Post3</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name='role[]' value="Proj3">
  <label class="form-check-label" for="inlineCheckbox2">Proj3</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="role[]" value="Proj5" >
  <label class="form-check-label" for="inlineCheckbox3">Proj5</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="role[]" value="Post5" >
  <label class="form-check-label" for="inlineCheckbox3">Post5</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="role[]" value="Affectaleatoire" >
  <label class="form-check-label" for="inlineCheckbox3">AffectAleatoire</label>
</div>
<br><br>
  
  <input type="submit" id='submit' value='submit' class="btn btn-primary"></input>
</form>



@endsection
</div>