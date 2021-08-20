@extends('layouts.base')
@section('title', 'Modifier Un Dessinateur')

@section('css')
    <link rel="stylesheet" href="css/add.css">
@endsection

@section('content')
<form action="/changeDesigner" method="POST">
    @csrf
    <h1>Modifier Un Desinateur</h1>
    <input type="hidden" name="id" value="{{$designer->id}}">
    <div class="mb-3">
      <label for="text" class="form-label">Nom</label>
      <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" value="{{$designer->name}}">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Année De Naissance</label>
        <input type="text" name="birth_year" class="form-control" value="{{$designer->birth_year}}" required>
      </div>
    <div class="mb-3">
        <label for="text" class="form-label">Nationalité</label>
        <input type="text" name="nationality" class="form-control" value="{{$designer->nationality}}" required>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
@endsection