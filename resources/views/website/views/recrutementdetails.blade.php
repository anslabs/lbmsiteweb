@extends('website.layouts.app') 
@section('title')
    {{ __('Accueil LBM | Site web officiel') }}
@endsection
@section('content')
<main id="main" style ="margin-top:80px;">
<!-- ======= Breadcrumbs ======= 

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details pb-5">
  <div class="container" data-aos="fade-up">

    <div class="row">
        <h1>{{ $annonce->titre }}</h1>
        <div>
            {!! $annonce->article !!}
        </div>
    </div>


  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->


    <!-- /.container-fluid -->
@endsection