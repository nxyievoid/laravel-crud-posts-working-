<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    // index
    public function index()
    {
        $query = Post::query();

        if(request('filter') === 'deleted') {
            $query->whereNotNull('deleted_at');
        } else {
            $query->whereNull('deleted_at');
        }
        $posts = $query->get();
        return view('posts.index', ['posts' => $posts]);
    }

    // create
    public function create()
    {
        return view('posts.create');
    }

    // store
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:1|max:245',
            'content' => 'required|min:1',
        ]);

        Post::create($validated);

        return redirect()->route('posts.index')->with('success', 'Post has been created successfully! :3');
    }

    // show
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    // edit
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    // update
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|min:1|max:245',
            'content' => 'required|min:1',
        ]);

        $post->update($validated);

        return redirect()->route('posts.index')->with('success', 'Post has been updated successfully! :3');
    }

    // destroy
    public function destroy(Post $post)
    {
        $post->deleted_at = \Carbon\Carbon::now();
        $post->save();
        // $post->update([
        //     'deleted_at' => $request->deleted_at
        // ]);

        return redirect()->route('posts.index')->with('success', 'Post has been deleted successfully! :c');
    }

    // status
    public function status(Request $request, Post $post)
    {
        $request->validate([
            'status' => 'required|string|in:draft,publish,archived',
        ]);
        $post->update([
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Status updated to ' . $request->status . '<3');
    }

    // copying/duplicate
    public function duplicate(Post $post)
    {
        // $dupPost = $request->validate([
        //     'title' => 'Copy of' . $post->title,
        //     'content' => $post->content,
        // ]);

        $copyPost = Post::create([
            'title' => 'Copy of ' . $post->title,
            'content' => $post->content,
        ]);

        // $post->update();
        return redirect()->route('posts.show', $copyPost)->with('success', 'Post has been duplicate successfully! <3');
    }
    public function restore()
    {
        
    }

}