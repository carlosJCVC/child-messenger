<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mensajero - @yield('title')</title>
    
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>

    <div class="wrapper">
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
                <a class="navbar-brand" href="#">MENSAJERO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <i class="fas fa-bars"></i>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                    Navbar text with an inline element
                    </span>
                </div>
            </nav>
        </header>
        
        <div class="row">
            <div class="col-2">
                <aside class="aside">
                    <div class="sidebar">
                        <ul class="nav">
                            <li class="nav-item active ">
                                <a class="nav-link" href="">
                                    <i class="fas fa-users"></i>
                                    <p> Dashboard </p>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="nav-link" href="{{ route('admin.writers.index') }}">
                                    <i class="fas fa-users"></i>
                                    <p> Escritores </p>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="nav-link" href="{{ route('admin.redactors.index') }}">
                                    <i class="fas fa-users"></i>
                                    <p> Redactores </p>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="nav-link" href="{{ route('admin.areas.index') }}">
                                    <i class="fas fa-users"></i>
                                    <p> Areas </p>
                                </a>
                            </li>
                        </ul>    
                    </div>
                </aside>
            </div>

            <div class="col-10">
                <main class="main">
                    <div class="content">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>


    </div>

    @yield('scripts')
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>