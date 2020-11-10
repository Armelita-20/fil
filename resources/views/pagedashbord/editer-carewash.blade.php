
@extends('layouts.dashbord')
@section('content')

<!--  -->

<div class="container" style="font-weight:800;">
<h1 class="armelle">AJOUTER UN PRESSING</h1>
<form action="{{ url('update-carewash?id=', $care->id) }} " method="post" id="mt-form" enctype="multipart/form-data">
@csrf

<div class="form-group">
  <label for="inputEmail4">Nom</label>
  <input type="text" class="form-control" name="nom" value="{{$care->nom}}" id="Inputnom" placeholder="">
</div>

<div class="form-group">
  <label for="inputEmail4">Lieu</label>
  <input type="text" class="form-control" name="lieu" value="{{$care->lieu}}" id="Inputlieu" placeholder="" >
</div>
<div class="form-group">
  <label for="inputEmail4">Téléphone</label>
  <input type="number" class="form-control" name="tel" value="{{$care->tel}}" id="Inputemail" placeholder="" >
</div>
<div class="form-group">
  <label for="inputEmail4">Email</label>
  <input type="text" class="form-control" name="email" value="{{$care->email}}" id="Inputemail" placeholder="" >
</div>

<div class="form-group">
  <label for="inputEmail4">Latitude</label>
  <input type="text" class="form-control" name="latitude" value="{{$care->latitude}}" id="Inputemail" placeholder="" >
</div>
<div class="form-group">
  <label for="inputEmail4">Longitude</label>
  <input type="text" class="form-control" name="longitude" value="{{$care->longitude}}" id="Inputemail" placeholder="" >
</div>
<div class="form-group">
  <label for="inputphoto">Photo</label>
  <input type="file" class="form-control" name="photo" value="" id="Inputphoto" placeholder="" >

</div>

<div>
<button class="btn btn-primary" id="coleur" type="submit">Valider</button>
<button class="btn btn-danger" id="coleur" type="reset">Annuler</button>
</div>

</form>

