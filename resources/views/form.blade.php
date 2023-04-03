@extends('layoute.app')
@section('content')

    <h2>Creer un nouveau post</h2>
    <form method="POST" action="{{ route('post.store') }}">
        @csrf
        <input type="text" name="title">
        <textarea name="description" cols="10" rows="10"></textarea>
        <button type="submit"> Add </button>
    </form>


@endsection
