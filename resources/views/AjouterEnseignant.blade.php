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
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Nom complet" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" name='email' aria-describedby="emailHelp" placeholder="Enter email" required>
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
    <label for="exampleInputPassword1">Téléphone</label>
    <input type="tel" class="form-control" id="exampleInputPassword1" name="tel" placeholder="Téléphone" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Projets</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="projets" rows="3" placeholder="Saisir les projets proposés par cet enseignant"></textarea>
  </div>
  <label for="exampleInputPassword1">Les roles</label><br>

  @foreach($roles as $role)
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" name="role[]" value="{{$role->Nom}}">
    <label class="form-check-label" for="inlineCheckbox1">{{$role->Nom}}</label>
  </div>
  @endforeach
<br><br>
  
  <input type="submit" id='submit' value='submit' class="btn btn-primary"></input>
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