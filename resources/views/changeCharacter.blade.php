@extends('layouts.base')
@section('title', 'Modifier Un Personnage')

@section('css')
    <link rel="stylesheet" href="css/add.css">
@endsection

@section('content')
<form action="/changeCharacter" method="POST">
    @csrf
    <h1>Modifier Un Personnage</h1>
    <input type="hidden" name="id" value="{{$character->id}}">
    <div class="mb-3">
      <label for="text" class="form-label">Nom</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$character->name}}">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="text" class="form-label">Dessinateur</label>
      <select type="text" name="designer_id" class="form-control">
        @foreach ($designers as $designer) 
        @if ($character->designer_id === $designer->id)
         <option value="{{$designer->id}}" selected>{{$designer->name}}</option>
        @else 
         <option value="{{$designer->id}}">{{$designer->name}}</option>
        @endif 
        @endforeach
      </select>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Année de Parution</label>
        <input type="text" name="creation_year" class="form-control" id="exampleInputPassword1"  value="{{$character->creation_year}}" required>
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Bd Affiliée</label>
        <input type="text" name="bd_name" class="form-control" id="exampleInputPassword1" value="{{$character->bd_name}}" required>
      </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
@endsection