@extends('layouts.base')
@section('title', 'Les Dessinateurs')
@section('css')
    <link rel="stylesheet" href="css/list.css">
@endsection

@section('content')
    
    <div class="card">
        <div class="card-body">
        <h1>Les Dessinateurs</h1>
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Année de Naissance</th>
            <th scope="col">Nationalité</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allthedesigners as $designer)    
            <tr>
                <td> {{$designer->name}} </td>
                <td> {{$designer->birth_year}} </td>
                <td> {{$designer->nationality}} </td>
                <td>
                  <form action="/editDesigner" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$designer->id}}">
                    <input type="image" src="img/change.png">
                  </form>
                </td>
                <td>
                  <form action="deleteDesigner" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$designer->id}}">
                    <input type="image" src="img/trash-icon.png">
                  </form>
                </td>
                

            </tr>
            @endforeach
            
        </tbody>
      </table>
@endsection