<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> <!-- Assuming login.css is located in the 'public/css' directory -->
    <title>Login</title>
</head>

<body>
    <!-- login form -->
    <div class="surround">
        <div class="form">
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf <!-- CSRF protection -->
                <h3>login now</h3>
                <label for="name">Enter Username:</label>
                <input type="text" name="name" maxlength="20" placeholder="Username" class="box">
                <label for="password">Enter Password:</label>
                <input type="password" name="pass" maxlength="20" placeholder="Password" class="box">

                <input type="submit" value="login" name="submit" class="btn">
            </form>
        </div>
    </div>

</body>

</html>
