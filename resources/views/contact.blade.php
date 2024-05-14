<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chic sphere/ contact us</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
        <h1>Connect With Us!</h1>
        <p>We would love to stay in touch with you. We are here to listen to your queries. Feel free to ask questions.</p>
        <div class="cbox">
            <div class="cleft">
                <h3>Send your request</h3>
                <form action="#">
                    <div class="row">
                        <div class="group">
                            <label for="name"> Name</label>
                            <input type="text" placeholder="Hannah Montana" required>
                        </div>
                        <div class="group">
                            <label for="Phone"> Phone</label>
                            <input type="text" placeholder="+92 300 456 7621" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="group">
                            <label for="Email"> Email</label>
                            <input type="email" placeholder="Hannah@gmail.com" required>
                        </div>
                        <div class="group">
                            <label for="Subject"> Subject</label>
                            <input type="text" placeholder="Order Tracking" required>
                        </div>
                    </div>
                    <label for="message">Message</label>
                    <textarea rows="5" placeholder="Your Message..."></textarea>
                    <button type="submit"> Submit</button>
                </form>
            </div>
            <div class="cright">
                <h3>Our Contact Info</h3>
                <table>
                    <tr>
                        <td>Email:</td>
                        <td>hamna@mskeditors.tech</td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td>+923338940096</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td> #212, Beverly Center 7th Cross
                            <br>Ground Floor, Sector F-6 , <br> Islamabad, Pakistan
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="footer" style="background-color: #c2efd4">
        <div class="outer-col">
            <div class="col1">
                <ul class="link" style="color: #224f34;">
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
            <div class="icons">
                <a href="#"> <i class="bi bi-twitter"></i></a>
                <a href="#"> <i class="bi bi-facebook"></i></a>
                <a href="#"> <i class="bi bi-instagram"></i></a>
            </div>
        </div>
        <div class="outerjoin">
            <div class="head">
                <p>Stay up-to-date!
                    <p>
            </div>
            <div class="form">
                <form action="#">
                    <input type="text" placeholder="Your Email" required>
                    <button class="btn">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
