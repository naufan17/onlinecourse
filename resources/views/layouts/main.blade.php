<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/app.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <title>@yield('title')</title>
  
    </head>
    <body>

    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light navbar-pl-30">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-brand">
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/course')}}">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Akhir Navbar -->
    </header>

    @yield('main')

    <footer>
        <div class="container">
            <div class="row d-inline text-center">
                <div class="col-sm-12">
                    <p>2020 Copyright &copy;All rights reserved | by Naufan</p>
                </div>                        
            </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.1.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>