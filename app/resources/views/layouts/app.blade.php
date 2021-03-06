<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
</head>
<body>
<!-- Header
    ================================================= -->
<header id="header">
    <nav class="navbar navbar-expand-sm navbar-fixed-top menu">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-menu">
                    <li class="dropdown"><a href="index.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu newsfeed-home">
                            <li><a href="newsfeed.html">Newsfeed</a></li>
                            <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                            <li><a href="newsfeed-friends.html">My friends</a></li>
                            <li><a href="newsfeed-messages.html">Chatroom</a></li>
                            <li><a href="newsfeed-images.html">Images</a></li>
                            <li><a href="newsfeed-videos.html">Videos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu login">
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="timeline-about.html">Timeline About</a></li>
                            <li><a href="timeline-album.html">Timeline Album</a></li>
                            <li><a href="timeline-friends.html">Timeline Friends</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu page-list">
                            <li><a href="index.html">Landing Page</a></li>
                            <li><a href="newsfeed.html">Newsfeed</a></li>
                            <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                            <li><a href="newsfeed-friends.html">My friends</a></li>
                            <li><a href="newsfeed-messages.html">Chatroom</a></li>
                            <li><a href="newsfeed-images.html">Images</a></li>
                            <li><a href="newsfeed-videos.html">Videos</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="timeline-about.html">Timeline About</a></li>
                            <li><a href="timeline-album.html">Timeline Album</a></li>
                            <li><a href="timeline-friends.html">Timeline Friends</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="contact.html">Contact</a></li>
                </ul>
                <form class="navbar-form navbar-right hidden-sm">
                    <div class="form-group">
                        <i class="icon ion-android-search"></i>
                        <input type="text" class="form-control" placeholder="Search friends, photos, videos">
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<!--Header End-->
    <div id="app">
        <div id="page-contents">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
<!-- Footer
    ================================================= -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-wrapper">
                <div class="col-md-3 col-sm-3">
                    <a href=""><img src="images/logo-black.png" alt="" class="footer-logo" /></a>
                    <ul class="list-inline social-icons">
                        <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h6>For individuals</h6>
                    <ul class="footer-links">
                        <li><a href="">Signup</a></li>
                        <li><a href="">login</a></li>
                        <li><a href="">Explore</a></li>
                        <li><a href="">Finder app</a></li>
                        <li><a href="">Features</a></li>
                        <li><a href="">Language settings</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h6>For businesses</h6>
                    <ul class="footer-links">
                        <li><a href="">Business signup</a></li>
                        <li><a href="">Business login</a></li>
                        <li><a href="">Benefits</a></li>
                        <li><a href="">Resources</a></li>
                        <li><a href="">Advertise</a></li>
                        <li><a href="">Setup</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h6>About</h6>
                    <ul class="footer-links">
                        <li><a href="">About us</a></li>
                        <li><a href="">Contact us</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms</a></li>
                        <li><a href="">Help</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h6>Contact Us</h6>
                    <ul class="contact">
                        <li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
                        <li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
                        <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Thunder Team � 2016. All rights reserved</p>
    </div>
</footer>

<!--preloader-->
<div id="spinner-wrapper">
    <div class="spinner"></div>
</div>
    <script src="{{ asset('js/frontend.js') }}" defer></script>
</body>
</html>
