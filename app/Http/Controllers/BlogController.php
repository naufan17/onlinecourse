<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blog(){
        $blogs = Blog::all();
        return view('home.blog', compact('blogs'));
    }

    public function blogContent(Blog $blog){
        // $blogs = Blog::paginate(1);
        // return view('home.blogContent', compact('blogs'));
        // $blogs = Blog::where('id', $id)->get();
        return view('home.blog', compact('blog'));
    }
}
