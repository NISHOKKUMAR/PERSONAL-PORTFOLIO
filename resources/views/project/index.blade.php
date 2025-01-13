@extends('layouts.blogLayout')

@section('title', 'Projects')

@section('content')
    <div class="project-head">
        <h1>All Projects</h1>
        @auth
            <a href="{{ route('projects.create') }}" class="project-create-btn">Create New Project</a>
        @endauth
    </div>
    <div class="projects">
        @foreach ($projects as $project)
            <a href="{{ route('projects.show', $project->slug) }}">
                <div class="project-card">
                    <div class="project-info">
                        <h2 class="project-title">{{ $project->title }}</h2>
                        <p class="project-description">{{ $project->description }}</p>
                    </div>
                    <div class="project-image">
                        <img src="{{ asset('storage/' .$project->image) }}" alt="{{ $project->title }}">
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
