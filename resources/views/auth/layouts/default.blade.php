<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensajero - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("assets/img/background/2.jpg")'>
          <div class="pos-a centerXY">
            <div class="bgc-white bdrs-50p pos-r" style='width: 120px; height: 120px;'>
              <img class="pos-a centerXY" src="{{ asset('/assets/img/logo.png') }}" alt="">
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
            @yield('content')
        </div>
    </div>
</body>
</html>