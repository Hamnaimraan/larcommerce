<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"> <!-- Assuming Home.css is located in the 'public/css' directory -->
    <title>Shop</title>
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
                        <li class="nav-menu"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                        <li class="nav-menu"><a href="{{ url('/shop') }}" class="nav-link">Shop</a></li>
                        <li class="nav-menu"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
                        <li class="nav-menu"><a href="{{ url('/account') }}" class="nav-link">Account</a></li>
                        <li class="nav-menu"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <div class="icons" class="nav_list">
                    <a href="#"> <i class="bi bi-bag"></i></a>
                    <a href="{{ url('/login') }}"> <i class="bi bi-person"></i></a>
                </div>
            </div>
        </nav>
    </header>
    <div class="productdiv">
        <div class="headprod">
            <h1>Our Products</h1>
        </div>
        <div class="prodcollection">
            <!-- Product boxes -->
        </div>
    </div>
    <div class="footer" style="background-color: #224f34">
        <!-- Footer content -->
    </div>
    <footer>
        <p>copyright reserved @2024</p>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script> <!-- Assuming script.js is located in the 'public/js' directory -->
</body>
</html>
