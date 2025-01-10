<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class BlogController extends Controller
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
        $blogs = Blog::paginate(9);
        return view('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'tags' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:9048', // Validation for image
        ]);

        $slug = Str::slug($validated['title']);

        // Check for duplicates and append a counter if necessary
        $originalSlug = $slug;
        $count = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Store the image and get the file path
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Create the blog post and save it to the database
        $blog = new Blog();
        $blog->title = $validated['title'];
        $blog->author = $validated['author'];
        $blog->tags = $validated['tags'];
        $blog->content = $validated['content'];
        $blog->image = $imagePath; 
        $blog->slug = $slug;
        $blog->user_id = auth()->id;
        $blog->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Blog post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('blog'));
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
