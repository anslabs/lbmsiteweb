@extends('website.layouts.app') 
@section('title')
    {{ __('Location de véhicules toute marque| Site web officiel') }}
@endsection
@section('content')
    <!-- Begin Page Content -->
<main id="main">
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
	
  <section id="location-section-1" class="d-flex flex-column justify-content-center"  style=" background:#f5f8fd url('{{ asset('images/') }}/{{ $bg->image }}') center top no-repeat; background-size: cover;">


	<div class="container" data-aos="zoom-in" data-aos-delay="100">
     	<div class="">
	 		<!--h1 class="" syle="color:#1c54b2; font-size: 4rem;">LBM Location & SIXT, vous offre le meilleur de la location automobile</h1-->
		</div>
    </div>
  </section><!-- End Hero -->

    
  <div class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="booking_container d-flex flex-row align-items-end justify-content-start">
						<form method="POST" action="{{ url('/bookCar') }}" class="booking_form">
		                  {{csrf_field()}}
							<div class="booking_form_container d-flex flex-lg-row flex-column align-items-start justify-content-start flex-wrap">
								<div class="booking_form_inputs d-flex flex-row align-items-start justify-content-between flex-wrap">
									<div class=""><input name="nom" type="text" class=" booking_input booking_input_a booking_in" placeholder="Nom Prénom" required="required"></div>
									<div class="">
										<input name="tel" type="phone" class="booking_input booking_input_a booking_out" placeholder="Téléphone" required="required">	
									</div>
									
									<div class="">
										<input name="email" type="email" class="booking_input booking_input_a booking_out" placeholder="Email" required="required">	
									</div>
									
									<div class="">
										<input name="days" type="text" class="booking_input booking_input_a booking_out" placeholder="Nombre de jours" required="required">	
									</div>
									
									<div class="">
										<input name="vehicule" type="text" class="booking_input booking_input_a booking_out" placeholder="Type de véhicule" required="required">	
									</div>
									
								</div>
								<input type="submit" class="booking_form_button ml-lg-auto" name="book" value="RESERVER"/>
								<!--button class="booking_form_button ml-lg-auto" name="book ">RESERVER</button-->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      	<div class="container" data-aos="fade-up">
			<div class="row">
				<h3 style="font-weight:bold;">LBM Location</h3>
				<p>Particuliers ou Entreprises, où vous voulez et quand vous voulez, nous mettons à votre disposition tous les véhicules de la gamme en location.</p>
				<p>Particuliers, pour vos vacances en famille, un week-end entre amis, un déménagement ou une immobilisation de votre véhicule personnel, vous bénéficierez toujours de la meilleure formule chez LBM & SIXT Location de voitures.</p>
				<p>Professionnels, pour faire face à vos pics d’activités ponctuelles ou à certaines saisonnalités, LBM & SIXT Location de voitures offrent une flexibilité idéale ainsi qu’un meilleur tarif.
				<p>Réservez toute suite en ligne ou contactez-nous directement par téléphone.</p>
			</div>
	
			<div class="row">
				<h3 style="font-weight:bold;">Notre flotte</h3>

				@foreach($vehicles as $new_vehicles)
				<div class="col-md-4 col-lg-4 d-inline-block p-1" >
					<img src="{{ asset('locations/') }}/{{ $new_vehicles->image1 }}" alt="{{ $new_vehicles->model }}" class="img-fluid img-h-100" />
					<p><a href="#" class="small">{{ $new_vehicles->model }}</a><br>
                    <Span class="small"> <strong>{{ $new_vehicles->name_marque }}</strong> </span><br/>
                </div>			  
				@endforeach	
			
			</div>
	
        	<div class="row">
			<h3 style="font-weight:bold;"><a target ="_blank" href="https://www.sixt.global/car-rental/benin">Réserver une voiture en location</a></h3>

            <div class="" data-aos="fade-right" data-aos-delay="100">
			  <!-- <h3>Nos modèles les plus vendus au meilleur prix</h3> -->
			<div class="clearfix"></div>
			
        </div>
      </div>

	</section>
<!-- End About Section -->


</main><!-- End #main -->
@endsection