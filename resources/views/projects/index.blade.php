
@extends('layouts.blogLayout')

@section('title', 'Blogs')  

@section('content')
    <h1>All Blog Posts</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create New Blog Post</a>
    

    <section class="blog-grid" id="content">
        @foreach ($blogs as $blog):
            <article class="blog-post">
                <img src="Public/Assets/images/<?php echo htmlspecialchars($blog['image']); ?>" alt="Post Image">
                <div class="content">
                    <h3>{{ htmlspecialchars($blog['title']); }}</h3>
                    <p class="author-date">{{ htmlspecialchars($blog['author']) }}</p>
                    <p class="description">{{ htmlspecialchars($blog['description']) }}</p>
                    <div class="tags">
                        @foreach (explode(',', $blog['tags']) as $tag)
                            <span>{{ htmlspecialchars(trim($tag)) }}</span>
                        @endforeach
                    </div>
                </div>
            </article>
        @endforeach
@endsection
