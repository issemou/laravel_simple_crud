@extends('layoute.app')
@section('content')

    <h2>Update post</h2>
    <form method="POST" action="">
        @csrf
        <input type="hidden" name="{{ $post->id }}">
        <input type="text" name="title" value="{{ $post->title }}">
        <textarea name="description" value="{{ $post->content }}" cols="10" rows="10"></textarea>
        <button type="submit"> Update </button>
    </form>

@endsection
