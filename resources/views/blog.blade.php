<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chic Sphere Blog</title>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
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

    <div class="container">
        <div class="blog-posts" id="blog-posts">
            <!-- Blog posts will be dynamically inserted here -->
        </div>
    </div>

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

    <script src="{{ asset('js/blog.js') }}"></script>
</body>

</html>
