@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <section class="page-title page-title-layout5 bg-primary">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading text-white">{{$data->post_type}}</h1>

                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
    <!-- ========================
        Team layout 2
    ========================== -->
    <section class="team-layout2 pb-40">
        <div class="container">
            <div class="row">
                <!-- Member #1 -->
                @foreach($posts as $value)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="member">
                            <div class="member__img">
                                <img src="{{asset('uploads/original/' . $value->page_thumbnail)}}" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a
                                        href="{{url(geturl($value->uri))}}">{{$value->post_title}}</a></h5>
                                <p class="member__job">{{loop_category($value->post_category)->category}}</p>
                                <p class="member__desc">
                                    {{$value->sub_title}}
                                </p>
                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                    <a href="{{url(geturl($value->uri))}}"
                                       class="btn btn__secondary btn__link btn__rounded">
                                        <span>Read More</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                    <ul class="social-icons list-unstyled mb-0">
                                        <li><a href="{{$value->uid}}" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$value->associated_title}}" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{$value->post_tags}}" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                </div>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                    </div>
            @endforeach<!-- /.col-lg-4 -->

            </div> <!-- /.row -->
            <div class="row">
                <div class="col-12 text-center">
                    <nav class="pagination-area">
                        <ul class="pagination justify-content-center">
                           {{$posts->links()}}
                        </ul>
                    </nav><!-- .pagination-area -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Team layout 2  -->
@stop
