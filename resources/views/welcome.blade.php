<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div id="app">

            <router-link to="/">Home</router-link>
            <router-link to="/about">About</router-link>
            <router-link to="/contactUs">Contact Us</router-link>

            <router-view></router-view>
            
        </div>
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>
