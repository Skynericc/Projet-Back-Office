@extends('layout');
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="div-tab">
    
<h2>Ajouter un role
<button id='right' class='btn btn-outline-primary'><a style="text-decoration:none" href="/dashboard/etudiants"><- retour a la liste</a></button>

</h2>

<form>
  <div class="form-group">
    <label for="exampleInputPassword1">Nom du role</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nom du role">
  </div>
  <label>Type du role</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Postulation
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Nombre de projets
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Manière d'affectation
  </label>
</div>
  
  
  <button id='button-submit' type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
</div>