@extends('layouts.app')

@section('content')

        <div style="z-index: 0" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="5000">
                    <img src="{{asset('images/slider.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div style="background-color:#007bff87">
                            <h5>CSC Morandini</h5>
                            <p>Un plombier chauffagiste qui trouve toutes les solutions à vos besoins</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-interval="5000">
                    <img src="{{asset('images/slider2.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div style="background-color:#007bff87">
                            <h5>CSC Morandini - Une intervention rapide pour particuliers et professionnels</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-interval="5000">
                    <img src="{{asset('images/slider3.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div style="background-color:#007bff87">
                            <h5>CSC Morandini - Une équipe dynamique & qualifiée à votre écoute</h5>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container">

            <div class="container" style="margin-bottom:100px; margin-top:50px" id="contenu">
				<br>
				<h2>Nos prestations</h2>
				<br>
				<p>Pour tous vos projets, nous réalisons une étude personnalisée de vos besoins et établissons gratuitement un devis.<br>
				Nous vous proposons un large choix de matériels de qualité et sommes à votre écoute pour vous conseiller.</p>
				<br><br>
			</div>

            <div style="margin-top: -50px; margin-bottom: 50px" id="contenu3">
				<div id="colonne1">
					<h3 style="text-align: left">Nos travaux de chauffage</h3>
						<article>
							<p>Gaz<br>
							Electricité<br>
							Pompe à chaleur<br>
							Installation<br>
							Neuf &amp; Rénovation<br>
							Chauffagerie</p>
						</article>
				</div>

				<div id="colonne2">
					<h3 style="text-align: left">Nos travaux de plomberie</h3>
						<article>
							<p>Installation de salle de bains complètes<br>
							Canalisations<br>
							Robinetterie<br>
							Tuyauterie<br>
							Carrelage<br>
							PMR (pour maintien de personnes à domicile)</p>
						</article>
				</div>
            </div>
            
            <div id="contenu3" style="background: rgba(255,255,255,0.8); width:960px; margin:auto;">
				<br>
				<h2>Documents administratifs</h2>
				<br>
				<p style="text-align:center">
					<a href="images/ATTESTATION-2020-CSC-MORANDINI-CHAUFFAGES-SANITAIRE.pdf" title="Télécharger" target="_blank">Attestation d'assurance</a>
					<br>
					<a href="images/csc_identite_pro.pdf" title="Télécharger" target="_blank">Certificat d'identité professionnelle des entreprises artisanales du batiment</a>
					<br>
					<a href="images/ATTESTATION-2020-CSC-MORANDINI-CHAUFFAGES-SANITAIRE.pdf" title="Télécharger" target="_blank">Attestation d'assurance Responsabilité décennale</a>
					<br>
					<a href="images/csc_appellation_gaz_2020.pdf" title="Télécharger" target="_blank">Appellation professionnel du Gaz</a>
					<br>
					<a href="images/CERTIFICAT-QUALIBAT-2019-2020.jpg" title="Télécharger" target="_blank">Certificat Qualibat 2019</a>
					<br>
					<a href="images/CERTIFICAT-RGE-2019-2020.jpg" title="Télécharger" target="_blank">Certificat Qualibat "RGE" 2019</a>
					<br>
					<!-- <a href="images/attestation-handibat.pdf" title="Télécharger" target="_blank">Attestation de droit d'usage de la marque Handibat</a>
					<br/> -->
					<a href="images/csc_attestation_validation_connaissances_gaz.pdf" title="Télécharger" target="_blank">Attestation de validation des connaissances Gaz</a>
				</p>
				<br><br>
			</div>

        </div>

@endsection
