@extends('layouts.app')

@section('content')

        <div class="container">

            <div class="container" style="margin-bottom:100px; margin-top:50px">

                <div class="showroom" style="width: 88%; text-align: center; background: white; margin-left: 6%; padding: 20px">
                    <br>
                    <h2 style="color:blue; padding: 20px" >Notre Showroom</h2>
                    <div>
                        {!! $res['showroom']->texte !!}
                    </div>
                    <br>
                </div>
                    <br><br>
                
                <div class="row" style="width: 88%; margin-left: 7% ;margin-bottom:50px; text-align: center;">
                    <div class="col-md-6 travaux" style="margin-left: -10px">
                        <h3 style="text-align: left; background-color: blue;color:white; padding: 15px">Trouver le Showroom</h3>
                        <article style="background-color:white; padding: 25px">
                            {!! $res['adresse']->texte !!}
                        </article>
                    </div>
                        
                    <div class="col-md-6 travaux" style="margin-left: -10px">
                        <h3 style="text-align: left; background-color: blue; padding: 15px; color:white">Les horaires</h3>
                        <article style="background-color:white; padding: 25px">
                            {!! $res['horaire']->texte !!}
                        </article>
                    </div>
                </div>
                <br>
                
                <div class="gallery map" style="background:white; width:88%; margin-left: 6%">
                    <br>
                    @foreach ($res['map']->images as $map)
                        <a href="{{ asset( $map->src )}}" data-lightbox="mygallery"><img height="350px"  style="margin-left: 25%; width:50%; margin-bottom: 20px" src="{{ asset( $map->src ) }}"></a>
                    @endforeach			
                </div>
                <br><br>
                
                <div class="gallery row" style="background:white; width:88%; margin-left: 6%">
                <br>
                    @foreach ($res['galerie']->images as $galerie)
                    <div style="margin-top: 15px; margin-bottom: 15px" class="col-md-4">
                    <a href="{{ asset( $galerie->src )}}" data-lightbox="mygallery"><img height="200" src="{{ asset( $galerie->src ) }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="width:100%; padding: 10px 10px 10px 10px;"></a>
                    </div>
                    @endforeach
                    <br>
                </div>
                

            </div>

        </div>

@endsection
