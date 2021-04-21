@extends('app')

@section('content')
    <form action="{{url('save-etudiant')}}" method="POST">
        @csrf
        <div class="form-group .row">
            <label for="nom_complet" class="control-label">Nom complet</label>
        </div>
        <div class="form-group .row">
            <input type="text" name="nom_complet" id="nom_complet" placeholder="Nom complet" required class="form-control">
        </div>
        <div class="form-group .row">
            <label for="date_naiss">Date de naissance</label>
        </div>
        <div class="form-group .row">
            <input type="date" name="date_naiss" id="date_naiss" placeholder="Date de naissance" required>
        </div>
        <div class="form-group .row">
            <label for="filiere" class="control-label">Filiere</label>
        </div>
        <div class="form-group .row">
            <select name="filiere" id="filiere">Filiere
                <option value="INF">Informatique</option>
                <option value="MATH">Mathematique</option>
                <option value="PHY">Physique</option>
                <option value="CHI">Chimie</option>
            </select>
        </div>
        <div class="form-group .row">
            <label for="niveau" class="control-label">Niveau</label>
        </div>
        <div class="form-group .row">
            <input type="number" name="niveau" id="niveau" placeholder="Niveau" required>
        </div>
        <div class="form-group .row">
            <label for="email" class="control-label">E-mail</label>
        </div>
        <div class="form-group .row">
            <input type="email" name="email" id="email" placeholder="E-mail" required class="form-control">
        </div>
        <div class="form-group .row">
            <label for="remarque">Remarque</label>
        </div>
        <div class="form-group .row">
            <textarea type="textarea" name="remarque" id="remarque" placeholder="Remarque"></textarea>
        </div>
        <div class="col-md-4 .row">
            <button class="btn btn-success" type="submit">valide
            </button>
        </div>

    </form>
@endsection
