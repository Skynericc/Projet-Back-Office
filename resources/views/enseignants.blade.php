@extends('layout');
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="div-tab">
<h2>Enseignants</h2>
<a href="/dashboard/enseignants/ajouterenseignant"><button id='add' type="button" class="btn btn-outline-primary"> + Ajouter enseignant</button></a>
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
        <td>
        <a href="#"><button type="button" class="btn btn-success">Modifier</button></a>
        <a href="#"><button type="button" class="btn btn-danger">Supprimer</button></a>
        </td>
     </tr>
@endforeach
</table>
@endsection
</div>