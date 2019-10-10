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

            <!-- <router-link to="/">Home</router-link>
            <router-link to="/about">About</router-link>
            <router-link to="/contactUs">Contact Us</router-link> -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <router-link class="nav-item nav-link" to="/">Home</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-item nav-link" to="/about">About</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-item nav-link" to="/contactUs">Contact Us</router-link>
                  </li>                  
                </ul>
              </div>
            </nav>

            <router-view></router-view>
            
        </div>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>
