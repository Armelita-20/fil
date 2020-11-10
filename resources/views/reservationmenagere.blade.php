@extends('layout')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/aide.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Reservez en toute rapidité votre aide ménagère</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Reservation <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section> <br>
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
						<form action="{{ url('ajouter-reservation') }}" method="POST" >
                        @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="nom" placeholder="Nom">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="prenom" placeholder="Prenom">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="tel" placeholder="Numero de téléphone">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder=" Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="object" placeholder="Object">
              </div>
              <div class="form-group">
                <textarea  cols="30" rows="7" class="form-control" name="besoin" placeholder="Message / Bésoins"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyé Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<img src="images/Reservationimg.png" class="col-md-12 alt="">
					</div>
				</div>
            </div>
            <br>
		</section>


    <div class="text-center text-sm-center" style="color: black;">
  <div id="accordion" style=" display: block;;">

  <div class="card1">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
        Si je réserve une aide ménage en ligne que se passe-t-il ensuite ?
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
        Dès que votre demande de réservation aura été acceptée, vous serez averti par SMS et par e-mail.
         Vous pouvez alors contacter votre prestatire de services et vous mettre d’accord sur les détails de votre première prestation. Il se passe en général une petite heure entre votre réservation et la confirmation, mais cela peut prendre un peu plus de temps en fonction de votre lieu de résidence et le créneau horaire choisi. Si personne n’est disponible à l’horaire demandé,
         nous vous recontacterons dans les meilleurs délais pour voir si un autre créneau horaire pourrait vous convenir.
        </div>
      </div>
    </div>

   
    <div class="card1">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Comment puis-je me préparer pour la première prestation ?
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
        Renseigner le formulaire de reservation en  listant tous vos souhaits et priorités
        afin d’aider l'intervenant à mieux répondre à vos exigences. N'oubliez pas
         de prendre connaissance de notre structure
        </div>
      </div>
    </div>
    <div class="card1">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        Les prestataires de services sont-ils assurés en cas de dommages?
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
        Oui. Vous ne devez pas vous inquiéter en cas de dommages. Toutes les sociétés de services à la personne partenaires possèdent une assurance en cas de dommage.
         Par ailleurs, Helpling peut également faire jouer son assurance dommages couvrant les dommages à partir de 350 euros de franchise et jusqu’à 5.000.000 d’euros.

<p>Pour les dommages inférieurs à 350 euros, vous pouvez contacter directement votre prestataire de services et convenir avec eux d’une indemnité raisonnable.</p>

<p>Veuillez noter que lorsque Helpling fait marcher son assurance complémentaire pour dédommager un accident, la décision finale est prise par l’assurance. Helpling n’a aucune influence sur la décision de son assureur.
        </div>
      </div>
    </div>
  </div>
</div>


 <br>

@include('include.footer')

@endsection
