@extends('layouts.dashbord')
@section('content')

<!--  -->

<div class="container" style="font-weight:800;">

<div class="car card-primary">
  <div class="card-tabs">
    <div class="card-body">
      <div class="tab-content">

        <h1 class="armelle">AJOUTER UN PRESSING</h1>
        <form action="{{ url('update-pressing', $pressing->id) }} " method="post" id="mt-form" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
        <label for="inputEmail4">Nom</label>
        <input type="text" class="form-control" name="nom" value="{{$pressing->nom}}" id="Inputnom" placeholder="">
        </div>

        <div class="form-group">
        <label for="inputEmail4">Lieu</label>
        <input type="text" class="form-control" name="lieu" value="{{$pressing->lieu}}" id="Inputlieu" placeholder="" >
        </div>
        <div class="form-group">
        <label for="inputEmail4">Téléphone</label>
        <input type="number" class="form-control" name="tel" value="{{$pressing->tel}}" id="Inputlieu" placeholder="" >
        </div>


        <div class="form-group">
        <label for="inputEmail4">Email</label>
        <input type="text" class="form-control" name="email" value="{{$pressing->email}}" id="Inputemail" placeholder="" >
        </div>
        <div class="form-group">
        <label for="inputEmail4">Latitude</label>
        <input type="text" class="form-control" name="latitude" value="{{$pressing->latitude}}" id="Inputlieu" placeholder="" >
        </div>
        <div class="form-group">
        <label for="inputEmail4">Longitude</label>
        <input type="text" class="form-control" name="longitude" value="{{$pressing->longitude}}" id="Inputlieu" placeholder="" >
        </div>


        <div class="form-group">
        <label for="inputphoto">Photo</label>
        <input type="file" class="form-control" name="photo" value="{{$pressing->photo}}" id="Inputphoto" placeholder="" >

        </div>

        <div>
        <button class="btn btn-primary" id="coleur" type="submit">Valider</button>
        <button class="btn btn-danger" id="coleur" type="reset">Annuler</button>
        </div>

        </form>


      </div>
    </div>
</div>
 </div>
