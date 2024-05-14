<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <!-- Registration form -->
    <div class="surround">
        <div class="form">
            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <h3>Register Now!</h3>

                <label for="fname">Enter First Name:</label>
                <input type="text" name="fname" maxlength="20" placeholder="First Name" class="box">

                <label for="lname">Enter Last Name:</label>
                <input type="text" name="lname" maxlength="20" placeholder="Last Name" class="box">

                <label for="username">Enter Username:</label>
                <input type="text" name="username" maxlength="20" placeholder="Username" class="box">

                <label for="password">Enter Password:</label>
                <input type="password" name="password" maxlength="20" placeholder="Password" class="box">

                <input type="submit" value="Register" name="submit" class="btn">
            </form>
        </div>
    </div>

</body>

</html>
