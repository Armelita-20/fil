@extends('layout')
@section('content')
@include('include.head')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/aide.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Touvez l'aide ménagère qu'il vous faut à moindre cout</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Aide ménagère <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section> <br>
    <div class="text-center text-sm-left">

<a href="{{url('reservationmenagere')}}" onclick="ga('send', 'RDV', 'clic', 'Prendre rendez-vous' );" class="btn btn-big" style="color: #fd5f00;">Réservez une aide ménagère<i class="fas fa-arrow-right"></i></a>
</div>

    <div class="col-md-12 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Les caractéristiques de nos assistances </span> d'aide ménagère se resument à la:</h2>
    </div>

<section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Simplicité & Immédiatété</h3>
                <p>Grâce à notre réseau d’aides ménagères, vous pouvez commander maintenant et faire démarrer le ménage
                    à votre domicile dans les 2 heures qui suivent, que ce soit pour du ponctuel ou du récurrent.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="media-body p-2 mt-3">
                <h3 class="heading">La qualité d'abord</h3>
                <p>Nos aides ménagères passent des tests d’efficacité avant d’intervenir chez vous. Elles sont ensuite évaluées
                    à chaque prestation et seules les meilleures sont proposées pour votre ménage à domicile.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="media-body p-2 mt-3">
                <h3 class="heading">L'administratif  &amp; en moins</h3>
                <p>Que vous optiez pour un ménage à domicile ponctuel ou récurrent, aucune formalité administrative pour vous. SAP SAP
                 CLEANING sert de tiers de confiance et s’occupe de tout pour vous apporter un service complet et sans engagement.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="media-body p-2 mt-3">
              <div class="col-sm-3 pt-5 text-center">
<img src="images/femmedemenage.png" style="max-height: 250px; width: auto; margin-top: -40px;" alt="" />
</div>
              </div>
            </div>
          </div>
        </div>
			</div>
        </section>


        <section class="ftco-section ftco-no-pt ftc-no-pb"style="background-color: #f0f0f0;">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url(images/menagg.png); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">Confiez-nous votre ménage & repassage à domicile. Et bien plus encore.</h2>
						<p>Nos aides ménagères sont expertes pour vous débarrasser de vos tâches ménagères. Dans le temps que vous leur allouez, elles s’occupent aussi bien du ménage, de la vaisselle, de la lessive, du repassage, du rangement, etc.</p>

					</div>
				</div>
			</div>
        </section> <br>

        <section class="bg-white section-pdt-4">
<br><br>
<h2 class="container text-center">Questions fréquentes sur le ménage à domicile</h2>
<div class="container mt-5 mb-5 text-center text-sm-left">
<div class="row mb-5">
<div class="col-sm-4 pb-5 pb-sm-0">
<h3>Comment suis-je facturé ? </h3>
<p>Lorsque vous commandez du ménage à domicile, une empreinte bancaire est prise pour sécuriser votre paiement. A l’issue de la prestation vous êtes facturé au temps réellement consommé. Et si la prestation n’a pas lieu, l’empreinte est relâchée.</p>
</div>
<div class="col-sm-4 pb-5 pb-sm-0">
<h3>Qui fournit les produits ?</h3>
<p>Les aides ménagères utilisent les produits que vous mettez à leur disposition. Nous vous conseillons de prévoir un kit minimum, elles sauront en tirer le maximum : éponges, torchons, serpillère, seau, balai, nettoyant multi-surface…</p>
</div>
<div class="col-sm-4 pb-5 pb-sm-0">
<h3>Que faire en cas de litige ?</h3>
<p>Au cours d’une prestation de ménage à domicile, différentes situations peuvent survenir : bris d’objet, perte de clé, etc. C’est pourquoi toutes nos prestations sont couvertes par une police d’assurances. Au moindre souci, nous sommes à vos côtés.</p>
</div>
</div>
</div>
</section> <br>
<section class="bg-white section-pdt-5">
<div class="container p-3 p-sm-0">
<div class="row inv pb-3 pb-sm-0">
<div class="col-sm-6">
<h2>Le ménage à domicile, accessible à tous.</h2>
<p><p>Pendant longtemps, commander du ménage à domicile est un service qui a semblé se réserver à quelques uns.</p>
<p>À ceux qui financièrement pouvaient se permettre de payer des sommes affolantes pour une heure de prestation. À ceux qui avaient la patience d’attendre plusieurs jours avant que leur commande ne s’exécute. Ou encore à ceux qui avaient le courage de braver la paperasse relative à l’emploi direct d’une aide ménagère.</p>
<p>Aujourd’hui avec Kliner, ce temps est révolu. Le ménage à domicile est désormais accessible à tous et pour toutes les situations.</p>
<p>Que vous soyez à Paris ou ailleurs ; que votre budget soit restreint ou illimité ; que vous soyez maniaque ou tout juste exigeant… avec l’application du ménage à domicile, vous pouvez désormais trouver une aide ménagère de qualité, fiable et à un coût accessible.</p>
<p>De plus, vous commandez en 30 secondes, la prestation peut démarrer dans les 2 heures, le service est de qualité et l’administratif est supprimé.</p>
<p>De petites avancées, mais une véritable révolution pour le ménage à domicile.</p>
</p>
</div>
<div class="offset-sm-1 col-sm-5 pb-3 pb-sm-0">
<div class="blockImage" style="background-image:url('images/menage (1).jpg'); background-size:cover; background-position: center; background-repeat: no-repeat; min-height: 100%;"></div>

</div>

</div>

</div>

</section>












@include('include.footer')

@endsection
