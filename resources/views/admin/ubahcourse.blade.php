@extends('layouts.admin')

@section('title', 'Ubah Course')

@section('main')

<main>
    <!-- Sidebar -->
    <div class="wrapper">
        <nav id="sidebar">
            <ul class="list-unstyled">
                <li>
                    <a href="/admin">Course</a>
                </li>
                <li>
                    <a href="/editblog">Blog</a>
                </li>
            </ul>
        </nav>
        <!-- Akhir Sidebar -->
        <!-- Navbar -->
        <div id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-light mx-1">
                        <i class="fas fa-align-left"></i>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="/admin" class="btn btn-light btn-lg mx-1">Home</a>
                </div>
            </nav>
        </div>
        <!--Akhir Navbar -->
        
        <!-- Content -->
        
        <!--Course-->
            <div class="container">
                <div class="row d-inline">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <h1>Ubah Course</h1>
                        </div>
                    </div>            
                </div>
                <div class="row">
                    <div class="col-sm-10 offset-1">
                        <form action="/ubahdatacourse/{{ $course->id }}" method="get">
                            <input type="hidden" class="form-control" name="id" id="id" value="">
                            <div class="form-group">
                                <label for="title" >Title : </label><br>
                                <input type="text" class="form-control" name="title" id="title" value="{{ $course->title }}">
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Subtitle : </label><br>
                                <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{ $course->subtitle }}">
                            </div>
                            <div class="form-group">
                                <label for="vidio">Link Vidio : </label><br>
                                <input type="text" class="form-control" name="vidio" id="vidio" value="{{ $course->vidio }}">
                            </div>
                            <div class="form-group">
                                <label for="content">Content : </label><br>
                                <textarea class="form-control" name="content" id="content" value="{{ $course->content }}" cols="30" rows="10"></textarea>
                            </div>
                            <button type="send" class="btn btn-primary">Ubah</button>
                        </form>
                    </div>            
                </div>
            </div>
        <!-- Akhir Course -->

        <!-- Akhir Content -->
    </div>
</main>
@endsection