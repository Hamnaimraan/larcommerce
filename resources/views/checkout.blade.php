<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/checkout.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="navigation">
                <div class="logo">
                    <a href="{{ url('/') }}"> <img src="{{ asset('Chic Sphere logo.png') }}" alt="Chic Sphere"></a>
                </div>
                <div class="menu" id="nav-menu">
                    <div class="hamburger-menu" id="hamburger-menu">
                        <i class="bi bi-list" id="hamburger-icon"></i>
                    </div>
                    <ul class="nav_list">
                        <li class="nav-menu"><a href="" class="nav-link">Home</a></li>
                        <li class="nav-menu"><a href="" class="nav-link">Shop</a></li>
                        <li class="nav-menu"><a href="" class="nav-link">Blog</a></li>
                        <li class="nav-menu"><a href="" class="nav-link">Account</a></li>
                        <li class="nav-menu"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <div class="icons" class="nav_list">
                    <a href="#"> <i class="bi bi-bag"></i></a>
                    <a href="{{ url('/login') }}"> <i class="bi bi-person"></i></a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="checkout-container">
            <h1>Checkout</h1>

            <form action="{{ route('checkout.submit') }}" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="Phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>
                <label for="Address">Address:</label>
                <input type="text" id="address" name="address" required>

                <input type="submit" value="Order Now" name="submit">
            </form>
        </div>
    </main>
    <div class="footer" style="background-color: #224f34">
        <div class="outer-col">
            <div class="col1">
                <ul class="link" style="color: #c2efd4;">
                    <li> <a href="#">Contact</a></li>
                    <li> <a href="#">About</a></li>
                    <li> <a href="#">Privacy</a></li>
                    <li> <a href="#">Exchange</a></li>
                    <li> <a href="#">Return</a></li>
                </ul>
            </div>
            <div class="col2">
                <ul class="link">
                    <li> <a href="#">Best Selling</a></li>
                    <li> <a href="#">New Arrival</a></li>
                    <li> <a href="#">Customization</a></li>
                    <li> <a href="#">Sale</a></li>
                    <li> <a href="#">Special Price</a></li>
                </ul>
            </div>
        </div>
        <div class="outerjoin">
            <div class="head">
                <p>Stay up-to-date!</p>
            </div>
            <div class="form">
                <form action="#">
                    <input type="text" placeholder="Your Email" required>
                    <button class="btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>copyright reserved @2024</p>
    </footer>
</body>

</html>
