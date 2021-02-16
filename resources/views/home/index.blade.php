@extends('layouts.main ')

@section('title', 'Home')

@section('main')

<main>
    <div class="shape_1 d-none d-lg-block">
        <img src="assets/img/background/bg1.png" alt="">
    </div>

    <!-- Slider -->
    <section class="slider" id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <h1>Online Course</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ducimus aspernatur veritatis, obcaecati quaerat 
                        repellat sit ipsa. Voluptas, vitae rerum. Nostrum expedita natus nobis reiciendis quo autem porro ullam ipsum.</p>
                </div>  
                <div class="col-sm-6">
                    <img src="assets/img/background/slider.png" alt="">
                </div>                      
            </div>
        </div>
    </section>
    <!-- Akhir Slider -->

    <div class="shape_2 d-none d-lg-block">
        <img src="assets/img/background/bg2.png" alt="">
    </div>
    <div class="shape_3 d-none d-lg-block">
        <img src="assets/img/background/plus1.png" alt="">
    </div>

    <!--About-->
    <section class="about" id="about">
        <div class="container">
            <div class="row d-inline">
                <div class="col-sm-12">
                    <div class="sub">
                        <h1>About</h1>
                    </div>
                </div>            
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img src="assets/img/background/about.png" alt="">
                </div>  
                <div class="col-sm-6 align-self-center ">
                    <h2>Free Online Learning Platform</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ducimus aspernatur veritatis, obcaecati quaerat 
                        repellat sit ipsa. Voluptas, vitae rerum. Nostrum expedita natus nobis reiciendis quo autem porro ullam ipsum.</p>                 
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir About -->
    
    <div class="shape_4 d-none d-lg-block">
        <img src="assets/img/background/bg3.png" alt="">
    </div>
    <div class="shape_5 d-none d-lg-block">
        <img src="assets/img/background/plus2.png" alt="">
    </div>
    <div class="shape_6 d-none d-lg-block">
        <img src="assets/img/background/bg5.png" alt="">
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
            </div>
            <div class="row d-inline">
                <div class="col-sm-12 text-center">
                    <a href="{{ url('/course') }}" class="btn btn-primary btn-lg">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Course -->

    <div class="shape_8 d-none d-lg-block">
        <img src="assets/img/background/plus3.png" alt="">
    </div>        

    <!--Blog-->
    <section class="blog" id="blog">
        <div class="container">
            <div class="row d-inline">
                <div class="col-sm-12">
                    <div class="sub">
                        <h1>Blog</h1>
                    </div>
                </div> 
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col-md-12">
                    <div class="card-deck">
                    @foreach($blogs as $blog)
                        <div class="card border-light shadow-lg bg-white rounded">
                            <img src="{{ $blog->picture }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="/blog/{{ $blog->id }}" class="stretched-link"></a>
                                <h5 class="card-title">{{ $blog->title }}</h5>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{ $blog->created_at }}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row d-inline">
                <div class="col-sm-12 text-center">
                    <a href="{{ url('/blog') }}" class="btn btn-primary btn-lg">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Blog -->
</main>
@endsection