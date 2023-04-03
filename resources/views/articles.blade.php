
@extends('layoute.app')

@section('content')
    <h1>Liste des articles</h1>

    @if($posts ->count() > 0)
        @foreach($posts as $val)
            <h2><a href="{{ route('post.show', ['id'=> $val->id]) }}">{{ $val->title }}</a></h2>
            <a href="{{ route('post.update', ['id'=> $val->id]) }}" style="background-color: yellow;"> update</a>
        @endforeach
    @else
        <span>Aucun post en base de donnees</span>
    @endif
@endsection

