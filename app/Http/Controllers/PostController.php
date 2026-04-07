<?php

namespace App\Http\Controllers;

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
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'title' => 'required|min:1|max:245',
    //         'content' => 'required|min:1',
    //     ]);

    //     Post::create($validated);

    //     return redirect()->route('posts.index');
    // }
        public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:1|max:245',
            'content' => 'required|min:1',
        ]);

        Post::create($validated);

        return redirect()->route('posts.index')->with('success', 'Post has been created successfully! :3');
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Post $post)
    // {
    //     $validated = $request->validate([
    //         'title' => 'required|min:1|max:245',
    //         'content' => 'required|min:1',
    //     ]);

    //     $post->update($validated);

    //     return redirect()->route('posts.index');
    // }
        public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|min:1|max:245',
            'content' => 'required|min:1',
        ]);

        $post->update($validated);

        return redirect()->route('posts.index')->with('success', 'Post has been updated successfully! <3');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Post $post)
    // {
    //     $post->delete();
    //     return redirect()->route('posts.index');
    // }    
        public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post has been deleted successfully! :c');
    }
}