@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <!-- banner -->
    <section
        class="uk-cover-container  uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover"
        uk-parallax="bgx: 80, 80 ;bgy: -50, -200"
        style="background:url({{asset('uploads/original/' . $data->banner)}});">
        <div class="uk-overlay-primary  uk-position-cover "></div>
        <div class="uk-home-banner uk-width-1-1 uk-position-z-index">
            <div class="uk-container uk-position-relative text-white uk-flex-middle uk-flex"
                 uk-height-viewport="expand: true; min-height: 400;">
                <div class="uk-width-1-1">
                    <div class="uk-grid uk-flex-middle" uk-grid
                         uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, p, a;  delay: 100; repeat: false;">
                        <div class="uk-width-1-2@l uk-width-1-1">
                            <h1 class="f-30 f-w-600 text-white uk-margin-small">Find A Doctor</h1>

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
    <section class="uk-section bg-light">
        <div class="uk-margin-medium-bottom uk-text-center">
            <div class="uk-container uk-container-small">
                <div class="uk-child-width-1-2@l" uk-grid>
                    <!--  -->
                    <div>
                        <div>
                            <select class="news_sort uk-select">
                                <option selected disabled>Select Speciality</option>
                                @foreach($category as $value)
                                    <option value="{{$value->id}}">{{$value->category}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div>
                        <div>
                            <form method="post" action="{{route('search-results')}}">
                                @csrf
                                <input class="uk-input" name="search" placeholder="Search Name of the doctor ">
                            </form>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
        <div class="uk-container filter_result">

            <!--  -->
            <ul class="uk-text-center uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-2@s uk-grid-medium"
                uk-height-match="target:.uk-match-height" uk-grid
                uk-scrollspy="cls: uk-animation-slide-top-small; target:div, p, h1, a,  li;  delay: 50; repeat: false;">
                <!--  -->
                @foreach($posts as $value)
                    <li>
                        <div>
                            <a href="{{url(geturl($value->uri))}}">
                                <div
                                    class="uk-border-bottom-on-hover bg-white uk-card uk-card-hover  uk-box-shadow-medium uk-border-rounded uk-overflow-hidden uk-match-height ">
                                    <div class="uk-media-250">
                                        <img src="{{asset('uploads/original/' . $value->page_thumbnail)}}">
                                    </div>

                                    <div class="uk-padding">
                                        <h2 class="f-22 f-w-600 uk-margin-remove text-primary">{{$value->post_title}}</h2>
                                        <h3 class="f-16 f-w-500  uk-margin-remove text-black">{{loop_category($value->post_category)->category}}</h3>
                                    </div>
                                    <div class="uk-border-top uk-padding-small">
                                        <a href="{{route('appointment',$value->uri)}}" class="uk-button uk-button-small  uk-button-secondary"> Online
                                            Appointment</a>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
            @endforeach
            <!--  -->


            </ul>
            <!--  -->

        </div>

    </section>
    <!-- section -->
@stop
