@extends('default')
@section('section')
<h2>Liste des articles</h2>
<div class="container p-5  bg-dark text-white">
@foreach ($article as $t )

        <span class="col-sm-3 p-3 bg-white text-dark"><span> {{$t['img_path']}}</span>
       <span> {{$t['title']}}</span>
        <button class="col"><a style="text-decoration:none" class="link-offset-1" href="/blog/{{ $t['id'] }}">view</a></button>
        <button class="col"><a style="text-decoration:none" class="link-offset-1" href="/delete/{{ $t['id'] }}">supprimer</a></button>
    </span>
@endforeach
</div>
<h2>Liste Des Categories</h2>
<div class="container p-5  bg-dark text-white">
    @foreach ($categorie as $t )

          <span class="col-sm-3 p-3 bg-white text-dark"><span> </span>
       <span > {{$t['type']}}</span>
    @endforeach
@endsection

