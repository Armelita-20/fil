@extends('layout')
@section('content')
@include('include.head')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/repress.png');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Les pressing de reference</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Les pressing qu'il vous faut <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<br>
<div class="col-md-12 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Parmi les miliers de pressing existant
                 au Burkina, notre choix s'est principalement penché sur
                 ces pressing ci-dessus; </span> contactez vite un d'eux et retrouvez la proprété qu'il vous faut</h2>
    </div>
<br>
<div class="container">
				<div class="row">
                @foreach($pressing as $pressing)
          <div class="col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="height:275px;width:100%;background-size:cover;display:block; background-image: url('{{asset('storage/'.$pressing->photo)}}')">
              </a>
              <div class="text bg-white p-4">


              <p>{{ $pressing->nom}}</p>
              <p>{{ $pressing->email}}</p>
              <p>{{ $pressing->lieu}}</p>
              <p>{{ $pressing->tel}}</p>

              </div>

            </div>
          </div>
          @endforeach
        </div>
			</div>


@include('include.footer')

@endsection
