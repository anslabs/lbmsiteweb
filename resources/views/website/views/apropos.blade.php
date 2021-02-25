@extends('website.layouts.app') 
@section('title')
    {{ __('A proposd de LBM | Site web officiel') }}
@endsection
@section('content')
    <!-- Begin Page Content -->
    <main id="main">
  <section id="about-section-1" class="d-flex flex-column justify-content-center" style=" background:#f5f8fd url('{{ asset('images/') }}/{{ $bg->image }}') center top no-repeat; background-size: cover;">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <!--h1 class="text-white" style="font-size: 4rem;">LBM, Notre passion vous transporte</h1-->
    </div>
  </section><!-- End Hero -->

	
	<!--section id="about" class="about faq">

      <div class="container" data-aos="fade-up">
		<h4 class="text-center" style="margin-bottom:80px;">LBM SA a été créé en 2011 par M. ALAPINI. LBM est aujourd'hui plus qu'un concessionnaire de véhicules, elle est une SA avec un CA et exerce dans plusieurs secteurs d'activité.</h4>
	
		<div class="row">
			<h6 style="font-weight:bold;">LBM, Une philosophie et un engagement client </h6>
			<p>
				Un modèle d'engagement basé sur la culture du leadership et de l’excellence en mettant un accent particulier sur la qualité des prestations.
				Notre vision est d'Etre perçu comme leader dans nos différents secteurs d’activité et contribuer au développement économique, social et culturel du Bénin.
				Notre mission est d'assurer la pleine satisfaction des clients, des partenaires financiers, des actionnaires et du personnel.
				Nos valeurs sont: Satisfaction des clients - Intégrité - Acceuil- Respect.
			</p>
			<p></p>
			
			<h6 style="font-weight:bold;">LBM, leader du marché dans ses secteurs d'activité</h6>

			
        </div>
      </div>

	</section-->
	
	<section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 style="">LBM, première entreprise automobile certifiée ISO 9001 au Bénin</h2>
          <p class="text-justify">
			  La société LBM SA, une entreprise de droit Béninois, est créée en 2007. 
			  Au Bénin, l’exclusivité de la commercialisation des véhicules neufs de marques Premium comme BMW, JAGUAR, LAND ROVER et FORD et d’autres marques  bien connus  dans le monde comme ISUZU et CHEVROLET, en berline, SUV,  pick-up sont du portefeuille du Groupe LBM . 
			  Il en est de même des camions et groupes électrogènes SCANIA qui sont distribués depuis plusieurs années.  
			  Les ventes de voitures   bénéficient du service après-vente de qualité avec les   garages professionnels qui assurent sur place la disponibilité des pièces détachées.
			  Pour un service complet, LBM s’investit également dans   la distribution des accessoires automobiles tels que  les pneumatiques MICHELIN, les lubrifiants CASTROL, les batteries EXIDE et autres, ainsi que les produits pétroliers avec des station-services.
			  La location de véhicules avec son partenaire allemand SIXT, constitue un domaine de prédilection de LBM qui met un accent sur le confort et la satisfaction de la clientèle.  
			  Le Groupe LBM ,  première entreprise  automobile au Bénin à être certifiée ISO 9001,  se distingue également dans les secteurs de la communication, des BTP et  de l’hôtellerie .
			  
			  
			  
			  <!--Elle est spécialisée dans la location et la vente de véhicules de marques Premium(BMW, JAGUAR, LAND ROVER) et d'autres marques comme ISUZU, CHEVROLET et FORD, en berline, 4x4, et pick-up, et SCANIA pour camions et groupes électrogènes. LBM SA est implantée au Bénin et dans d'autres pays de la sous-région ouest-Africaine.-->
			</p>
			<!--p>
				Première société automobile au Bénin à être certifiée ISO 9001 version 2008 en 2014, LBM SA est passée à la
				nouvelle version ISO 9001 VERSION 2015 et émerge progressivement . A ses activités de vente de véhicules neufs
				et de location de véhicules avec Sixt, elle complète la gamme de ses produits avec la distribution des accessoires
				automobiles tels que les pneumatiques MICHELIN, les lubrifiants CASTROL, les batteries EXIDE et autres
				accessoires automobiles comme les Fullbox - Sportlid - pare buffles - Canopi - Starlux - Marche-pieds, ainsi que les
				produits pétroliers avec des stations-service, bientôt étendues dans tout le pays. Elle est également présente dans les
				secteurs de la communication, des BTP et de l’hôtellerie.
				Grâce à son Service Après-Vente et ses garages professionnels, LBM SA reste rassurante pour ses clients en terme
				de garantie et de maintenance. Avec un capital de 1,5 milliard FCFA soit 3 millions USD, la société LBM dispose de
				plusieurs unités commerciales à Cotonou et a, à sa tête un Conseil d’Administration.
			</p-->
        </div>
		<div class="faq-list">
          <ul>
            <li data-aos="fade-up">
               <a data-toggle="collapse" class="collapse" href="#faq-list-1">NOTRE VISION / OUR VISION STATEMENT<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse  text-white" data-parent=".faq-list">
				
			  	<div class="media">
					<img class="mr-3" src="{{ asset('images/') }}/{{ 'eye.png' }}" alt="Generic placeholder image">
					<div class="media-body mt-3 ">
						Etre le leader dans nos différents secteurs d’activités et contribuer au développement économique, social et culturel du Bénin.
						<br>
						<br>
						Being the leader in our various sectors of operations and contributing to the economic, social and cultural development of Benin.
					</div>
				</div>


              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
               <a data-toggle="collapse" href="#faq-list-2" class="collapsed">NOTRE MISSION / OUR MISSION <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse text-white" data-parent=".faq-list">
				
			  <div class="media">
					<img class="mr-3 pt-3" src="{{ asset('images/') }}/{{ 'target.png' }}" alt="Generic placeholder image">
					<div class="media-body mt-3 ">
					Assurer la pleine satisfaction des clients, des partenaires, des actionnaires et du personnel.
					<br>
					<br>
						Ensuring the full satisfaction of customers, partners, shareholders and staff.
					</div>
				</div>



            <li data-aos="fade-up" data-aos-delay="200">
               <a data-toggle="collapse" href="#faq-list-3" class="collapsed">NOS VALEURS / OUR VALUES<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse text-white" data-parent=".faq-list">
			  <div class="media">
					<img class="mr-3 pt-3" src="{{ asset('images/') }}/{{ 'value.png' }}" alt="Generic placeholder image">
					<div class="media-body mt-3 ">
					Intégrité - Excellence - Innovations
					<br>
					<br>
					Integrity - Excellence - Innovation
						
					</div>
				</div>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
               <a data-toggle="collapse" href="#faq-list-4" class="collapsed">NOTRE MODELE DE MANAGEMENT / OUR MANAGEMENT MODEL <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse text-white" data-parent=".faq-list">
			  <div class="media">
					<img class="mr-3 pt-3" src="{{ asset('images/') }}/{{ 'team.png' }}" alt="Generic placeholder image">
					<div class="media-body mt-3 ">
					Il est basé sur la culture du leadership et de l’excellence avec un accent particulier sur la qualité des prestations.
					<br>
					<br>
					It is based on the developement of leadership and excellence, with a particular emphasis on the service quality.
						
					</div>
				</div>
              </div>
            </li>


          </ul>
        </div>

       
      </div>
    </section><!-- End Frequently Asked Questions Section -->

<!-- End About Section -->


  </main><!-- End #main -->



    <!-- /.container-fluid -->
@endsection