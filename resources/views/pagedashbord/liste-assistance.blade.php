@extends('home')
@section('formulaires')

<div class="container">
				<div class="row">
                @foreach($assiste as $assistance)
          <div class="col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated">
              <div class="text bg-white p-4">

              <p>{{ $assistance->nom}}</p>
              <p>{{ $assistance->prenom}}</p>
              <p>{{ $assistance->tel}}</p>
              <p>{{ $assistance->service}}</p>
              <p>{{ $assistance->message}}</p>


              </div>
            <a href="{{ url('supprimer-assistance?id=' .$assistance->id) }}"><button class="btn btn-danger">  <i class="fa fa-pencil"></i> Supprimer</button></a>
            </div>
          </div>
          @endforeach
        </div>
			</div>
@endsection

