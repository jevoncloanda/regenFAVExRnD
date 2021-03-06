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
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
    <script src="https://kit.fontawesome.com/7c925acf6e.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body onload="requiredCheck()">
    <nav>
        <a href="#">
            <i class="fa-solid fa-arrow-left-long"></i>
            Home
        </a>
    </nav>

    <section class="registration">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h1 class="registrationHeader">CREATE A NEW ACCOUNT</h1>
            <input type="text" name="username" id="" placeholder="Username" required>
            <input type="email" name="email" id="" placeholder="Email" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="inputPass">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="button" id="seePass" onclick="togglePass()"><i class="fa-solid fa-eye-slash"
                    id="toggle"></i></button>
            </div>
            <div class="inputPass">
                <input type="password" name="password_confirmation" id="confPassword" placeholder="Confirm Password" required>
                <button type="button" id="seeConfPass" onclick="toggleConfPass()"><i class="fa-solid fa-eye-slash"
                    id="toggleConf"></i></button>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="text" name="nomor_telepon" id="" placeholder="Phone Number" required>
            @error('nomor_telepon')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="terms">
                <input type="checkbox" name="" id="terms"><label for="terms">I have read and agreed to the <a
                        href="#">terms and
                        conditions</a></label>
            </div>

            <button type="submit">Register</button>

            <p>Already have an account? <a href="{{route('login')}}">Login here</a></p>
        </form>
    </section>

    <script src="{{ asset('js/registration.js') }}"></script>
</body>

</html>
