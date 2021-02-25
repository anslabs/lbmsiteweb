@extends('website.layouts.app') 
@section('title')
    {{ __('Nos accessoires de marque et d\'origine| Site web officiel') }}
@endsection
@section('content')
    <!-- Begin Page Content -->

<main id="main">
  <section id="accessoires-section-1" class="d-flex flex-column justify-content-center"  style=" background:#f5f8fd url('{{ asset('images/') }}/{{ '31.png' }}') center center no-repeat; background-size: cover;">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <!--h1 class="" syle="color:#1c54b2">Pièces et Accessoires d'origine!</h1-->
    </div>
  </section><!-- End Hero -->




    <!-- ======= About Section ======= -->
    <section id="" class="about section-bg-light py-5"  style="background-color: #1c54b2;">

      <div class="container" data-aos="fade-up">
		<div class="row">

     
      <div class="col-lg-6 d-flex flex-column justify-content-center text-white">
        <h3 style="font-weight:bold;">Michelin</h3>
        <p class=" d-block">
          Le pneu Michelin allie sécurité, adhérence, tenue de route et confort de conduite pour tous les conducteurs. Avec les pneus Michelin, c'est un Choix gagnant, durable et sécurisant pour vous.      
      </p>
      </div>
      <div class="col-lg-6 ">
        <img class="img-fluid lbm-img" alt="accessoires" src="{{ asset('images/') }}/{{ 'a-2.png' }}"/>
      </div>


    </div>

  </div>

</section>


    <!-- ======= About Section ======= -->
    <section id="" class="about py-5" style="background-color: #fff;">

      <div class="container" data-aos="fade-up">
		<div class="row">
          
      <div class="col-lg-6 ">
        <img class="img-fluid lbm-img" alt="accessoires" src="{{ asset('images/') }}/{{ 'a-3.jpg' }}"/>
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h3 style="font-weight:bold;color:#1c54b2">Nos huiles</h3>
        <p>LBM est partenaire exclusif de CASTROL pour la fourniture des huiles pour vos moteurs au Bénin. Ces huiles répondent aux caractéristiques de vos moteurs dont elles exploitent pleinement le potentiel en matière de performances, d’efficience et de durée de vie. Lors de l’entretien de votre véhicule dans nos garages, procurez-vous des lubrifiants Castrol.</p>
      </div>

    </div>

  </div>

</section>

    <!-- ======= About Section ======= -->
    <section id="" class="about section-bg-light text-white py-5">

      <div class="container" data-aos="fade-up">
    		<div class="row">

      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h3 style="font-weight:bold;">Exide</h3>
        <p>
        Exide est pionnière dans l’innovation de batteries automobiles. Nous disposons d'une gamme de battéries de haute qualité conçues pour assurer de nombreuses années d'utilisation et pour garder votre véhicule en marche.      
      </p>
      </div>

      <div class="col-lg-6 ">
        <img class="img-fluid lbm-img" alt="accessoires" src="{{ asset('images/') }}/{{ 'a-4.png' }}"/>
      </div>
    </div>

  </div>

</section>


    <!-- ======= About Section ======= -->
    <section id="about" class="about py-5" style="background-color: #fff;">

      <div class="container" data-aos="fade-up">
		<div class="row">

      <div class="col-lg-6 ">
        <img class="img-fluid lbm-img" alt="accessoires" src="{{ asset('images/') }}/{{ 'a-1.jpg' }}"/>
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h3 style="font-weight:bold;color:#1c54b2">Nos pièces et accessoires</h3>
			  <p class="">Nous fournissons uniquement des pièces d'origine dans nos boutiques LBM  Accessoires afin de garantir les normes de performance les plus élevées de vos véhicules.</p>
      </div>

    </div>

  </div>

</section>



<!-- End About Section -->



</main><!-- End #main -->

@endsection