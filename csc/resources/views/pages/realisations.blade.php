@extends('layouts.app')

@section('content')

        <div class="container">

            <div style="margin-top:50px" id="contenu2">
                <div id="contenu">
                    <br>
                    <h2>Découvrez quelques-unes de nos réalisations</h2>
                    <br>
                    
                    <br><br>
                    {!! $res['salleDeBain']->texte !!}
                    <!-- <h3 style="text-align:left;">Pose d'une salle de bain chez un particulier</h3> -->
                    <div style="margin:5px" class="row">
                        @foreach ($res['salleDeBain']->images as $salleDeBain)
                        <div class="col-sm-4">		
                            <img id="myImg" src="{{ asset( $salleDeBain->src )}}" alt="{{$salleDeBain->title}}" style="padding: 10px 10px 10px 0px; width: 100%">
                        </div>
                        @endforeach

      
                    </div>
                    
                    <br><br>
                    
                    {!! $res['plomberie']->texte !!}
                    <div style="margin:5px" class="row">
                        @foreach ($res['plomberie']->images as $plomberie)
                        <div class="col-sm-4">		
                            <img id="myImg" src="{{ asset( $plomberie->src )}}" alt="{{$plomberie->title}}" style="padding: 10px 10px 10px 0px; width: 100%">
                        </div>
                        @endforeach
                    </div>
                    
                    <br><br>
                    
                    {!! $res['douche']->texte !!}
                    <h3 style="text-align:left; color:#0068b3;">AVANT</h3>
                    <div style="margin:5px" class="row">
                        @foreach ($res['douche']->images as $douche)
                        <div class="col-sm-4">		
                            <img id="myImg" src="{{ asset( $douche->src )}}" alt="{{$douche->title}}" style="padding: 10px 10px 10px 0px; width: 100%">
                        </div>
                        @endforeach

                    </div>
                    
                    <br>
                    <h3 style="text-align:left; color:#0068b3;">APRÈS</h3>
                    <div style="margin:5px" class="row">
                        @foreach ($res['douche_apres']->images as $douche_apres)
                        <div class="col-sm-6">		
                            <img id="myImg" src="{{ asset( $douche_apres->src )}}" alt="{{$douche_apres->title}}" style="padding: 10px 10px 10px 0px; width: 100%">
                        </div>
                        @endforeach

                    </div>

                    <br><br>
                    
                    {!! $res['restauration']->texte !!}
                    <h3 style="text-align:left; color:#0068b3;">AVANT</h3>
                    <div style="margin:5px" class="row">
                        @foreach ($res['restauration']->images as $restauration)
                        <div class="col-sm-4">		
                            <img id="myImg" src="{{ asset( $restauration->src )}}" alt="{{$restauration->title}}" style="padding: 10px 10px 10px 0px; width: 100%">
                        </div>
                        @endforeach

                        
                    </div>
                        
                        <!---------->
                    <br>
                    <h3 style="text-align:left; color:#0068b3;">APRÈS</h3>
                    <div style="margin:5px" class="row">
                        @foreach ($res['restauration_apres']->images as $restauration_apres)
                        <div class="col-sm-3">		
                            <img id="myImg" src="{{ asset( $restauration_apres->src )}}" alt="{{$restauration_apres->title}}" style="padding: 10px 10px 10px 0px; width: 100%">
                        </div>
                        @endforeach
                        
                        <br><br>
                    </div>


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

                    {!! $res['references']->texte !!}
                </div>
            </div>


        </div>

        <script src="{{ asset('js/image.js') }}" defer></script>

@endsection
