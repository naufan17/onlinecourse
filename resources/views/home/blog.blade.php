@extends('layouts.main')

@section('title', 'Blog')

@section('main')

<main>
    <div class="shape_1 d-none d-lg-block">
        <img src="assets/img/background/bg1.png" alt="">
    </div>
    <div class="shape_8 d-none d-lg-block">
        <img src="assets/img/background/bg4.png" alt="">
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
        </div>
    </section>
    <!-- Akhir Blog -->
</main>
@endsection