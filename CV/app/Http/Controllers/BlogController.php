<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', [
            'blogs' => $blogs
        ]);
    }
    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $new_blogs = new Blog();
        $new_blogs->title = $request->title;
        $new_blogs->description = $request->description;
        $new_blogs->save();

        return redirect()->route('blog.index')->withSuccess('Категория была успешно добавлена!');
    }
}
