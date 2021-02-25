@extends('website.layouts.app') 
@section('title')
    {{ __('Accueil LBM | Site web officiel') }}
@endsection
@section('content')
<main id="main">
<!-- ======= Breadcrumbs ======= 
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">Home</a></li>
      <li>Portfolio Details</li>
    </ol>
    <h2>Portfolio Details</h2>

  </div>
</section>--><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details pb-5">
  <div class="container" data-aos="fade-up">

    <div class="portfolio-details-container">

      <div class="owl-carousel portfolio-details-carousel">
        <img src="{{ asset('vehicules/') }}/{{ $vehicle->image1 }}" class="img-fluid" alt="">
        @if($vehicle->image2   != null)
            <img src="{{ asset('vehicules/') }}/{{ $vehicle->image2 }}" class="img-fluid" alt="">
        @endif
        @if( $vehicle->image3 != null)
            <img src="{{ asset('vehicules/') }}/{{ $vehicle->image3 }}" class="img-fluid" alt="">
        @endif
        @if( $vehicle->image4  != null)
            <img src="{{ asset('vehicules/') }}/{{ $vehicle->image4 }}" class="img-fluid" alt="">
        @endif
        @if( $vehicle->image5  != null)
            <img src="{{ asset('vehicules/') }}/{{ $vehicle->image5 }}" class="img-fluid" alt="">
        @endif
      </div>

      <div class="portfolio-info">
        <h3>A propos du véhicule</h3>
        <ul>
          <li><strong>Marque</strong>: {{ $vehicle->name_marque }}</li>
          <li><strong>Modèle</strong>: {{ $vehicle->model }}</li>
          <li><strong>Moteur </strong>: {{ $vehicle->moteur }}</li>
        </ul>
      </div>

    </div>

    <div class="portfolio-description">
      <h2>Description</h2>
      <p>{{ $vehicle->description }}</p>
    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->


    <!-- /.container-fluid -->
@endsection