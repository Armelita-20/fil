@extends('layout')
@section('content')
@include('include.head')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/geopress.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Trovez votre pressing </h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Votre pressing au bout du nez <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <br>
    <div class="" id="map" data-loc="{{url('geoloc')}}" style="height:600px">

        </div>
        <br>
    @include('include.footer')
@endsection
@section('script')
<script>
var map = L.map('map').setView([12.35,-1.516667 ], 13);
var loc=$("#map").attr("data-loc");
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

 $.get(loc).done(function(data){
var location=data.loc;
var pressing;
for (const key in location) {
    pressing=location[key];
    console.log(pressing.nom);
    L.marker([pressing.latitude,pressing.longitude]).addTo(map)
    .bindPopup(pressing.nom)
    .openPopup();
}
 });
</script>
@endsection


