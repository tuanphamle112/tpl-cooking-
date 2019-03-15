<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Tpl Cooking</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico')}}">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Template css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/classy-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-sm-4">
                        <!-- Logo Area -->
                        <div class="logo-area">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8">
                        <!-- Top Add Area -->
                        <div class="top-add-area text-right">
                            <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="videomag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="videomagNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="video-post.html">Recipes</a></li>
                                    <li><a href="video-post.html">Comunity</a></li>
                                    <!-- <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagory.html">Catagory</a></li>
                                            <li><a href="video-post.html">Video Post</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="#">Categories</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagory.html">Catagory</a></li>
                                                <li><a href="video-post.html">Video Post</a></li>
                                                <li><a href="single-post.html">Single Post</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagory.html">Catagory</a></li>
                                                <li><a href="video-post.html">Video Post</a></li>
                                                <li><a href="single-post.html">Single Post</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="#" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <div class="wrap-info">
                            <div class="classynav">
                                <ul>
                                    @if(Auth::check())
                                    <li>
                                        <a href="{{ route('users.index') }}">{{ Auth::user()->name}}</a>
                                    </li>
                        
                                    @else
                                    <li>
                                        <a href="{{ route('login')}}">Login</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register')}}">Register</a>
                                    </li>
                                    @endif
                                </ul>
                                @if(Auth::check())
                                <a class="logout-button" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                @endif
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area d-flex flex-wrap">

        <div class="hero-single-section">
            <!-- Single Welcome Post -->
            <div class="single-welcome-post bg-img item1 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/1.jpg);">
                <!-- Play Button -->
                <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn"><i class="fa fa-play"></i></a>
                <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-tag">Featured</a>
                            <a href="#" class="post-title">Watch a tiny cat taking a bath</a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/author.png" alt=""> By James Smith</a>
                                <a href="#"><img src="img/core-img/calender.png" alt=""> July 23, 2018</a>
                                <a href="#"><img src="img/core-img/chat.png" alt=""> 5</a>
                                <a href="#"><img src="img/core-img/like.png" alt=""> 12k</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-single-section">
            <!-- Single Welcome Post -->
            <div class="single-welcome-post bg-img item2 wow fadeInUp" data-wow-delay="400ms" style="background-image: url(img/bg-img/2.jpg);">
                <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-tag">Featured</a>
                            <a href="#" class="post-title">Spain: Take a virtual tour</a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/author.png" alt=""> By James Smith</a>
                                <a href="#"><img src="img/core-img/calender.png" alt=""> July 23, 2018</a>
                                <a href="#"><img src="img/core-img/chat.png" alt=""> 5</a>
                                <a href="#"><img src="img/core-img/like.png" alt=""> 12k</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-second-section d-flex flex-wrap">
                <!-- Single Welcome Post -->
                <div class="single-welcome-post bg-img item3 wow fadeInUp" data-wow-delay="500ms" style="background-image: url(img/bg-img/3.jpg);">
                    <!-- Content -->
                    <div class="welcome-post-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">5 Tips to create your garden</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Welcome Post -->
                <div class="single-welcome-post bg-img item4 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/4.jpg);">
                    <!-- Content -->
                    <div class="welcome-post-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">10 Movies you need to see</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Tabs Area Start ##### -->
    <div class="video-mag-tabs-area mt-50 wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="latest-tab" data-toggle="tab" href="#latest" role="tab" aria-controls="latest" aria-selected="true">Latest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-viewed-tab" data-toggle="tab" href="#top-viewed" role="tab" aria-controls="top-viewed" aria-selected="false">Top Viewed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false">See All Videos</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                            <div class="latest-videos-slide owl-carousel">

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-viewed" role="tabpanel" aria-labelledby="top-viewed-tab">
                            <div class="top-viewed-slide owl-carousel">

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                            <div class="videos-slide owl-carousel">

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/5.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Top Video Games</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/7.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">July Fails</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Tabs Area End ##### -->

    <!-- ##### Travel Videos Area Start ##### -->
    <section class="travel-videos-area">
        <div class="container">
            <div class="travel-videos-content">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Travel Videos</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <!-- Single Welcome Post -->
                        <div class="single-welcome-post style-2 bg-img mb-30 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/1.jpg);">
                            <!-- Play Button -->
                            <a href="#" class="video-play-btn"><i class="fa fa-play"></i></a>
                            <!-- Content -->
                            <div class="welcome-post-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post white">
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Watch a tiny cat taking a bath</a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author.png" alt=""> By James Smith</a>
                                            <a href="#"><img src="img/core-img/calender.png" alt=""> July 23, 2018</a>
                                            <a href="#"><img src="img/core-img/chat.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="row">

                            <!-- Single Blog Post -->
                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/8.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">New York Trip</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <div class="d-flex">
                                                <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                                <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="500ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/9.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Coffee in Paris</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <div class="d-flex">
                                                <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                                <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="600ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/10.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Summer Holiday</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <div class="d-flex">
                                                <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                                <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="700ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/bg-img/11.jpg" alt="">
                                        <!-- Play Button -->
                                        <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="post-tag">Featured</a>
                                        <a href="#" class="post-title">Discover the islands</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                            <div class="d-flex">
                                                <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                                <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Travel Videos Area End ##### -->

    <!-- ##### Small Videos Area Start ##### -->
    <section class="small-videos-area">
        <div class="container">
            <div class="small-videos-content">
                <div class="row">

                    <!-- Fashion News -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Fashion</h2>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="img/bg-img/12.jpg" alt="">
                                <!-- Play Button -->
                                <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">Vacation Blog: Ibiza</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/14.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">Fashion Week 2018 -Spring/summer</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/15.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">2018 Summer shoes Collection</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="600ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/16.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">The New Collection of Dior</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Technology News -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>Technology</h2>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb mb-5">
                                <img src="img/bg-img/13.jpg" alt="">
                                <!-- Play Button -->
                                <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">New Iphone release</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> By James Smith</a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/17.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">Fashion Week 2018 -Spring/summer</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/18.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">2018 Summer shoes Collection</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="600ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/19.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">The New Collection of Dior</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- July Top News -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="section-heading wow fadeInUp" data-wow-delay="200ms">
                            <h2>July Top</h2>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/20.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">Fashion Week 2018 -Spring/summer</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/21.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">2018 Summer shoes Collection</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/22.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">The New Collection of Dior</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="600ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/23.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">Fashion Week 2018 -Spring/summer</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="700ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/24.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">2018 Summer shoes Collection</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post style4 d-flex mb-30 wow fadeInUp" data-wow-delay="800ms">
                            <div class="blog-thumb">
                                <img src="img/bg-img/25.jpg" alt="">
                                <!-- Play Button -->
                                <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Featured</a>
                                <a href="#" class="post-title">The New Collection of Dior</a>
                                <div class="post-meta">
                                    <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                    <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Small Videos Area End ##### -->

    <!-- ##### Big Add Area Start ##### -->
    <div class="big-add-area mb-100 wow fadeInUp" data-wow-delay="200ms">
        <div class="container-fluid">
            <a href="#"><img src="img/bg-img/big-add.png" alt=""></a>
        </div>
    </div>
    <!-- ##### Big Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <!-- Footer Content -->
                <div class="col-12 col-lg-4">
                    <div class="footer-content">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="img/core-img/logo.png" alt=""></a>
                        <p>Donec cursus eros et risus scelerisque, sit amet ultrices arcu scelerisque. Sed consequat fermentum turpis, vulputate maximus.Donec cursus eros et risus scelerisque, sit amet ultrices arcu scelerisque. Sed consequat fermentum turpis, vulputate maximus</p>
                        <div class="footer-social-info d-flex">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Content -->
                <div class="col-12 col-lg-7 col-xl-6">
                    <div class="footer-content d-flex flex-wrap">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <h5 class="widget-title">Usefull Links</h5>
                            <nav>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <h5 class="widget-title">About Us</h5>
                            <nav>
                                <ul>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Conditions</a></li>
                                    <li><a href="#">About</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Video Catagory -->
                        <div class="video-catagory">
                            <h5 class="widget-title">Video Categories</h5>
                            <ul>
                                <li><a href="#"><span>Travel</span> <span>20</span></a></li>
                                <li><a href="#"><span>Technology</span> <span>10</span></a></li>
                                <li><a href="#"><span>Fashion</span> <span>71</span></a></li>
                                <li><a href="#"><span>Animals</span> <span>15</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js')}}"></script>
</body>

</html>