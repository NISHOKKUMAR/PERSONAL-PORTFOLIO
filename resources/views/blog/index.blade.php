@extends('layouts.blogLayout')

@section('content')
    <div class="blog-head">
        <h1>All Blog Posts</h1>
        @auth
            <a href="{{ route('blogs.create') }}" class="blog-create-btn">Create New Blog Post</a>
        @endauth
    </div>
    @if ($blogs->isEmpty())
        <div class="no-blogs-message">Nothing there to show, yet...</div>
    @else
        <div class="grid-centre">
            <section class="blog-grid">
                @foreach ($blogs as $blog)
                    <a href="{{ url('/blogs/'.$blog->slug) }}">
                        <article class="blog-post">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Post Image">
                            <div class="blog-content">
                                <h3>{{ $blog->title }}</h3>
                                <p class="author-date">{{ $blog->author }}</p>
                                <p class="description">{{ $blog->description }}</p>
                                <div class="tags">
                                    @foreach (explode(',', $blog->tags) as $tag)
                                        <span>{{ trim($tag) }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </article>
                    </a>
                @endforeach
            </section>
        </div>
        <div class="pagination">
            {{ $blogs->links('vendor.pagination.custom') }}
        </div>
    @endif

    


@endsection
    