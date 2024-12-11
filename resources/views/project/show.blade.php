<!-- resources/views/blogs/show.blade.php -->

@extends('layouts.homeLayout')

@section('content')
    <h1>{{ $blog->title }}</h1>
    <p><strong>Author:</strong> {{ $blog->author ?? 'Unknown' }}</p>
    <p>{{ $blog->content }}</p>

    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back to Blog List</a>
    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">Edit Post</a>

    <!-- Delete button (optional) -->
    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Post</button>
    </form>
@endsection
