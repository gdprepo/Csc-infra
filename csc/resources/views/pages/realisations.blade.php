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

            <div style="margin-top:100px" id="contenu2">
                <div id="contenu">
                    <br>
                    <h2>Découvrez quelques-unes de nos réalisations</h2>
                    <br>
                    
                    <br><br>
                    <h3 style="text-align:left;">Pose d'une salle de bain chez un particulier</h3>
                    <div class="row">
                        <div class="col-sm-4">		
                            <img id="myImg1" src="{{ asset('images/gallerie/1_001g.jpg')}}" alt="" style="padding: 10px 10px 10px 0px; width: 100%">
                        </div>

                        <div class="col-sm-4">		
                            <img  id="myImg2" src="{{ asset('images/gallerie/1_002g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px; width: 100%">
                        </div>

                        <div class="col-sm-4">		
                            <img  id="myImg3" src="{{ asset('images/gallerie/1_003g.jpg')}}"alt="" style="padding: 10px 0px 10px 0px; width: 100%">
                        </div>
                        <!-------->
                        <div class="col-sm-6">
                            <img  id="myImg4" src="{{ asset('images/gallerie/1_004g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px; width: 100%">
                        </div>
                        <div class="col-sm-6">		
                            <img  id="myImg5" src="{{ asset('images/gallerie/1_005g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px; width: 100%">
                        </div>
      
                    </div>
                    
                    <br><br>
                    
                    <h3 style="text-align:left;">Plomberie</h3>
                    <p style="text-align:left;">			
                        <img  id="myImg6" src="{{ asset('images/gallerie/2_001g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>

                        <img  id="myImg7" src="{{ asset('images/gallerie/2_007g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>
                        
                        <img  id="myImg8" src="{{ asset('images/gallerie/2_003g.jpg')}}"alt="" style="padding: 10px 0px 10px 0px;"></a>

                        <!-------->
                        
                        <img  id="myImg9" src="{{ asset('images/gallerie/2_004g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>
                        
                        <img  id="myImg10" src="{{ asset('images/gallerie/2_005g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>
                        
                        <img  id="myImg11" src="{{ asset('images/gallerie/2_006g.jpg')}}"alt="" style="padding: 10px 0px 10px 0px;"></a>
                    </p>
                    
                    <br><br>
                    
                    <h3 style="text-align:left;">Pose d'une douche avant / après : Maintien à domicile</h3>
                    <h3 style="text-align:left; color:#0068b3;">AVANT</h3>
                    <p style="text-align:justify;">			
                        <img  id="myImg12" src="{{ asset('images/gallerie/3_001g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>

                        <img  id="myImg13" src="{{ asset('images/gallerie/3_002g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>
                        
                        <img  id="myImg14" src="{{ asset('images/gallerie/3_003g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>
                        
                        <img  id="myImg15" src="{{ asset('images/gallerie/3_004g.jpg')}}"alt="" style="padding: 10px 0px 10px 0px;"></a>
                        
                        <!-------->
                        
                        <img  id="myImg16" src="{{ asset('images/gallerie/3_005g.jpg')}}"alt="" style="padding: 10px 29px 10px 0px;"></a>
                        
                        <img  id="myImg17" src="{{ asset('images/gallerie/3_006g.jpg')}}"alt="" style="padding: 10px 29px 10px 0px;"></a>
                        
                        <img  id="myImg18" src="{{ asset('images/gallerie/3_007g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>
                    </p>
                    
                    <br>
                    <h3 style="text-align:left; color:#0068b3;">APRÈS</h3>
                    <p style="text-align:justify;">			
                        <img  id="myImg19" src="{{ asset('images/gallerie/3_008g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>

                        <img  id="myImg20" src="{{ asset('images/gallerie/3_009g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>
                    </p>

                    <br><br>
                    
                    <h3 style="text-align:left;">Restauration d'une salle de bain avant/après : Label HSS (Habitation Sénior Services)</h3>
                    <h3 style="text-align:left; color:#0068b3;">AVANT</h3>
                    <p style="text-align:justify;">			
                        <img  id="myImg21" src="{{ asset('images/gallerie/4_001g.jpg')}}" alt="" style="padding: 10px 10px 10px 0px;"></a>

                        <img  id="myImg22" src="{{ asset('images/gallerie/4_002g.jpg')}}" alt="" style="padding: 10px 10px 10px 0px;"></a>
                        
                        <img  id="myImg23" src="{{ asset('images/gallerie/4_003g.jpg')}}" alt="" style="padding: 10px 0px 10px 0px;"></a>
                        
                        <!---------->
                        
                        <img  id="myImg24" src="{{ asset('images/gallerie/4_004g.jpg')}}" alt="" style="padding: 10px 10px 10px 0px;"></a>
                        
                        
                        <img  id="myImg25" src="{{ asset('images/gallerie/4_007g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>

                        
                    </p>
                        
                        <!---------->
                        <br>
                        <h3 style="text-align:left; color:#0068b3;">APRÈS</h3>
                    <p style="text-align:justify;">
                        <img  id="myImg26" src="{{ asset('images/gallerie/4_009g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>

                        <img  id="myImg27" src="{{ asset('images/gallerie/4_010g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>
                        
                        <img  id="myImg28" src="{{ asset('images/gallerie/4_011g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>
                        
                        <img  id="myImg29" src="{{ asset('images/gallerie/4_012g.jpg')}}"alt="" style="padding: 10px 10px 10px 0px;"></a>
                        <br><br>
                    </p>


                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- The Close Button -->
                            <span class="close">&times;</span>

                            <!-- Modal Content (The Image) -->
                            <img class="modal-content" id="img01">

                            <!-- Modal Caption (Image Text) -->
                            <div id="caption"></div>
                        </div>

                    
                    
                </div>
                
                <br><br>
                
                <div id="contenu3" style="background: rgba(255,255,255,0.8); width:960px; margin:auto;">
                <br>
                <h2>Nos principales Références</h2>
                <br><h3 style="text-align:left;">ANNÉE  2004 : Création  de l'entreprise Artisanale</h3>				<p>Réfection de la sous-station de l'HOPITAL ST LOUIS à LA ROCHELLE<br>				Pose climatisation groupe STECADEF à CHATELALLION<br>				Reprise réseau eau froide HOPITAL ST LOUIS</p>				<br><br>												<h3 style="text-align:left;">ANNÉE  2005</h3>				<p>Modification sur réseau hydraulique CENTRE MEDICO-CHIRURGICAL  DE				L'ATLANTIQUE A LA ROCHELLE<br>				Pose de radiateurs ACOVA chez  MME JEANNEAU<br>				Divers travaux de maintenance et refection complète sanitaire pour le parc locatif				De la  SA HLM ATLANTIC AMENAGEMENT<br>				Changement de robinets et tés de réglage sur toute une aile de bâtiment</p>				<br><br>												<h3 style="text-align:left;">ANNÉE  2006</h3>				<p>Modification   hydraulique   sur   ventilo-convecteurs   sur le chantier  du pöle de réanimation de l'HOPITAL ST LOUIS<br>				Raccordement d'un surpresseur résidence ORBIGNY à LA ROCHELLE <br>				Raccordement d'une CTA en corronarographie HOPITAL LA ROCHELLE<br>				Divers travaux de maintenance et réfection complète sanitaire pour le parc Locatif de la SA HLM ATLANTIC</p>				<br><br>												<h3 style="text-align:left;">ANNÉE  2007</h3>				<p>Divers travaux de maintenance et réfection complète des sanitaires pour le parc				Locatif de la SA HLM ATLANTIC AMENAGEMENT<br>				Travaux   de   maintenance   et  dépannage   pour  le   Cabinet   DEMOUGINS   ET FONCIA<br>				Raccordement  hydraulique d'un caisson CTA sur le site HOPITAL ST LOUIS A				LA ROCHELLE				<br>				Travaux sur installation de chauffage maison de retraite  BAT ABC sur 3 niveaux (environ 160 Chambres) changement des robinets  et tés de réglage sur radiateurs Centre Hospitalier St Louis La Rochelle</p>				<br><br>												<h3 style="text-align:left;">ANNÉE  2008 : Création de la SARL CSC Morandini</h3>				<p>Divers travaux de maintenance pour la SA HLM ATLANTIC  AMENAGEMENT				et CABINET DEMOUGINS ET FONCIA<br>				Travaux raccordement et réseau EU  pour INRAP L'HOUMEAU<br>				Travaux hydrauliques en sous-traitance pour DALKIA </p>				<br><br>												<h3 style="text-align:left;">ANNÉE  2009</h3>				<p>Hôtel KYRIAD La Rochelle rénovation des sanitaires et production  ECS (50 chambres, 1 logement et les communs)<br>				Divers travaux de maintenance et réfection complète des sanitaire pour le parc locatif de la SA HLM ATLANTIC<br>				AMENAGEMENT pour le Cabinet  DEMOUJIN - FONCIA ­ CHANDEAU et CEYRAT<br>				Travaux hydrauliques en sous-traitance pour DALKIA<br>				Réfection de sanitaires et dépannage réseaux pour les services du Génie MINISTERE de la DEFENSE La Rochelle</p>				<br><br>
                
                <h3 style="text-align:left;">ANNÉES  2011 - 2012 - 2013 - 2014 - 2015</h3>
                <p>Divers travaux de maintenance : PICHET IMMOBILIER / FONCIA / SA HLM ATLANTIC AMENAGEMENT / PARTICULIERS / GROUPE SUP DE CO<br>
                Remplacement de l'ensemble des radiateurs chauffage central résidence « LA CHALOUPE LA ROCHELLE »<br>
                Appel d'offres MINISTERE DE LA DEFENSE remplacement chaudières Gaz<br>				Rénovation  complète salle de Bain Particuliers  et Parc locatif HLM ATLANTIC AMMENAGEMENT<br>
                Salle  de Bains  transformation  remplacement  baignoire  par Bac à douches  Parc locatif ATLANTIC AMENAGEMENT et PARTICULIERS<br>
                Travaux hydrauliques en sous-traitance pour DALKIA</p>
                <br><br>
                
                <h3 style="text-align:left;">ANNÉE 2016</h3>
                <p>Divers travaux de maintenance : PICHET IMMOBILIER / FONCIA / DEMOUGIN / ATLANTIC AMENAGEMENT / CLARA AUTOMOBILES<br>
                Travaux hydraulique en sous-traitance pour DALKIA<br>
                Rénovation complète de salle de bain particulier et parc locatif HLM<br>
                Salle de bains transformation remplacement baignoire par Bac à douche Parc locatif ATLANTIC AMENAGEMENT et Particuliers<br>
                Travaux de maintenance EUROMASTER / LODIPAT OCEAN / FNATH / MINISTERE DE LA DEFENSE</p>
                <br><br>
                
                <h3 style="text-align:left;">ANNÉE 2017</h3>
                <p>Divers travaux de maintenance pour FONCIA/ PICHET IMMOBILIER &amp; SERVICES/ CABINET DEMOUGIN/ ATLANTIC AMENAGEMENT<br>
                Travaux hydrauliques en sous-traitance pour DALKIA<br>
                Rénovation complète de salle de bains Particuliers et Parc locatif HLM<br>
                Salle de bains transformation remplacement baignoire par bac à douche Particuliers et Parc Locatif ATLANTIC AMENAGEMENT<br>
                Travaux de maintenance pour GIFI / EUROMASTER/ LODIPAT OCEAN /FNATH/Mairie de SAINT-ROGATIEN.<br>
                <br><br>
                
                </p></div>
            </div>


        </div>

        <script src="{{ asset('js/image.js') }}" defer></script>

@endsection
