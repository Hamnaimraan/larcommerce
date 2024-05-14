<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chic Sphere</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="navigation">
                <div class="logo">
                    <a href="{{ url('/index') }}"> <img src="{{ asset('images/Chic Sphere logo.png') }}" alt="Chic Sphere"></a>
                </div>
                <div class="menu" id="nav-menu">
                    <div class="hamburger-menu" id="hamburger-menu">
                        <i class="bi bi-list" id="hamburger-icon"></i>
                    </div>
                    <ul class="nav_list">
                        <li class="nav-menu"><a href="{{ url('/index') }}" class="nav-link">Home</a></li>
                        <li class="nav-menu"><a href="{{ url('/shop') }}" class="nav-link">Shop</a></li>
                        <li class="nav-menu"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
                        <li class="nav-menu"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                        <li class="nav-menu"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <div class="icons" class="nav_list">
                    <a href="#"> <i class="bi bi-bag"></i></a>
                    <a href="{{ url('/register') }}"> <i class="bi bi-person"></i></a>
                </div>
            </div>
        </nav>
    </header>

    <main id="home">
        <section class="home">
            <div class="bd-grid">
                <div class="home-data">
                    <span class="text"></span>
                    <h1 class="home-title">Fashion According To You!</h1>
                    <p class="home-des">Explore our curated collection of every kind of stylish clothing <br>tailored to your unique taste</p>
                    <a href="#" class="button">Explore Now</a>
                </div>
                <div class="pic-part">
                    <div class="shape"></div>
                    <img src="{{ asset('images/green model.jpg') }}" alt="" class="main-img">
                </div>
            </div>
        </section>
    </main>

    <div class="productdiv">
        <div class="headprod">
            <h1>Best Selling</h1>
        </div>
        <div class="prodcollection">
            <div class="productbox">
                <img src="{{ asset('images/maxi red.jpg') }}" alt="">
                <h4>price</h4>
            </div>
            <div class="productbox">
                <img src="{{ asset('images/long sleeve.png') }}" alt="">
                <h4>price</h4>
            </div>
            <div class="productbox">
                <img src="{{ asset('images/long sleeve.png') }}" alt="">
                <h4>price</h4>
            </div>
        </div>
    </div>

    <div class="productdiv">
        <div class="headprod">
            <h1>Products</h1>
        </div>
        <div class="prodcollection">
            <div class="productbox">
                <img src="{{ asset('images/long sleeve.png') }}" alt="">
                <h4>price</h4>
            </div>
            <div class="productbox">
                <img src="{{ asset('images/long sleeve.png') }}" alt="">
                <h4>price</h4>
            </div>
            <div class="productbox">
                <img src="{{ asset('images/long sleeve.png') }}" alt="">
                <h4>price</h4>
            </div>
            <div class="productbox">
                <img src="{{ asset('images/long sleeve.png') }}" alt="">
                <h4>price</h4>
            </div>
            <div class="productbox">
                <img src="{{ asset('images/long sleeve.png') }}" alt="">
                <h4>price</h4>
            </div>
            <div class="productbox">
                <img src="{{ asset('images/long sleeve.png') }}" alt="">
                <h4>price</h4>
            </div>
        </div>
    </div>

    <div class="offer">
        <div class="side-img">
            <img src="{{ asset('images/offer.jpeg') }}" alt="Chic Sphere">
        </div>
        <div class="outer">
            <div class="textt">
                <h1>Exclusive Offer! <br> Upto 40% Off</h1>
            </div>
            <div class="countdown">
                <div class="box">
                    <h3>10 days</h3>
                </div>
                <div class="box">
                    <h3>22 hours</h3>
                </div>
                <div class="box">
                    <h3>2 min</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="feedback">
        <div class="headfeed">
            <h1> Feedback Corner</h1>
        </div>
        <div class="fcollection">
            <div class="fbox">
                <h3> Lizay</h3>
                <p>Lorem ipsum, dolor sit amet quisquam dolorum dolores sit. Architecto, sapiente ullam!</p>
            </div>
            <div class="fbox">
                <h3> Shanaya</h3>
                <p>Lorem ipsum, dolor sit amet quisquam dolorum dolores sit. Architecto, sapiente ullam!</p>
            </div>
            <div class="fbox">
                <h3> Aliyana</h3>
                <p>Lorem ipsum, dolor sit amet quisquam dolorum dolores sit. Architecto, sapiente ullam!</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="outer-col">
            <div class="col1">
                <ul class="link">
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
            <div class="icons" id="icon">
                <a href="#"> <i class="bi bi-twitter"></i></a>
                <a href="#"> <i class="bi bi-facebook"></i></a>
                <a href="#"> <i class="bi bi-instagram"></i></a>
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

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
