@extends('layouts.app')
@section('title')
Show Post
@endsection
@section('content')
<h1>Edit {{ $post -> title }}</h1>
        <form action="{{ route('posts.update', ['post'=> $post -> id])}}" method="post">
            @csrf
            @method('Put')
            <label for="title">Title</label>
            <input id="input_title" type="text" name="title" value="{{ $post -> title }}">
            <label for="body">Body</label>
            <textarea cols="30" rows="10" id="input_body" type="text" name="body">{{ $post -> body }}</textarea>
        </form>
@endsection