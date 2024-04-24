<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Vous êtes entrain de modifier l'article {{$article->id}}</h2>
    <form method="POST" action="/updateArticle">
        @csrf
        @method('PUT')
        <input type="number" value="{{$article->id}}" name="id" id="id" hidden>
        <label for="titre">Nouveau Titre</label>
        <input type="text" value="{{$article->title}}" name="title" id="title"><br>
        <label for="contenu">Nouveau Contenu
        <textarea  name="content" id="content">{{$article->content}}</textarea><br>
        <button type="submit">Modifier</button>
    </form>

</body>
</html>
