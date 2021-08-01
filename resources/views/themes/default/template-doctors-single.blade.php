@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')<!--section-->
<section class="page-title page-title-layout5 bg-primary">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading text-white">{{$data->post_title}}</h1>

            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->
<section class="pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar has-marign-right">
                    <div class="widget widget-member">
                        <div class="member mb-0">
                            <div class="member__img">
                                <img src="{{asset('uploads/original/' . $data->page_thumbnail)}}" alt="member img">
                            </div><!-- /.member-img -->
                            <div class="member__info">
                                <h5 class="member__name"><a href="#">{{$data->post_title}}</a></h5>
                                <p class="member__job">{{loop_category($data->post_category)->category}}</p>

                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                    <ul class="social-icons list-unstyled mb-0">
                                        <li><a href="{{$data->uid}}" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$data->associated_title}}" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{$data->post_tags}}" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                </div>
                            </div><!-- /.member-info -->
                        </div><!-- /.member -->
                    </div><!-- /.widget-member -->
                    <div class="widget widget-schedule">
                        <div class="widget-content">
                            <div class="widget__icon">
                                <i class="icon-charity2"></i>
                            </div>
                           {!! $data->post_excerpt !!}
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget-schedule -->



                </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="text-block mb-50">
                   {!! $data->post_content !!}
                </div><!-- /.text-block -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!--section end-->
@stop
