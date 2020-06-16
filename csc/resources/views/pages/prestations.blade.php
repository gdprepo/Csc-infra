@extends('layouts.app')

@section('content')

        <div class="container">

            <div class="container" style="margin-bottom:100px; margin-top:50px" id="contenu">
				<br>
				<h2>Nos prestations</h2>
				{!! $res['prestation']->texte !!}
			</div>

            <div style="margin-top: -50px; margin-bottom: 50px" id="contenu3">
				<div id="colonne1">
					<h3 style="text-align: left">Nos travaux de chauffage</h3>
					<article>
						{!! $res['chauffage']->texte !!}
					</article>
				</div>

				<div id="colonne2">
					<h3 style="text-align: left">Nos travaux de plomberie</h3>
					<article>
						{!! $res['plomberie']->texte !!}
					</article>
				</div>
            </div>
            
            <div id="contenu3" style="background: rgba(255,255,255,0.8); width:960px; margin:auto;">
				<br>
				<h2>Documents administratifs</h2>
				<br>
				<p style="text-align:center">
					@foreach($res['document'] as $document)
						<a href="{{ $document->src }}" title="Télécharger" target="_blank">{{ $document->title }}</a>
						<br>
					@endforeach
				</p> 
				<br><br>
			</div>

        </div>

@endsection
