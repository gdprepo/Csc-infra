@extends('layouts.dashboard')

@section('content')

<div style="background-color: white; margin-top: 50px; padding: 50px" class="container">
    <form action="{{ route('slider.store' ) }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="title" placeholder="Titre" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" name="description" placeholder="Description" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <div class="custom-file">
                <input class="custom-file-input" type="file" name="file" aria-describedby="inputGroupFileAddon03"\>
                <label class="custom-file-label" for="inputGroupFile03">Choisir un fichier</label>

            </div>
        </div>

        <button style="width:100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Ajouter un slider</button>


    </form>


</div>




@endsection