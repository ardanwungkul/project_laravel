@extends('layouts.layout')
@section('content')

<!-- Head -->
  <head>
    <title>Ambawani</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <style>
      .home {
        display: flex;
        height: 100vh;
        color: #fff;
        min-height: 500px;
        font-family: "ubuntu", sans-serif;
      }
      .home .max-width {
        margin: auto 0 auto 30px;
      }
      .home .home-content .text-1 {
        font-size: 27px;
      }
      .home .home-content .text-2 {
        font-size: 75px;
        font-weight: 600;
        margin: -18px 0px -25px 6px;
      }
      .home .home-content .text-3 {
        font-size: 40px;
        margin: 5px 0;
      }
      .home .home-content .text-3 span {
        color: crimson;
        font-weight: 500;
      }
      .home .home-content a {
        display: inline-block;
        background: crimson;
        color: #fff;
        font-size: 25px;
        padding: 10px 15px;
        margin-top: 20px;
        border-radius: 6px;
        border: 2px solid crimson;
        transition: all 0.3s ease;
      }
      .home .home-content a:hover {
        color: crimson;
        background: none;
      }
      .home .home-content a.btn {
        width: 30px;
        height: 30px;
        line-height: 20px;
      }
    </style>
  </head>
  <!-- Body -->
  <body>
    <div>
      <section class="home" id="home">
        <div class="max-width">
          <div class="home-content">
            <div class="text-1">Hello , Welcome to</div>
            <div class="text-2">Ambawani Outdoor</div>
            <div class="text-3">You Will Get  <span id="app"></span></div>
            
            

          @if (Route::has('login'))
          <div class="card  bg-transparent p-2 d-flex " >
            <ul class="nav navbar-nav navbar-right d-flex gap-3 ">
          @auth
            @else
            <div id="button">
              <a href="{{ route('register') }}" style="text-decoration: none">Register Now</a>
          </div>
              
              
          @endauth
        @endif

        </div>
      </section>
    </div>
  </body>
</html>

@endsection