@extends('layouts.app')

<?php
    use App\Slider;

    $sliders = Slider::all();
    $sliderOne = Slider::find(1);
?>

@section('content')

        <div style="z-index: 0" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="5000">
                    <img src="{{asset(  $sliderOne->image  )}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div style="background-color:#007bff87">
                            <h5>{{ $sliderOne->title }}</h5>
                            <p>{{ $sliderOne->paragraphe }}</p>
                        </div>
                    </div>
                </div>
                @foreach ($sliders as $slider)
                @if ($slider->id > 1)
                    <div class="carousel-item" data-interval="5000">
                        <img src="{{asset( $slider->image )}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div style="background-color:#007bff87">
                                <h5>{{ $slider->title }}</h5>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
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
                <h2>Bienvenue à l'entreprise Morandini<br><span style="font-size:25px;">à Périgny en Charente-Maritime</span></h2>

                {!! $welcome->texte !!}
            </div>

            <div class="container" id="contenu3" style="margin-bottom:100px; margin-top: -50px ;background: rgba(255,255,255,0.8);">
                <br>
                <h2>Historique</h2>

                {!! $historique->texte !!}
			</div>

        </div>

@endsection
