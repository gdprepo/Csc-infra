@extends('layouts.dashboard')

@section('content')

<div style="margin-top:50px; margin-bottom:-50px" class="container">
    @if(session()->has('textUpd'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Notification : </strong> {{ session()->get('textUpd') }} 
        </div>
    @endif
</div>


<form method="POST" action="{{ route('welcome.upd', $welcome->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3>Bienvenue à l'entreprise Morandini</h3>
        <textarea cols="80" id="editor1" name="editor1" rows="10" data-sample-short>{!! $welcome->texte !!}</textarea>
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<form method="POST" action="{{ route('welcome.upd', $historique->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3>Historique</h3>
        <textarea cols="80" id="editor2" name="editor1" rows="10" data-sample-short>{!! $historique->texte !!}</textarea>
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

@endsection
