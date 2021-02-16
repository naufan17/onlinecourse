@extends('layouts.main')

@section('title', 'Course')

@section('main')

<main>
    <div class="shape_1 d-none d-lg-block">
        <img src="assets/img/background/bg1.png" alt="">
    </div>
    <div class="shape_8 d-none d-lg-block">
        <img src="assets/img/background/bg4.png" alt="">
    </div>

    <!--Course-->
    <section class="course" id="course">
        <div class="container">
            <div class="row d-inline">
                <div class="col-sm-12">
                    <div class="sub">
                    <h1>Course</h1>
                    </div>
                </div>            
            </div>
            <div class="row d-inline">
                <div class="col-sm-12">
                    <nav>
                        <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">All</a>
                            <a class="nav-item nav-link" id="nav-frontend-tab" data-toggle="tab" href="#nav-frontend" role="tab" aria-controls="nav-frontend" aria-selected="false">Frontend</a>
                            <a class="nav-item nav-link" id="nav-backend-tab" data-toggle="tab" href="#nav-backend" role="tab" aria-controls="nav-backend" aria-selected="false">Backend</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                    <div class="row row-cols-1 row-cols-md-4">
                        <div class="col-md-12">
                            <div class="card-deck">
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/C-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn C++</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/C-Sharp-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn C Sharp</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/HTML-5-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn HTML</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/CSS-3-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn CSS</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-deck">
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/JavaScript-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn JavaScript</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/Node-JS-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn NodeJS</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/PHP-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn PHP</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/MySQL-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn MySQL</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-frontend" role="tabpanel" aria-labelledby="nav-frontend-tab">
                    <div class="row row-cols-1 row-cols-md-4">
                        <div class="col-md-9">
                            <div class="card-deck">
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/HTML-5-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn HTML</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/CSS-3-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn CSS</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/JavaScript-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn JavaScript</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-backend" role="tabpanel" aria-labelledby="nav-backend-tab">
                    <div class="row row-cols-1 row-cols-md-4">
                        <div class="col-md-9">
                            <div class="card-deck">
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/PHP-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn PHP</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/MySQL-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn MySQL</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <img src="assets/img/logo/Node-JS-01.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Learn NodeJS</h5>
                                        <a href="{{ url('/intro/html') }}" class="btn btn-primary">Learn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Course -->
</main>
@endsection