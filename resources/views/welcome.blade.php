<!DOCTYPE html>
<html lang="en">

  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
   <body>

    <video id="background"  width="100%" autoplay loop muted>
        <source src="{{asset('nigth.mp4') }}" type="video/mp4">
    </video>

    <nav class="navbar navbar-default navbar-fixed-top transp-nav">
        <div class="container">
            <a class="text-white" href="{{url('/launcher')}}"><img src="{{ asset('nasa-logo.png') }}" class="logo-img">Rocketfy</a>
        </div>
    </nav>

    <div class="container">
        <div class="frase">
            <h1 class="text-white">It's <del> <span class="text-danger">not</span></del> rocket <strong class="text-green">science</strong>.<br>
                And it's closer than you<br>
                may think!</h1>
            <p class="text-white">Watch space rockets launching, learn more <br>
                about them and get lots of <strong class="text-info">cool info</strong>.</p>
                <a class="btn btn-light" href="{{url('/launcher')}}">🚀 Launchers</a>
                {{-- <button type="button" class="btn btn-light">🚀 Launchers</button> --}}
        </div>

    </div>
</body>

</html>
