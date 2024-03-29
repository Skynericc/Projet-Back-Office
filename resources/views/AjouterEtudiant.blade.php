@extends('layout')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="div-tab">
    
<h2>Ajouter un etudiant 
<button id='right' class='btn btn-outline-primary'><a style="text-decoration:none" href="/dashboard/etudiants"><- retour a la liste</a></button>

</h2>

<form action='/dashboard/etudiants' method='POST'>
@csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Nom complet</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Nom complet" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="mdp" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmer le Mot de passe</label>
    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Filière</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="filiere" placeholder="Saisir la filière" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Téléphone</label>
    <input type="tel" class="form-control" id="exampleInputPassword1" name="tel" placeholder="Téléphone" required>
  </div>
  <div class="form-group">
    <label for="">Compétences</label>
    <textarea cols='40' rows='5' placeholder="Compétences" name="compt" class="form-control" required></textarea>
  </div>
  
  <input type="submit" class="btn btn-primary" value='submit'></input>
</form>
<script>
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>


@endsection
</div>