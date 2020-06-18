@extends('layouts.app')

@section('content')

        <div class="container">

            <div class="container" style="margin-bottom:100px; margin-top:50px">

                <div id="contenu">
                    <br>
                    <h2>Nous contacter</h2>
                    <br>
                        {!! $res['contact']->texte !!}
                    <br>
                </div>
        
                <br><br>
                
                <div id="contenu3">
                    <div id="coordonnees">
                        <div id="colonne3">
                            <h3 style="text-align: left">Nos coordonnées</h3>
                                <article>
                                    {!! $res['coordonees']->texte !!}
                                </article>
                        </div>
                        
                        <br>
                        
                        <div id="colonne4">
                            <h3 style="text-align: left">Notre zone d'intervention</h3>
                                <article>
                                {!! $res['zone']->texte !!}
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



                <!-- <div class="formcontact">
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
                </div> -->





            

            </div>

        </div>

@endsection
