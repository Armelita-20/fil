@extends('layout')
@section('content')
@include('include.head')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/S S C.png');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">A propos</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>A propos<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>





@include('include.footer')

@endsection
