
@extends('home')
@section('formulaires')

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
              <a href="{{ url('editer-carewash?id=' .$carewash->id) }}"><button class="btn btn-warning">  <i class="fa fa-pencil"></i> Modifier</button></a>
            <a href="{{ url('supprimer-carewash?id=' .$carewash->id) }}"><button class="btn btn-danger">  <i class="fa fa-pencil"></i> Supprimer</button></a>
            </div>
          </div>
          @endforeach
        </div>
			</div>
@endsection

