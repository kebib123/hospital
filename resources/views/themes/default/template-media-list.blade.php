@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <div class="uk-blog-header">
    </div>
    <!-- banner -->
    <section class="bg-primary uk-background-norepeat uk-background-top-right uk-background-image@s
   uk-position-relative uk-flex uk-flex-middle uk-text-left"
             uk-height-viewport="expand: true; min-height: 200;">
        <div class="uk-width-1-1 uk-position-z-index">
            <div class="uk-container text-white"
                 uk-scrollspy="cls: uk-animation-slide-top-small; target:h2;  delay: 100; repeat: false;">
                <h2 class="f-30 f-w-600  uk-margin-small">{{$data->post_title}}</h2>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- section -->
    <section class="uk-section bg-white">
        <div class="uk-container"
             uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, a;  delay: 50; repeat: false;">

            <!--  -->
            <!--  -->
            <ul class="uk-grid-medium uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s"
                uk-height-match="target:.uk-same-height" uk-grid>
                <!--  -->
            {{--                <li>--}}
            {{--                    <div class=" bg-white uk-box-shadow-medium uk-bordered-rounded uk-overflow-hidden">--}}
            {{--                        <!--  <div class="uk-media-200 uk-position-relative">--}}
            {{--                           <a href="media-single.php">--}}
            {{--                              <img src="images/blog/03.jpg">--}}
            {{--                           </a>--}}
            {{--                           </div> -->--}}
            {{--                        <!-- if video -->--}}
            {{--                        <div class="open-video" data-youtube-id="agPsqRDNS3g">--}}
            {{--                            <div--}}
            {{--                                class="uk-media-250 uk-position-relative uk-pointer-left uk-pointer-left-primary uk-same-height">--}}
            {{--                                <div class="uk-overlay-primary uk-position-cover"></div>--}}
            {{--                                <img src="https://img.youtube.com/vi/agPsqRDNS3g/maxresdefault.jpg">--}}
            {{--                                <div class="uk-position-center uk-zindex">--}}
            {{--                                    <i class="fa fa-play fa-2x text-white"></i>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- if video -->--}}
            {{--                        <div class="uk-border-left-on-hover uk-padding uk-same-height">--}}

            {{--                            <h1 class="f-20 f-w-400 uk-margin-remove"><a href="media-single.php">10 Tips for Better--}}
            {{--                                    Mental Health</a></h1>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </li>--}}
            <!--  -->
                <!--  -->
                @foreach($data_child as $val)
                    <li>
                        <div class="bg-white uk-box-shadow-medium uk-bordered-rounded uk-overflow-hidden">
                            @if($val->page_thumbnail)
                                <div class="uk-media-250 uk-position-relative">
                                    <a href="{{url(strtolower($data->uri).'/'.geturl($val->uri))}}">
                                        <img src="{{asset('uploads/original/' . $val->page_thumbnail)}}">
                                    </a>
                                </div>
                            @endif
                            @if($val->page_thumbnail==null && $val->external_link==null)
                                <div class="uk-media-250 uk-position-relative">
                                    <a href="{{url(strtolower($data->uri).'/'.geturl($val->uri))}}">
                                        <img src="{{ asset('themes-assets') }}/images/default.png">
                                    </a>
                                </div>
                            @endif
                            @if($val->external_link)
                                <div class="open-video" data-youtube-id="{{$val->external_link}}">
                                    <div
                                        class="uk-media-250 uk-position-relative uk-pointer-left uk-pointer-left-primary uk-same-height">
                                        <div class="uk-overlay-primary uk-position-cover"></div>
                                        <img src="https://img.youtube.com/vi/{{$val->external_link}}/maxresdefault.jpg">
                                        <div class="uk-position-center uk-zindex">
                                            <i class="fa fa-play fa-2x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="uk-border-left-on-hover uk-padding uk-same-height">

                                <h1 class="f-20 f-w-400 uk-margin-remove"><a
                                        href="{{url(strtolower($data->uri).'/'.geturl($val->uri))}}">{{$val->post_title}}</a>
                                </h1>
                            </div>
                        </div>
                    </li>
            @endforeach

            <!--  -->

            </ul>
            <!--  -->
        </div>
    </section>
    <!-- section -->
    <nav>
        <ul class="pagination">
            {{$data_child->links()}}
        </ul>
    </nav>
@stop
