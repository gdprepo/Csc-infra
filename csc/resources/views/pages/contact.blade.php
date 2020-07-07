@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="container" style="margin-bottom:100px; margin-top:50px">

            <div style="width: 85%; margin-left: 7% ;margin-bottom:50px; margin-top:50px; background-color:white; text-align: center;">
                <br>
                <h2 style="color: blue">Nous contacter</h2>
                <br>
                    {!! $res['contact']->texte !!}
                <br>
            </div>
            
            <div class="row" style="width: 88%; margin-left: 5.5% ;margin-bottom:50px; text-align: center;">
                <div class="col-md-6">
                    <h3 style="text-align: left; background-color: blue; padding: 5px; color:white">Nos coordonnées</h3>
                    <article style="background-color:white; padding: 20px; height: 180px; max-height: 200px">
                        {!! $res['coordonees']->texte !!}
                    </article>
                </div>
                

                
                <div class="col-md-6">
                    <h3 style="text-align: left; background-color: blue; padding: 5px; color:white">Notre zone d'intervention</h3>
                    <article style="background-color:white; padding: 20px; height: 180px; max-height: 200px">
                        {!! $res['zone']->texte !!}
                    </article>
                </div>
                    
            </div>

            <div style="width: 86%; margin-left: 6%">
                <h3 style="text-align: left; background-color: blue; padding: 15px; color:white">Nous trouver</h3>
                <article>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22108.244025851218!2d-1.1488982637716496!3d46.16009444114145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48014d83ca61c62b%3A0xcd3c0d075807679b!2s10+Rue+Augustin+Fresnel%2C+17180+Perigny!5e0!3m2!1sfr!2sfr!4v1563529709769!5m2!1sfr!2sfr" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </article>
            </div>
        

        </div>

    </div>

@endsection
