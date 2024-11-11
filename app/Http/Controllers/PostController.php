<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('blogs.index', compact('posts'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:posts',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validates image type and size
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Stores the image in 'storage/app/public/images'
        }
    
        Post::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'content' => $request->input('content'),
            'image' => $imagePath, // Save the path to the database
        ]);
    
        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }
    
    
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail(); // Fetch the post by slug
        return view('posts.show', compact('post'));
    }
    
}
