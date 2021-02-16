<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditblogController extends Controller
{
    public function blog(){
        $blogs = Blog::all();
        return view('editblog', compact('blogs'));
    }
    
    public function ubah(Blog $blog){
        return view('ubahblog', compact('blog'));
    }

    public function ubahdata(Request $request, Blog $blog){
        Blog::where('id', $blog->id)
            ->update([
                'title' => $request->title,
                'picture' => $request->picture,
                'content' => $request->content
        ]);

        return redirect('/editblog');
    }

    public function tambah(){
        return view('tambahblog');
    }

    public function tambahdata(Request $request){
        $request->validate([
            'title'    => 'required|min:1',
            'picture' => 'required|min:1',
            'content' => 'required|min:1'
        ]);

        Blog::create($request->all());
        return redirect('/editblog');
    }

    public function hapus($id){
        Blog::destroy($id);
        return redirect('/editblog');
    }
}
