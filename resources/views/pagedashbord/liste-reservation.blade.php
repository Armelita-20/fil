@extends('home')
@section('formulaires')

<div class="container">
				<div class="row">
                @foreach($reserve as $reservation)
          <div class="col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated">
              <div class="text bg-white p-4">

              <p>{{ $reservation->nom}}</p>
              <p>{{ $reservation->prenom}}</p>
              <p>{{ $reservation->tel}}</p>
              <p>{{ $reservation->email}}</p>
              <p>{{ $reservation->besoin}}</p>
              <p>{{ $reservation->object}}</p>


              </div>
            <a href="{{ url('supprimer-reservation?id=' .$reservation->id) }}"><button class="btn btn-danger">  <i class="fa fa-pencil"></i> Supprimer</button></a>
            </div>
          </div>
          @endforeach
        </div>
			</div>
@endsection

