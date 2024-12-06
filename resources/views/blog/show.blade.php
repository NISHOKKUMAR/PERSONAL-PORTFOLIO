@extends('layouts.blogLayout')

@section('content')
    <div class="blog-detail-container">
        <article class="blog-detail">
            <h1 class="blog-title">{{ $blog->title }}</h1>
            <p class="blog-author">By {{ $blog->author }}</p>
            <p class="blog-date">Published on {{ $blog->created_at->format('F d, Y') }}</p>

            <div class="blog-image">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="Post Image">
            </div>

            <div class="blog-content">
                {!! nl2br(e($blog->content)) !!}
            </div>

            <div class="blog-tags">
                @foreach (explode(',', $blog->tags) as $tag)
                    <span class="tag">{{ trim($tag) }}</span>
                @endforeach
            </div>
        </article>
        <br>
        <a href="{{ route('blogs.index') }}" class="back-btn">Back to All Blogs</a>
    </div>
@endsection
