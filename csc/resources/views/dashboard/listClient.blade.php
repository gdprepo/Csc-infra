@extends('layouts.dashboard')

<style>

body{
    background: url({{asset( 'images/tyauterie_cover.jpg' )}}) no-repeat center center fixed;
}


</style>


@section('content')

<div style="margin-top: 100px" class="container">
    <div class="card"> 
        <div class="card-header">
            <h3> Liste des clients </h3>
        
        </div>
        
        
        <div class="card-body">
        

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{ route('client.show', $user->id) }}">{{$user->nom}} {{$user->prenom}}</a></td>
                        <td>{{$user->email}} </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    
    </div>

</div>
@endsection
