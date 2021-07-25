@extends('themes.default.common.master')

@section('content')
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
                @foreach($doctors as $value)
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
                                        <a href="" class="uk-button uk-button-small  uk-button-secondary"> Online
                                            Appointment</a>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
            @endforeach
            <!--  -->

                @if($doctors->isEmpty())
                <h3>No Results Found</h3>
                @endif

            </ul>
            <!--  -->

        </div>

    </section>
    <!--  -->
@stop
