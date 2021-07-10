@extends('layout')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="div-tab">
<h2>Etudiants</h2>
<div id='AddButt'><a href="/dashboard/etudiants/ajouteretudiant"><button id='add' type="button" class="btn btn-outline-primary"> + Ajouter etudiant</button></a></div>
<div class="input-group" id='searchBox'>

<form type="get" action="{{ url('/search') }}" id='searchform'>
  <input type="submit" value="Find" class="btn btn-outline-primary" style="float: right"/>
  <div style="overflow: hidden; padding-right: .5em;">
  <input type="search" class="form-control rounded" name='query' type="search" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" style="width: 100%;"/>
  </div>
</form>
</div>
<br><br>
<table>
    <tr>
        <th>Nom Complet</th>
        <th>id</th>
        <th>Email</th>
        <th>mdp</th>
        <th>Fillière</th>
        <th>Téléphone</th>
        <th>Compétences</th>
        <th>Actions</th>
    </tr>
@foreach($etudiants as $etudiant)
    <tr>
        <td>{{$etudiant->Nom_Complet}}</td>
        <td>{{$etudiant->id}}</td>
        <td>{{$etudiant->Email}}</td>
        <td>{{$etudiant->Mot_de_passe}}</td>
        <td>{{$etudiant->Fillière}}</td>
        <td>{{$etudiant->Téléphone}}</td>
        <td>{{$etudiant->Compétences}}</td>
        <td>           
            <a href={{ "edit/etudiant/".$etudiant['id'] }}><button type="button" class="btn btn-success">Modifier</button></a>
            <a href={{ "delete/etudiant/".$etudiant['id'] }}><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Supprimer</button></a>
        </td>
     </tr>
@endforeach
</table>
@endsection
</div>