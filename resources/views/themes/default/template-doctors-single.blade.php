@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')<!--section-->
<section class="uk-section bg-white uk-position-relative">
    <div class="uk-container">
        <div uk-grid class="uk-grid-large">
            <div class="uk-width-1-3@m">
                <div class="uk-media-250  uk-position-relative">
                    <img src="{{asset('uploads/original/' . $data->page_thumbnail)}}">
                </div>
                <div class=" bg-white uk-box-shadow-medium uk-margin-medium-bottom">
                    <div class="uk-padding-small">
                        <div class="uk-padding-small">
                            <span
                                class="uk-display-block f-20 f-w-600 uk-margin-small-bottom text-primary">{{$data->post_title}}</span>
                            <span class="uk-display-block f-16 uk-margin-remove">{{$data->sub_title}}</span>
                        </div>
                    </div>
                    <div class="uk-border-top uk-padding-small uk-text-center">
                        <a href="" class="uk-button  uk-button-secondary"><i class="fa fa-calendar"></i> Online
                            Appointment</a>
                    </div>
                </div>
                <div class="bg-white uk-box-shadow-medium">
                    {{--                    <div class="uk-border-bottom uk-padding-small">--}}
                    {{--                        <h1 class=" f-20 f-w-600 uk-margin-remove">OPD Schedule</h1>--}}
                    {{--                    </div>--}}
                    <div class="uk-padding-small ">
                        <p>
                            {!! $data->post_excerpt !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand@m">
                <p>
                    {!! $data->post_content !!}
                </p>
            </div>
        </div>
    </div>
    <div id="uk-stop-sticky"></div>
</section>
<!--section end-->
@stop
