
@extends('home')
@section('formulaires')

<!--  -->

<div class="container " style="font-weight:800;">
<h1 class="armelle">AJOUTER UN CARE WASH</h1>
<form action="{{ url('ajouter-formcare') }} " method="post" id="mt-form" enctype="multipart/form-data">
@csrf

<div class="form-group m-5">
  <label for="inputEmail4">Nom</label>
  <input type="text" class="form-control" name="nom" value="" id="Inputnom" placeholder="">
</div>

<div class="form-group">
  <label for="inputEmail4">Lieu</label>
  <input type="text" class="form-control" name="lieu" value="" id="Inputlieu" placeholder="" >
</div>
<div class="form-group">
  <label for="inputEmail4">Télépone</label>
  <input type="tel" class="form-control" name="tel" value="" id="Inputlieu" placeholder="" >
</div>


<div class="form-group">
  <label for="inputEmail4">Email</label>
  <input type="text" class="form-control" name="email" value="" id="Inputemail" placeholder="" >
</div>
<div class="form-group">
  <label for="inputEmail4">Latitude</label>
  <input type="text" class="form-control" name="latitude" value="" id="Inputlieu" placeholder="" >
</div>
<div class="form-group">
  <label for="inputEmail4">Longitude</label>
  <input type="text" class="form-control" name="longitude" value="" id="Inputlieu" placeholder="" >
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

@endsection
