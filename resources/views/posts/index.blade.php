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
            <th class="updated">Update</th>
            <th class="action">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $item)
        <tr>
            <td class="id">{{ $item -> id  }}</td>
            <td class="title">{{ $item -> title  }}</td>
            <td class="body">{{ $item -> body  }}</td>
            <td class="created">{{ $item -> created_at  }}</td>
            <td class="updated">{{ $item -> updated_at  }}</td>
            <td class="action">
                <a href="{{ route('posts.show', ['post' => $item -> id]) }}">
                    <button>View</button>
                </a>
                <a href="{{ route('posts.edit', ['post' => $item -> id]) }}">
                    <button>Edit</button>
                </a>
                <form action="{{ route('posts.destroy', ['post' => $item -> id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
                
                   
                
            </td>
        </tr>     
        @endforeach
    </tbody>
</table>
        

<a href="{{ route('posts.create') }}"><button id="create_btn">New Post</button></a>    
@endsection