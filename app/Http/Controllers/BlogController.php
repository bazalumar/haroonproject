<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('date', 'desc')->get();
        return view('frontend.blog.blogsindex', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        return view('frontend.blog.blogsdetail', compact('blog'));
    }
  

}
