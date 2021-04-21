@extends('app')
@section('content')

<table class="table table-dark table-border">
    <tr>
        <th>Nom Complet</th>
        <td>{{$etudiant->nom_complet}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$etudiant->email}}</td>
    </tr>
    <tr>
        <th>date Naiss</th>
        <td>{{$etudiant->date_naiss}}</td>
    </tr>
    <tr>
        <th>Filiere</th>
        <td>{{$etudiant->filiere}}</td>
    </tr>

    <tr>
        <th>Niveau</th>
        <td>{{$etudiant->niveau}}</td>
    </tr>
    <tr>
        <th>remarque</th>
        <td>{{ isset($etudiant->remarque)?$etudiant->remarque:'remarque not exits'}}</td>

</table>

@endsection
