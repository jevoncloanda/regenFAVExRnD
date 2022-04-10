<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>MyEventRegister</title>
</head>
<link rel="stylesheet" href="{{asset('css/eventgallery.css')}}">
<body>
    <div class="landing-page">
        <div>
            @guest
            <nav>
                <ul class="navul-right">
                    <li class="register"><a href="{{route('register')}}">Register</a></li>
                    <li class="login"><a href="{{route('login')}}">Login</a></li>
                </ul>
                <label class="logo">MyEvent</label>
                <ul class="navul-mid">
                    <li class="home" ><a href="{{route('getLandingPage')}}">Home</a></li>
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
                    <li class="home" ><a href="{{route('getLandingPage')}}">Home</a></li>
                    <li class="event-gallery"><a href="{{route('getGallery')}}">Event Gallery</a></li>
                    <li class="view-ticket"><a href="#">View Ticket</a></li>
                </ul>

            </nav>
            @endauth
        </div>
        <div id="atas">

            <div class="search-box">

                <input class="search-txt" type="text" name="" placeholder="Type to search">
                <a class="search-btn" href="#">
                    <i class="uil uil-search"></i>
                </a>
            </div>

            <div class="filter">
                <a href="#"><i class="uil uil-filter"></i>     Filters</a>
            </div>
        </div>
        <section id="TheCard">
            <div class="card-container">
                <div class="card-cardholder">
                    @foreach ($events as $event)
                        <div class="card">
                            <img src="{{('storage/'.$event->image)}}" alt="" style="width: 100%;">
                            <div class="date-box">{{ $event->date }}</div>
                            <p class="p1">{{ $event->name }}<a href="#">Exhibition</a>
                                <br>
                                <br><span class="p2">
                                    <i class="uil uil-user"></i> &nbsp;&nbsp;&nbsp;{{ $event->name }}
                                    <br>
                                    <i class="uil uil-clock"></i> &nbsp;&nbsp;&nbsp;{{ $event->date }}
                                    <br>
                                    <i class="uil uil-location-point"></i> &nbsp;&nbsp;&nbsp;{{ $event->location }}
                                </span>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

<!-- <h1 class="browse-event"><a href="#"">Browse Event</a></h1> -->
    </div>
</body>
</html>
