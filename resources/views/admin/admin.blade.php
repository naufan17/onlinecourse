@extends('layouts.admin')

@section('title', 'Admin Content')

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
                            <h1>Course</h1>
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
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Learn C++</td>
                                    <td><a href="{{ url('/editcourse') }}" class="btn btn-success btn-sm">Detail</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Learn C Sharp</td>
                                    <td><a href="{{ url('/editcourse') }}" class="btn btn-success btn-sm">Detail</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Learn HTML</td>
                                    <td><a href="{{ url('/editcourse') }}" class="btn btn-success btn-sm">Detail</a></td>
                                </tr>                            
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Learn CSS</td>
                                    <td><a href="{{ url('/editcourse') }}" class="btn btn-success btn-sm">Detail</a></td>
                                </tr>                            
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Learn Javascript</td>
                                    <td><a href="{{ url('/editcourse') }}" class="btn btn-success btn-sm">Detail</a></td>
                                </tr>                            
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Learn NodeJS</td>
                                    <td><a href="{{ url('/editcourse') }}" class="btn btn-success btn-sm">Detail</a></td>
                                </tr>                            
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Learn PHP</td>
                                    <td><a href="{{ url('/editcourse') }}" class="btn btn-success btn-sm">Detail</a></td>
                                </tr>                            
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Learn MySQL</td>
                                    <td><a href="{{ url('/editcourse') }}" class="btn btn-success btn-sm">Detail</a></td>
                                </tr>                            
                            </tbody>
                        </table>
                    </div>            
                </div>
            </div>
        <!-- Akhir Course -->

        <!-- Akhir Content -->
    </div>
</main>
@endsection