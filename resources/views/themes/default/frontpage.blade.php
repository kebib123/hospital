@extends('themes.default.common.master')
@section('content')
    <!-- slider -->
    <div class="uk-position-relative uk-visible-toggle" tabindex="-1"
         uk-slider="autoplay: true; autoplay-interval: 50000; pause-on-hover: true; clsActivated: uk-transition-active;  ">
        <ul class="uk-slider-items uk-child-width-1-1 ">
            @foreach($banner as $value)
                <li>
                    <div class="uk-media-500 uk-home-banner-img"><img
                            src="{{asset('uploads/banners/'.$value->picture)}}" alt="home banner"></div>
                    <div class="uk-position-center" style="width: 100%;">
                        <div class="uk-container">
                            <ul class="uk-grid-medium" uk-grid>
                                <li class="uk-width-1-2@s">
                                    <h1 class=" uk-h1 text-white uk-text-bold uk-position-relative uk-margin-small">
                                        <span>{{$value->title}}</span></h1>
                                    <div class="text-white uk-display-block uk-margin">
                                        {!! $value->caption !!}

                                    </div>
                                    <a href="{{$value->link}}"
                                       class="uk-button uk-button-large uk-button-white-outline">
                                        {{$value->link_title}}
                                    </a>
                                </li>
                                <li class="uk-width-1-2@s"></li>
                            </ul>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
           uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
           uk-slider-item="next"></a>
    </div>
    <!-- slider end -->
    <!-- end banner -->
    <!-- start -->
    <section class="uk-section uk-padding-remove-bottom bg-white uk-position-relative f-14">
        <div class="uk-container">
            <div class="uk-border-rounded uk-overflow-hidden uk-pull-top  uk-visible-toggle" tabindex="-1"
                 uk-slider="autoplay: true; autoplay-interval: 50000; pause-on-hover: true; clsActivated: uk-transition-active;  ">
                <ul class="uk-slider-items  uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-2@s uk-grid-collapse"
                    uk-height-match="target:.uk-match-height" uk-grid
                    uk-scrollspy="cls: uk-animation-slide-top-small; target:div, p, h1, a,  li;  delay: 50; repeat: false;">
                    <!--  -->
                    @foreach($content as $value)
                        <li>
                            <div>
                                <div class="bg-primary uk-padding uk-match-height">
                                    <div class="uk-grid-small text-white" uk-grid>
                                        <!--  -->
                                        <div class="uk-width-auto">
                                            <i class="icon-call3  text-white uk-h1 uk-margin-small-top"></i>
                                        </div>
                                        <!--  -->
                                        <!--  -->
                                        <div class="uk-width-expand text-white">
                                            <h2 class="uk-h4  text-white">{{$value->post_title}}</h2>
                                            <p>
                                                {!! $value->post_content !!}
                                            </p>

                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                        </li>
                @endforeach
                <!--  -->

                </ul>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
        </div>
    </section>
    <!-- end  -->
    <!--section-->
    <section class="uk-section bg-pattern-01 uk-position-relative">
        <div class="uk-container">
            <div class="uk-grid-large" uk-grid
                 uk-scrollspy="cls: uk-animation-slide-top-small; target:div, p, h1, a;  delay: 50; repeat: false;">
                <div class="uk-width-1-2@m">
                    <div class="">
                        <div class="uk-media-400 uk-border-rounded uk-position-relative">
                            <a href="{{url(geturl($about->uri))}}">
                                <img src="{{asset('uploads/medium/'.$about->page_thumbnail)}}">
                                <div class="uk-position-bottom">
                                    <div class="uk-padding-small text-white">
                                        <span class="uk-display-block f-18">{{$about->sub_title}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <div class="uk-margin-bottom">
                        <span class="text-secondary f-18 f-w-500 uk-margin-remove">{{$about->post_title}}</span>
                        <h1 class="f-28 text-black  f-w-600 uk-margin-remove ">The Chhatrapati Free Hospital</h1>
                    </div>
                    <div class="f-18 uk-margin-bottom">
                        <p>
                            {!! $about->post_excerpt !!}
                        </p>
                        <a href="{{url(geturl($about->uri))}}" class="uk-scrollspy-inview uk-animation-slide-top-small"
                           style="">Read
                            More <i uk-icon="icon:arrow-right; ratio: 1.5;" class="uk-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->
    <!--services-->
    <section class="uk-section bg-light uk-position-relative">
        <div class="uk-container">
            <div class="uk-margin-bottom">
                <span class="text-secondary f-18 f-w-500 uk-margin-remove">Service</span>
                <h1 class="f-28 text-black  f-w-600 move uk-margin-remove">Centres of Excellence</h1>
            </div>
            <div class="uk-position-relative uk-visible-toggle " tabindex="-1" uk-slider="autoplay: true; sets: true;">
                <!-- <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@m uk-grid" uk-grid uk-scrollspy="cls: uk-animation-slide-top-small; target:div, li, a, h1;  delay: 50; repeat: false;"> -->
                <ul class="uk-slider-items  uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-2@s uk-margin-medium-bottom"
                    uk-height-match="target:.bg-white" uk-grid
                    uk-scrollspy="cls: uk-animation-slide-top-small; target:div, p, h1, a,  li;  delay: 50; repeat: false;">
                    <!--  -->
                    @foreach($service as $value)
                        <li>
                            <div>
                                <div
                                    class="bg-white uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-transition-toggle uk-border-bottom-on-hover">
                                    <div class="uk-padding">
                                        <div class="uk-padding-small uk-services-icon">
                                            <i class="icon-head f-80 text-primary"></i>
                                            <i class="icon-head text-light"></i>
                                        </div>
                                        <h1 class="uk-h4 f-w-600 uk-margin-small">
                                            <a href="{{url(strtolower(post_parent($value->uri)->uri).'/'.geturl($value->uri))}}"
                                               class="text-primary">{{$value->post_title}}</a>
                                        </h1>
                                        <div class="uk-margin-small uk-display-block">
                                            <p>
                                                {!! $value->post_excerpt !!}
                                            </p>
                                        </div>
                                        <div class="uk-text-left uk-margin-top">
                                            <a href="{{url(strtolower(post_parent($value->uri)->uri).'/'.geturl($value->uri))}}"
                                               class="uk-button uk-button-primary-outline">Read
                                                More <i uk-icon="icon:arrow-right; ratio: 1.5;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                @endforeach
                <!--  -->

                </ul>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
        </div>
    </section>
    <!--services end-->
    <!-- section -->
    <section class="uk-section bg-primary">
        <div class="uk-container"
             uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, a;  delay: 50; repeat: false;">
            <div class="uk-margin-medium-bottom text-white">
                <h1 class="f-28 text-white  f-w-600 ">Why Choose Chhatrapati Hospital</h1>
            </div>
            <!--  -->
            <ul class=" uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-2@s uk-grid-small"
                uk-height-match="target:.uk-match-height" uk-grid
                uk-scrollspy="cls: uk-animation-slide-top-small; target:div, p, h1, a,  li;  delay: 50; repeat: false;">
                <!--  -->
                <li>
                    <div>
                        <div
                            class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover uk-padding uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                            <div class="uk-margin-bottom">
                                <i class="icon-heart f-w-800 f-50 text-secondary"></i>
                            </div>
                            <div>
                                <h2 class="f-18 uk-margin-remove text-primary">Medical Advices & Check Ups</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                    <div>
                        <div
                            class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover uk-padding uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                            <div class="uk-margin-bottom">
                                <i class="icon-doctor f-w-800 f-50 text-secondary"></i>
                            </div>
                            <div>
                                <h2 class="f-18 uk-margin-remove text-primary">Trusted Medical Treatment</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                    <div>
                        <div
                            class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover uk-padding uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                            <div class="uk-margin-bottom">
                                <i class="icon-ambulance f-w-800 f-50 text-secondary"></i>
                            </div>
                            <div>
                                <h2 class="f-18 uk-margin-remove text-primary">Emergency Help Available 24/7</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                    <div>
                        <div
                            class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover uk-padding uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                            <div class="uk-margin-bottom">
                                <i class="icon-drugs f-w-800 f-50 text-secondary"></i>
                            </div>
                            <div>
                                <h2 class="f-18 uk-margin-remove text-primary">Medical Research Professionals </h2>
                            </div>
                        </div>
                    </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                    <div>
                        <div
                            class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover uk-padding uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                            <div class="uk-margin-bottom">
                                <i class="icon-first-aid-kit f-w-800 f-50 text-secondary"></i>
                            </div>
                            <div>
                                <h2 class="f-18 uk-margin-remove text-primary">Only Qualified Doctors</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                    <div>
                        <div
                            class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover uk-padding uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                            <div class="uk-margin-bottom">
                                <i class="icon-hospital f-w-800 f-50 text-secondary"></i>
                            </div>
                            <div>
                                <h2 class="f-18 uk-margin-remove text-primary">Cutting Edge Facility</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                    <div>
                        <div
                            class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover uk-padding uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                            <div class="uk-margin-bottom">
                                <i class="icon-expenses f-w-800 f-50 text-secondary"></i>
                            </div>
                            <div>
                                <h2 class="f-18 uk-margin-remove text-primary">Affordable Prices For All Patients</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                    <div>
                        <div
                            class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover uk-padding uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                            <div class="uk-margin-bottom">
                                <i class="icon-bandage f-w-800 f-50 text-secondary"></i>
                            </div>
                            <div>
                                <h2 class="f-18 uk-margin-remove text-primary">Quality Care For Every Patient</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <!--  -->
            </ul>
        </div>
    </section>
    <!-- section -->
    <!-- section -->
    <section class="uk-section bg-white uk-padding-remove-top">
        <div class="uk-container"
             uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, a;  delay: 50; repeat: false;">
            <div class="uk-flex uk-flex-between uk-flex-middle uk-margin-bottom uk-margin-medium-top">
                <div>
                    <h1 class="f-28 text-black  f-w-600 ">Recent Articles</h1>
                </div>
                <div>
                    {{--                    <a class="uk-button-text" href="{{url('page/' . posttype_url($uri->uri))}}">Read More</a>--}}
                </div>
            </div>
            <!--  -->
            <!--  -->
            <ul class="uk-grid-medium uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s"
                uk-height-match="target:.uk-same-height" uk-grid>
                <!--  -->
                @foreach($media as $value)
                    @if($value->external_link)
                        <li>
                            <div class=" bg-white uk-box-shadow-medium uk-bordered-rounded uk-overflow-hidden">
                                <!--  <div class="uk-media-200 uk-position-relative">
                                   <a href="media-single.php">
                                      <img src="images/blog/03.jpg">
                                   </a>
                                   </div> -->
                                <!-- if video -->
                                <div class="open-video" data-youtube-id="{{$value->external_link}}">
                                    <div
                                        class="uk-media-250 uk-position-relative uk-pointer-left uk-pointer-left-primary uk-same-height">
                                        <div class="uk-overlay-primary uk-position-cover"></div>
                                        <img
                                            src="https://img.youtube.com/vi/{{$value->external_link}}/maxresdefault.jpg">
                                        <div class="uk-position-center uk-zindex">
                                            <i class="fa fa-play fa-2x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- if video -->
                                <div class="uk-border-left-on-hover uk-padding uk-same-height">
                                    <div class="f-14 uk-margin-small-bottom">
                                        <a href="{{geturl(post_parent($value->uri)->uri)}}"
                                           class="uk-margin-remove text-secondary">
                                            {{post_parent($value->uri)->post_title}}
                                        </a>
                                    </div>
                                    <h1 class="f-20 f-w-400 uk-margin-remove"><a
                                            href="{{ url(post_parent($value->uri)->uri.'/'.geturl($value['uri'], $value['page_key'])) }}">{{$value->post_title}}</a>
                                    </h1>
                                </div>
                            </div>
                        </li>
                    @endif
                    @if($value->page_thumbnail)
                        <li>
                            <div class="bg-white uk-box-shadow-medium uk-bordered-rounded uk-overflow-hidden">
                                <div class="uk-media-250 uk-position-relative">
                                    <a href="{{ url(post_parent($value->uri)->uri.'/'.geturl($value['uri'], $value['page_key'])) }}">
                                        <img src="{{asset('uploads/original/' . $value->page_thumbnail)}}">
                                    </a>
                                </div>
                                <div class="uk-border-left-on-hover uk-padding uk-same-height">
                                    <div class="f-14 uk-margin-small-bottom">
                                        <a href="{{geturl(post_parent($value->uri)->uri)}}"
                                           class="uk-margin-remove text-secondary">
                                            {{post_parent($value->uri)->post_title}}
                                        </a>
                                    </div>
                                    <h1 class="f-20 f-w-400 uk-margin-remove"><a
                                            href="{{ url(post_parent($value->uri)->uri.'/'.geturl($value['uri'], $value['page_key'])) }}">
                                            {{$value->post_title}}
                                        </a></h1>
                                </div>
                            </div>
                        </li>
                @endif
            @endforeach
            <!--  -->
                <!--  -->

                <!--  -->

            </ul>
            <!--  -->
        </div>
    </section>
    <!-- section -->

@endsection
@section('libraries')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.alert').hide(8000);
        });
    </script>
@endsection
