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
            <a href="#" class="logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
            </a>
    
            <nav>
                <div>
                    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                        <i class="fas fa-bars fa-2x"></i>
                    </a>
                </div>
        
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{!! asset('assets/img/authors/avatar3.jpg') !!} " width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                                <div class="riot">
                                    <div>
                                        <p class="user_name_max">Carlos Veizaga</p>
                                        <span>
                                            <i class="caret"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="{!! asset('assets/img/authors/avatar3.jpg') !!}" class="img-responsive img-circle" alt="User Image">
                                    <p class="topprofiletext">Carlos Veizaga</p>
                                </li>
                                <!-- Menu Body -->
                                <li>
                                    <a href="#">
                                        <i class="livicon" data-name="user" data-s="18"></i>
                                        My Profile
                                    </a>
                                </li>
                                <li role="presentation"></li>
                                <li>
                                    <a href="#">
                                        <i class="livicon" data-name="gears" data-s="18"></i>
                                        Account Settings
                                    </a>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#">
                                            <i class="livicon" data-name="lock" data-size="16" data-c="#555555" data-hc="#555555" data-loop="true"></i>
                                            Lock
                                        </a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#">
                                            <i class="livicon" data-name="sign-out" data-s="18"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <aside class="aside">
            sidebar
        </aside>

        <main class="main">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>

    @yield('scripts')
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>