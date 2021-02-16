<?php

namespace App\Http\Controllers;

use App\Course;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function intro($title){
        // $course = DB::table('courses')->get();
        $courses = Course::where('title', $title)->get();
        $comments = Comment::all();
        return view('home.intro', compact('courses', 'comments'));
    }

    public function learningContent(Courses $courses){
        // $course = DB::table('courses')->get();
        $courses = Course::paginate(1);
        $course = Course::all();
        // return $course;
        return view('home.learningContent', compact('courses', 'course'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $request){
        $request->validate([
            'name'    => 'required|min:1',
            'comment' => 'required|min:1'
        ]);

        // $comment = new Comment;
        // $comment->name = $request->name;
        // $comment->comment = $request->comment;
        // $comment->save();
        // Comment::create(['name'=>$request->name, 'comment'=>$request->comment]);
        Comment::create($request->all());
        return redirect('home.intro' );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */

    public function show(Course $course)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
