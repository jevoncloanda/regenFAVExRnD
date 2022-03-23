<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/7c925acf6e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/admindashboard.css')}}">
    <title>MyEvent AdminPanel</title>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <ul class="navul-right">
            <li class="logout"><a href="{{route('logout')}}">Logout</a></li>
        </ul>
        <label class="logo">MyEvent</label>
        <ul class="navul-mid">
            <li class="home"><a href="{{route('getLandingPage')}}">Home</a></li>
            <li class="event-gallery"><a href="#">Event Gallery</a></li>
            <li class="dashboard"><a href="{{route('getAdminDashboard')}}">Dashboard</a></li>
        </ul>

    </nav>

    <!-- Body -->
    <section id="updateEvent">
        <div class="container">
            <div class="dashboardNav">
                <h1>My Dashboard</h1>
                <hr>
                <h2><a href="{{route('getCreateEventPage')}}"><i class="fa-solid fa-plus"></i> Add
                        Events</a></h2>
                <hr>
                <h2><a href="{{route('getAdminDashboard')}}" class="active"><i class="fa-solid fa-pen-to-square"></i> Update My Events</a></h2>
                <hr>
            </div>
            <div class="dashboardBody">
                <div class="heading">
                    <h1>Update My Events</h1>
                    <p>Welcome back, Admin!</p>
                </div>
                <div class="cardContainer">
                    @foreach ($events as $event)
                    <div class="card">
                        <div class="cardImg">
                            <span class="date">{{$event->date}}</span>
                        </div>
                        <div class="cardBody">
                            <h1>{{$event->name}}<span>{{$event->category}}</span></h1>
                            <h2><i class="fa-solid fa-user"></i>{{$event->name}}</h2>
                            <h2><i class="fa-solid fa-clock"></i>{{$event->date}}</h2>
                            <h2><i class="fa-solid fa-location-dot"></i></i>{{$event->location}}</h2>
                            <a href="{{route('getEventById', ['id' => $event->id])}}"><button><i class="fa-solid fa-pen-to-square"></i>Update
                                Event</button></a>
                            <form action="{{route('deleteEvent', ['id' => $event->id])}}" method="POST">
                                @csrf
                                @method('delete')
                                <a><button type="submit" class="delete">Delete Event</button></a>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</body>

</html>
