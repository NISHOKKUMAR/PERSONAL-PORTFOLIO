@extends('layouts.blogLayout')

@section('title',$project->title)
@section('content')
    <div class="project-show-container">
        <div class="project-header">
            <h1>{{ $project->title }}</h1>
            <p class="author">By {{ $project->author }}</p>
        </div>
        <div class="project-image">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }} image">
        </div>
        <div class="project-details">
            <div class="project-description">
                <h3>Description</h3>
                <p>{{ $project->description }}</p>
            </div>

            <div class="project-tags">
                <h3>Tags</h3>
                <p>{{ $project->tags }}</p>
            </div>

            <div class="project-content">
                <h3>Content</h3>
                <p>{{ $project->content }}</p>
            </div>

            <div class="project-links">
                <h3>Links</h3>
                <ul>
                    <li><a href="{{ $project->live_url }}" target="_blank">Live URL</a></li>
                    <li><a href="{{ $project->github_url }}" target="_blank">GitHub Repository</a></li>
                </ul>
            </div>

        </div>
    </div>
@endsection
