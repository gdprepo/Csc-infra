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
                <h2>Bienvenue à l'entreprise Morandini<br><span style="font-size:25px;">à Périgny en Charente-Maritime</span></h2>

                <br>
                <p>Nous sommes spécialisés dans la plomberie et le chauffage depuis plus de 9 ans.
                <br><br>

                Nous effectuons les travaux de chauffage au gaz et électrique. Nous installons le chauffage en neuf et rénovation. Nous posons une pompe à chaleur adaptée à votre bâtiment. Nos professionnels sont qualifiés et vous apportent des travaux de qualité.
                <br><br>
                    
                Nous effectuons la conception de votre salle de bains sur-mesure. Nous réalisons les travaux de tuyauterie et de canalisation. Nous sommes à votre service pour une étude personnalisée de votre plomberie. Nous intervenons pour les particuliers et les professionnels selon vos demandes en plomberie.
                <br><br>

                L'entreprise Morandini intervient pour la plomberie et le chauffage dans un rayon de 15 km autour de Périgny et dans les environs de La Rochelle, Dompierre-sur-Mer, Angoulins, Châtelaillon-Plage, Nieul-sur-Mer, Lagord et Saint Médard d'Aunis.
                <br><br>

                Alors pour tous vos travaux de plomberie et de chauffage, contactez l'entreprise Morandini pour de plus amples renseignements.</p><br>
                
                
                <h3>Morandini, c'est avant tout votre plombier chauffagiste qui trouve toutes les solutions à vos besoins.</h3>
                <br><br>
            </div>

            <div class="container" id="contenu3" style="margin-bottom:100px; margin-top: -50px ;background: rgba(255,255,255,0.8);">
			    <br>
				<h2>Historique</h2>
				<br>
				<p><b>Du 15/06/2004 au 31/12/2007</b> - Activité en tant qu'entreprise Artisanale<br>
				<b>Au 01/01/2008</b> - Création de la Sarl CSC MORANDINI au capital 51 000 €<br>
				<b>Au 01/04/2013</b> - Augmentation du capital à 102 000 €</p>
				<br><br>
			</div>

        </div>

@endsection
