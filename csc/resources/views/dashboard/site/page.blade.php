@extends('layouts.dashboard')

@section('content')

<div class=" row">
    <div style="padding-left:0" class="col-md-6">
        <select id="globalstyleselect" class="custom-select custom-select-lg mb-3">
            <option selected>Choisir une page a modifier</option>
            <option value="showroom">Showroom</option>
            <option value="contact">Contact</option>

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


<form class="3 contact box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['zone']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Zone d'intervention</h3>
        <textarea cols="80" id="editor17" name="editor1" rows="10" data-sample-short>{!! $res['zone']->texte !!}</textarea>
        
        
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<form class="1 contact box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['contact']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Contact</h3>
        <textarea cols="80" id="editor15" name="editor1" rows="10" data-sample-short>{!! $res['contact']->texte !!}</textarea>
        
        
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<form class="2 contact box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['coordonees']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Coordonees</h3>
        <textarea cols="80" id="editor16" name="editor1" rows="10" data-sample-short>{!! $res['coordonees']->texte !!}</textarea>
        
        
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>


<form class="showroom box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['showroom']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Showroom</h3>
        <textarea cols="80" id="editor12" name="editor1" rows="10" data-sample-short>{!! $res['showroom']->texte !!}</textarea>
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<form class="showroom box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['adresse']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Adresse</h3>
        <textarea cols="80" id="editor13" name="editor1" rows="10" data-sample-short>{!! $res['adresse']->texte !!}</textarea>
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<form class="showroom box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['horaire']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Horaire</h3>
        <textarea cols="80" id="editor14" name="editor1" rows="10" data-sample-short>{!! $res['horaire']->texte !!}</textarea>
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>

<div class="showroom box" style="display: none">

    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Map</h3>
        
        <table style="background-color: white" class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach($res['map']->images as $map)
                <tr>
                    <td>{{ $map->title }}</td>
                    <td>{{ $map->src }}</td>
                    <td>
                    <form action="{{route('realisation.delete', $map->id)}}" method="POST">
                        @csrf
                        <button style="width:100%" type="submit" class="btn btn-primary">Supprimer </button>
                    </form>


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        
        <form action="{{route('realisation.add', $res['map']->id)}}" method="POST">
            @csrf
            <button style="width:100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Ajouter une image</button>
        </form> 

    </div>
</div>

<div class="showroom box" style="display: none">

    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Galerie</h3>
        
        <table style="background-color: white" class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach($res['galerie']->images as $galerie)
                <tr>
                    <td>{{ $galerie->title }}</td>
                    <td>{{ $galerie->src }}</td>
                    <td>
                    <form action="{{route('realisation.delete', $galerie->id)}}" method="POST">
                        @csrf
                        <button style="width:100%" type="submit" class="btn btn-primary">Supprimer </button>
                    </form>


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        
        <form action="{{route('realisation.add', $res['galerie']->id)}}" method="POST">
            @csrf
            <button style="width:100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Ajouter une image</button>
        </form> 
    </div>
</div>




@endsection
