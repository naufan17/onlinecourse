@extends('layouts.admin')

@section('title', 'Edit Course')

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
                            <h1>Daftar Course</h1>
                        </div>
                    </div>            
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table ">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Changelog</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $course->subtitle }}</td>
                                    <td>{{ $course->updated_at }}</td>
                                    <td>
                                        <a href="/ubahcourse/{{ $course->id }}" class="btn btn-success btn-sm">Ubah</a>
                                        <a href="/hapuscourse/{{ $course->id }}" class="btn btn-danger btn-sm">Hapus</a>
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
                            <a href="{{ url('/tambahcourse') }}" class="btn btn-primary">Tambah Course</a>
                        </div>
                    </div>            
                </div>
            </div>
        <!-- Akhir Course -->

        <!-- Akhir Content -->
    </div>
</main>
@endsection