@extends('layouts.dashboard')

@section('content')

<div style="margin-top: 100px" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-transform : uppercase; text-align:center">Changer votre mot de passe</div>
                
                <div class="card-body">
                    <h3> Entrer les informations </h3>
                
                    <form method="POST" action="{{ route('client.setpssw') }}">
                    @csrf
                        <div class="row">
                            <div style="margin-left: 15%" class="form-group col-md-8">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="text" class="form-control" name="inputpassword" id="inputpassword" placeholder="Password">
                            </div>

                            <button style="width: 100%; margin-left: 15%" type="submit" class="btn btn-primary col-md-8">Submit</button>
                        </div>

                    </form>


                </div>

            </div>

        </div>
    </div>
</div>
@endsection
