@extends('layout')
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="div-tab">
<h2>Enseignants</h2>

<div id='AddButt'><a href="/dashboard/enseignants/AjouterEnseignant"><button id='add' type="button" class="btn btn-outline-primary"> + Ajouter enseignant</button></a></div>
<div class="input-group" id='searchBox2'>
<form type="get" action="{{ url('/searchEnseignant') }}" id='searchform'>
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
        <th>Roles</th>
        <th>Téléphone</th>
        <th>Projets</th>
        <th>Actions</th>
    </tr>
@foreach($enseignants as $enseignant)
    <tr>
        <td>{{$enseignant->Nom_Complet}}</td>
        <td>{{$enseignant->id}}</td>
        <td>{{$enseignant->Email}}</td>
        <td>{{$enseignant->Mot_de_passe}}</td>
        <td>{{$enseignant->Roles}}</td>
        <td>{{$enseignant->Téléphone}}</td>
        <td>{{$enseignant->Projets}}</td>
        <td class='del_edit_btn'>           
            <a href={{ "edit/enseignant/".$enseignant['id'] }}><button type="button" class="btn btn-success">Modifier</button></a>
            <a href={{ "delete/enseignant/".$enseignant['id'] }}><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Supprimer</button></a>
        </td>
     </tr>
@endforeach
</table>
@endsection
</div>