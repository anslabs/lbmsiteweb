@extends('website.layouts.app') 
@section('title')
    {{ __('Vente de véhicules toute marque| Site web officiel') }}
@endsection
@section('content')
    <!-- Begin Page Content -->
<main id="main" class="pt-5">
	  	<!--div class="col-md-4 ">
				<img style="max-height = 500px;" src="{{ asset('images/') }}/{{ 'estimation.png' }}" alt="" class="img-responsive">
			</div-->
<!-- ======= About Section ======= -->
<section id="about" class="about">

  <div class="container" style="padding-top: 90px;" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-8">
        <div class="" data-aos="fade-right" data-aos-delay="100">
          <!-- <h3>Nos modèles les plus vendus au meilleur prix</h3> -->
        <h3 style="font-weight:bold;">Trouvez votre véhicule</h3>
        <div class="clearfix"></div>
        <div class="row">
       
                @foreach($vehicles as $new_vehicles)
				<div class="col-md-4 col-lg-4 d-inline-block p-1" >
					<img src="{{ asset('vehicules/') }}/{{ $new_vehicles->image1 }}" alt="{{ $new_vehicles->model }}" class="img-fluid img-h-100" />
					<p><a href="{{ url('/vehicules') }}/{{ $new_vehicles->id }}" class="small">{{ $new_vehicles->model }}</a></br>
                    <Span class="small">{{ $new_vehicles->moteur }}</span><br/>
                </div>			  
				@endforeach

 <!-- 
            <div class="col-md-4 col-lg-3 d-inline-block" >
                <img src="{{ asset('images/') }}/{{ '100.webp' }}" alt="" style="max-height: 90px" class="img-responsive" >
                <p><a href="#" class="">Ford Ranger 3.2 L</a><br/>
                <Span class="small">Diesel</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>			  
            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '101.png' }}" alt="" style="max-height: 90px"  class="img-responsive">
                <p><a href="#" class="">Frod Raptor</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>			  
            <div class="col-md-4 col-lg-3 d-inline-block">
            <img src="{{ asset('images/') }}/{{ '102.jpg' }}" alt="" style="max-height: 90px" class="img-responsive" >
                <p><a href="#" class="">Ford Ranger 2.2L XL</a><br/>
                <Span class="small">Diesel</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>			  
            <div class="col-md-4 col-lg-3 d-inline-block">
            <img src="{{ asset('images/') }}/{{ '109.png' }}" alt="" style="max-height: 90px" class="img-responsive" >
                <p><a href="#" class="">Ford Ranger 2.2 L</a><br/>
                <Span class="small">Diesel - D/CAB</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block" >
            <img src="{{ asset('images/') }}/{{ '103.png' }}" alt="" style="max-height: 90px" class="img-responsive" >
                <p><a href="#" class="">Ford Ranger 2.2 L</a><br/>
                <Span class="small">Diesel - S/CAB</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 
            <div class="col-md-4 col-lg-3 d-inline-block">
            <img src="{{ asset('images/') }}/{{ '102.jpg' }}" alt="" style="max-height: 90px" class="img-responsive" >
                <p><a href="#" class="">Ford Ranger 2.5 L</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 
            <div class="col-md-4 col-lg-3 d-inline-block">
            <img src="{{ asset('images/') }}/{{ '110.png' }}" alt="" style="max-height: 90px" class="img-responsive" >
                <p><a href="#" class="">Ford F150 Platinum</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 
            <div class="col-md-4 col-lg-3 d-inline-block">
            <img src="{{ asset('images/') }}/{{ '108.png' }}" alt="" style="max-height: 90px" class="img-responsive" >
                <p><a href="#" class="">Ford Ranger XLT 3.2 L</a><br/>
                <Span class="small">Diesel</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 
            <div class="col-md-4 col-lg-3 d-inline-block" >
            <img src="{{ asset('images/') }}/{{ '111.jpg' }}" alt="" style="max-height: 90px" class="img-responsive" >
                <p><a href="#" class="">Ford Ranger XLT 2.2 L</a><br/>
                <Span class="small">Diesel</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 
            <div class="col-md-4 col-lg-3 d-inline-block">
            <img src="{{ asset('images/') }}/{{ '105.png' }}" alt="" style="max-height: 90px" class="img-responsive" >
                <p><a href="#" class="">Ford Ecosport</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 
            <div class="col-md-4 col-lg-3 d-inline-block">
            <img src="{{ asset('images/') }}/{{ '106.png' }}" alt="" style="max-height: 90px" class="img-responsive" >
                <p><a href="#" class="">Ford Everest</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 
            <div class="col-md-4 col-lg-3 d-inline-block">
            <img src="{{ asset('images/') }}/{{ '107.png' }}" alt="" style="max-height: 90px" class="img-responsive" >
                <p><a href="#" class="">Ford Explorer</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '112.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">Ford Transit VAN</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '113.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">Ford Transit 15 P</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '114.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">Ford Transit 18 P</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '115.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">Construction Série</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	
            
            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '116.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">D-max 250 Base S/CAB</a><br/>
                <Span class="small">Diesel</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '117.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">D-max 250 Base D/CAB</a><br/>
                <Span class="small">Diesel</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '118.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">D-MAX 250 X-RIDER D/CAB</a><br/>
                <Span class="small">Diesel</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 


            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '119.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">D-max 300 LS M/T</a><br/>
                <Span class="small">Diesel</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 


            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '120.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">D-max 300 LS A/T</a><br/>
                <Span class="small">Diesel</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '121.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">ISUZU F-Séries</a><br/>
                <Span class="small">Diesel</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '122.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">ISUZU N-Séries</a><br/>
                <Span class="small">Diesel</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '123.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">BMW série 3</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '124.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">BMW série 4</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '125.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">BMW série 5</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '126.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">BMW série 6</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '127.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">BMW série 7</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '128.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">BMW X1</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '129.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">BMW X3</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '130.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">BMW X4</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '131.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">BMW X5</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '132.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">BMW X6</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '133.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">BMW X7</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 
	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '134.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">DISCOVERY</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '135.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">RANGE ROVER SPORT</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '136.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">RANGE ROVER AUTOBIOGRAPHY</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '137.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">RANGE ROVER VELAR</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '138.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">RANGE ROVER EVOQUE</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '139.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">Jaguar XF</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '140.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">Jaguar F-PACE</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '141.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">CHEVROLET TRAX</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '142.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">MARCOPOLO VIAGGIO 1050</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '143.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">MARCOPOLO TORINO</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	 

            <div class="col-md-4 col-lg-3 d-inline-block">
                <img src="{{ asset('images/') }}/{{ '144.png' }}" alt="" style="max-height: 90px" class="img-responsive">
                <p><a href="#" class="">SCANIA P360</a><br/>
                <Span class="small">Essence</span><br/>
                <small>à partir de 15.000.000 XOF</small></p>
            </div>	
            
-->

        </div>
        </div>
      </div>

      <div class="col-lggl">
        <h3 style="font-weight:bold;">Filtrer par marque</h3>

        <div class="about-content " data-aos="fade-left" data-aos-delay="100" style="padding-top:0px;">
          <!-- <h3>Nos marques</h3> -->
          <ul>
                @foreach($marques as $marque)
                <li><a href="{{ url('/services/vente') }}/{{ $marque->id }}" class="small"><i class="ion-android-checkmark-circle"></i> {{ $marque->name }}</a></li>			  
                @endforeach
            <li><a href="{{ url('/services/vente') }}" class="custom-btn" style= "color: #fff;">Voir tous nos modèles <i class="fa fa-chevron-right ml-3"></i></a></li>
          </ul>
        </div>
      </div>
        
    </div>
  </div>

</section>
<!-- End About Section -->


</main><!-- End #main -->


    <!-- /.container-fluid -->
@endsection