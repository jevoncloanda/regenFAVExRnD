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
    <link rel="stylesheet" href="{{asset('css/adminupdateEvent.css')}}">
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
            <li class="event-gallery"><a href="{{route('getGallery')}}">Event Gallery</a></li>
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
                <h2><a href="{{route('getAdminDashboard')}}" class="active"><i
                            class="fa-solid fa-pen-to-square"></i> Update My Events</a></h2>
                <hr>
            </div>
            <div class="dashboardBody">
                <div class="heading">
                    <h1>Update Event</h1>
                </div>
                <form action="{{route('updateEvent', ['id' => $event->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="left">
                        <div class="eventName">
                            <label for="eventName">Event Name</label>
                            <input name="name" value="{{$event->name}}" type="text" id="eventName" placeholder="Minimal 8 characters">
                        </div>
                        <div class="categoryPrice">
                            <div class="category">
                                <label for="category">Event Category</label>
                                <select name="category" id="category" aria-placeholder="Category">
                                    <option value="{{$event->category}}" disabled selected>Category</option>
                                    <option value="Webinar">Webinar</option>
                                    <option value="Workshop">Workshop</option>
                                    <option value="Music">Music</option>
                                    <option value="Charity">Charity</option>
                                </select>
                            </div>
                            <div class="price">
                                <label for="price">Price</label>
                                <input name="price" value="{{$event->price}}" type="text" id="price" placeholder="Price">
                            </div>

                        </div>
                        <div class="location">
                            <label for="location">Event Location</label>
                            <input name="location" value="{{$event->location}}" type="text" id="location" placeholder="Location">
                        </div>
                        <div class="date">
                            <label for="date">Event Date</label>
                            <input name="date" value="{{$event->date}}" type="date" id="date">
                        </div>
                        <div class="description">
                            <label for="description">Event Description</label>
                            <textarea name="description" value="{{$event->description}}" id="description" cols="30" rows="10"
                                placeholder="Minimal 20 characters"></textarea>
                        </div>
                    </div>
                    <div class="right">
                        <div class="image">
                            <label for="image">Event Image</label>
                            <input name="image" type="file" id="image" accept="image/*">
                        </div>
                        <div class="button">
                            <a><button type="submit" class="update">Update Event</button></a>
                            <a href="{{route('getAdminDashboard')}}"><button type="button" class="cancel">Cancel</button></a>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </section>
</body>

</html>
