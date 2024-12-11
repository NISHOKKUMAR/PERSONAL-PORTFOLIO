@extends('layouts.blogLayout')

@section('title', 'Projects')

@section('content')
<div class="project-head">
    <h1>All Projects</h1>
    @auth
        <a href="{{ route('projects.create') }}" class="blog-create-btn">Create New Project</a>
    @endauth
</div>
<div class="projects">
    @foreach ($projects as $project)
        <div class="project-card">
            <div class="project-info">
                <h2 class="project-title">{{ $project->title }}</h2>
                <p class="project-description">{{ $project->description }}</p>
            </div>
            <div class="project-image">
                <img src="{{ asset('storage/' . 'images/2GPkYclHd1qNp2Dz6JFnzvtJbF3CIdNPabBcxSJb.jpg') }}" alt="{{ $project->title }}">
            </div>
        </div>
    @endforeach
</div>
@endsection
