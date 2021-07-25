<!DOCTYPE html>
<html>
<head>
    <title>Hospital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content=""/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <!-- favicon -->
    <link href="{{asset('images/favicon.png')}}" rel="icon"/>
    <meta name="theme-color" content="#354f8e">
    <!-- end favicon -->
    <!-- required css  -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <!-- end -->
</head>
<body>
<header id="header" class="bg-white">
    <!-- start offcanvas menu -->
    <div id="offcanvas-reveal" uk-offcanvas="flip: true;  overlay: true;">
        <div
            class="uk-offcanvas-bar uk-dark uk-offcanvas-bar-white uk-padding-remove  uk-box-shadow-medium uk-flex uk-flex-between uk-flex-column">
            <div class="uk-margin-remove uk-position-relative uk-border-bottom bg-white uk-padding-small">
                <button class="uk-offcanvas-close uk-close-large" type="button" uk-close></button>
                <a class="uk-navbar-item uk-background-white uk-padding-small" href="{{url('/')}}">
                    <img src="{{asset('images/logo.png')}}" alt="Logo" class="uk-logo-light" width="210">
                </a>
            </div>
            <div>
                <nav>
                    <ul class="uk-navsidebar    uk-nav-parent-icon uk-nav-left uk-margin-auto-vertical"
                        uk-nav="multiple: false">
                        <li class="uk-active"><a href="{{url('/')}}">Home</a></li>
                        @if ($navigations->count())
                            @foreach ($navigations as $row)
                                @if (getposts($row->id)->count() > 0)
                                    <li class="uk-parent">
                                        <a href="#">{{ $row->post_type }}</a>
                                        <ul class="uknavsub">
                                            @if (has_posts($row->id))
                                                @foreach (has_posts($row->id) as $_row)
                                                    <li>
                                                        <a href="{{ url(geturl($_row['uri'], $_row['page_key'])) }}">{{ $_row->post_title }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        <a
                                            href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                        <li class="uk-parent uk-active">
                            <a href="#">Centres of Excellence</a>
                            <ul class="uk-nav-parent-icon uk-nav" uk-nav="multiple: false" aria-hidden="true" hidden="">
                                <li class="uk-parent">
                                    <a href="">24 hours Services</a>
                                    <ul class="uknavsub" aria-hidden="true" hidden="">
                                        <li><a href="service-single.php">Emergency</a></li>
                                        <li><a href="service-single.php">Pathology</a></li>
                                        <li><a href="service-single.php">X-ray</a></li>
                                        <li><a href="service-single.php">ECG</a></li>
                                        <li><a href="service-single.php">Pharmacy</a></li>
                                        <li><a href="service-single.php">In patient Service</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
            <!-- social icon -->
            <div class="uk-position-relative">
                <div>
                    <div class="uk-padding-small bg-primary-light">
                        <ul class="uk-grid-small  uk-flex-center" uk-grid>
                            <li><a class="facebookBtn smGlobalBtn" href="{{$setting->facebook_link}}"></a></li>
                            <li><a class="instagramBtn smGlobalBtn" href="{{$setting->instagram_link}}"></a></li>
                            <li><a class="twitterBtn smGlobalBtn" href="{{$setting->twitter_link}}"></a></li>
                            <li><a class="youtubeBtn smGlobalBtn" href="{{$setting->youtube_link}}"></a></li>
                            <li><a class="linkedinBtn smGlobalBtn" href="{{$setting->linkedin_link}}"></a></li>
                        </ul>
                    </div>
                    <div>
                        <a href="{{route('appointment')}}" class="uk-display-block uk-button  uk-button-secondary"><i
                                class="fa fa-calendar"></i> Online Appointment</a>
                    </div>
                    <div class="uk-padding-small  bg-primary">
                        <div class="f-12 uk-margin-remove uk-text-left@s uk-text-center">Contact at</div>
                        <div class="f-16 uk-margin-remove uk-text-left@s uk-text-center">
                            <a href="tel:977-1- 4216138">{{$setting->phone}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end social icon -->
        </div>
    </div>
    <!-- end offcanvas menu -->
    <!-- mobile top menu -->
    <div class="uk-header-mobile uk-border-bottom uk-hidden@m uk-box-shadow-small bg-white">
        <div class="" uk-sticky="" show-on-up="" animation="uk-animation-slide-top" cls-active="uk-navbar-sticky"
             sel-target=".uk-navbar-container" class="uk-sticky">
            <div class="uk-navbar-container bg-white">
                <nav uk-navbar="" class="uk-navbar">
                    <div class="uk-navbar-left">
                        <a href="{{url('/')}}" class="uk-navbar-item uk-logo">
                            <img alt="" src="{{asset('images/logo.png')}}" width=" ">
                        </a>
                    </div>
                    <div class="uk-navbar-center">
                    </div>
                    <div class="uk-navbar-right">
                        <a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-reveal">
                            <div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon"></div>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- end mobile top menu -->
    <!-- small header -->
    <div class="bg-primary uk-top-header uk-visible@m">
        <div class="uk-container">
            <div class="uk-flex uk-flex-between uk-flex-middle">
                <div class=" text-white">
                    <ul class="uk-flex">
                        <li> Follow Us on Social Media</li>
                        <li><a href="{{$setting->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{$setting->instagram_link}}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{$setting->twitter_link}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$setting->youtube_link}}"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="{{$setting->linkedin_link}}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div>
                    <ul class="uk-flex">
                        {{--                        <li><a href="">Privacy Policy</a></li>--}}
                        {{--                        <li><a href="">Disclaimer</a></li>--}}
                        <li>
                            <a href="tel:977-1- 4257911">{{$setting->phone}}</a>
                        </li>
                        <li>
                            <a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-reveal "
                               style="min-height: 15px !important;">
                                <div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon uk-light"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end  -->
    <!-- top logo section -->
    <div class="header-top   uk-visible@m uk-header-overlay uk-padding-small">
        <div class="uk-container ">
            <div class="uk-child-width-1-2@l uk-child-width-1-2@m  uk-child-width-1-2@s uk-grid-large uk-flex-middle"
                 uk-grid>
                <!--  -->
                <div>
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div>
                    <div class="uk-text-right">
                        <ul class="uk-grid-small uk-flex-right" uk-grid>
                            <li><a href="{{route('appointment')}}" class="uk-button  uk-button-secondary-outline"><i
                                        class="fa fa-calendar"></i> Online Appointment</a></li>
                        </ul>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- end top logo section -->
    <!-- start main menu -->
    <div class="uk-h-sticky uk-visible@m uk-border-top"
         uk-sticky="top: 200; animation:uk-animation-fade uk-animation-slow uk-transform-origin-bottom-center">
        <div class="  uk-inner-navigation navbar-container uk-position-relative ">
            <div class="uk-container">
                <nav class="uk-navbar uk-display-block" uk-navbar="">
                    <ul class="uk-navbar-nav uk-flex uk-flex-between">
                        <li><a href="{{url('/')}}">Home</a></li>
                        @if ($navigations->count())
                            @foreach ($navigations as $row)
                                @if (getposts($row->id)->count() > 0)
                                    <li>
                                        <a href="#">{{ $row->post_type }}
                                            <span class="" uk-icon="icon: chevron-down; ratio: 1;"></span></a>
                                        <div class="uk-navbar-dropdown">
                                            @if (has_posts($row->id))
                                                @foreach (has_posts($row->id) as $_row)
                                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                                        @if (has_child_post($_row->id) && $_row->post_type==3)
                                                            <li>
                                                                <a href="#">{{ $_row->post_title }}</a>
                                                            </li>
                                                            <div
                                                                uk-dropdown="pos: right-top; offset: 0; delay-hide: 200;"
                                                                class="uk-dropdown">
                                                                <ul class="uk-nav uk-dropdown-nav">
                                                                    @foreach (has_child_post($_row->id) as $__row)
                                                                        <li><a
                                                                                href="{{url(strtolower($_row->uri).'/'.geturl($__row->uri))}}">
                                                                                {{ $__row->post_title }} </a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{ url(geturl($_row['uri'], $_row['page_key'])) }}">{{ $_row->post_title }}</a>
                                                            </li>
                                                        @endif
                                                    </ul>

                                                @endforeach
                                            @endif
                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <a
                                            href="{{ url('page/' . posttype_url($row->uri)) }}">{{ $row->post_type }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif

                    </ul>
                </nav>
            </div>
        </div>
        <!-- end main menu -->
</header>
<!-- /header -->
<!--Pre loader start-->
<div id="uk-preloader">
    <div class="uk-loading">
        <svg version="1.2" height="300" width="600" xmlns="http://www.w3.org/2000/svg"
             viewport="0 0 60 60" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path id="uk-pulsar" stroke="rgba(0,155,155,1)" fill="none" stroke-width="2" stroke-linejoin="round"
                  d="M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210"/>
        </svg>
    </div>
</div>
<!--pre loader end-->
