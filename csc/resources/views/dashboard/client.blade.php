@extends('layouts.dashboard')

@section('content')

<div style="margin-top: 100px" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-transform : uppercase; text-align:center">Profil de {{ $user->prenom }} {{ $user->nom }}</div>
                
                <div class="card-body">
                    <h3> Informations du compte </h3>
    
                    <ul>
                        <li>Prénom : {{ $user->prenom }}  </li>
                        <li>Nom : {{ $user->nom }}  </li>
                        <li>Adresse : {{ $user->adresse }}  </li>
                        <li>Mobile : {{ $user->mobile }}  </li>
                        <li>Groupe : {{ $user->groupe }}  </li>
                    
                    </ul>
                </div>

            </div>

            <div style="margin-top: 50px" class="card card-body">
                <h3> Informations technicien </h3>
                <ul>
                    <li>contact : Prenom Nom  </li>
                    <li>email : exampleemail@mail.com  </li>
                    <li>mobile : 0665258674  </li>
                    <li>fixe : 0665258674  </li>
                
                </ul>

                <button style="width: 30%" type="button" class="btn btn-primary">Creer un bon d'intervention</button>
            
            
            </div>
        </div>
    </div>
</div>
@endsection
