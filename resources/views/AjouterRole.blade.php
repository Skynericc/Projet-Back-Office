@extends('layout')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="div-tab">
    
<h2>Ajouter un role 
<a href="/dashboard/roles"><button id='right' class='btn btn-outline-primary'><- retour a la liste</button></a>

</h2>

<form action='/dashboard/roles' method='POST'>
@csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Nom du role</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name='rolename' placeholder="Nom complet">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description du role</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name='description' placeholder="Description">
  </div>
  <label for="exampleInputPassword1">Type du role</label><br>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Postulation" onclick="asd(1)">
    <label class="form-check-label" for="inlineRadio1">Postulation</label>
  </div>
  
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="nbr de projets" onclick="asd(2)">
  <label class="form-check-label" for="inlineRadio2">Nombre de projets</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Maniere d'affectation" onclick="asd(3)">
  <label class="form-check-label" for="inlineRadio3">Manière d'affectation </label>
</div>
<div class="form-group" id="post" style="display : none">
    <label for="exampleInputPassword1">Nombre de postulation</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="Nombre_Postulations">
</div>
<div class="form-group" id="proj" style="display : none">
    <label for="exampleInputPassword1">Nombre de projets Max</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="Nombre_Projets">
</div>  
<div class="form-group" id="aff" style="display : none">
    <label for="exampleInputPassword1">Manière d'affectation</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="Maniere_Affectation">
</div><br><br>
  
  <input type="submit" id='submit' value='Submit' class="btn btn-primary"></input>
</form>

<script>
  function asd(a)
  {
    if(a==1){
        document.getElementById("post").style.display="block";
        document.getElementById("proj").style.display="none";
        document.getElementById("aff").style.display="none";
    }
    else if(a==2){
        document.getElementById("post").style.display="none";
        document.getElementById("proj").style.display="block";
        document.getElementById("aff").style.display="none";
    }
    else{
        document.getElementById("post").style.display="none";
        document.getElementById("proj").style.display="none";
        document.getElementById("aff").style.display="block";    
  }}
</script>

@endsection
</div>