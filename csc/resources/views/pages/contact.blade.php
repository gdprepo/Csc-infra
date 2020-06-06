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

            <div class="container" style="margin-bottom:100px; margin-top:50px">

                <div id="contenu">
                    <br>
                    <h2>Nous contacter</h2>
                    <br>
                    <p>N'hésitez pas à nous contacter afin que nous étudions ensemble votre projet.</p>
                    <br><br>
                </div>
        
                <br><br>
                
                <div id="contenu3">
                    <div id="coordonnees">
                        <div id="colonne3">
                            <h3 style="text-align: left">Nos coordonnées</h3>
                                <article>
                                    <p>
                                        <b>Adresse :</b> 10 Rue Augustin Fresnel  -  17180 Périgny<br>
                                        <b>Téléphone :</b> 05 46 52 19 23<br>
                                        <b>Mobile :</b> 06 61 48 03 42<br>
                                        <b>Email :</b> j.morandini@csc-morandini.fr
                                    </p>
                                </article>
                        </div>
                        
                        <br>
                        
                        <div id="colonne4">
                            <h3 style="text-align: left">Notre zone d'intervention</h3>
                                <article>
                                    <p><b>L'entreprise Morandini intervient pour la plomberie et le chauffage dans un rayon de 15 km autour de Périgny :</b><br>
                                    dans les environs de La Rochelle, Dompierre-sur-Mer, Angoulins, Châtelaillon-Plage, Nieul-sur-Mer, Lagord, Saint Médard d'Aunis et l'Île de Ré.</p>
                                </article>
                        </div>
                        
                        
                    </div>
                            
                        <div id="colonne2">
                            <h3 style="text-align: left">Nous trouver</h3>
                                <article>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22108.244025851218!2d-1.1488982637716496!3d46.16009444114145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48014d83ca61c62b%3A0xcd3c0d075807679b!2s10+Rue+Augustin+Fresnel%2C+17180+Perigny!5e0!3m2!1sfr!2sfr!4v1563529709769!5m2!1sfr!2sfr" width="100%" height="285" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                </article>
                        </div>
                </div>



                <div class="formcontact">
                    <form methode="POST" action="{{ route('contact.mail') }}">
                    @csrf
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="email" placeholder="Your name..">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="subject" placeholder="Your last name..">

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                        <input type="submit" value="Submit">

                    </form>
                </div>





            

            </div>

        </div>

@endsection
