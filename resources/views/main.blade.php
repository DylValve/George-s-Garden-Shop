<!DOCTYPE html>
<html lang="en">
<head>
    <title>George's Garden Shop</title>

    <!-- Uncompressed JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css"
          integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js"
            integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

    <!-- Insert this within your head tag and after foundation.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css"/>

    <!-- Insert social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

</head>
<body>
<header id="header-title-bar">
    <div class="grid-container full">
        <div class="grid-x">
            <div id="logo" class="cell small-12 medium-2"><a href="{{route('main')}}"><img src="images/gardenLogo.png"
                                                                                           alt="Logo"></a></div>

            <div class="cell small-12 medium-10 background-of-title">
                <div class="grid-container full">
                    <div class="grid-x">
                        <div class="cell small-12">
                            <img
                                data-interchange="[images/gardenBannerSmall.png, small], [images/gardenBannerMedium.png, medium], [images/gardenBannerLarge.png, large], [images/gardenBannerExtraLarge.png, xlarge]">
                        </div>
                        <div class="cell small-12">
                            <div id="title-block"><h1>George's Garden Shop</h1></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cell small-12">
                <div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
                    <button class="menu-icon" type="button" data-toggle></button>
                    <div class="title-bar-title">Menu</div>
                </div>

                <div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top hinge-out-from-top">
                    <div class="top-bar-left">
                        <ul class="dropdown menu header-links" data-dropdown-menu>
                            <li class="menu-text">George's Garden Shop</li>
                            <li>
                                <a href="{{route('main')}}">Main Page</a>
                            </li>
                            <li><a href="{{route('store')}}">Products</a>
                                <ul class="menu vertical">

                                    @foreach($categories as $category)
                                        <li>
                                            <a href="{{route('store')}}#product-{{ $category->name }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="{{route('order')}}">Order Form</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="menu">
                            <li><input type="search" placeholder="Search"></li>
                            <li>
                                <button type="button" class="button">Search</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="grid-container">
    <div class="grid-x">
        <div class="page-cell-style cell small-12">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="page-cell-style cell small-12 medium-5" id="intro-paragraph">
                        <h2 id="intro-title">Introduction</h2>
                        <p>
                            Welcome to Georges Garden Shop, this web site is to help make a better garden. If you are
                            just beginning or a seasoned pro we have something for everyone. For those looking to learn
                            how to get started we have some great ideas and wonderful pictures. We also have informative
                            tips and tricks to help you started and maintain your garden for years to come. The
                            professional can find all the gardening products, from plants to fertilizers, and the know
                            how to keep your garden healthy and strong. Our web site is divided into easily accessible
                            pages full of useful information and products.
                        </p>
                    </div>
                    <div class="page-cell-style cell small-12 medium-7">
                        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                            <div class="orbit-wrapper">
                                <div class="orbit-controls">
                                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;
                                    </button>
                                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;
                                    </button>
                                </div>
                                <ul class="orbit-container">
                                    <li class="is-active orbit-slide">
                                        <figure class="orbit-figure">
                                            <img class="orbit-image" src="images/GardenImages/gardenBench.png"
                                                 alt="Garden Bench">
                                            <figcaption class="orbit-caption">Garden bench surrounded by plants
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="orbit-slide">
                                        <figure class="orbit-figure">
                                            <img class="orbit-image" src="images/GardenImages/gardenCanopy.png"
                                                 alt="Garden Canopy">
                                            <figcaption class="orbit-caption">Canopy over a sitting area in a garden
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="orbit-slide">
                                        <figure class="orbit-figure">
                                            <img class="orbit-image" src="images/GardenImages/gardenPath.jpg"
                                                 alt="Garden Path">
                                            <figcaption class="orbit-caption">Garden pathway of tiles lined with
                                                plants
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="orbit-slide">
                                        <figure class="orbit-figure">
                                            <img class="orbit-image" src="images/GardenImages/gardenWaterFeature.jpg"
                                                 alt="Garden Water Feature">
                                            <figcaption class="orbit-caption">Water feature lined with stones in a
                                                garden
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                            <nav class="orbit-bullets">
                                <button class="is-active" data-slide="0">
                                    <span class="show-for-sr">First slide details.</span>
                                    <span class="show-for-sr" data-slide-active-label>Current Slide</span>
                                </button>
                                <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                                <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                                <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="cell small-12 cell-page-boundary">
            <hr class="main-hr">
        </div>


        <div class="page-cell-style cell small-12">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="about-paragraph page-cell-style cell small-12 medium-6">
                        <h2 class="about-title">New Gardens</h2>
                        <p>
                            Getting started with a new garden can be overwhelming, but the real trick in not just
                            planting, the real trick to a good garden is consistency. It really doesn't matter what you
                            choose to plant, whether its flowers, vegetable or shrubs, plants require maintanence. You
                            have to look after your new "babies" they require some attention at least once a week, and I
                            don't mean just water. Plants need to be monitored for leaf growth, weede for those nasty
                            plant that will try to strangle your new plant. They also need to be fed (again not just
                            water), by some slow release plant food (appropriate to your plant) which cna be supplied
                            straight from Georges Garden Shop.
                        </p>
                    </div>
                    <div class="intro-video page-cell-style cell small-12 medium-6">
                        <div class="responsive-embed widescreen">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/NScvq4q0ONU"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="cell small-12 cell-page-boundary">
            <hr class="main-hr">
        </div>


        <div class="page-cell-style cell small-12">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="page-cell-style cell small-12 medium-6">
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell small-12 large-6">
                                    <img class="intro-image" src="images/GardenImages/IMG_0255.JPG" alt="Garden">
                                </div>
                                <div class="cell small-12 large-6">
                                    <img class="intro-image" src="images/GardenImages/IMG_0288.JPG" alt="Garden">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-paragraph page-cell-style cell small-12 medium-6">
                        <h2 class="about-title">Georges Garden Shop subscription service</h2>
                        <p>
                            As I said previouly plants need maintanence, regular good food appropriate for your planbts
                            needs. Here at Georges Garden Shop we now offer a monthly subscription box. After answering
                            a brief questionare about you specific plant we can tailor a monthly box featuring
                            - plant food specific for your plants
                            - and reminder calander to help you look after your plant
                            - a packets seeds psecially selected to complenet your exisitng garden
                            - and a Georges Garden Shop sun shade to help your sun sensitive plant through the hottest
                            days
                            all for a low $99.99 ($200.00 worth of products) order now limited stocks
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer id="footer-bar" class="site-footer">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell small-12 medium-6">
                <h6>About</h6>
                <p class="text-justify">This is the Greorge's Garden Shop footer that shows quick links to certain
                    sections of the website and shows any contact information that you might require. We also give links
                    to our social media accounts so you can keep up to date with us where ever it is most convenient</p>
            </div>

            <div class="cell small-6 medium-3 footer-h6">
                <h6>Contacts</h6>
                <ul class="footer-links">
                    <li>Phone Number: 4273367467</li>
                    <li>Email: GeorgesGardenShop@gmail.com</li>
                    <li>Address: 73 Wheelers Ln, Ellenbrook</li>
                </ul>
            </div>

            <div class="cell small-6 medium-3 footer-h6">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="{{route('store')}}#browse-products">Browse Products</a></li>
                    <li><a href="{{route('order')}}#order-now-form">Order Now</a></li>
                    <li><a href="{{route('about')}}#who-are-we-about">About Us</a></li>
                    <li><a href="{{route('about')}}#professional-about">Professionals</a></li>
                    <li><a href="{{ route('dashboard') }}">Admin Portal</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell small-12 medium-6">
                <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by <a href="#">George's Garden
                        Shop</a>.</p>
            </div>

            <div class="cell small-12 medium-6">
                <ul class="social-icons">
                    <li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<script>
    $(document).foundation();
</script>

</body>
</html>
