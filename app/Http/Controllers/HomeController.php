<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        $blogs = Blog::all();
        return view('home.index', compact('blogs'));
    }

    public function about(){
        return view('home.about');
    }

    public function course(){
        $courses = Course::all();
        return view('home.course', compact('courses'));
    }
}

