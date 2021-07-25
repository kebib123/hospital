@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <!-- banner -->
    <section class="bg-primary uk-background-norepeat uk-background-top-right uk-background-image@s
   uk-position-relative uk-flex uk-flex-middle uk-text-left"
             uk-height-viewport="expand: true; min-height: 200;">
        <div class="uk-width-1-1 uk-position-z-index">
            <div class="uk-container text-white"  uk-scrollspy="cls: uk-animation-slide-top-small; target:h2;  delay: 100; repeat: false;">
                <h2 class="f-30 f-w-600  uk-margin-small">Donors</h2>
            </div>
        </div>
    </section>
    <!-- end banner -->

    <section class="uk-section-small">
        <div class="uk-container">
            <div class="zg--container">
                <zing-grid caption="Our Members" layout="card" columns-control draggable layout-controls pager page-size="12" search sort src="{{route('post.members')}}"></zing-grid>
            </div>
        </div>
    </section>
    <!-- section end -->

    <script src="https://cdn.zinggrid.com/zinggrid.min.js" type="text/javascript"></script>
@stop
