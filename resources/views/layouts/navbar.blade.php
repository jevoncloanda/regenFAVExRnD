<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MyEvent</title>
</head>
<link rel="stylesheet" href="{{asset('css/landingpage.css')}}">
<body>
    <div>
        @guest
        <nav>
            <ul class="navul-right">
                <li class="register"><a href="{{route('register')}}">Register</a></li>
                <li class="login"><a href="{{route('login')}}">Login</a></li>
            </ul>
            <label class="logo">MyEvent</label>
            <ul class="navul-mid">
                <li class="home" ><a href="#">Home</a></li>
                <li class="event-gallery"><a href="{{route('getGallery')}}">Event Gallery</a></li>
            </ul>
        </nav>
        @endguest
        @auth
        <nav>
            <ul class="navul-right">
                <li class="logout"><a href="{{route('logout')}}">Logout</a></li>
            </ul>
            <label class="logo">MyEvent</label>
            <ul class="navul-mid">
                <li class="home" ><a href="#">Home</a></li>
                <li class="event-gallery"><a href="{{route('getGallery')}}">Event Gallery</a></li>
                <li class="view-ticket"><a href="#">View Ticket</a></li>
            </ul>

        </nav>
        @endauth
    </div>

    @yield('content')
</body>
</html>
