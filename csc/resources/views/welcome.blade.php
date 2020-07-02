@extends('layouts.app')


@section('content')



        <div class="container">

            <div style="margin-bottom:100px; margin-top:50px; background-color:white; text-align: center; padding:50px">
                <br>
                <h2 style="color: blue">Bienvenue à l'entreprise Morandini<br><span style="font-size:25px;">à Périgny en Charente-Maritime</span></h2>

                {!! $res['welcome']->texte !!}
            </div>

            <div style="margin-bottom:100px; margin-top:50px; background-color:white; text-align: center; padding:10px">
                <br>
                <h2 style="color: blue">Historique</h2>

                {!! $res['historique']->texte !!}
			</div>

        </div>

@endsection
