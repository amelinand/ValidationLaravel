@extends('layouts.base')
@section('title', 'Les Personnages')
@section('css')
    <link rel="stylesheet" href="css/list.css">
@endsection

@section('content')
    
    <div class="card">
        <div class="card-body">
        <h1>Les Personnages</h1>
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Dessinateur</th>
            <th scope="col">Année de Création</th>
            <th scope="col">Bd Affiliée</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allthecharacters as $character)    
            <tr>
                <td>{{$character->name}}</td>
                <td> {{$character->designer->name}} </td>
                <td> {{$character->creation_year}} </td>
                <td> {{$character->bd_name}} </td>
                <td>
                  <form action="/editCharacter" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$character->id}}">
                    <input type="image" src="img/change.png">
                  </form>
                </td>
                <td>
                  <form action="deleteCharacter" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$character->id}}">
                    <input type="image" src="img/trash-icon.png">
                  </form>
                </td>
                

            </tr>
            @endforeach
            
        </tbody>
      </table>
@endsection