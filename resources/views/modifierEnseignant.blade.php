@extends('layout')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="div-tab">
    
<h2>Modifier un enseignant
<button id='right' class='btn btn-outline-primary'><a style="text-decoration:none" href="/dashboard/enseignants"><- retour a la liste</a></button>

</h2>

<form action="/dashboard/edit/enseignant" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$enseignant->id}}">
  <div class="form-group">
    <label for="exampleInputPassword1">Nom complet</label>
    <input type="text" name ="Nom_Complet" class="form-control" id="exampleInputPassword1" value="{{$enseignant->Nom_Complet}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" value="{{$enseignant->Email}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Mot_de_passe"value="{{$enseignant->Mot_de_passe}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmer le Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" value="{{$enseignant->Mot_de_passe}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Roles</label><br>
    @php
    $rolesss = explode(",", $enseignant->Roles);
    @endphp
    
    @foreach($roles as $role)
      
        @if(in_array($role->Nom,$rolesss))
          <input type="checkbox" name="role[]"  value ="{{$role->Nom}}"checked>
          <label for=""> {{$role->Nom}} </label><br>
        @else
          <input class="form-check-input" type="checkbox" name="role[]" value="{{$role->Nom}}">
          <label class="form-check-label" for="inlineCheckbox1">{{$role->Nom}}</label><br>
        @endif  
       
    @endforeach
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Téléphone</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="Téléphone" value="{{$enseignant->Téléphone}}">
  </div>
  <div class="form-group">
    <label for="">Projets</label>
    <textarea cols='40' rows='5' class="form-control" name="Projets">{{$enseignant->Projets}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>



@endsection
</div>