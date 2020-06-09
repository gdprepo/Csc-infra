@extends('layouts.dashboard')

@section('content')

<div style="margin-top: 100px" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-transform : uppercase; text-align:center">Creer un client</div>
                
                <div class="card-body">
                    <h3> Entrer les informations </h3>
                
                    <form method="POST" action="{{ route('client.create') }}">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Prenom</label>
                            <input type="text" class="form-control" name="inputprenom" id="inputprenom" placeholder="Prenom">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nom</label>
                            <input type="text" class="form-control" name="inputnom" id="inputnom" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="inputemail" id="inputemail" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">Une adresse mail validé et jamais utilisé.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" name="inputpassword" id="inputpassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telephone</label>
                            <input type="text" class="form-control" name="inputmobile" id="inputmobile" placeholder="Telehpone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Adresse</label>
                            <input type="text" class="form-control" name="inputadresse" id="inputmobile" placeholder="Adresse">
                        </div>

                        <button style="width: 100%" type="submit" class="btn btn-primary">Submit</button>
                    </form>


                </div>

            </div>

        </div>
    </div>
</div>
@endsection
