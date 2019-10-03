<html>

<head>
    <title>LaraDex - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global.css') }}">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a href="/" class="navbar navbar-brand">LaraDex</a>
        <div class="navbar navbar-right">
            <button class="btn btn-primary btn-md trainer"><a href="/trainers">Trainers</a></button>
            <button class="btn btn-warning btn-md trainer1"><a href="/trainers/create">Crear</a></button>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>