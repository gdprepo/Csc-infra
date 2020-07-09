@extends('layouts.app')

@section('content')

        <div class="container">

            <div class="prestations" style="width: 85%; margin-left: 7% ;margin-bottom:50px; margin-top:50px; background-color:white; text-align: center;">
				<br>
				<h2 style="color: blue">Nos prestations</h2>
				<div>
					{!! $res['prestation']->texte !!}
				</div>
			</div>

            <div class="row" style="width: 85%; margin-left: 7% ;margin-bottom:50px; text-align: center;">
				<div class="col-md-6 travaux" style="margin-left: -10px">
					<h3 style="text-align: left; background-color: blue; padding: 15px; color:white">Nos travaux de chauffage</h3>
					<article style="background-color:white; padding: 10px">
						{!! $res['chauffage']->texte !!}
					</article>
				</div>

				<div class="col-md-6 travaux" style="margin-left: 10px">
					<h3 style="text-align: left; background-color: blue; padding: 15px; color:white">Nos travaux de plomberie</h3>
					<article style="background-color:white; padding: 10px">
						{!! $res['plomberie']->texte !!}
					</article>
				</div>
            </div>
            
            <div style="margin:auto; width: 85%; text-align: center;">
				<h2 style="background-color: blue; padding: 5px;">Documents administratifs</h2>

				<ul style="text-align:center; background-color: white; padding: 50px;">
					@foreach($res['document'] as $document)
						<li style="list-style:none;">
							<a href="{{ $document->src }}" title="Télécharger" target="_blank">{{ $document->title }}</a>
						</li>
					@endforeach
				</ul> 
			</div>

        </div>

@endsection
