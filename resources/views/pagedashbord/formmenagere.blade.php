@extends('home')
@section('formulaires')
<div class="container " style="font-weight:800;">
<h1 class="armelle">AJOUTER UNE MENAGERE</h1>
<form action="{{ url('ajouter-formmenagere') }} " method="post" id="mt-form" enctype="multipart/form-data">
@csrf

<div class="form-group m-5">
  <label for="inputEmail4">Nom</label>
  <input type="text" class="form-control" name="nom" value="" id="Inputnom" placeholder="">
</div>
<div class="form-group m-5">
  <label for="inputEmail4">Prenom</label>
  <input type="text" class="form-control" name="prenom" value="" id="Inputprenom" placeholder="">
</div>

<div class="form-group m-5">
  <label for="inputEmail4">Date de naissance</label>
  <input type="date" class="form-control" name="date" value="" id="Inputdate" placeholder="">
</div>

<div class="form-group">
  <label for="inputEmail4">Lieu de naissance</label>
  <input type="text" class="form-control" name="lieunaiss" value="" id="Inputlieunaiss" placeholder="" >
</div>
<div class="form-group m-5">
  <label for="inputEmail4">N° CNIB</label>
  <input type="text" class="form-control" name="cnib" value="" id="Inputcnib" placeholder="">
</div>

<div class="form-group">
  <label for="inputEmail4">Telephone</label>
  <input type="number" class="form-control" name="tel" value="" id="Inputtel" placeholder="" >
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
  <input type="file" class="form-control" name="photo" value="" id="Inputphoto" placeholder="" >
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
