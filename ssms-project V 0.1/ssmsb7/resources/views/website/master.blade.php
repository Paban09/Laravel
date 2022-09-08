<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
    <title>SSMSB7 @yield('title')</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">SSMSB7</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">About</a></li>
                <li><a href="" class="nav-link">All Course</a></li>
                <li><a href="" class="nav-link">Contact</a></li>
                <li><a href="" class="nav-link">Login/Registration</a></li>
            </ul>
        </div>

    </nav>

    @yield('body')

    <script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>
</body>
</html>
