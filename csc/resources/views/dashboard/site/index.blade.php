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
            <option value="realisation">Page realisation</option>

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

<form class="8 realisation box" style="display: none" method="POST" action="{{ route('realisation.upd', $res['salleDeBain']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Salle De Bain</h3>
        <textarea cols="80" id="editor6" name="editor1" rows="10" data-sample-short>{!! $res['salleDeBain']->texte !!}</textarea>
        <button style="width: 100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Enregistrer</button>
        
        <table style="background-color: white" class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach($res['salleDeBain']->images as $salleDeBain)
                <tr>
                    <td>{{ $salleDeBain->title }}</td>
                    <td>{{ $salleDeBain->src }}</td>
                    <td>

                    <form action="{{route('realisation.delete', $salleDeBain->id)}}" method="POST">
                        @csrf
                        <button style="width:100%" type="submit" class="btn btn-primary">Supprimer </button>
                    </form>


                    </td>

                </tr>
            @endforeach
            </tbody>
            
        </table>
        
        <form action="{{route('realisation.add', $res['salleDeBain']->id)}}" method="POST">
            @csrf
            <button style="width:100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Ajouter une image</button>
        </form>
        
    </div>
</form>

<form class="plomberie realisation box" style="display: none" method="POST" action="{{ route('realisation.upd', $res['plomberie_realisation']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Plomberie Realisation</h3>
        <textarea cols="80" id="editor7" name="editor1" rows="10" data-sample-short>{!! $res['plomberie_realisation']->texte !!}</textarea>
        <button style="width: 100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Enregistrer</button>

        <table style="background-color: white" class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach($res['plomberie_realisation']->images as $plomberie)
                <tr>
                    <td>{{ $plomberie->title }}</td>
                    <td>{{ $plomberie->src }}</td>
                    <td>
                    <form action="{{route('realisation.delete', $plomberie->id)}}" method="POST">
                        @csrf
                        <button style="width:100%" type="submit" class="btn btn-primary">Supprimer </button>
                    </form>


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

        <form action="{{route('realisation.add', $res['plomberie_realisation']->id)}}" method="POST">
            @csrf
            <button style="width:100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Ajouter une image</button>
        </form>        
    </div>
</form>

<form class="douche realisation box" style="display: none" method="POST" action="{{ route('realisation.upd', $res['douche']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Douche</h3>
        <textarea cols="80" id="editor8" name="editor1" rows="10" data-sample-short>{!! $res['douche']->texte !!}</textarea>
        <button style="width: 100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Enregistrer</button>

        <table style="background-color: white" class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach($res['douche']->images as $douche)
                <tr>
                    <td>{{ $douche->title }}</td>
                    <td>{{ $douche->src }}</td>
                    <td>
                    <form action="{{route('realisation.delete', $douche->id)}}" method="POST">
                        @csrf
                        <button style="width:100%" type="submit" class="btn btn-primary">Supprimer </button>
                    </form>


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        
        <form action="{{route('realisation.add', $res['douche']->id)}}" method="POST">
            @csrf
            <button style="width:100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Ajouter une image</button>
        </form> 
        
    </div>
</form>

<form class="douche_apres realisation box" style="display: none" method="POST" action="{{ route('realisation.upd', $res['douche_apres']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Douche Apres</h3>
        
        <table style="background-color: white" class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach($res['douche_apres']->images as $douche_apres)
                <tr>
                    <td>{{ $douche_apres->title }}</td>
                    <td>{{ $douche_apres->src }}</td>
                    <td>
                    <form action="{{route('realisation.delete', $douche_apres->id)}}" method="POST">
                        @csrf
                        <button style="width:100%" type="submit" class="btn btn-primary">Supprimer </button>
                    </form>


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        
        <form action="{{route('realisation.add', $res['douche_apres']->id)}}" method="POST">
            @csrf
            <button style="width:100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Ajouter une image</button>
        </form> 
    </div>
</form>

<form class="restauration realisation box" style="display: none" method="POST" action="{{ route('realisation.upd', $res['restauration']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Restauration</h3>
        <textarea cols="80" id="editor9" name="editor1" rows="10" data-sample-short>{!! $res['restauration']->texte !!}</textarea>
        <button style="width: 100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Enregistrer</button>

        <table style="background-color: white" class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach($res['restauration']->images as $restauration)
                <tr>
                    <td>{{ $restauration->title }}</td>
                    <td>{{ $restauration->src }}</td>
                    <td>
                    <form action="{{route('realisation.delete', $restauration->id)}}" method="POST">
                        @csrf
                        <button style="width:100%" type="submit" class="btn btn-primary">Supprimer </button>
                    </form>


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        
        <form action="{{route('realisation.add', $res['restauration']->id)}}" method="POST">
            @csrf
            <button style="width:100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Ajouter une image</button>
        </form> 
        
    </div>
</form>

<form class="restauration_apres realisation box" style="display: none" method="POST" action="{{ route('realisation.upd', $res['restauration_apres']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">Restauration Apres</h3>
        
        <table style="background-color: white" class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
            @foreach($res['restauration_apres']->images as $restauration_apres)
                <tr>
                    <td>{{ $restauration_apres->title }}</td>
                    <td>{{ $restauration_apres->src }}</td>
                    <td>
                    <form action="{{route('realisation.delete', $restauration_apres->id)}}" method="POST">
                        @csrf
                        <button style="width:100%" type="submit" class="btn btn-primary">Supprimer </button>
                    </form>


                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        
        <form action="{{route('realisation.add', $res['restauration_apres']->id)}}" method="POST">
            @csrf
            <button style="width:100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Ajouter une image</button>
        </form> 
        
    </div>
</form>

<form class="references realisation box" style="display: none" method="POST" action="{{ route('welcome.upd', $res['references']->id) }}">
    @csrf
    <div style="margin-top: 100px" class="container">
        <h3 style="background-color:white" class="card-header">References</h3>
        <textarea cols="80" id="editor11" name="editor1" rows="10" data-sample-short>{!! $res['references']->texte !!}</textarea>
        <button style="width: 100%" type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>
@endsection
