<!-- resources/views/blogs/create.blade.php -->

@extends('layouts.homeLayout')

@section('content')
    <h1>Create New Blog Post</h1>

    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea id="content" name="content" rows="5" required></textarea>
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" id="author" name="author">
        </div>

        <button type="submit">Create Post</button>
    </form>
@endsection
