<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}" >
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
                <div class="container">
                  <a class="navbar-brand js-scroll-trigger" href="#page-top">My LOGO</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                       <router-link to="/" class="nav-link js-scroll-trigger">Home</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link to="/about" class="nav-link js-scroll-trigger">About</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link to="/contactUs" class="nav-link js-scroll-trigger">Contact Us</router-link>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

              <div class="jumbotron bg-info text-white text-center">
                  <div class="container ">
                    <h1 class="display-3">
                      Citi Construction
                    </h1>
                    <p class="lead">The best in what we do</p>
                  </div>
              </div>
            <router-view></router-view>
            
        </div>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>
