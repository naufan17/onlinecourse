@extends('layouts.main')

@section('title', 'About')

@section('main')

<main>
    <div class="shape_8 d-none d-lg-block">
        <img src="assets/img/background/bg4.png" alt="">
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
</main>
@endsection