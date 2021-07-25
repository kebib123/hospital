@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <!-- banner -->
    <section class="uk-cover-container  uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover"
             uk-parallax="bgx: 80, 80 ;bgy: -50, -200"   style="background:url({{asset('uploads/original/'.$data->banner)}});">
        <div class="uk-overlay-primary  uk-position-cover "></div>
        <div class="uk-home-banner uk-width-1-1 uk-position-z-index">
            <div class="uk-container uk-position-relative text-white uk-flex-middle uk-flex"
                 uk-height-viewport="expand: true; min-height: 400;">
                <div class="uk-width-1-1">
                    <div class="uk-grid uk-flex-middle" uk-grid uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, p, a;  delay: 100; repeat: false;">
                        <div class="uk-width-1-2@l uk-width-1-1" >
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
        <div class="uk-container ">
            <div class="uk-grid-large  uk-child-width-1-3@m uk-text-center" uk-grid uk-scrollspy="cls: uk-animation-slide-top-small; target:div;  delay: 20; repeat: false;">
                <!--  -->
                @foreach($associated_posts as $value)
                <div>
                    <div class="uk-border-rounded uk-overflow-hidden uk-text-center bg-white uk-box-shadow-large">
                        <div class="uk-member-holder">
                            <div class="uk-member-img"> <img src="{{asset('uploads/original/' . $value->thumbnail)}}" class="uk-border-circle" alt=""> </div>
                            <h1 class="uk-h4 text-primary uk-margin-remove uk-f-w-600">{{$value->title}}</h1>
                            <h2 class="uk-h5 uk-display-block text-secondary  uk-margin-remove">{{$value->sub_title}}</h2>
                        </div>
                    </div>
                </div>
            @endforeach
                <!--  -->

            </div>
        </div>

    </section>
    <!-- section -->
@endsection
