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
        return view('insert');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post -> post_title = $request -> get('title');
        $post -> post_author = $request -> get('author');
        $post -> save();
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        $posts = Post::all();
        return view('show',['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post,$id)
    {

        $post = Post::find($id);
        return view('edit',['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post, $id)
    {
        $post = Post::find($id);
        $post -> post_title = $request -> get('title');
        $post -> post_author = $request -> get('author');
        $post -> save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post,$id)
    {
        $post = Post::find($id);
        $post -> delete();
        return redirect('show');
    }
}
