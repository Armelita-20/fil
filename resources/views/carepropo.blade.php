@extends('layout')
@section('content')
@include('include.head')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/car.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">A propos de nos car whash</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>A propos de nos car whash <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">SAP SAP CLEANING CARE : NETTOYAGE ET RENOVATION AUTOMOBILE,
                             INTERIEUR ET EXTERIEUR,
                             PROTECTION PEINTURES LONGUE DUREE,
                             DEGOUDRONAGE, LUSTRAGE
                            & PNEUMATIQUE
            </h2>
            <p>Vous êtes à la recherche d’un carwash à SAP SAP CLAENING ? En plus du lavage auto, nos garages réalisent aussi changement, réparation et vente de pneus ainsi que vente d’accessoires divers. En spécialiste expérimenté, je vous propose un service rapide et efficace tout en travaillant seul.</p>
          </div>
        </div>
			</div>
        </section>

<section class="ftco-section ftco-no-pt ftc-no-pb"style="background-color: #f0f0f0;">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url(images/Lavage.jpg); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">LAVAGE AUTO</h2>
						<p>Je vous propose un service de lavage auto pour tous types de véhicules : citadines, berlines, breaks, petits utilitaires, etc. Je réalise un lavage à la main soigné pour l’extérieur comme pour l’intérieur. </p>
						<p> Shampooing siège ou traitement cuir, décontamination et lustrage également.</p>
					</div>
				</div>
			</div>
        </section> <br>

        <section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url(images/pneu.jpg); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">PNEUMATIQUE</h2>
						<p>Nos car wash mettent à votre disposition un service pneumatique qui
                             assure changement de pneus, réparation de pneus et vente de pneus.
                        </p>
                        <p>Ils sont  capable d’effectuer déjantage, rejantage ou réparation de pneu crevé.
                        </p>
                        <p>Vente de pneus Hankook, Michelin et
                             Toyota  mais d’autres marques sont disponibles sur commande également
                        </p>

					</div>
				</div>
			</div>
        </section> <br>
        <section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url(images/accessoire.jpg); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">VENTE D’ACCESSOIRES</h2>
						<p>Nos car wash proposent des différents accessoires pour voiture : loques, éponges, produits
                            de nettoyage, brosses pour jantes, éponges magiques, etc. </p>
						<p>Ils  sélectionnent pour vous des produits de qualité uniquement.
                            N’hésitez pas à les contacter pour vous assurer de leur disponibilité !</p>

					</div>
				</div>
			</div>
        </section> <br>







@include('include.footer')

@endsection


