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
        <div class="page-cell-style cell small-12" id="who-are-we-about">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="about-paragraph page-cell-style cell small-12 medium-6">
                        <h2 class="about-title">Who Are We?</h2>
                        <p>
                            Georges Garden Shop was founded in 1988 by George S. Georgeson. George was born and raised
                            in the suburbs of Koondoola in Western Australia. George was an avid gardener from a young
                            age and was mostly taught by his Mother (Georgette Georgeson 1922-1995). Soon after his
                            Mother died George established his first gardening shop in 1998 in the suburb of Wanneroo.
                            Since then he has grown his business into thriving online store.
                        </p>
                    </div>
                    <div class="page-cell-style cell small-12 medium-6">
                        <img class="about-us-images" src="images/gardeners.jpg" alt="Gardeners">
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
                                    <img class="about-us-images" src="images/GardenImages/IMG_1155.JPG"
                                         alt="Garden Images">
                                </div>
                                <div class="cell small-12 large-6">
                                    <img class="about-us-images" src="images/GardenImages/IMG_1131.JPG"
                                         alt="Garden Images">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-paragraph page-cell-style cell small-12 medium-6">
                        <h2 class="about-title">About Us?</h2>
                        <p>
                            From our humble beginnings we grew and progressed into one of the largest Australia and New
                            Zealand stores and the leading retailer of garden improvement and outdoor living products,
                            and a major supplier to project builders, commercial tradespeople and the housing industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="cell small-12 cell-page-boundary">
            <hr class="main-hr">
        </div>


        <div class="page-cell-style cell small-12" id="professional-about">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="about-paragraph page-cell-style cell small-12 medium-6">
                        <h2 class="about-title">Professional Services</h2>
                        <p>
                            Not only does Georges Garden Shop supply or of your necessary garden products, including
                            fetilizers, garden tools and all of your bulk soil needs, we now offer a new landscapping
                            service. Our profeesional designers and tradesmen can quickly and easily transorm you garden
                            to paradise like you have never seen. From landscaping, plant selection, paving and
                            retaining walls, our service offers you every thing you need to completely transform your
                            home or business
                        </p>
                    </div>
                    <div class="about-video page-cell-style cell small-12 medium-6">
                        <div class="responsive-embed widescreen">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/RVIvWuZ-TUk"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
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
