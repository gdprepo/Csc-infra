@extends('layouts.dashboard')

@section('content')

<div style="background-color: white; margin-top: 50px; padding: 50px" class="container">
    <form action="{{ route('realisation.storeImage', $res['realisation']->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <div class="custom-file">
                <input class="custom-file-input" type="file" name="file" aria-describedby="inputGroupFileAddon03"\>
                <label class="custom-file-label" for="inputGroupFile03">Choisir une image</label>

            </div>
        </div>

        <button style="width:100%; margin-bottom: 20px" type="submit" class="btn btn-primary">Ajouter l'Image</button>


    </form>


</div>




@endsection