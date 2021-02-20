@extends('layouts.app')
@section('title')
Blog
@endsection
@section('content')
<h1>Blog</h1>
<table>
    <thead>
        <tr>
            <th class="id">ID</th>
            <th class="title">Title</th>
            <th class="body">Body</th>
            <th class="created">Created</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $item)
        <tr>
            <td class="id">{{ $item -> id  }}</td>
            <td class="title">{{ $item -> title  }}</td>
            <td class="body">{{ $item -> body  }}</td>
            <td class="created">{{ $item -> created_at  }}</td>
        </tr>     
        @endforeach
    </tbody>
</table>
        

<a href="{{ route('posts.create') }}"><button class="create_post">New Post</button></a>    
@endsection