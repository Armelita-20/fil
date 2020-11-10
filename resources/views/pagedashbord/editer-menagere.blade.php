
@extends('layouts.dashbord')
@section('content')
<div class="container " style="font-weight:800;">
<h1 class="armelle">AJOUTER UNE MENAGERE</h1>
<form action="{{ url('update-menagere', $menagere->id) }} " method="post" id="mt-form" enctype="multipart/form-data">
@csrf

<div class="form-group m-5">
  <label for="inputEmail4">Nom</label>
  <input type="text" class="form-control" name="nom" value="{{$menagere->nom}}"id="Inputnom" placeholder="">
</div>
<div class="form-group m-5">
  <label for="inputEmail4">Prenom</label>
  <input type="text" class="form-control" name="prenom" value="{{$menagere->prenom}}"id="Inputprenom" placeholder="">
</div>

<div class="form-group m-5">
  <label for="inputEmail4">Date de naissance</label>
  <input type="date" class="form-control" name="date" value="{{$menagere->date}}" id="Inputdate" placeholder="">
</div>

<div class="form-group">
  <label for="inputEmail4">Lieu de naissance</label>
  <input type="text" class="form-control" name="lieunaiss" value="{{$menagere->lieunaiss}}" id="Inputlieunaiss" placeholder="" >
</div>
<div class="form-group m-5">
  <label for="inputEmail4">N° CNIB</label>
  <input type="text" class="form-control" name="cnib" value="{{$menagere->cnib}}" id="Inputcnib" placeholder="">
</div>

<div class="form-group">
  <label for="inputEmail4">Telephone</label>
  <input type="number" class="form-control" name="tel" value="{{$menagere->tel}}" id="Inputtel" placeholder="" >
</div>

<div class="form-groupe">
                    <label for="genre">Genre</label>
                      <select class="form-control" id="inlineFormCustomSelect" name="genre" required>

                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Autre">Autre</option>
                      </select>

                    </div> <br>
<div class="form-group">
  <label for="inputphoto">Photo</label>
  <input type="file" class="form-control" name="photo" value="{{$menagere->photo}}" id="Inputphoto" placeholder="" >
</div>

<div class="form-groupe">
                    <label for="genre">Statut</label>
                      <select class="form-control" id="inlineFormCustomSelect" name="titre" required>

                        <option >Domicile</option>
                        <option >Bureautique</option>
                        <option >Les deux</option>
                      </select>

                    </div> <br>
<div class="form-group">
<div>
<button class="btn btn-primary" id="coleur" type="submit">Valider</button>
<button class="btn btn-danger" id="coleur" type="reset">Annuler</button>
</div>

</form>

@endsection
