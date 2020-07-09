<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CSC</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon3.ico') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/image.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script type="text/javascript" src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
        $(window).on('scroll', function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
                $('nav').removeClass('white');
            } else {
                $('nav').removeClass('black');
                $('nav').addClass('white');
            }
        })

        $(document).ready(function() {
            $(".menu h4").click(function () {
                $("nav ul").toggleClass("active")
            })
        })


    </script>

    <?php 
      $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
      $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
      $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
      $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
      $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
    
    ?>
    <?php  if ($iPhone | $Android) { ?>
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <?php  } else { ?>
        <link href="{{ asset('css/styleContact.css') }}" rel="stylesheet">

    <?php  } ?>

    <?php
        use App\Slider;
    
        $sliders = Slider::all();
        $res['sliders'] = $sliders;
        $check = 0;
        $page = $_SERVER['PHP_SELF'];
    ?>

    <style>
        .gallery img {
            width: 30%;
            padding: 5px;
            filter:grayscale(0%);
            transition: 1s;
        }

        .gallery img:hover{
            filter:grayscale(15%);
            transform: scale(1.1);
        }

        body{

            margin: 0;
            padding: 0;
            font-family: arial;

            animation: animate 16s ease-in-out infinite;
        }

        @keyframes animate {
            0% {
                background-image: url("../images/07.jpg");
            }
            25% {
                background-image: url("../images/08.jpg");
            }
            60% {
                background-image: url("../images/09.jpg");
            }
            75% {
                background-image: url("../images/10.jpg");
            }
        }
    </style>

    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
</head>
<body>
    <div id="app">
        <div class="responsive-bar">
            <div class="logo">
                <a style="text-decoration: none;" href="{{ url('/') }}">
                    <img src="{{asset('images/logo.png')}}" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/>
                </a>
            </div>
            <div class="menu">
                <h4 style="margin: 5px">
                    <i style="font-size:30px; color:white" class="fa">&#xf0c9;</i>
                </h4>
            </div>
        </div>
        <nav class="white">
                <div class="logo">
                    <a style="text-decoration: none;" href="{{ url('/') }}">
                        <img src="{{asset('images/logo.png')}}" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/>
                    </a>
                </div>
                <ul>
                    <li>
                        <a style="text-decoration: none;" href="{{ url('/') }}">Accueil</a>
                    </li>
                    <li>
                        <a style="text-decoration: none;" href="{{ route('prestations') }}">Prestations</a>
                    </li>
                    <li>
                        <a style="text-decoration: none;" href="{{ route('realisations') }}">Realisations</a>
                    </li>
                    <li>
                        <a style="text-decoration: none;" href="{{ route('showrooms') }}">Showrooms</a>
                    </li>
                    <li>
                        <a style="text-decoration: none;" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>

        </nav>



            @if ($page == "/index.php/login")
            @else
            <div style="z-index: 0; margin-top: 100px" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                @foreach ($res['sliders'] as $slider)
                    @if ($check == 0)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $slider->id }}" class="active"></li>
                    @else
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $slider->id }}"></li>
                    @endif
                    <?php $check = 1 ?>

                @endforeach
                <?php $check = 0 ?>

                </ol>
            <div class="carousel-inner">

                @foreach ($res['sliders'] as $slider)
                @if ($check == 0)
                    <div class="carousel-item active" data-interval="5000">
                @else
                    <div class="carousel-item" data-interval="5000">
                @endif
                        <img class="imgSlider" src="{{asset( $slider->image )}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div style="background-color:#007bff87">
                                <h5>{{ $slider->title }}</h5>
                                <p>{{ $slider->paragraphe }}</p>
                            </div>
                        </div>
                    </div>
                    <?php $check = 1 ?>
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
            @endif




        
        <main>
            @yield('content')
        </main>
        <footer>
            <div id="footertxt">
                <p><a target="_blank" href="http://www.webcake.fr">Création</a> 
                / <a target="_blank" href="{{ route('home') }}">&nbsp;&nbsp;&nbsp;Infra&nbsp;&nbsp;&nbsp;</a>  
                / <a target="_blank" href="http://www.a2mi-informatique.fr">&nbsp;&nbsp;&nbsp;A2MI</a>
                <br><br>
                <a href="plombier-chauffagiste-la-rochelle-mentions-legales.html">Mentions légales</a></p>
            </div>
        </footer>
    </div>

    <script type="text/javascript">
        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('a');
        const menuLength = menuItem.length;

        for (let i = 0; i<menuLength; i++) {
            if (menuItem[i].href === currentLocation) {
                menuItem[i].className = "active";
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
