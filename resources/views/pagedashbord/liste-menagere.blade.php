
@extends('home')
@section('formulaires')

@if(session())
<div class="alert alert-danger alert-dismissible" >
{{session()->get('success')}}
    </div>
@endif
<div class="text-center"> La liste Aide ménagère</div>
<div class="container">
<table class="table table-bordere">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date</th>
            <th>Lieu</th>
            <th>Cnib</th>
            <th>Tel</th>
            <th>Photo</th>
            <th>Statut</th>
            <th>Options</th>
        </tr>
    </thead>
    @foreach($menagere as $menagere)
    <tbody>
        <tr>
            <td>{{$menagere->id}}</td>
            <td>{{$menagere->nom}}</td>
            <td>{{$menagere->prenom}}</td>
            <td>{{$menagere->date}}</td>
            <td>{{$menagere->lieu}}</td>
            <td>{{$menagere->cnib}}</td>
            <td>{{$menagere->tel}}</td>
            <td>{{$menagere->photo}}</td>
            <td>{{$menagere->statut_id}}</td>
            <td>

            <a href="{{ url('editer-menagere?id=' .$menagere->id) }}"><button class="btn btn-warning">  <i class="fa fa-pencil"></i> Modifier</button></a>
            <a href="{{ url('supprimer-menagere?id=' .$menagere->id) }}"><button class="btn btn-danger">  <i class="fa fa-pencil"></i> Supprimer</button></a>
            </td>

        </tr>
    </tbody>
    @endforeach
</table>
</div>
@endsection
