<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {
        
        return view('blogs.index', [
            'blogs' => Blog::with('category', 'user')
                ->filter(request(['category', 'search', 'users']))
                ->latest()
                ->Paginate(3)
                ->withQueryString(),
                
        ]);
    }

    public function show(Blog $blog)
    {
        
        return view('blogs.show', [
            'blog' => $blog,
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get()
        ]);
    }
}