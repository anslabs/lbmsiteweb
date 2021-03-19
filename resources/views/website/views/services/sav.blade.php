@extends('website.layouts.app') 
@section('title')
    {{ __('LBM SAV| Site web officiel') }}
@endsection
@section('content')
    <!-- Begin Page Content -->
<main id="main">
  <section id="sav-section-1" class="d-flex flex-column justify-content-center"  style=" background:#f5f8fd url('{{ asset('images/') }}/{{ $bg->image }}') center top no-repeat; background-size: cover;">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <!--h1 class=""   syle="font-size: 4rem; color:#1c54b2">LBM SAV:  Efficacité et professionnalisme!</h1-->
    </div>
  </section><!-- End Hero -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
		<div class="row">
    <h3 style="font-weight:bold;">Le service après-vente et garages professionnels disponibles  24 H/24 et 7J/7</h3>
      <p>
        Les garages professionnels LBM assurent  le service après-vente et offre aux automobiles des services de bonne facture. C’est un véritable chef d’œuvre qui force l’admiration tant pour la qualité de ses infrastructures et équipements de toutes dernière génération que pour l’expertise, l’expérience et le savoir-faire de ses ingénieurs. 
      </p>
 
      <h3 style="font-weight:bold;">Nous assurons la maintenance et la réparation de vos véhicules et vous garantissons un service qualité </h3>
      <p>
        Des pièces de rechange d’origine, Des accessoires automobiles, des lubrifiants, des pneux et des batteries sont disponibles sur place dans nos boutiques.
        <br/>Découvrez nos services  en mécanique, électricité, climatisation, soudure, peinture  et autres prestations sur demande 24 H J/24 et 7J/7. 
      </p>
      <p><a href="#footer"><h5>Contactez-nous  et nous vous accueillons sur rendez-vous ou non.</h5></a></p>
 
			<!--p>Avec les Tarifs Entretien, maîtrisez sereinement l'entretien de votre véhicule tout en profitant du professionnalisme de nos techniciens formés et agréés par les fabriquants. Vidange moteur, embrayage, freinage ou visibilité : découvrez nos prestations et Services et prenez rendez-vous. Prenez RDV Toute suite en apeplant le SAV sur les contacts ci-dessous.</p>
			<h3 style="font-weight:bold;">Contrat de service et garantie commerciale</h3>
			<p>Avec nos contrats Service, vous vous concentrez uniquement sur le plaisir de conduire. Ne vous préoccupez plus des coûts liés à l’entretien et la maintenance de votre véhicule, et ce, pendant la durée et le kilométrage de votre choix. </p>
			<p>Prochaine vidange, révision, remplacement des plaquettes de frein. Autant de contraintes dont vous n’aurez plus à vous soucier. Vous pouvez rouler l’esprit tranquille. Prennez Rendez-vous par téléphone et notre éqquipe se charge de tout.</p-->
		</div>
			<!--div class="row">
				<h3 style="font-weight:bold;">Votre Rendez-vous entretien <font class="small" color="red">(Collect form for booking)</font></h3><br/>
                <p><br/>
                <div class="form">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Au moins 4 caractères" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" data-rule="email" data-msg="Veuillez fournir une adresse email valide" />
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

                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>

                    <div class="text-center"><button type="submit" title="Send Message">Envoyer</button></div>
                    </form>

                </div-->

                </p>
			</div>
        </div>
      </div>

    </section>
<!-- End About Section -->
</main><!-- End #main -->

@endsection