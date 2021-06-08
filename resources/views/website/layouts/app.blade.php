<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Scripts -->

    <meta name="description" content="Les Bagnoles motors, votre point de reference pour l'achat et l'entretien de votre vehicule en Afrique, Concessionnaire multimarque et première société automobile certifiée  ISO 9001 au bénin" />
    <meta name="keywords" content="Voiture, Bénin, SUV, Afrique, Pickups, voitures, camions, vente, entretien, réparation, Hyundai, BMW, Mazda, Mercedes-Bens, BMW, Mitsubishi, Ford, Fuso, Renault" />
    <meta name="publisher" content="LABS Sarl" />
    <meta name="copyright" content="Copyright 2021, Les Bganoles. All rights reserved." />
    <meta name="distribution" content="Global" />
    <meta name="robots" content="ALL" />
    <meta name="revisit-after" content="10 Days" />  <meta name="author" content="ANS LABS">

  <!-- Custom fonts for this template-->
    <link href="{{ asset('website/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/aos/aos.css') }}" rel="stylesheet">

      <!-- Template Main CSS File -->
    <link href="{{ asset('website/assets/css/style.css?v=').time() }}" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="{{ asset('vendors/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <!-- Custom styles for this template-->
<style>
    @media (max-width: 992px) {
      #header .logo img {
      max-height: 30px;
    }
    
}

@media (max-width: 767px) {
  #header .logo img {
  max-height: 25px;
}
}
</style>
</head>

<body id="page-top">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v8.0" nonce="VDdztI6h"></script>


  <!-- ======= Top Bar ======= -->
  <!--div id="topbar" class="d-none d-lg-flex align-items-end fixed-top">
    <div class="container d-flex ">
	  <div class="contact-info mr-auto">
        <span class="small text-white" style="">Renseignement & réservation : (+229) 21310002 / 99996666 / 95160002 </span>
      </div>
      <div class="social-links">  
        <a target="_blank" href="https://twitter.com/lbm229" class="twitter"><i class="fa fa-twitter"></i></a>
        <a target="_blank" href="https://web.facebook.com/lbm229" class="facebook"><i class="fa fa-facebook"></i></a>
        <a target="_blank" href="https://www.linkedin.com/company/lbm229/" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCxt0PV8gMIqpMdpz-_KjVuw/" class="instagram"><i class="fa fa-youtube"></i></a>
        <a target="_blank" href="https://www.instagram.com/lbm229" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </div-->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex ">
      <div class="d-flex pr-3">
        <img class="img-fluid" id = "topbar-logo" style="" src="{{ asset('images/') }}/{{ 'logo0.png' }}"/>
      </div>
      <div class="d-flex align-items-center">
        <div class="row">
          <div class="col-12">
            <span id="" class=" text-white ml-3" id ="slogan" style=" font-size: x-large; font-style: italic;">Notre passion vous transporte</span>
          </div>
          <div class="col-12">
            <span id="" class=" text-white ml-3" id ="iso" style="font-size: medium; font-style: italic;">Première société automobile certifiée ISO 9001 au Bénin</span>
          </div>
  
        </div>
      </div>
        <!--div class="contact-info mr-auto">
          <img class="img-fluid" style="max-height:90px;" src="{{ asset('images/') }}/{{ 'logo0.png' }}"/>
          <span class=" text-white ml-3" style=" font-size:1.5rem; font-style: italic;">Première entreprise automobile certifiée ISO 9001 au Bénin</span>
        </div-->
    </div> 
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <div clas="navbar-brand"id="navbrand" style = "visibility: hidden;">
        <h1 class="logo mr-auto "><a href="{{ url('/') }}"><img class="img-responsive" src="{{ asset('images/') }}/{{ 'logocert.png' }}" style=""/></a></h1>
      </div>
      <nav class="main-nav d-none d-lg-block ">
        <ul class="">
          <li class="active"><a href="{{ url('/') }}">Accueil</a></li>
          <li><a href="{{ url('/apropos') }}">A Propos</a></li>
          <li class="drop-down"><a href="#">Services</a>
            <ul>
              <li><a href="{{ url('/services/vente') }}">Vente automobile</a></li>
              <li><a href="{{ url('/services/location') }}">Location automobile</a></li>
            </ul>
          </li>
          <!--li><a href="{{ url('/#medias') }}">Actualité</a></li-->
          <li><a target="_blank" href="https://web.facebook.com/fondationlbm/">Fondation LBM</a></li>
          <li><a href="{{ url('/services/accessoireautomobile') }}">Accessoires Automobile</a></li>
          <!--li><a href="https://canalcombenin.com" target="_blank">Régie publicitaire</a></li-->
          <li><a href="{{ url('/services/sav') }}">SAV</a></li>
          <!--li><a href="{{ url('/services/accessoireautomobile') }}">Accessoires Automobile</a></li-->

          <li><a href="#footer">Contacts</a></li>
          <li class=""><a href="{{ url('/admin') }}" target="_blank">Admin</a></li>
          <li class=""><a href="http://vps47794.lws-hosting.com/webmail/" target="_blank">Webmail</a></li> 
        </ul>
      </nav><!--  .main-nav-->

    </div>
  </header><!-- End Header -->
    <!-- ======= Header ======= -->
  <header id="header-resume" class="d-flex flex-column justify-content-center">

    <nav class="nav-menu">
      <ul>
        <li class=""><a href="#footer"><i class="bx bx-mail-send"></i> <span>Newsletter</span></a></li>
        <li><a target="_blank" href="https://www.youtube.com/channel/UCxt0PV8gMIqpMdpz-_KjVuw/"><i class="bx bx-video"></i> <span>Médias</span></a></li>
        <li><a href="{{ url('/recrutement') }}"><i class="bx bx-user-plus"></i> <span>Recrutements</span></a></li>
        <li><a href="#footer"><i class="bx bx-book"></i> <span>Contacts</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- print success message after file upload 001  -->
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

  @yield('content')
 
  <!-- ======= Footer ======= -->
  <footer id="footer" class="">
    <div class="footer-top section-bg-black">
      <div class="container">

        <div class="row ">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
					<div class="footer-links">
					  <h4>Contactez-nous</h4>
					  <p>Scoa-Gbéto, carrefour LBM <br>
              01 bp 7144 Cotonou, Bénin<br> 
						<strong>Tél:</strong> +229 21310002 -  60606001 - 60606063<br>
						<strong>Email:</strong> contacts@lesbagnoles.com<br>
					  </p>
					</div>
                </div>

                <div class="footer-info">
					<div class="footer-links">
					  <h4>Service Location</h4>
					  <p>Scoa-Gbéto, carrefour LBM <br>
              01 bp 7144 Cotonou, Bénin<br> 
						<strong>Tél:</strong> +229 21310002 -  60606001 - 60606063<br>
						<strong>Email:</strong> contacts@lesbagnoles.com<br>
					  </p>
					</div>
                </div>

                <div class="footer-info">
                  <div class="footer-links">
                    <h4>Ressources humaines</h4>
                    <p>Scoa-Gbéto, carrefour LBM <br>
                      01 bp 7144 Cotonou, Bénin<br> 
                    <strong>Tél:</strong> +229 95621212<br>
                    <strong>Email:</strong> recrutement@lesbagnoles.com<br>
                    </p>
                  </div>
                        </div>



              </div>

      <div class="col-sm-6">
        <div class="footer-info">
					<div class="footer-links">
					  <h4>SAV & Garage professionnel</h4>
					  <p>Akpakpa Pk3 route de Porto-novo <br>
              01 bp 7144 Cotonou, Bénin<br> 
						<strong>Tél:</strong> +229 21334040 - 95955131 - 60606086<br>
						<strong>Email:</strong>  contacts@lesbagnoles.com<br>
					  </p>
					</div>
        </div>

        <div class="footer-info">
					<div class="footer-links">
					  <a href="https://canalcombenin.com" target="_blank"><h4>Service communication</h4></a>
					  <p>Scoa-Gbéto, carrefour LBM <br>
              01 bp 7144 Cotonou, Bénin<br> 
						<strong>Tél:</strong> +229 21300050 - 95160002<br>
						<strong>Email:</strong>communication@lesbagnoles.com<br>
					  </p>
					</div>
        </div>

        <div class="footer-newsletter">
          <h4>Suivez-nous  sur les réseaux sociaux et en ligne</h4>

					<div class="social-links">
					  <a style="background-color:#55acee" target="_blank" href="https://twitter.com/lbm229" class="twitter"><i class="fa fa-twitter"></i></a>
					  <a style="background-color:#3b5999" target="_blank" href="https://web.facebook.com/lbm229" class="facebook"><i class="fa fa-facebook"></i></a>
					  <a style="background-color:#cd201f" target="_blank" href="https://www.youtube.com/channel/UCxt0PV8gMIqpMdpz-_KjVuw/" class="instagram"><i class="fa fa-youtube"></i></a>
					  <a style="background-color:#0077B5" target="_blank" href="https://www.linkedin.com/company/lbm229/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a style="background-color:#c32aa3" target="_blank" href="https://www.instagram.com/lbm229/" class="linkedin"><i class="fa fa-instagram"></i></a>
            <span class="text-white">lbm229</span>
					</div>
                </div>

                <div class="footer-newsletter">
                  <h4>News Letter</h4>
                  <form action="{{ url('/') }}/api/apiSuscribed" method="post">
                    <input type="email" name="email"><input type="submit" value="M'inscrire">
                  </form>
                </div>


              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Contact rapide</h4>
              <form action="{{ url('/sendContact') }}" method="post" role="form" class="php-email-form">
              {{csrf_field()}}
                <div class="form-group">
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom" data-rule="minlen:4" data-msg="Au moins 4 caractères" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="mail" id="mail" placeholder="Votre email" data-rule="email" data-msg="Veuillez fournir une adresse email valide" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Au moins 4 caractères" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Votre message" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>

                <div class="form-group">
                  
                  @if(config('services.recaptcha.key'))
                    <div class="g-recaptcha"
                        data-sitekey="{{config('services.recaptcha.key')}}">
                    </div>
                @endif
                </div>

                <div class="mb-3">
                  <div class="loading">Loading</div>
                      <div class="error-message">Une erreur s'est produite</div>
                      <div class="sent-message alert alert-success alert-dismissible fade show"  role="alert">
                        Votre message a été envoyé, nous vous reviendrons dans les plus brefs délais!
                    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    		<span aria-hidden="true">&times;</span>
                    	</button>
                            
                      </div>
                  </div>

                <div class="text-center"><button type="submit" title="Send Message">Envoyer</button></div>
              </form>

            </div>

          </div>

        </div>

      </div>
    </div>

    <div style="background-color: #343434" class="py-5">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>Les Bagnoles Motors {{date('Y')}} </strong>. Tous droits réservés
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('website/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendor/aos/aos.js') }}"></script>

  <!-- LBM Main JS File -->
  <script src="{{ asset('website/assets/js/main.js') }}"></script>
  <script type="">
      function removeOrAdd() {
        let y = window.pageYOffset;
        if (y < 100) {
          document.getElementById("navbrand").style.visibility = "hidden";
        } else {
          document.getElementById("navbrand").style.visibility = "visible";
        }
      }

      window.addEventListener("scroll", () => {
        if (screen.width >= 1200) {
          removeOrAdd();
        } else if (screen.width < 1200) {
          document.getElementById("imnavbrandg").style.display = "block";
        }
      });
  </script>

</body>

</html>