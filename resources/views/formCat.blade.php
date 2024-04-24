@extends('default')
@section('formCat')
<form action="/catcreate" method="POST">
    @csrf
    <label for="type">Categorie : </label>
    <input type="text" id="type" name="type">
    <button type="submit">Submit</button>
</form>
@endsection