@extends('layout');
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="div-tab">
    
<h2>Modifier un role 
<button id='right' class='btn btn-outline-primary'><a style="text-decoration:none" href="/dashboard/roles"><- retour a la liste</a></button>

</h2>

<form action="/dashboard/edit/role" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$role->id}}">
  <div class="form-group">
    <label for="exampleInputPassword1">Nom</label>
    <input type="text" name ="Nom" class="form-control" id="exampleInputPassword1" value="{{$role->Nom}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Description" value="{{$role->Description}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nombre de postulation</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="Nombre_Postulation"value="{{$role->Nombre_Postulation}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nombre de projets Max</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="Nombre_Projets"value="{{$role->Nombre_Projets}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Manière d'affectation</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="Maniere_Affectation" value="{{$role->Maniere_Affectation}}">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>



@endsection
</div>