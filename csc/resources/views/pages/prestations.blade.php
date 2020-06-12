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
				{!! $res['prestation']->texte !!}
			</div>

            <div style="margin-top: -50px; margin-bottom: 50px" id="contenu3">
				<div id="colonne1">
					<h3 style="text-align: left">Nos travaux de chauffage</h3>
					<article>
						{!! $res['chauffage']->texte !!}
					</article>
				</div>

				<div id="colonne2">
					<h3 style="text-align: left">Nos travaux de plomberie</h3>
					<article>
						{!! $res['plomberie']->texte !!}
					</article>
				</div>
            </div>
            
            <div id="contenu3" style="background: rgba(255,255,255,0.8); width:960px; margin:auto;">
				<br>
				<h2>Documents administratifs</h2>
				<br>
				<p style="text-align:center">
					@foreach($res['document'] as $document)
						<a href="{{ $document->src }}" title="Télécharger" target="_blank">{{ $document->title }}</a>
						<br>
					@endforeach
				</p> 
				<br><br>
			</div>

        </div>

@endsection
