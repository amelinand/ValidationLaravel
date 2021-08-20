@extends('layouts.base')
@section('title', 'Ajouter Un Dessinateur')

@section('css')
    <link rel="stylesheet" href="css/add.css">
@endsection

@section('content')
<form action="/addDesigner" method="POST">
    @csrf
    <h1>Ajouter Un Dessinateur</h1>
    <div class="mb-3">
      <label for="text" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Année De Naissance</label>
        <input type="text" name="birth_year" class="form-control" id="exampleInputPassword1" required>
      </div>
    <div class="mb-3">
        <label for="text" class="form-label">Nationalité</label>
        <input type="text" name="nationality" class="form-control" id="exampleInputPassword1" required>
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
@endsection