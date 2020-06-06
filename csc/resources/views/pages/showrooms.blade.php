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

            <div class="container" style="margin-bottom:100px; margin-top:50px" id="contenu2">

                <div id="contenu">
                    <br>
                    <h2>Notre Showroom</h2>
                    
                    <p>Etant membre de la COVAP, coopératives d'artisans, nous mettons à votre disposition un Showroom de sanitaires, cuisines et chauffages.
                    Contactez-nous afin que nous prenions rendez-vous pour une visite. <b>Inspiration garantie pour vos projets !</b></p>
                    
                    <br>
                </div>
                    <br><br>
                
                <div id="contenu3">
                    <div id="colonne1">
                        <h3 style="text-align: left">Trouver le Showroom</h3>
                            <article>
                                <p><b>Adresse :</b></p>
                                <p>ZA Rue des Greffières<br> 
                                17140 LAGORD</p><br>
                            </article>
                    </div>
                        
                    <div id="colonne2">
                        <h3 style="text-align: left">Les horaires</h3>
                            <article>
                                <p><b>Heures d’ouverture :</b></p>
                                <p>Lundi : 14H00 - 18H20<br>
                                Mardi au vendredi : 9H00  -  12H00 &amp; 14H00  - 18H20<br>
                                Samedi : 9H00  -  12H00</p>
                            </article>
                    </div>
                </div>
                <br>
                
                <div style="background:rgba(255,255,255,0.8); width:960px; margin:auto; overflow:hidden;">
                    <br>
                    <p style="text-align:center"><img src="{{ asset('images/showrooms/plan_covap.png') }}"></p>				
                </div>
                <br><br>
                
                <div style="background:rgba(255,255,255,0.8); width:960px; margin:auto; overflow:hidden;">
                <br>
                    <img src="{{ asset('images/showrooms/1.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    <img src="{{ asset('images/showrooms/2.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    <img src="{{ asset('images/showrooms/3.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    
                    <img src="{{ asset('images/showrooms/4.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    <img src="{{ asset('images/showrooms/5.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    <img src="{{ asset('images/showrooms/6.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    
                    <img src="{{ asset('images/showrooms/7.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    <img src="{{ asset('images/showrooms/8.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    <img src="{{ asset('images/showrooms/9.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    
                    <img src="{{ asset('images/showrooms/10.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    <img src="{{ asset('images/showrooms/11.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    <img src="{{ asset('images/showrooms/12.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    
                    <img src="{{ asset('images/showrooms/13.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    <img src="{{ asset('images/showrooms/14.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    <img src="{{ asset('images/showrooms/15.jpg') }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;">
                    <br>
                </div>
                

            </div>

        </div>

@endsection
