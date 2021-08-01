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

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid">
        <div class="container">
            <div class="row">
                <!-- Post Item #1 -->
                @foreach($posts as $val)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="post-item">
                            <div class="post__img">
                                <a href="{{url(geturl($val->uri))}}">
                                    <img src="{{asset('uploads/original/' . $val->page_thumbnail)}}" alt="post image"
                                         loading="lazy">
                                </a>
                            </div><!-- /.post__img -->
                            <div class="post__body">
                                <div class="post__meta-cat">
                                    <a href="{{route('category.navigation',loop_category($val->post_category)->uri)}}">{{loop_category($val->post_category)->category}}</a>
                                </div><!-- /.blog-meta-cat -->
                                <div class="post__meta d-flex">
                                <span
                                    class="post__meta-date">{{$val->updated_at->format('M')}} {{$val->updated_at->format('d')}}
                                , {{$val->updated_at->format('Y')}}</span>
                                </div>
                                <h4 class="post__title"><a href="{{url(geturl($val->uri))}}">
                                        {{$val->post_title}}
                                    </a></h4>


                                <a href="{{url(geturl($val->uri))}}"
                                   class="btn btn__secondary btn__link btn__rounded">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div><!-- /.post__body -->
                        </div><!-- /.post-item -->
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row -->
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
    </section><!-- /.blog Grid -->
@stop
