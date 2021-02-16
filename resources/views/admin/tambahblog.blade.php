@extends('layouts.admin')

@section('title', 'Tambah Blog')

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
                            <h1>Tambah Blog</h1>
                        </div>
                    </div>            
                </div>
                <div class="row">
                    <div class="col-sm-10 offset-1">
                        <form action="/tambahdatablog" method="get">
                            <div class="form-group">
                                <label for="title" >Title : </label><br>
                                <input type="text" class="form-control" name="title" id="title" value="">
                            </div>
                            <div class="form-group">
                                <label for="picture">Link Picture : </label><br>
                                <input type="text" class="form-control" name="picture" id="picture" value="">
                            </div>
                            <div class="form-group">
                                <label for="content">Content : </label><br>
                                <textarea class="form-control" name="content" id="content" value="" cols="30" rows="10"></textarea>
                            </div>
                            <button type="send" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>            
                </div>
            </div>
        <!-- Akhir Course -->

        <!-- Akhir Content -->
    </div>
</main>
@endsection