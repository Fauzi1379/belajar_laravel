<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

       
    </head>
    <body>
           
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
<b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kami">Tentang kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/portot">Portofolio</a>
                </li>
            </ul>

</div>
</b>
</nav>
    @yield('header')
    @yield('isi')
    @yield('porto')
            </div>
        </div>
        <div>
        <div class="card-footer text-muted">
            <div  class="text-center">
                <div>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>
                Copyright &copy; Mochamad Ilham Fauzi
            </div>
        </div>
    </div>
    </body>
</html>
