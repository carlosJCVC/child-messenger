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
        @include('admin.layouts._navbar')
        
        <div class="custom_content">
            <div>
                @include('admin.layouts._sidebar')
            </div>

            <div>
                <main class="main">
                    <div class="container content">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>


    </div>

    @yield('scripts')
    <script src="{{ asset('/js/app.js') }}"></script>
    <script>
    function show() {
        document.getElementById('sidebar').style.width = '300px';
    }
    </script>
</body>
</html>