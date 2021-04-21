<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index',[
            'posts' => $posts
        ]);
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $new_post = new Post();
        $new_post->title = $request->title;
        $new_post->body = $request->body;
        $new_post->save();

        return redirect()->route('post.index')->withSuccess('Категория была успешно добавлена!');
    }
    public function get_post($id)
    {
        $post  = Post::find($id);
        if ($post == null) {
            # code...
            return response(['message' => 'client not found'], 404);
        }
        return view('posts.detail')->with(['post' => $post]);
    }
}
