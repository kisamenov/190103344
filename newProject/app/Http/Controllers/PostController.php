<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('post.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }
    public function store(Request $request)
    {
        $new_post = new Post();
        $new_post->title = $request->title;
        $new_post->body = $request->body;
        $new_post->save();

        return redirect()->route('post.index')->withSuccess('Категория была успешно добавлена!');
    }
}
