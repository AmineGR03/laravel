@extends('default')
@section('creation')
<form action="/nvarticle" method="POST" >
    Titre: <input type="text" name="title" id="title" required>
    <br>@csrf
    Contenu: <textarea name="content" id="content" required></textarea><br>
    <select name="cat[]" multiple size="3">
    @foreach($categories as $c)
    <option value="{{$c->id}}">{{$c->type}}</option>
    
    @endforeach
    </select>
    <button type="submit">Submit</button>
</form>
@endsection
