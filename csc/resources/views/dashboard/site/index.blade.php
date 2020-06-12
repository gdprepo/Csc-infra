@extends('layouts.dashboard')

@section('content')

<div class=" row">
    <div style="padding-right:0" class="col-md-6">
        <select id="globalstyleselect" class="custom-select custom-select-lg mb-3">
            <option selected>Choisir un paragraphe a modifier</option>
            <option value="1">Welcome</option>
            <option value="2">Historique</option>
            <option value="3">Prestations</option>
            <option value="4">Chauffage</option>
            <option value="5">Plomberie</option>
            <option value="6">Document</option>
            <option value="7">Slider</option>
        </select>
    </div>

    <div style="padding-left:0" class="col-md-6">
        <select id="globalstyleselect" class="custom-select custom-select-lg mb-3">
            <option selected>Choisir une page a modifier</option>
            <option value="welcome">Page welcome</option>
            <option value="prestation">Page prestation</option>
            <option value="3">Prestations</option>
        </select>
    </div>

</div>


<div style="margin-top:50px; margin-bottom:-50px" class="container">
    @if(session()->has('textUpd'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Notification : </strong> {{ session()->get('textUpd') }} 
        </div>
    @endif
</div>

<form class="1 welcome box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['welcome']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Bienvenue à l'entreprise Morandini</h3>
        <textarea cols="80" id="editor1" name="editor1" rows="10" data-sample-short>{!! $res['welcome']->texte !!}</textarea>
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<form class="2 welcome box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['historique']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Historique</h3>
        <textarea cols="80" id="editor2" name="editor1" rows="10" data-sample-short>{!! $res['historique']->texte !!}</textarea>
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<form class="3 prestation box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['prestation']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Prestations</h3>
        <textarea cols="80" id="editor3" name="editor1" rows="10" data-sample-short>{!! $res['prestation']->texte !!}</textarea>
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<form class="4 prestation box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['chauffage']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Chauffage</h3>
        <textarea cols="80" id="editor4" name="editor1" rows="10" data-sample-short>{!! $res['chauffage']->texte !!}</textarea>
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<form class="5 prestation box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['plomberie']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Plomberie</h3>
        <textarea cols="80" id="editor5" name="editor1" rows="10" data-sample-short>{!! $res['plomberie']->texte !!}</textarea>
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<div class="6 prestation box" style="display: none">

    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Document</h3>

        <table style="background-color: white" class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Src</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach($res['document'] as $document)
                <tr>
                    <td>{{ $document->title }}</td>
                    <td>{{ $document->src }}</td>
                    <td>
                    <form action="{{route('document.delete', $document->id)}}" method="POST">
                        @csrf
                        <button style="width:100%" type="submit" class="btn btn-primary">Supprimer </button>
                    </form>


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="7 slider box" style="display: none">

    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Slider</h3>

        <table style="background-color: white" class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Paragraphe</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach($res['slider'] as $slider)
                <tr>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->paragraphe }}</td>
                    <td>{{ $slider->image }}</td>
                    <td>
                    <form action="{{route('slider.delete', $slider->id)}}" method="POST">
                        @csrf
                        <button style="width:100%" type="submit" class="btn btn-primary">Supprimer </button>
                    </form>


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
