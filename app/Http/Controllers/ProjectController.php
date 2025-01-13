<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function __construct()
    {
        // Apply 'auth' middleware to all methods except 'index' and 'show'
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'tags' => 'required|string',
            'live_url' => 'nullable|url',
            'github_url' => 'nullable|url',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create the slug from the title
        $slug = Str::slug($validated['title'], '-');

        // Store image if present
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('project_images', 'public');
        } else {
            $imagePath = null;
        }

        // Create the project with the generated slug
        Project::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'tags' => $validated['tags'],
            'live_url' => $validated['live_url'] ?? null,
            'github_url' => $validated['github_url'] ?? null,
            'content' => $validated['content'],
            'image' => $imagePath,
            'slug' => $slug,  // Set the generated slug
            'user_id' => auth()->id(), // Assign authenticated user's ID
        ]);

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $project = Project::where('slug',$slug)->firstOrFail();
        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
