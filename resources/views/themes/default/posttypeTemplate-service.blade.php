@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <!-- ========================
       page title
    =========================== -->
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
      services
    =========================== -->
    <section class="pt-80 pb-80 services-layout2 ">
        <div class="container">

            <div class="row">
                <!-- service item #1 -->
                @foreach($posts as $value)
                    <div class="col-lg-4 col-md-3 col-sm-2">
                        <div class="service-item">
                            <div class="service__img">
                                <a href="{{url(geturl($value->uri))}}">
                                    <img src="{{asset('uploads/original/' . $value->page_thumbnail)}}" alt="img"
                                         loading="lazy">
                                </a>
                            </div><!-- /.service__img -->
                            <div class="service__content">
                                <h4 class="service__title"><a
                                        href="{{url(geturl($value->uri))}}">{{$value->post_title}}</a></h4>
                                <p class="service__desc">
                                    {!! $value->post_excerpt !!}
                                </p>
                                <a href="{{url(geturl($value->uri))}}"
                                   class="btn btn__secondary btn__outlined btn__rounded">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.service__content -->
                        </div>
                    </div>
            @endforeach
            <!-- /.service-item -->
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section><!-- /.services -->
@stop
