<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // auth()->user()->givePermissionTo('publish post');
        $posts = Post::get();
        return view('post.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Post::create($data);
        return redirect('/post');
    }

    public function create()
    {
        return view('post.create');
    }

    public function show($id)
    {
        $data = Post::find($id);
        return view('post.show', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        Post::find($id)->update($data);
        return redirect('/post/' . $id);
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('/post');
    }

    public function edit($id)
    {
        $data = Post::find($id);
        return view('post.edit', compact('data'));
    }
}
