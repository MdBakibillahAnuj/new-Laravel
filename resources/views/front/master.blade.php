<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sawon.com - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}front/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/helper.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="" class="nav-link text-white">Home</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Contact</a></li>
            @if(!Auth::check())
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-white">Login</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link text-white">Register</a></li>
            @else
                <li class="nav-item"><a href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" class="nav-link text-white">Logout</a></li>
                <form action="{{ route('logout') }}" method="post" id="logoutForm">
                    @csrf
                </form>
            @endif
        </ul>
    </div>
</nav>

@yield('body')


<script src="{{ asset('/') }}front/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/') }}front/js/bootstrap.bundle.js"></script>
</body>
</html>
