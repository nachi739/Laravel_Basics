<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link 
            rel="stylesheet" 
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
            crossorigin="anonymous"
        >
        <title>人生逆転サロン</title>
    </head>
    <body>
        <header class="navbar navbar-dark bg-danger">
            <div class="container">
                <a class="navbar-brand" href="{{url('')}}">
                    Gyakuten
                </a>
            </div>
        </header>
       
       @yield('content')
       
    </body>
</html>
