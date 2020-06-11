@extends('layouts.dashboard')

@section('content')

<div style="margin-top: 100px" class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="container">
                @if(session()->has('createClient'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Notification : </strong> {{ session()->get('createClient') }} 
                    </div>
                @endif
            </div>

            <div class="card">
                <div class="card-header" style="text-transform : uppercase; text-align:center">Profil de {{ $user->prenom }} {{ $user->nom }}</div>
                
                <div class="card-body">
                    <h3> Informations du compte </h3>
    
                    <ul>
                        <li>Prénom : {{ $user->prenom }}  </li>
                        <li>Nom : {{ $user->nom }}  </li>
                        <li>Adresse : {{ $user->adresse }}  </li>
                        <li>Groupe : {{ $user->groupe }}  </li>
                        <li>Groupe : {{ $user->email }}  </li>
                        <li>Mobile : {{ $user->mobile }}  </li>
                    
                    </ul>
                    <a href="{{ route('client.password') }}">
                        <button style="width: 33%" type="button" class="btn btn-primary">Modifier le mot de passe</button>
                    </a>
                    @if ($user->groupe == "client")
                        <button style="width: 33%" type="button" class="btn btn-primary">Nous contacter</button>
                        <button style="width: 30%" type="button" class="btn btn-primary">PDF complet</button>
                    @endif
    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                </div>

            </div>

            @if ($user->groupe == "sousadmin")
                <div style="margin-top: 50px" class="card card-body">
                    <h3> Informations technicien </h3>
                    <ul>
                        <li>contact : Prenom Nom  </li>
                        <li>email : exampleemail@mail.com  </li>
                        <li>mobile : 0665258674  </li>
                        <li>fixe : 0665258674  </li>
                    
                    </ul>
                
                
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
