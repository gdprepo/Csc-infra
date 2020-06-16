@extends('layouts.app')


@section('content')



        <div class="container">

            <div class="container" style="margin-bottom:100px; margin-top:50px" id="contenu">
                <br>
                <h2>Bienvenue à l'entreprise Morandini<br><span style="font-size:25px;">à Périgny en Charente-Maritime</span></h2>

                {!! $res['welcome']->texte !!}
            </div>

            <div class="container" id="contenu3" style="margin-bottom:100px; margin-top: -50px ;background: rgba(255,255,255,0.8);">
                <br>
                <h2>Historique</h2>

                {!! $res['historique']->texte !!}
			</div>

        </div>

@endsection
