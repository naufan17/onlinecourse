@extends('layouts.learning')

@section('title', 'Learning Content')

@section('main')

<main>
    <!-- Sidebar -->
    <div class="wrapper">
        <nav id="sidebar">
            <ul class="list-unstyled">
                @foreach($course as $course)
                <li>
                    <a href="/learningContent?page={{$course->id}}">{{ $loop->iteration }}. {{ $course->subtitle }}</a>
                </li>
                @endforeach
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
                    <a href="/intro" class="btn btn-light btn-lg mx-1">Home</a>
                </div>
            </nav>
        </div>
        <!--Akhir Navbar -->
        <!-- Content -->
        <section class="learningContent" id="learningContent">   
            <div class="container">
                <div class="row d-inline">
                    <div class="col-md-10 offset-2">
                        <div class="text-center">
                            <h1> <strong>@foreach($courses as $course){{ $course->subtitle }}@endforeach</strong></h1>
                        </div>
                        <div class="video-content-wrapper m-5">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="@foreach($courses as $course){{$course->vidio}}@endforeach" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-inline">
                    <div class="col-md-10 offset-2">
                        @foreach($courses as $course)
                        {!! $course->content !!}
                        @endforeach
                    </div>
                </div>
                <div class="row d-inline">
                    <div class="col-sm-4 offset-4 p-3">
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Akhir Content -->
</main>
@endsection