<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index',[
            'blogs'=>Blog::with('category','user')->orderby('id','desc')->paginate(5)
        ]);
    }

    public function create(){
        return view('admin.create',[
            'categories'=>Category::all()
        ]); 
    }

    public function destroy(Blog $blog){
        $blog->delete();//warning popup
        $blog->comments()->delete();
        return back();
    }

    public function edit(Blog $blog){
        return view('admin.edit',[
            'blog'=>$blog
        ]);
    }

    public function store(){
        request()->validate([
            'title'=>['required'],
            'slug' => ['required'],
            'intro' => ['required'],
            'category_id' => ['required'],
            'body' => ['required'],
        ]);
        
    }

    public function update(Blog $blog){
        request()->validate([
            'body'=>['required']
        ]);
        $blog->body=request('body');
        $blog->save();
        return redirect('/admin');
    }

    
}