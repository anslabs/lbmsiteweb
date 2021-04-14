@extends('website.layouts.app') 
@section('title')
    {{ __('Accueil LBM | Site web officiel') }}
@endsection
@section('content')
    
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
  	<div class="carousel-inner " >

		@foreach($bgs as $index => $bg)
			<div class="carousel-item @if ($index == 0) active @endif w-100">
				<img src="{{ asset('images/') }}/{{ $bg->image }}" class="d-block  w-100 img-fluid" alt="..." style="max-height: ;" >
				<div class="carousel-caption d-none d-md-block">
				</div>
			</div>	
		@endforeach	

	</div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- print success message after file upload  -->
@if(Session::has('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
	{{ Session::get('success') }}
	@php
	Session::forget('success');
	@endphp
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
	@endif

  <main id="main">

	    <!-- ======= Services Section ======= -->
		<section id="services" class="services section-bg">
			<div class="container" data-aos="fade-up">
				<!--header class="section-header">
					<h3>NOS MARQUES</h3>
			  	</header-->
			
			<div class="row">
         
				@foreach($marques as $marque)

				<div class="col-md-6 col-lg-3 mb-5">
					<a href="@if($marque->marqueurlpath == null || $marque->marqueurlpath =="") {{ url('services/vente/') }}/{{ $marque->id }} @else {{ $marque->marqueurlpath }} @endif">

					<div class="card border-0">
						<img class="card-img-top" src="{{ asset('marques/') }}/{{ $marque->logo }}" />
						<div class="card-body">
							<h5 class="card-title text-uppercase"><strong>{{ $marque->name }}</strong></h5>
							<p class="card-text small text-capitalize">{{ $marque->slogan }}</p>
						</div>
					</div>
					</a>
				</div>
				 
				@endforeach		
			</div>


			</div>
		</section><!-- End Services Section -->

		<!--section class="section-bg">
			<div class="container">
				<header class="section-header">
					<h3>EN VEDETTE</h3>
				</header>
			</div>
		</section-->
	
    <!-- ======= About Section ======= https://www.youtube.com/watch?v=jDDaplaOz7Q -->
    <section id="why-us" class="why-us">
		<div class="container-fluid">
  
		  <div class="row">
  
			<div class="col-lg-12 align-items-stretch video-box" style='background-image: url("{{ asset('images/') }}/{{ 'fraptor.jpg' }}");' data-aos="fade-right">
			  <a href="https://www.youtube.com/watch?v=ugdq9qkMN54" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
			</div>  
		  </div>
  
		</div>
	  </section>

  
	  <!--section id="services" class="services section-bg">
		<div class="container" data-aos="fade-up">
		
			<header class="section-header">
			<h3>NOS SERVICES</h3>
		  </header>
		
		<div class="row">
		<div class="col-md-6 col-lg-4 mb-5">
		  <div class="card  border-top border-primary ">
			  <div class="card-body">
			  <h5 class="card-title" style="color:#0563bb">Vente de véhicules</h5>
			  <p class="card-text small">LBM commercialise des véhicules neufs de marque FORD, BMW, LAND ROVER, JAGUAR, SCANIA, ISUZU et CHEVROLET.</p>
				  <a href="{{ url('/services/vente') }}" class="btn" style="background-color:#0563bb; color:#fff">Voir nos véhicules  <i class="fa fa-chevron-right ml-3"></i></a>
			  </div> 
		  
		  </div>
		</div>
		
		<div class="col-md-6 col-lg-4 mb-5">
		  <div class="card  border-top border-success ">
			  <div class="card-body">
			  <h5 class="card-title" style="color:#0563bb">Location de véhicules</h5>
				  <p class="card-text small">LBM en partenariat avec SIXT Location de voitures dispose des solutions à vos problèmes de mobilité à travers une flotte de véhicules de haut standing.</p>
				  <a href="{{ url('/services/location') }}" class="btn" style="background-color:#0563bb; color:#fff">Nos offres de location  <i class="fa fa-chevron-right ml-3"></i></a>
			  </div> 
		  </div>
		</div>
		
		<div class="col-md-6 col-lg-4 mb-5">
		<div class="card  border-top border-danger ">
  
		<div class="card-body   ">
		<h5 class="card-title" style="color:#0563bb">Garage professionnel</h5>
				  <p class="card-text small">Deux Garages professionnels au stand international assurent le service après-vente et la maintenance de vos véhicules.</p>
				  <a href="{{ url('/services/sav') }}" class="btn" style="background-color:#0563bb; color:#fff">Nos garages  <i class="fa fa-chevron-right ml-3"></i></a>
				  </div>
				  </div>
		</div>
		
		
		<div class="col-md-6 col-lg-4 mb-5">
		<div class="card  border-top border-warning ">
	
			<div class="card-body">
		<h5 class="card-title" style="color:#0563bb">Accessoires</h5>
				  <p class="card-text small">Nos boutiques vous fournissent, selon les marques, des accessoires automobiles et des lubrifiants d'origine.</p>
				  <a href="{{ url('/services/accessoires') }}" class="btn" style="background-color:#0563bb; color:#fff">Nos Accessoires  <i class="fa fa-chevron-right ml-3"></i></a>
		  </div>
		  </div>
		  </div>
		
		<div class="col-md-6 col-lg-4 mb-5">
		<div class="card  border-top border-info ">
  
		<div class="card-body">
		<h5 class="card-title " style="color:#0563bb">Station</h5>
				  <p class="card-text small">Nos stations-services assurent la distribution des produits pétroliers à cotonou, en permanence avec une équipe dynamique.</p>
				  <a href="{{ url('/services/accessoires') }}" class="btn" style="background-color:#0563bb; color:#fff">Nos stations  <i class="fa fa-chevron-right ml-3"></i></a>
				  </div>
				  </div>
		</div>
		
		<div class="col-md-6 col-lg-4 mb-5 ">
		<div class="card  border-top border-secondary ">
  
		<div class="card-body ">
		<h5 class="card-title" style="color:#0563bb">Régie publicitaire</h5>
				  <p class="card-text small">Canal Com SA, l'une des meilleures agences de communication globale des entreprises au Bénin, offre un ensemble de prestations spécifiques.</p>
				  <a target="_blank" href="https://canalcombenin.com" class="btn" style="background-color:#0563bb; color:#fff">Notre Régie publicitaire  <i class="fa fa-chevron-right ml-3"></i></a>
				  </div>
				  </div>
		</div>
	  
		
		</div>
  
		
		</div>
  
		</div>
	  </section--><!-- End Services Section -->
  
		<!-- ======= Why Us Section ======= -->
		<section style="">

				<div class="container-fluid  " >
					<div class="row ">
						<div class="clearfix col-lg-8 col-md-6 px-0 d-flex justify-content-center align-items-center" style="background-color: #1c54b2">

							<h1 class="text-white" style="font-size: 2.3rem; font-style:italic;">Un service clé en main pour vos besoins de mobilité</h1> 
							
						</div>
						<div class="clearfix col-lg-4 col-md-6 px-0">

							<a href="{{ url('/services/vente') }}" class="text-white">
								<div class="fixOverlayDiv clearfix">
									<img alt="offer banner1" class="category-banner img-fluid" src="{{ asset('images/') }}/{{ 's-1-l.jpg' }}">
									<div class="OverlayText  py-3">
										<h5 class="card-title px-2" style="">Vente de véhicules</h5>
										<p class="card-text small px-2">LBM commercialise des véhicules neufs de marque FORD, BMW, LAND ROVER, JAGUAR, SCANIA, ISUZU et CHEVROLET.</p>
											<a href="{{ url('/services/vente') }}" class="btn float-left" style="color:#fff">Voir nos véhicules </a>  <a class="btn float-right  text-white"><i class=" fa fa-chevron-right "></i></a>
						  
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="container-fluid " >
	
					<div id="DivOurProducts" class="row">

								<!--div class="col-lg-4 col-md-6 clearfix px-0">
									<a href="{{ url('/services/location') }}" class="text-white ">
										<div class="fixOverlayDiv clearfix">
											<img alt="offer banner1" class="category-banner img-fluid" src="{{ asset('images/') }}/{{ 's-2-l.jpg' }}">
											<div class="OverlayText py-3">
												<h5 class="card-title px-2" style="">Location de véhicules</h5>
												<p class="card-text small px-2">LBM en partenariat avec SIXT Location de voitures dispose des solutions à vos problèmes de mobilité à travers une flotte de véhicules de haut standing.</p>
													<a href="{{ url('/services/location') }}" class="btn float-left" style="color:#fff">Location de véhicules</a>  <a class="btn float-right  text-white"><i class=" fa fa-chevron-right "></i></a>

											</div>
										</div>
									</a>
								</div-->

								<div class="col-lg-6 col-md-6 clearfix px-0">
									<a href="{{ url('/services/sav') }}" class="text-white ">
										<div class="fixOverlayDiv">
											<img alt="offer banner1" class="category-banner img-fluid" src="{{ asset('images/') }}/{{ 's-3-0-l.jpg' }}">
											<div class="OverlayText py-3">
												<h5 class="card-title px-2" style="">Garage professionnel</h5>
												<p class="card-text small px-2">Deux Garages professionnels au stand international assurent le service après-vente et la maintenance de vos véhicules.</p>
													<a href="{{ url('/services/sav') }}" class="btn float-left" style="color:#fff">Nos garages</a>  <a class="btn float-right  text-white"><i class=" fa fa-chevron-right "></i></a>							  

											</div>
										</div>
									</a>
								</div>

								<div class="col-lg-6 col-md-6 clearfix px-0">
									<a href="{{ url('/services/vente') }}" class="text-white">
										<div class="fixOverlayDiv clearfix">
											<img alt="offer banner1" class="category-banner img-fluid" src="{{ asset('images/') }}/{{ 's-1-l.jpg' }}">
											<div class="OverlayText  py-3">
												<h5 class="card-title px-2" style="">Accessoires</h5>
												<p class="card-text small px-2">Nos boutiques vous fournissent, selon les marques, des accessoires automobiles et des lubrifiants d'origine.</p>
													<a href="{{ url('/services/accessoires') }}" class="btn float-left" style="color:#fff">Nos Accessoires </a>  <a class="btn float-right  text-white"><i class=" fa fa-chevron-right "></i></a>
								  
											</div>
										</div>
									</a>
								</div>


					</div>
				</div>

				<div class="container-fluid  " >
					<div class="row ">
						<div class="col-lg-4 col-md-6 clearfix px-0">
							<a href="{{ url('/services/location') }}" class="text-white ">
								<div class="fixOverlayDiv clearfix">
									<img alt="offer banner1" class="category-banner img-fluid" src="{{ asset('images/') }}/{{ 's-2-l.jpg' }}">
									<div class="OverlayText py-3">
										<h5 class="card-title px-2" style="">Location de véhicules</h5>
										<p class="card-text small px-2">LBM en partenariat avec SIXT Location de voitures dispose des solutions à vos problèmes de mobilité à travers une flotte de véhicules de haut standing.</p>
											<a href="{{ url('/services/location') }}" class="btn float-left" style="color:#fff">Location de véhicules</a>  <a class="btn float-right  text-white"><i class=" fa fa-chevron-right "></i></a>

									</div>
								</div>
							</a>
						</div>
						<!--div class="clearfix col-lg-4 col-md-6 px-0">

							<a target="_blank" href="https://canalcombenin.com" class="text-white">
								<div class="fixOverlayDiv clearfix">
									<img alt="offer banner1" class="category-banner img-fluid" src="{{ asset('images/') }}/{{ 's-5.jpg' }}">
									<div class="OverlayText  py-3">
										<h5 class="card-title px-2" style="">Régie publicitaire</h5>
										<p class="card-text small px-2">Canal Com SA, l'une des meilleures agences de communication globale des entreprises au Bénin, offre un ensemble de prestations spécifiques.</p>
											<a target="_blank" href="https://canalcombenin.com" class="btn float-left" style="color:#fff">Voir nos véhicules </a>  <a class="btn float-right  text-white"><i class=" fa fa-chevron-right "></i></a>
						  											
									</div>
								</div>
							</a>
						</div-->

						<div class="clearfix col-lg-8 col-md-6 px-0 d-flex justify-content-center align-items-center" style="background-color: #fff">
							<div class="row px-md-5">
								<h1 class="" id="canalcomfont" style="color:#1c54b2; font-size:3rem ">Boost yourself</h1> 
								<p>
									Nous prenons des mesures de sécurité, pour vous et pour nous; Face au COVID-19, Lbm-Sixt location de voitures vous protège. Nous mettons un point d'honneur sur le respect des consignes par nos conducteurs. Nos véhicules sont systématiquement désinfectés avant et après chaque mission. Faites-nous confiance ! Votre sécurité, notre préoccupation ! Sixt-Lbm location de voitures, contact 60 60 60 63 - 95160002.
	
								</p>
							</div>
							<!--h1 class="" id="canalcomfont" style="color:#1c54b2; font-size:3rem ">Votre communication dans toutes ses facettes</h1--> 
							
						</div>

					</div>
				</div>

		</section>


	<section id="medias" class="medias " style="padding-top: 80px; padding-bottom:80px; background-color:#1c54b2;">
      <div class="container" data-aos="fade-up">

        <div class="row owl-carousel news-carousel">
			<div class="px-2">
				<div class="embed-responsive embed-responsive-16by9 px-2">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_2OpbH2r1Qg" allowfullscreen></iframe>
				</div>
			</div>

			<div class="px-2">
				<div class="embed-responsive embed-responsive-16by9 px-2">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kN__AYPJrdY" allowfullscreen></iframe>
				</div>
			</div>

			<div class="px-2">
				<div class="embed-responsive embed-responsive-16by9 px-2">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kXQzDs3ZeRU" allowfullscreen></iframe>
				</div>
			</div>
		
			<div class="px-2">
				<div class="embed-responsive embed-responsive-16by9 px-2">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/G5FJIA9ogMU" allowfullscreen></iframe>
				</div>
			</div>
			
			<div class="px-2">
				<div class="embed-responsive embed-responsive-16by9 px-2">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/t9XO3sbEgXQ" allowfullscreen></iframe>
				</div>
			</div>
		
			<div class="px-2">
				<div class="embed-responsive embed-responsive-16by9 px-2">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RS8vrsutoOg" allowfullscreen></iframe>
				</div>
			</div>
		
			<div class="px-2">
				<div class="embed-responsive embed-responsive-16by9 px-2">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4b5YzYKFTiY" allowfullscreen></iframe>
				</div>
			</div>
		
			<div class="px-2">
				<div class="embed-responsive embed-responsive-16by9 px-2">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/q9u8ntn11-A" allowfullscreen></iframe>
				</div>
			</div>

        </div>

      </div>
	</section><!-- End Why Us Section -->
	
	    <!-- ======= Team Section ======= -->
		<section id="team" class="team  " style="padding-bottom: 80px; padding-top:80px; background-color:#dadada">
			<div class="container">
				<!--header class="section-header">
					<h3>Administration</h3>
					<p class="small">Notre équipe</p>
				  </header-->
			  <div class="row">
	  
				<div class="col-lg-6">
				  <div class="member d-flex align-items-start">
					<div class="pic"><img src="{{ asset('images/') }}/{{ 'team-1.jpg' }}" class="img-fluid" alt=""></div>
					<div class="member-info">
					  <h4>Valéry O. ALAPINI </h4>
					  <span>Président du Conseil d’Administration</span>
					  <!--p>Explicabo voluptatem mollitia et repellat</p-->
					  <div class="social text-white">
						<a target="_blank" href="https://www.linkedin.com/in/valeryalapini/"><i class="fa fa-twitter"></i></a>
						<a  target="_blank" href="https://web.facebook.com/valery.alapini" ><i class="fa fa-facebook"></i></a>
						<a target="_blank" href="https://www.youtube.com/channel/UCxt0PV8gMIqpMdpz-_KjVuw/"><i class="fa fa-youtube"></i></a>
						<a target="_blank" href="https://www.linkedin.com/company/lbm229/"> <i class="fa fa-linkedin"></i> </a>
					  </div>
					</div>
				  </div>
				</div>
	  
				<div class="col-lg-6 mt-4 mt-lg-0">
				  <div class="member d-flex align-items-start">
					<div class="pic"><img src="{{ asset('images/') }}/{{ 'team-2.jpg' }}" class="img-fluid" alt=""></div>
					<div class="member-info">
					  <h4>Emma DOSSOU A.</h4>
					  <span>Directrice Générale</span>
					  <!--p>Aut maiores voluptates amet et quis</p-->
					  <div class="social">
						<a target="_blank" href="https://twitter.com/lbm229"><i class="fa fa-twitter"></i></a>
						<a  target="_blank" href="https://web.facebook.com/lbm229" ><i class="fa fa-facebook"></i></a>
						<a target="_blank" href="https://www.youtube.com/channel/UCxt0PV8gMIqpMdpz-_KjVuw/"><i class="fa fa-youtube"></i></a>
						<a target="_blank" href="https://www.linkedin.com/company/lbm229/"> <i class="fa fa-linkedin"></i> </a>
					  </div>
					</div>
				  </div>
				</div>
	  
	  
			  </div>
	  
			</div>
		  </section><!-- End Team Section -->

	    <!-- ======= Call To Action Section ======= -->
		<section id="call-to-action" class="call-to-action">
			<div class="container-fluid" data-aos="zoom-out">
			  <div class="row text-white d-flex align-items-center">
				<div class="col-md-4 text-center ">
					  <a target="_blank" href="https://web.facebook.com/fondationlbm/">
						<img src="{{ asset('images/') }}/{{ 'fondation.png' }}" alt="" class="img-fluid" style="max-height:300px;">
					  </a>
				</div>

				<div class="col-md-8 clo-lg-7 pr-3 pt-4">
					<h1>Message de la <a target="_blank" href="https://web.facebook.com/fondationlbm/" class="text-white">Fondation LBM</a></h1>
					<p class="">
						Nous prenons des mesures de sécurité, pour vous et pour nous; Face au COVID-19, Lbm-Sixt location de voitures vous protège. Nous mettons un point d'honneur sur le respect des consignes par nos conducteurs. Nos véhicules sont systématiquement désinfectés avant et après chaque mission. Faites-nous confiance ! Votre sécurité, notre préoccupation ! Sixt-Lbm location de voitures, contact 60 60 60 63 - 95160002. 
					</p>
				</div>	  
			  </div>
	  
			</div>
		  </section>

  </main><!-- End #main -->

    <!-- /.container-fluid -->
@endsection