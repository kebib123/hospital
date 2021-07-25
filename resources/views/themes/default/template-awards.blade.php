@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')

    <!-- banner -->
    <section
        class="uk-cover-container  uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover"
        uk-parallax="bgx: 80, 80 ;bgy: -50, -200" style="background:url({{asset('uploads/original/'.$data->banner)}});">
        <div class="uk-overlay-primary  uk-position-cover "></div>
        <div class="uk-home-banner uk-width-1-1 uk-position-z-index">
            <div class="uk-container uk-position-relative text-white uk-flex-middle uk-flex"
                 uk-height-viewport="expand: true; min-height: 400;">
                <div class="uk-width-1-1">
                    <div class="uk-grid uk-flex-middle" uk-grid
                         uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, p, a;  delay: 100; repeat: false;">
                        <div class="uk-width-1-2@l uk-width-1-1">
                            <h1 class="f-18 f-w-600 text-white uk-margin-remove">Hospital</h1>
                            <h1 class="f-30 f-w-600 text-white uk-margin-small">{{$data->post_title}}</h1>

                        </div>
                        <div class="uk-width-1-2@l uk-width-1-1 uk-text-right@l">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- section -->
    <section class="uk-section bg-white">
        <div class="uk-container">
            <!--  -->
            <p>
                {!! $data->post_content !!}
            </p>
            <!--  -->

            <!--  -->
            <ul class="uk-text-center uk-child-width-1-3@l uk-margin-large-top  uk-child-width-1-2@s uk-grid-medium"
                uk-height-match="target:.uk-match-height" uk-grid uk-lightbox
                uk-scrollspy="cls: uk-animation-slide-top-small; target:div, p, h1, a,  li;  delay: 50; repeat: false;">
                <!--  -->
                <li>
                    <div>
                        <a href="images/awards/01.jpg">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-300">
                                    <img src="images/awards/01.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    TulsiMeher Social Service Award
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <!--  -->


                <!--  -->
                <li>
                    <div>
                        <a href="images/awards/02.jpg">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-300">
                                    <img src="images/awards/02.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    50th Anniversary Postage Stamp
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <!--  -->


                <!--  -->
                <li>
                    <div>
                        <a href="images/awards/03.jpg">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-300">
                                    <img src="images/awards/03.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    Oral Health Award
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <!--  -->


            </ul>
            <!--  -->

        </div>
    </section>
    <!-- section -->
@stop
