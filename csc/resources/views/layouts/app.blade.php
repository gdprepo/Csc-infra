<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CSC') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/image.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>

    <?php 
      $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
      $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
      $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
      $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
      $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
    
    ?>
    <?php  if ($iPhone | $Android) { ?>
      <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
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
    </style>

    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
</head>
<body>
    <div id="app">
        <?php  if ($iPhone | $Android) { ?>


            <nav class="navbar  navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <div class="" id="">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                </div>
            </nav>











    
        <?php  } else { ?>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #36363685; height: 150px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="nav collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="container navbar-nav mr-auto">
                    <li class="nav-item btn_menu">
                        <a class="nav-link active" href="{{ route('prestations') }}">Prestations <span class="sr-only">(current)</span><img src="{{asset('images/iconPrestation.png')}}" style="height:60px;" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/></a>
                    </li>
                    <li class="nav-item btn_menu">
                        <a class="nav-link" href="{{ route('realisations') }}">Realisations <span class="sr-only">(current)</span><img src="{{asset('images/iconRealisation.png')}}" style="height:60px;" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/></a>
                    </li>
                    <li style="z-index:1" class="nav-item logo">
                        <a class="nav-link" href="{{ url('/') }}"><img style="width: 100%" src="{{asset('images/logo.png')}}" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/></a>
                    </li>                    
                    <li class="nav-item btn_menu">
                        <a class="nav-link" href="{{ route('showrooms') }}">Showrooms <span class="sr-only">(current)</span><img src="{{asset('images/iconShowroom.png')}}" style="height:60px;" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/></a>
                    </li>
                    <li class="nav-item btn_menu">
                        <a class="nav-link" href="{{ route('contact') }}">Contact <span class="sr-only">(current)</span><img src="{{asset('images/iconContact.png')}}" style="height:60px;" alt="CSC Morandini - Plombier chauffagiste La Rochelle"/></a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php  }?>


            @if ($page == "/index.php/login")
            @else
            <div style="z-index: 0" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
                        <img style="max-height: 580px" src="{{asset( $slider->image )}}" class="d-block w-100" alt="...">
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

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
