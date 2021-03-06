<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Vizew - Blog &amp; Magazine HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('home/img/core-img/favicon.ico') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/classy-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">

</head>

<body>
<!-- Preloader -->
{{--<div class="preloader d-flex align-items-center justify-content-center">--}}
    {{--<div class="lds-ellipsis">--}}
        {{--<div></div>--}}
        {{--<div></div>--}}
        {{--<div></div>--}}
        {{--<div></div>--}}
    {{--</div>--}}
{{--</div>--}}

<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Breaking News:</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="single-post.html">10 Things Amazon Echo Can Do</a></li>
                                <li><a href="single-post.html">Welcome to Colorlib Family.</a></li>
                                <li><a href="single-post.html">Boys 'doing well' after Thai</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="top-meta-data d-flex align-items-center justify-content-end">
                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="index.html" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- Login -->
                        <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="vizew-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">

                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="vizewNav">

                    <!-- Nav brand -->
                    <a href="index.html" class="nav-brand"><img src="{{ asset('home/img/core-img/logo.png') }}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="archive-list.html">Archives</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">- Home</a></li>
                                        <li><a href="archive-list.html">- Archive List</a></li>
                                        <li><a href="archive-grid.html">- Archive Grid</a></li>
                                        <li><a href="single-post.html">- Single Post</a></li>
                                        <li><a href="video-post.html">- Single Video Post</a></li>
                                        <li><a href="contact.html">- Contact</a></li>
                                        <li><a href="typography.html">- Typography</a></li>
                                        <li><a href="login.html">- Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Features</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">- Home</a></li>
                                            <li><a href="archive-list.html">- Archive List</a></li>
                                            <li><a href="archive-grid.html">- Archive Grid</a></li>
                                            <li><a href="single-post.html">- Single Post</a></li>
                                            <li><a href="video-post.html">- Single Video Post</a></li>
                                            <li><a href="contact.html">- Contact</a></li>
                                            <li><a href="typography.html">- Typography</a></li>
                                            <li><a href="login.html">- Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">- Home</a></li>
                                            <li><a href="archive-list.html">- Archive List</a></li>
                                            <li><a href="archive-grid.html">- Archive Grid</a></li>
                                            <li><a href="single-post.html">- Single Post</a></li>
                                            <li><a href="video-post.html">- Single Video Post</a></li>
                                            <li><a href="contact.html">- Contact</a></li>
                                            <li><a href="typography.html">- Typography</a></li>
                                            <li><a href="login.html">- Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">- Home</a></li>
                                            <li><a href="archive-list.html">- Archive List</a></li>
                                            <li><a href="archive-grid.html">- Archive Grid</a></li>
                                            <li><a href="single-post.html">- Single Post</a></li>
                                            <li><a href="video-post.html">- Single Video Post</a></li>
                                            <li><a href="contact.html">- Contact</a></li>
                                            <li><a href="typography.html">- Typography</a></li>
                                            <li><a href="login.html">- Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">- Home</a></li>
                                            <li><a href="archive-list.html">- Archive List</a></li>
                                            <li><a href="archive-grid.html">- Archive Grid</a></li>
                                            <li><a href="single-post.html">- Single Post</a></li>
                                            <li><a href="video-post.html">- Single Video Post</a></li>
                                            <li><a href="contact.html">- Contact</a></li>
                                            <li><a href="typography.html">- Typography</a></li>
                                            <li><a href="login.html">- Login</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<section class="hero--area section-padding-80">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-7 col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img">
                            <iframe src="https://www.youtube.com/embed/d3EPn1Y04rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="100%" height="100%"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="post-2" role="tabpanel" aria-labelledby="post-2-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img" style="background-image: url({{ asset('home/img/bg-img/8.jpg') }});">
                            <!-- Play Button -->
                            <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata">Sports</a>
                                <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="post-3" role="tabpanel" aria-labelledby="post-3-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img">

                            <!-- Play Button -->
                            <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata">Sports</a>
                                <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="post-4" role="tabpanel" aria-labelledby="post-4-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img" style="background-image: url({{ asset('home/img/bg-img/10.jpg') }});">
                            <!-- Play Button -->
                            <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata">Sports</a>
                                <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="post-5" role="tabpanel" aria-labelledby="post-5-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img" style="background-image: url({{ asset('home/img/bg-img/7.jpg') }});">
                            <!-- Play Button -->
                            <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata">Sports</a>
                                <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="post-6" role="tabpanel" aria-labelledby="post-6-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img" style="background-image: url({{ asset('home/img/bg-img/10.jpg') }});">
                            <!-- Play Button -->
                            <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata">Sports</a>
                                <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="post-7" role="tabpanel" aria-labelledby="post-7-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img" style="background-image: url({{ asset('portfolio') }});">
                            <!-- Play Button -->
                            <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata">Sports</a>
                                <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 col-lg-4">
                <ul class="nav vizew-nav-tab" role="tablist">
                    @foreach($videoList->items as $item)
                    <li class="nav-item">
                        <a class="nav-link active" id="post-1-tab" data-toggle="pill" href="#post-1" role="tab" aria-controls="post-1" aria-selected="true">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="https://img.youtube.com/vi/{{$item->id->videoId}}/hqdefault.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <h6 class="post-title">{{$item->snippet->title}}</h6>
                                    <div class="post-meta d-flex justify-content-between">
                                        <span><i class="fa fa-comments-o" aria-hidden="true"></i> 25</span>
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 11</span>
                                        <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 19</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                @endforeach

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Trending Posts Area Start ##### -->
<section class="trending-posts-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h4>Trending Videos</h4>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Blog Post -->
            <div class="col-12 col-md-4">
                <div class="single-post-area mb-80">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="{{ asset('home/img/bg-img/11.jpg') }}" alt="">

                        <!-- Video Duration -->
                        <span class="video-duration">05.03</span>
                    </div>

                    <!-- Post Content -->
                    <div class="post-content">
                        <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                        <a href="single-post.html" class="post-title">Warner Bros. Developing ‘The accountant’ Sequel</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-md-4">
                <div class="single-post-area mb-80">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="{{ asset('home/img/bg-img/12.jpg') }}" alt="">

                        <!-- Video Duration -->
                        <span class="video-duration">05.03</span>
                    </div>

                    <!-- Post Content -->
                    <div class="post-content">
                        <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                        <a href="single-post.html" class="post-title">Searching for the 'angel' who held me on Westminste Bridge</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-md-4">
                <div class="single-post-area mb-80">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="{{ asset('home/img/bg-img/12.jpg') }}" alt="">

                        <!-- Video Duration -->
                        <span class="video-duration">05.03</span>
                    </div>

                    <!-- Post Content -->
                    <div class="post-content">
                        <a href="#" class="post-cata cata-sm cata-primary">Business</a>
                        <a href="single-post.html" class="post-title">Love Island star's boyfriend found dead after her funeral</a>
                        <div class="post-meta d-flex">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ##### Trending Posts Area End ##### -->



<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="footer-widget mb-70">
                    <!-- Logo -->
                    <a href="index.html" class="foo-logo d-block mb-4"><img src="img/core-img/logo2.png" alt=""></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    <!-- Footer Newsletter Area -->
                    <div class="footer-nl-area">
                        <form action="#" method="post">
                            <input type="email" name="nl-email" class="form-control" id="nlEmail" placeholder="Your email">
                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="footer-widget mb-70">
                    <h6 class="widget-title">Latest Twister</h6>
                    <!-- Twitter Slides -->
                    <div class="twitter-slides owl-carousel">

                        <!-- Single Twitter Slide -->
                        <div class="single--twitter-slide">
                            <!-- Single Twit -->
                            <div class="single-twit">
                                <p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                            </div>
                            <!-- Single Twit -->
                            <div class="single-twit">
                                <p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                            </div>
                        </div>

                        <!-- Single Twitter Slide -->
                        <div class="single--twitter-slide">
                            <!-- Single Twit -->
                            <div class="single-twit">
                                <p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                            </div>
                            <!-- Single Twit -->
                            <div class="single-twit">
                                <p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="footer-widget mb-70">
                    <h6 class="widget-title">Sport Videos</h6>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post d-flex">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/1.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">DC Shoes: gymkhana the</a>
                            <div class="post-meta d-flex justify-content-between">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post d-flex">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/2.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">Sweet Yummy Chocolatea Tea</a>
                            <div class="post-meta d-flex justify-content-between">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="footer-widget mb-70">
                    <h6 class="widget-title">Our Address</h6>
                    <!-- Contact Address -->
                    <div class="contact-address">
                        <p>101 E 129th St, East Chicago, <br>IN 46312, US</p>
                        <p>Phone: 001-1234-88888</p>
                        <p>Email: info.colorlib@gmail.com</p>
                    </div>
                    <!-- Footer Social Area -->
                    <div class="footer-social-area">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Copywrite Text -->
                <div class="col-12 col-sm-6">
                    <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                <div class="col-12 col-sm-6">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Disclaimer</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('home/js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('home/js/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('portfolio') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('home/js/plugins/plugins.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('js/active.js') }}"></script>
</body>

</html>