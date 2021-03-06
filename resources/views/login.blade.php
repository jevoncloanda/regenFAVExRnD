<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <script src="https://kit.fontawesome.com/7c925acf6e.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <!-- NavBar -->
    <nav>
        <a href="{{route('getLandingPage')}}">
            <i class="fa-solid fa-arrow-left-long"></i>
            Home
        </a>
    </nav>

    <!-- Login Form -->
    <section class="login">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <h1 class="loginHeader">LOGIN</h1>
            <input type="email" name="email" id="" placeholder="Email" required>
            <div class="inputPass">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="button" id="seePass" onclick="togglePass()"><i class="fa-solid fa-eye-slash"
                        id="toggle"></i></button>
            </div>
            <div class="rememberMe">
                <input type="checkbox" name="remember" id="remember"><label for="remember">Remember me</label>
            </div>
            <button type="submit">Login</button>

            <p>Don't have an account? <a href="{{route('register')}}">Sign up, it's free!</a></p>
        </form>
    </section>

    <script src="{{asset('js/login.js')}}"></script>
</body>

</html>
