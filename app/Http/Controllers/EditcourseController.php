<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditcourseController extends Controller
{
    public function intro(){
        $courses = Course::all();
        return view('editcourse', compact('courses'));
    }

    public function ubah(Course $course){
        return view('ubahcourse', compact('course'));
    }

    public function ubahdata(Request $request, Course $course){
        Course::where('id', $course->id)
            ->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'vidio' => $request->vidio,
                'content' => $request->content
        ]);

        return redirect('/editcourse');
    }

    public function tambah(){
        return view('tambahcourse');
    }

    public function tambahdata(Request $request){
        $request->validate([
            'title'    => 'required|min:1',
            'subtitle' => 'required|min:1',
            'vidio' => 'required|min:1',
            'content' => 'required|min:1'
        ]);

        Course::create($request->all());
        return redirect('/editcourse');
    }

    public function hapus($id){
        Course::destroy($id);
        return redirect('/editcourse');
    }
}
