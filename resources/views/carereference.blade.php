@extends('layout')
@section('content')
@include('include.head')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/reference.png');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Les car whash de reference</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>La reference <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <br>
<div class="col-md-12 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Voulez-vous des car whash qui nettoient et réparent? <br>
                 Vous voulez retrouvez votre engin à l'état initial ? </span> <br> Ces car whash sont la réfence et font la différence</h2>
    </div>
<br>
<div class="container">
				<div class="row">
                @foreach($care as $carewash)
          <div class="col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="height:275px;width:100%;background-size:cover;display:block; background-image: url('{{asset('storage/'.$carewash->photo)}}')">
              </a>
              <div class="text bg-white p-4">


              <p>{{ $carewash->nom}}</p>
              <p>{{ $carewash->email}}</p>
              <p>{{ $carewash->lieu}}</p>
              <p>{{ $carewash->tel}}</p>

              </div>

            </div>
          </div>
          @endforeach
        </div>
			</div>




@include('include.footer')

@endsection
