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
                 uk-height-viewport="expand: true; min-height:400;">
                <div class="uk-width-1-1">
                    <div class="uk-grid uk-flex-middle" uk-grid
                         uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, p, a;  delay: 100; repeat: false;">
                        <div class="uk-width-1-2@l uk-width-1-1">
                            <h1 class="f-18 f-w-600 text-white uk-margin-remove">{{$data_child->post_title}} </h1>
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
            <div class="uk-grid  " uk-grid
                 uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, h2, h3,  p, a;  delay: 100; repeat: false;">
                <div class="uk-width-expand@m uk-match-height">
                    <p>
                        {!! $data->post_content !!}
                    </p>
                </div>

                <div class="uk-width-1-3@s">
                    <div class="bg-white  uk-box-shadow-medium ">

                        <ul class="uk-aside-list">
                            @foreach($related as $val)
                            <li><a href="{{url(post_parent($val->uri)->uri.'/'.geturl($val->uri))}}" class="uk-active">{{$val->post_title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!--  -->

        </div>

    </section>
    <!-- section -->
@stop
