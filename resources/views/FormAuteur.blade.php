@extends('default')
@section('Auteur')
<form action="/creation" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="n">Nom:</label>
    <input type="text" name="name">
    <label for="num">Numéro tel:</label>
    <input type="number" name="tel">
    <input type="file" name="fichier" >
    <button type="submit">Ajouter</button>
</form>
@endsection
