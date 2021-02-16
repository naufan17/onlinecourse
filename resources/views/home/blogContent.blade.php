@extends('layouts.main')

@section('title', 'Blog Content')

@section('main')

<main>
    <section class="blogContent" id="blogContent">   
        <div class="container">
            <div class="row d-inline">
                <div class="col-md-10 offset-1">
                    <div class="text-center mt-5">
                        <h1> <strong>{{ $blog->title }}</strong></h1>
                    </div>
                    <div class="m-5">
                        <img src="{{ $blog->picture }} " class="card-img-top" alt="...">
                    </div>
                    {!! $blog->content !!} 
                </div>
            </div>
            <hr>
            <div class="row d-inline">
                <div class="col-md-8 offset-2">
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
    </section>
</main>
@endsection