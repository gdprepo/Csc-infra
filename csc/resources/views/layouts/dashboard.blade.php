<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
    <style>
      body{
        background-color: grey;
      }

      .content {
        margin: 50px auto 0;
      }

      h1#head {
        font-family: 'Euphoria Script';
        text-align: center;
        margin: 0 0 30px;  
        font-size: 100px;
        line-height: 90px;
        text-shadow: 1px 1px 1px #343434;
        font-weight: normal;
      }

      #editor {
        resize:vertical;
        overflow:auto;
        border:1px solid silver;
        border-radius:5px;
        min-height:100px;
        box-shadow: inset 0 0 10px silver;
        padding:1em;
        background: white;
        margin: 0 auto;
        width: 90%;
      }
    
    </style>


    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Extranet</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Profil <span class="sr-only">(current)</span></a>
              </li>
              @if (Auth::user()->groupe == "sousadmin")
              <li class="nav-item">
                <a class="nav-link" href="{{ route('client.add') }}">Creer un compte client</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('client.list') }}">Liste clients</a>
              </li>
              @endif
              @if (Auth::user()->groupe == "admin")
              <li class="nav-item">
                <a class="nav-link" href="{{ route('site') }}">Affichage</a>
              </li>
              @endif
              <li class="nav-item">
                <a class="nav-link" href="{{ route('deconnection') }}">Se deconnecter</a>
              </li>
            </ul>
          </div>
        </nav>

        <main>
            @yield('content')
        </main>

    </div>

 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="{{ asset('./js/wysi.js') }}"></script>
</body>
</html>
