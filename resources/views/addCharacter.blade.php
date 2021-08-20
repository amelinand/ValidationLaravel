@extends('layouts.base')
@section('title', 'Ajouter Livre')

@section('css')
    <link rel="stylesheet" href="css/add.css">
@endsection

@section('content')
<form action="/addCharacter" method="POST">
    @csrf
    <h1>Ajouter Un Personnage</h1>
    <div class="mb-3">
      <label for="text" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="text" class="form-label">Dessinateur</label>
      <select type="text" name="designer_id" class="form-control">
        @foreach ($designers as $designer) 
         <option value="{{$designer->id}}">{{$designer->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Année de Parution</label>
        <input type="text" name="creation_year" class="form-control" id="exampleInputPassword1" required>
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Bd Affiliée</label>
        <input type="text" name="bd_name" class="form-control" id="exampleInputPassword1" required>
      </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
@endsection