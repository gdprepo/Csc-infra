@extends('layouts.app')

@section('content')

        <div class="container">

            <div style="margin-top:50px">
                <div style="width: 85%; margin-left: 7% ;margin-bottom:50px; margin-top:50px; background-color:white; text-align: center;">

                    <h2 style="color: blue; padding: 30px">Découvrez quelques-unes de nos réalisations</h2>

                    <div style="margin-left: 20px">{!! $res['salleDeBain']->texte !!} </div>


                    <div style="margin:5px" class="row">
                        @foreach ($res['salleDeBain']->images as $salleDeBain)
                        <div class="col-sm-4 gallery">		
                            <a href="{{ asset( $salleDeBain->src )}}" data-lightbox="mygallery"><img height="200px" src="{{ asset( $salleDeBain->src )}}" alt="{{$salleDeBain->title}}" style="padding: 10px 10px 10px 0px; width: 100%"></a>
                        </div>
                        @endforeach

      
                    </div>
                                        
                    <div style="margin-left: 20px">{!! $res['plomberie']->texte !!}</div>

                    <div style="margin:5px" class="row">
                        @foreach ($res['plomberie']->images as $plomberie)
                        <div class="col-sm-4 gallery">		
                            <a href="{{ asset( $plomberie->src )}}" data-lightbox="mygallery"><img height="200px" src="{{ asset( $plomberie->src )}}" alt="{{$plomberie->title}}" style="padding: 10px 10px 10px 0px; width: 100%"></a>
                        </div>
                        @endforeach
                    </div>
                    

                    
                    <div style="margin-left: 20px">{!! $res['douche']->texte !!}</div>

                    <h3 style="text-align:left; margin-left: 20px ;color:blue;">AVANT</h3>
                    <div style="margin:5px" class="row">
                        @foreach ($res['douche']->images as $douche)
                        <div class="col-sm-4 gallery">		
                            <a href="{{ asset( $douche->src )}}" data-lightbox="mygallery"><img height="300px"  src="{{ asset( $douche->src )}}" alt="{{$douche->title}}" style="padding: 10px 10px 10px 0px; width: 100%"></a>
                        </div>
                        @endforeach

                    </div>
                    

                    <h3 style="text-align:left; margin-left: 20px ;color:blue;">APRÈS</h3>
                    <div style="margin:5px" class="row">
                        @foreach ($res['douche_apres']->images as $douche_apres)
                        <div class="col-sm-6 gallery">		
                            <a href="{{ asset( $douche_apres->src )}}" data-lightbox="mygallery"><img height="600px" src="{{ asset( $douche_apres->src )}}" alt="{{$douche_apres->title}}" style="padding: 10px 10px 10px 0px; width: 100%"></a>
                        </div>
                        @endforeach

                    </div>
                    
                    <div style="margin-left: 20px">{!! $res['restauration']->texte !!}</div>

                    <h3 style="text-align:left; margin-left: 20px ;color:blue;">AVANT</h3>
                    <div style="margin:5px" class="row">
                        @foreach ($res['restauration']->images as $restauration)
                        <div class="col-sm-4 gallery">		
                            <a href="{{ asset( $restauration->src )}}" data-lightbox="mygallery"><img height="200px" src="{{ asset( $restauration->src )}}" alt="{{$restauration->title}}" style="padding: 10px 10px 10px 0px; width: 100%"></a>
                        </div>
                        @endforeach

                        
                    </div>

                    <h3 style="text-align:left; margin-left: 20px ;color:blue;">APRÈS</h3>
                    <div style="margin:5px" class="row">
                        @foreach ($res['restauration_apres']->images as $restauration_apres)
                        <div class="col-sm-3 gallery">		
                            <a href="{{ asset( $restauration_apres->src )}}" data-lightbox="mygallery"><img height="300px" src="{{ asset( $restauration_apres->src )}}" alt="{{$restauration_apres->title}}" style="padding: 10px 10px 10px 0px; width: 100%"></a>
                        </div>
                        @endforeach

                    </div>
                    
                    
                </div>

                <div style="width: 85%; margin-left: 7% ;margin-bottom:50px; margin-top:50px; background-color:white; text-align: center;">
                    <br>
                    <h2 style="color: blue; padding: 30px">Nos principales Références</h2>

                    <div style="margin-left: 20px; width: 93%">{!! $res['references']->texte !!}</div>
                </div>
            </div>


        </div>

        <script src="{{ asset('js/image.js') }}" defer></script>

@endsection
