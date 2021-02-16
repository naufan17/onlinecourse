@extends('layouts.admin')

@section('title', 'Edit Blog')

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
        
        <!--Blog-->
            <div class="container">
                <div class="row d-inline">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <h1>Daftar Blog</h1>
                        </div>
                    </div>            
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table ">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Blog</th>
                                    <th scope="col">Changelog</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->updated_at }}</td>
                                    <td>
                                        <a href="/ubahblog/{{ $blog->id }}" class="btn btn-success btn-sm">Ubah</a>
                                        <a href="/hapusblog/{{ $blog->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>            
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <a href="{{ url('/tambahblog') }}" class="btn btn-primary">Tambah Blog</a>
                        </div>
                    </div>            
                </div>
            </div>
        <!-- Akhir Blog -->

        <!-- Akhir Content -->
    </div>
</main>
@endsection