@extends('layouts.app')

@section('content')

        <div class="container">

            <div class="container" style="margin-bottom:100px; margin-top:50px" id="contenu2">

                <div id="contenu">
                    <br>
                    <h2>Notre Showroom</h2>
                    {!! $res['showroom']->texte !!}
                    <br>
                </div>
                    <br><br>
                
                <div id="contenu3">
                    <div id="colonne1">
                        <h3 style="text-align: left">Trouver le Showroom</h3>
                            <article>
                                {!! $res['adresse']->texte !!}
                            </article>
                    </div>
                        
                    <div id="colonne2">
                        <h3 style="text-align: left">Les horaires</h3>
                            <article>
                                {!! $res['horaire']->texte !!}
                            </article>
                    </div>
                </div>
                <br>
                
                <div class="gallery" style="background:rgba(255,255,255,0.8); width:88%; margin:auto; overflow:hidden;">
                    <br>
                    @foreach ($res['map']->images as $map)
                        <a href="{{ asset( $map->src )}}" data-lightbox="mygallery"><img style="margin-left: 25%; width:50%" src="{{ asset( $map->src ) }}"></a>
                    @endforeach			
                </div>
                <br><br>
                
                <div class="gallery" style="background:rgba(255,255,255,0.8); width:960px; margin:auto; overflow:hidden;">
                <br>
                    @foreach ($res['galerie']->images as $galerie)
                    <a href="{{ asset( $galerie->src )}}" data-lightbox="mygallery"><img src="{{ asset( $galerie->src ) }}" alt="CSC Morandini - Plombier chauffagiste La Rochelle" style="float:left; margin-left:15px; margin-bottom:15px;"></a>
                    @endforeach
                    <br>
                </div>
                

            </div>

        </div>

@endsection
