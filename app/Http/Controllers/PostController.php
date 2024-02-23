<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('create_post',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $post = Post::create($request->only('name'));
       $categories = $request->category;
       $post->categories()->attach($categories);
       return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {        
        $categories = Category::all(); // Assuming you want to show all categories in the form
        return view('posts_edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->only('title', /* other fields... */));
        // Sync categories
        $post->categories()->sync($request->input('categories', [])); # the [] is an empty array provided as a default value.
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->categories()->detach();

        // Delete the post
        $post->delete();
    
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
