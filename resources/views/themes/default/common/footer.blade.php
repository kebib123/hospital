<!-- footer start -->
<footer class="uk-position-relative uk-border-light-top">

    <section class="uk-section bg-primary">
        <div class="uk-container">
            <!--  -->
            <div class="uk-margin-remove-bottom   uk-grid-small uk-margin-xlarge " uk-grid
                 uk-scrollspy="cls: uk-animation-slide-top-small; target:div,  a, li, img, p, h1;  delay: 50; repeat: false;">
                <!--  -->
                <div class="uk-width-auto@s uk-width-1-2  uk-width-expand@m">
                    <h1 class="uk-h4 text-white f-w-500 uk-margin-bottom-small">Hospital</h1>
                    <ul class="uk-list-varticle">
                        @foreach($hospital as $value)
                            <li><a href="{{url(geturl($value->uri))}}" class="text-white">{{$value->post_title}}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <!--  -->

                <!--  -->
                <div class="uk-width-1-2@s  uk-width-1-2  uk-width-expand@m">
                    <h1 class="uk-h4 text-white f-w-500 uk-margin-bottom-small">Media</h1>
                    <ul class="uk-list-varticle">
                        @foreach($media as $value)
                            <li><a href="{{url(geturl($value->uri))}}" class="text-white">{{$value->post_title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!--  -->

                <!--  -->
                <div class="uk-width-1-2@s  uk-width-1-2  uk-width-expand@m">
                    <h1 class="uk-h4 text-white f-w-500 uk-margin-bottom-small">Service</h1>
                    <ul class="uk-list-varticle">
                        @foreach($service as $value)
                            <li><a href="{{url(geturl($value->uri))}}" class="text-white">{{$value->post_title}}</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
                <!--  -->

                <div class="uk-width-1-3@s">
                    <div class="uk-footer-box bg-white uk-border-rounded uk-box-shadow-medium uk-padding-small">
                        <div class="uk-padding-small ">
                            <h1 class="uk-h4 text-primary f-w-500 uk-margin-bottom-small">Contact Us</h1>
                            <ul class="uk-list-varticle ">
                                <li class="uk-flex uk-flex-middle"><i
                                        class="fa fa-map-marker fa-lg uk-margin-small-right"></i> <a
                                        href="https://www.google.com/maps/place/Chhetrapati+Free+Clinic/@27.7106654,85.306266,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb18feaad6d97b:0x1836f3ec84e91853!8m2!3d27.7106607!4d85.3084547?hl=en"
                                        target="_blank" class="text-black">
                                        {{$setting->location1}}
                                    </a></li>
                                <li class="uk-flex uk-flex-middle"><i
                                        class="fa fa-phone fa-lg uk-margin-small-right"></i>
                                    <a href="tel:977-1- 4257911" class="text-black">{{$setting->phone}}</a>

                                </li>
                                <li class="uk-flex uk-flex-middle"><i
                                        class="fa fa-envelope fa-lg uk-margin-small-right"></i> <a
                                        href="mailto:{{$setting->email_primary}}"
                                        class="text-black">{{$setting->email_primary}}</a>
                                </li>
                            </ul>
                            <hr>
                            <div id="social" class="">

                                <a class="facebookBtn smGlobalBtn" href="{{$setting->facebook_link}}"></a>
                                <a class="instagramBtn smGlobalBtn" href="{{$setting->instagram_link}}"></a>
                                <a class="twitterBtn smGlobalBtn" href="{{$setting->twitter_link}}"></a>
                                <a class="youtubeBtn smGlobalBtn" href="{{$setting->youtube_link}}"></a>
                                <a class="linkedinBtn smGlobalBtn" href="{{$setting->linkedin_link}}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        </div>
    </section>

    <div class="uk-text-center text-black uk-section-xsmall uk-border-light-top bg-white"
         uk-scrollspy="cls: uk-animation-slide-top-small; target:div, h1, p, a;  delay: 50; repeat: false;">
        <div class="uk-container uk-text-center">
            <div class="uk-text-small">{{$setting->copyright_text}}</div>
        </div>
</footer>
<!-- footer end -->
<!-- video modal -->
<div id="video-modal" class="uk-flex-top">
    <button class="uk-modal-close uk-icon uk-close uk-position-top-right text-white uk-padding" type="button"
            uk-icon="icon: close; ratio: 2"></button>
    <div class="uk-modal-dialog uk-margin-auto-vertical">
    </div>
</div>
<!-- end video modal-->


<!-- required javascript  -->
<a href="#" id="BackToTop" uk-scroll="" uk-totop class="show">
</a>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=6098c944a99fbf00117440b0&product=sop'
        async='async'></script>
</body>
</html>
