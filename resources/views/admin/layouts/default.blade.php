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
<body class="app">

    <div>
        <!-- #Left Sidebar ==================== -->
        @include('admin.layouts._sidebar')

        <div class="page-container">
            <!-- ### $Topbar ### -->
            @include('admin.layouts._navbar')

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    @yield('content')
                <div>
            </main>
        </div>
    </div>

    @yield('scripts')
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>