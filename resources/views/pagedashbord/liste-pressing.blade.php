


@extends('home')
@section('formulaires')

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
              <a href="{{ url('editer-pressing?id=' .$pressing->id) }}"><button class="btn btn-warning">  <i class="fa fa-pencil"></i> Modifier</button></a>
            <a href="{{ url('supprimer-pressing?id=' .$pressing->id) }}"><button class="btn btn-danger">  <i class="fa fa-pencil"></i> Supprimer</button></a>
            </div>
          </div>
          @endforeach
        </div>
			</div>
            @endsection
