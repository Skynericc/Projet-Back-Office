@extends('layout');
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<div class="div-tab">
<h2>Roles</h2>
<a href="/dashboard/roles/ajouterrole"><button id='add' type="button" class="btn btn-outline-primary"> + Ajouter role</button></a>
<table>
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Nombre de Postulation</th>
        <th>Nombre de Projets Max</th>
        <th>Manière d'affectation</th>
        <th>Actions</th>
    </tr>
@foreach($roles as $role)
    <tr>
        <td>{{$role->Nom}}</td>
        <td>{{$role->Description}}</td>
        <td>{{$role->Nombre_Postulations}}</td>
        <td>{{$role->Nombre_Projets}}</td>
        <td>{{$role->Maniere_Affectation}}</td>
        <td>
        <a href="#"><button type="button" class="btn btn-success">Modifier</button></a>
        <a href="#"><button type="button" class="btn btn-danger">Supprimer</button></a>
        </td>
     </tr>
@endforeach
</table>
@endsection
</div>