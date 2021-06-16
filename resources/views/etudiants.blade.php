@extends('layout');
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')
<h2>Etudiants</h2>
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
            <a href="#"><button type="button" class="btn btn-success">Modifier</button></a>
            <a href="#"><button type="button" class="btn btn-danger">Supprimer</button></a>
        </td>
     </tr>
@endforeach
</table>
@endsection