@extends('app')
@section('content')
    <div class="col-md-10">
        <h1> Liste des Etudiants</h1>
        <table class="table table-border">
            <thead>
                <tr>
                <th>ID</th>
                <th>Nom complet</th>
                <th>Date Naiss</th>
                <th>Filiere</th>
                <th>Niveau</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nom_complet}}</td>
                    <td>{{$item->date_naiss}}</td>
                    <td>{{$item->filiere}}</td>
                    <td>{{$item->niveau}}</td>
                    <td><button class="btn btn-danger">sup</button></td>
                    <td><button class="btn btn-primary"><a href="{{url('details/'.$item->id)}}">details</a></button></td>

                </tr>
                @endforeach
                {{-- </tr>
                @for ($i=0; $i<count($data); $i++ )
                <tr>
                    <td>{{$data[$i]->id}}</td>
                    <td>{{$data[$i]->nom_complet}}</td>
                    <td>{{$data[$i]->date_naiss}}</td>
                    <td>{{$data[$i]->filiere}}</td>
                    <td>{{$data[$i]->niveau}}</td>
                    <td><button class="btn btn-danger">sup</button></td>
                </tr>
                @endfor --}}
            </tbody>
        </table>
    </div>
@endsection
