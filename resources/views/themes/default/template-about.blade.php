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
            <div class="uk-grid uk-flex-middle" uk-grid
                 uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, h2, h3,  p, a;  delay: 100; repeat: false;">
                <div class="uk-width-expand@m uk-match-height">
                    <p>
                        {!! $data->post_content !!}
                    </p>
                </div>

                <div class="uk-width-1-3@m ">
                    <div class="uk-media-350 uk-border-rounded">
                        <img src="{{asset('uploads/medium/'.$data->page_thumbnail)}}">
                    </div>

                </div>
            </div>
            <!--  -->

        </div>

    </section>
    <!-- section -->
    <!-- section -->
    <section class="uk-section bg-light">
        <div class="uk-container">

            <h1 class="f-30 f-w-600 text-black uk-margin-medium">Doctor</h1>
            <!--  -->
            <ul class="uk-text-center uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-2@s uk-grid-medium"
                uk-height-match="target:.uk-match-height" uk-grid
                uk-scrollspy="cls: uk-animation-slide-top-small; target:div, p, h1, a,  li;  delay: 50; repeat: false;">
                <!--  -->
                <li>
                    <div>
                        <a href="doctors-single.php">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-200">
                                    <img src="images/doctors/01.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    <h2 class="f-18 uk-margin-remove text-black">Mike Dooley</h2>
                                    <h3 class="f-13 uk-margin-small-top  uk-margin-remove-bottom text-primary">
                                        Cardiology Specialist</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <!--  -->

                <!--  -->
                <li>
                    <div>
                        <a href="doctors-single.php">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-200">
                                    <img src="images/doctors/02.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    <h2 class="f-18 uk-margin-remove text-black">Richard Muldoone</h2>
                                    <h3 class="f-13 uk-margin-small-top  uk-margin-remove-bottom text-primary">
                                        Cardiology Specialist</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <!--  -->

                <!--  -->
                <li>
                    <div>
                        <a href="doctors-single.php">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-200">
                                    <img src="images/doctors/03.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    <h2 class="f-18 uk-margin-remove text-black">Maria Andaloro</h2>
                                    <h3 class="f-13 uk-margin-small-top  uk-margin-remove-bottom text-primary">
                                        Pediatrician</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <!--  -->


                <!--  -->
                <li>
                    <div>
                        <a href="doctors-single.php">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-200">
                                    <img src="images/doctors/04.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    <h2 class="f-18 uk-margin-remove text-black">Dupree Black</h2>
                                    <h3 class="f-13 uk-margin-small-top  uk-margin-remove-bottom text-primary">
                                        Urologist</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <!--  -->

                <!--  -->
                <li>
                    <div>
                        <a href="doctors-single.php">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-200">
                                    <img src="images/doctors/05.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    <h2 class="f-18 uk-margin-remove text-black">Markus Skar</h2>
                                    <h3 class="f-13 uk-margin-small-top  uk-margin-remove-bottom text-primary">
                                        Laboratory</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <!--  -->

                <!--  -->
                <li>
                    <div>
                        <a href="doctors-single.php">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-200">
                                    <img src="images/doctors/06.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    <h2 class="f-18 uk-margin-remove text-black">Kiano Barker</h2>
                                    <h3 class="f-13 uk-margin-small-top  uk-margin-remove-bottom text-primary">
                                        Pathologist</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                    <div>
                        <a href="doctors-single.php">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-200">
                                    <img src="images/doctors/01.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    <h2 class="f-18 uk-margin-remove text-black">Mike Dooley</h2>
                                    <h3 class="f-13 uk-margin-small-top  uk-margin-remove-bottom text-primary">
                                        Cardiology Specialist</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <!--  -->

                <!--  -->
                <li>
                    <div>
                        <a href="doctors-single.php">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-200">
                                    <img src="images/doctors/02.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    <h2 class="f-18 uk-margin-remove text-black">Richard Muldoone</h2>
                                    <h3 class="f-13 uk-margin-small-top  uk-margin-remove-bottom text-primary">
                                        Cardiology Specialist</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <!--  -->

                <!--  -->
                <li>
                    <div>
                        <a href="doctors-single.php">
                            <div
                                class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                <div class="uk-media-200">
                                    <img src="images/doctors/03.jpg">
                                </div>

                                <div class="uk-padding-small">
                                    <h2 class="f-18 uk-margin-remove text-black">Maria Andaloro</h2>
                                    <h3 class="f-13 uk-margin-small-top  uk-margin-remove-bottom text-primary">
                                        Pediatrician</h3>
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
@endsection
