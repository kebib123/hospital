@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <!-- section -->
    <section class="uk-section uk-position-relative">
        <div class="uk-container uk-position-relative">

            <div class="uk-grid-large" uk-grid
                 uk-scrollspy="cls: uk-animation-slide-top-small; target:div, p, h1, a;  delay: 50; repeat: false;">
                <div class="uk-width-expand@m">
                    <h1 class="uk-h2 f-w-400 uk-margin">{{$data->post_title}}</h1>
                    <!--  -->
                    <div class="uk-border-light-top uk-border-light-bottom uk-margin-bottom uk-padding-small">
                        <div class="uk-child-width-expand@s uk-flex-middle" uk-grid>
                            <div class="uk-text-muted"><i
                                    class="fa fa-clock-o"></i>{{$data->updated_at->format('M')}} {{$data->updated_at->format('d')}}
                                , {{$data->updated_at->format('Y')}}</div>
                            <div>
                                <!-- ShareThis BEGIN -->
                                <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    @if($data->banner)
                        <figure class="uk-feature-image uk-margin-medium-bottom" uk-lightbox="">
                            <a href="{{asset('uploads/original/' . $data->banner)}}"
                               data-caption="How I Chose Therapy Over Pain & Overcame My Demons">
                                <img src="{{asset('uploads/original/' . $data->banner)}}" alt=""> </a>
                            <figcaption class="f-14">{{$data->sub_title}}</figcaption>
                        </figure>
                    @endif

                    @if($data->banner==null && $data->external_link==null)
                        <figure class="uk-feature-image uk-margin-medium-bottom" uk-lightbox="">
                            <a href="{{ asset('themes-assets') }}/images/default.png"
                               data-caption="How I Chose Therapy Over Pain & Overcame My Demons">
                                <img src="{{ asset('themes-assets') }}/images/default.png" alt=""> </a>
                            <figcaption class="f-14">{{$data->sub_title}}</figcaption>
                        </figure>
                    @endif
                <!-- if video -->
                    @if($data->external_link)
                        <figure class="uk-feature-video uk-margin-medium-bottom">
                            <iframe width="100%" height="500"
                                    src="https://www.youtube.com/embed/{{$data->external_link}}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            <figcaption class="f-14">{{$data->sub_title}}</figcaption>
                        </figure>
                @endif
                <!-- end if video -->
                    <p>
                        {!! $data->post_content !!}
                    </p>

                </div>

                <div class="uk-width-1-3@l">

                    <h1 class="uk-h4 f-w-600">Related Stories</h1>
                    <!--  -->
                    <ul class="uk-grid-medium uk-child-width-1-1" uk-height-match="target:.uk-same-height" uk-grid>
                        <!--  -->
                        <!--  -->
                        <!--  -->
                        @foreach($related->take(3) as $row)
                            @if($row->external_link)
                                <li>
                                    <div class=" bg-white uk-box-shadow-medium uk-bordered-rounded uk-overflow-hidden">
                                    {{--                                     <div class="uk-media-200 uk-position-relative">--}}
                                    {{--                                       <a href="media-single.php">--}}
                                    {{--                                          <img src="images/blog/03.jpg">--}}
                                    {{--                                       </a>--}}
                                    {{--                                       </div>--}}
                                    <!-- if video -->
                                        <div class="open-video" data-youtube-id="{{$row->external_link}}">
                                            <div
                                                class="uk-media-250 uk-position-relative uk-pointer-left uk-pointer-left-primary uk-same-height">
                                                <div class="uk-overlay-primary uk-position-cover"></div>
                                                <img
                                                    src="https://img.youtube.com/vi/{{$row->external_link}}/maxresdefault.jpg">
                                                <div class="uk-position-center uk-zindex">
                                                    <i class="fa fa-play fa-2x text-white"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- if video -->
                                        <div class="uk-border-left-on-hover uk-padding uk-same-height">

                                            <h1 class="f-20 f-w-400 uk-margin-remove"><a
                                                    href="{{url(post_parent($row->uri)->uri.'/'.geturl($row->uri))}}">
                                                    {{$row->post_title}}
                                                </a></h1>
                                        </div>
                                    </div>
                                </li>

                            @else($row->page_thumbnail)
                                <li>
                                    <div class="bg-white uk-box-shadow-medium uk-bordered-rounded uk-overflow-hidden">
                                        <div class="uk-media-250 uk-position-relative">
                                            <a href="{{url(post_parent($row->uri)->uri.'/'.geturl($row->uri))}}">
                                                <img src="{{asset('uploads/original/' . $row->page_thumbnail)}}">
                                            </a>
                                        </div>
                                        <div class="uk-border-left-on-hover uk-padding uk-same-height">

                                            <h1 class="f-20 f-w-400 uk-margin-remove"><a
                                                    href="{{url(post_parent($row->uri)->uri.'/'.geturl($row->uri))}}">
                                                    {{$row->post_title}}

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
            </div>
        </div>
    </section>
    <!-- section end -->
@stop
