@extends('website.layouts.app') 
@section('title')
    {{ __('Accueil LBM | Annonces de Recrutements') }}
@endsection
@section('content')
   

  <main id="main">



    <!-- ======= About Section ======= -->
    <section id="about" class="about" style ="margin-top:50px;">

        <div class="container" data-aos="fade-up">
            <div class="row">
    				@foreach($annonces as $annonce)
    				<div class="col-md-4 col-lg-3" >
    				    <div class="card bg-light text-primary  p-3">
                        <blockquote class="blockquote mb-0">
                          <div>{{ $annonce->titre }}</div>
                          <footer class="blockquote-footer">
                            <!--<small>-->
                            <!--  Someone famous in <cite title="Source Title">Source Title</cite>-->
                            <!--</small>-->
                            <a href="{{ url('/recrutements') }}/{{ $annonce->id }}" class="btn btn-primary">Ouvrir</a>
                          </footer>
                        </blockquote>
                      </div>
    					<!--<p><a href="{{ url('/vehicules') }}/{{ $annonce->id }}" class="small">{{ $annonce->titre }}</a></p>-->
    				</div>			  
    				@endforeach
            </div>
    </section>


  </main><!-- End #main -->

    <!-- /.container-fluid -->
@endsection