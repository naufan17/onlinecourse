@extends('layouts.main')

@section('title', 'Intro')

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
                        <h1>HTML</h1>
                    </div>
                </div>            
            </div>
            <div class="row d-inline">
                <div class="col-sm-8 offset-2">
                    <nav>
                        <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-module-tab" data-toggle="tab" href="#nav-module" role="tab" aria-controls="nav-module" aria-selected="true">Module</a>
                            <a class="nav-item nav-link" id="nav-discussion-tab" data-toggle="tab" href="#nav-discussion" role="tab" aria-controls="nav-discussion" aria-selected="false">Discussion</a>
                            <a class="nav-item nav-link" id="nav-changelog-tab" data-toggle="tab" href="#nav-changelog" role="tab" aria-controls="nav-changelog" aria-selected="false">Changelog</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-module" role="tabpanel" aria-labelledby="nav-module-tab">
                    <div class="row row-cols-1 row-cols-md-4">
                        <div class="col-md-8 offset-2">
                            <div class="card-deck">
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <div class="card-body">
                                        @foreach($courses as $course)
                                        <ul class="list-group">
                                            <li class="list-group-item">                          
                                                 <div class="d-flex justify-content-between">
                                                    <h6 class="card-text text-left">{{ $loop->iteration }}. {{ $course->subtitle }}</h6>
                                                    <a href="/learningContent/{{ $course->id }}" class="btn btn-primary btn-sm">Learn</a>
                                                </div>                                                
                                            </li>
                                        </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-discussion" role="tabpanel" aria-labelledby="nav-discussion-tab">
                    <div class="row row-cols-1 row-cols-md-4">
                        <div class="col-md-8 offset-2">
                            <div class="card-deck">
                                <div class="card border-light shadow-lg bg-white rounded">
                                    <div class="card-body">
                                        <div class="row d-inline">
                                            <div class="col-md-10 offset-1">
                                                @foreach($comments as $comment)
                                                <ul class="list-group">
                                                    <li class="list-group-item">                          
                                                        <p class="card-text">{{ $comment->comment }}</p>
                                                        <p class="card-text"><small>Oleh {{ $comment->name }}, {{ $comment->updated_at }}</small></p>
                                                    </li>
                                                </ul>
                                                @endforeach
                                                <br>
                                                <hr>
                                                <form method="post" action="/intro">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" placeholder="nama" name="name">
                                                        @if($errors->has('name'))
                                                        <p> {{ $errors->first('name') }} </p>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comment">Comment</label>
                                                        <textarea class="form-control" id="comment" rows="3" placeholder="komentar" name="comment"></textarea>
                                                        @if($errors->has('comment'))
                                                        <p> {{ $errors->first('comment') }} </p>
                                                        @endif
                                                    </div>
                                                    <button type="send" class="btn btn-primary">Send</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-changelog" role="tabpanel" aria-labelledby="nav-changelog-tab">
                    <div class="row row-cols-1 row-cols-md-4">
                        <div class="col-md-8 offset-2">
                            <div class="card-deck">
                                <div class="card border-light text-center shadow-lg bg-white rounded">
                                    <div class="card-body">
                                        @foreach($courses as $course)
                                        <ul class="list-group">
                                            <li class="list-group-item">                          
                                                 <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="card-text">{{ $loop->iteration }}. {{ $course->subtitle }}</h6>
                                                    <h6 class="card-text">{{ $course->updated_at }}</h6>
                                                </div>                                                
                                            </li>
                                        </ul>
                                        @endforeach
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