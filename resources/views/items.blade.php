<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


        <h1>Article numero :{{ $article->id }}</h1>
        <p>Titre:{{$article->title}}</p>
        <p>Contenu:{{$article->content}}</p>
        <button><a href="modifier/{{ $article->id }}">Modifier</a></button>
        <a href="/blog">Retourner à la liste</a><br>
        <a href="/Home">Retourner à la page d'acceuil</a><br>



</body>

</html>
