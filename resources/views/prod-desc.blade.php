<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description</title>
    <link rel="stylesheet" href="{{ asset('css/prod-desc.css') }}">
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

    <div class="product">
        <div class="pic-part">
            <div class="home__shape"></div>
            <img src="{{ asset('maxi red.jpg') }}" alt="" class="main-img">
        </div>

        <div class="product-info">
            <h1 class="product-name">Red Maxi</h1>
            <div class="product-rating">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="rating-count">(5)</span>
            </div>
            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio sed nisi viverra gravida.</p>
            <p class="product-price">$20</p>
            <div class="product-options">
                <div class="size-options">
                    <h3>Size:</h3>
                    <div class="size-buttons">
                        <button class="size-btn">S</button>
                        <button class="size-btn">M</button>
                        <button class="size-btn">L</button>
                        <button class="size-btn">XL</button>
                    </div>
                </div>
                <div class="color-options">
                    <h3>Color:</h3>
                    <div class="color-buttons">
                        <button class="color-btn" style="background-color: #d78986;"></button>
                        <button class="color-btn" style="background-color: #d13714;"></button>
                        <button class="color-btn" style="background-color: #667f32;"></button>
                    </div>
                </div>
            </div>
            <button class="add-to-cart-btn">Add to Cart</button>
            <button class="add-to-cart-btn">Buy Now</button>
        </div>
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup()">&times;</span>
                <p>Item added to cart!</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/prod-desc.js') }}"></script>

</body>

</html>
