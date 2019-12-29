<html>
    <head>
        <title>{{ $title }}</title>
        <meta charset="UTF-8">
        <link href='//use.fontawesome.com/releases/v5.6.1/css/all.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="container">
            @include('front.globals.sidemenu')
            <div class="contents">
                @yield('content')
            </div>
        </div>
    </body>
</html>