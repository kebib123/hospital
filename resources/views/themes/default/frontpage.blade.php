@extends('themes.default.common.master')

@section('content')
    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
        <div class="slick-carousel m-slides-0"
             data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>

            <div class="slide-item align-v-h  bg-overlay">
                <div class="bg-img"><img src="{{asset('uploads/banners/'.$banner->first()->picture)}}" alt="slide img">
                </div>
                <div class="container">

                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide__content">
                                <span
                                    class="slide__subtitle text-white">{{$banner->first()->title}}</span>
                                <h2 class="slide__title text-white">{{$banner->first()->caption}} </h2>
                                <p class="slide__desc text-white">{{$banner->first()->content}}</p>
                                <div class="d-flex flex-wrap align-items-center">
                                    <a href="{{ url('page/' . posttype_url($about->uri)) }}"
                                       class="btn btn__white btn__rounded mr-30">
                                        <span>More About Us</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                    <!--     <a class="video__btn video__btn-white popup-video"
                                          href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                          <div class="video__player">
                                            <i class="fa fa-play"></i>
                                          </div>
                                          <span class="video__btn-title color-secondary">Watch Our Video!</span>
                                        </a> -->
                                </div>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->


        </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ======================
    Features Layout 3
    ========================= -->
    <section class="features-layout3 py-0">
        <div class="container">
            <div class="row row-no-gutter feature-wrapper">
                <!-- Feature item #1 -->
                @foreach($whyus as $row)
                    <div class="col-sm-12 col-md-3">
                        <div class="feature-item">
                            <div class="feature__content">
                                <div class="feature__icon">
                                    <i class="icon-{{$row->icon}}"></i>
                                </div>
                                <h4 class="feature__title">{{$row->title}}</h4>
                            </div><!-- /.feature__content -->
                        </div><!-- /.feature-item -->
                    </div><!-- /.col-md-4 -->
                @endforeach

            </div><!-- /.row -->
        </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.Features Layout 3 -->
    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1 pb-3">
        <div class="container">
            <div class="row">

            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout2">
                        <h3 class="heading__title mb-40">
                            Blood And Multispeciality Hospital And Research Center Private Hospital
                        </h3>
                    </div><!-- /heading -->
                    <div class="about__Text">
                        <p class="mb-30">
                            {!! $about->content !!}
                        </p>
                        <div class="d-flex align-items-center mb-30">
                            <a href="{{ url('page/' . posttype_url($about->uri)) }}"
                               class="btn btn__primary btn__outlined btn__rounded mr-30">
                                Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="video-banner">
                        @if($about->uid)
                            <img src="https://img.youtube.com/vi/{{$about->uid}}/maxresdefault.jpg">
                            <a class="video__btn video__btn-white popup-video"
                               href="https://www.youtube.com/watch?{{$about->uid}}">
                                <div class="video__player">
                                    <i class="fa fa-play"></i>
                                </div>
                            </a>
                        @else
                            <img src="{{asset('uploads/original/' . $about->banner)}}" alt="about">
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-layout2 services-carousel bg-primary pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout1 heading-light mb-60">
                        <h3 class="heading__title">{{$service_uri->post_type}}</h3>
                        <p class="heading__desc">{{$service_uri->caption}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="carousel-container">
                        <div class="slick-carousel carousel-arrows-light carousel-dots-light"
                             data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "autoplay": true, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                            <!-- service item #1 -->
                            @foreach($service as $value)
                                <div class="service-item">
                                    <div class="service__img">
                                        <a href="{{url(geturl($value->uri))}}">
                                            <img src="{{asset('uploads/medium/' . $value->page_thumbnail)}}" alt="img"
                                                 loading="lazy">
                                        </a>
                                    </div>
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
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-end mt--20">
                    <a href="{{ url('page/' . posttype_url($service_uri->uri)) }}" class="btn btn__white btn__link">
                        <span>All Services</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-grid pb-50 pt-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h3 class="heading__title">News & Media</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Post Item #1 -->
                @foreach($media as $value)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="post-item">
                            <div class="post__img">
                                <a href="">
                                    <img src="{{asset('uploads/medium/' . $value->page_thumbnail)}}" alt="post image"
                                         loading="lazy">
                                </a>
                            </div><!-- /.post__img -->
                            <div class="post__body">
                                <div class="post__meta-cat">
                                    <a href="{{route('category.navigation',loop_category($value->post_category)->uri)}}">{{loop_category($value->post_category)->category}}</a>
                                </div><!-- /.blog-meta-cat -->
                                <div class="post__meta d-flex">
                                <span
                                    class="post__meta-date">{{$value->updated_at->format('M')}} {{$value->updated_at->format('d')}}
                                , {{$value->updated_at->format('Y')}}</span>
                                </div>
                                <h4 class="post__title"><a href="{{url(geturl($value->uri))}}">
                                        {{$value->post_title}}
                                    </a></h4>


                                <a href="{{url(geturl($value->uri))}}"
                                   class="btn btn__secondary btn__link btn__rounded">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.post__body -->
                        </div><!-- /.post-item -->
                    </div>
            @endforeach<!-- /.col-lg-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.blog Grid -->

@stop
