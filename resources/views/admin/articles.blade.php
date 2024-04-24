@extends('default')
@section('admin')
<table border=1>
    <tr><th>titre</th><th>action</th></tr>
@foreach ($items as $t )

    <tr><td>{{$t['title']}}</td><td><button><a href="/admin/{{ $t['title'] }}"   >modifier</a></button></td></tr>


@endforeach
</table>
@endsection
