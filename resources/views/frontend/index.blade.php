@extends('layouts.frontend')

@section('contenido_header')
    <link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="/vendor/circle-flip-slideshow/css/component.css">
@stop

@section('contenido_body')

    <div class="slider-container rev_slider_wrapper" style="height: 1000px;">
        <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"delay": 9000, "gridwidth": 1170, "sliderLayout": "fullscreen", "fullScreenOffset": "0"}'>
            <ul>
                <li data-transition="fade">
                    <img src="img/slides/slide-bg-full.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption"
                         data-x="center" data-hoffset="-150"
                         data-y="center" data-voffset="-95"
                         data-start="1000"
                         style="z-index: 5"
                         data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption top-label"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-95"
                         data-start="500"
                         style="z-index: 5"
                         data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>

                    <div class="tp-caption"
                         data-x="center" data-hoffset="150"
                         data-y="center" data-voffset="-95"
                         data-start="1000"
                         style="z-index: 5"
                         data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption main-label"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-45"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style="z-index: 5"
                         data-mask_in="x:0px;y:0px;">WEB DESIGN?</div>

                    <div class="tp-caption bottom-label"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="5"
                         data-start="2000"
                         style="z-index: 5"
                         data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>

                    <a class="tp-caption btn btn-lg btn-primary btn-slider-action"
                       data-hash
                       data-hash-offset="85"
                       href="#projects"
                       data-x="center" data-hoffset="0"
                       data-y="center" data-voffset="80"
                       data-start="2200"
                       data-whitespace="nowrap"
                       data-transform_in="y:[100%];s:500;"
                       data-transform_out="opacity:0;s:500;"
                       style="z-index: 5"
                       data-mask_in="x:0px;y:0px;">Get Started Now!</a>

                </li>
                <li data-transition="fade">
                    <img src="video/landing.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="rs-background-video-layer"
                         data-forcerewind="on"
                         data-volume="mute"
                         data-videowidth="100%"
                         data-videoheight="100%"
                         data-videomp4="video/landing.mp4"
                         data-videopreload="preload"
                         data-videoloop="none"
                         data-forceCover="1"
                         data-aspectratio="16:9"
                         data-autoplay="true"
                         data-autoplayonlyfirsttime="false"
                         data-nextslideatend="true"
                    ></div>

                    <div class="tp-caption featured-label"
                         data-x="center"
                         data-y="center" data-voffset="-45"
                         data-start="500"
                         style="z-index: 5"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;">WELCOME TO PORTO</div>

                    <div class="tp-caption bottom-label"
                         data-x="center"
                         data-y="center" data-voffset="5"
                         data-start="1000"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                         data-transform_out="opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-splitin="chars"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="font-size: 23px; line-height: 30px; z-index: 5"
                         data-elementdelay="0.05">The #1 Selling HTML Site Template on ThemeForest</div>

                    <div class="tp-dottedoverlay tp-opacity-overlay"></div>
                </li>
            </ul>
        </div>
    </div>

    <div class="home-intro" id="home-intro">
        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <p>
                        The fastest way to grow your business with the leader in <em>Technology</em>
                        <span>Check out our options and features included.</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="get-started">
                        <a href="#" class="btn btn-lg btn-primary">Get Started Now!</a>
                        <div class="learn-more">or <a href="/">learn more.</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">

        <div class="row center">
            <div class="col-md-12">
                <h1 class="mb-sm word-rotator-title">
                    Porto is
                    <strong class="inverted">
                                <span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
                                    <span class="word-rotate-items">
                                        <span>incredibly</span>
                                        <span>especially</span>
                                        <span>extremely</span>
                                    </span>
                                </span>
                    </strong>
                    beautiful and fully responsive.
                </h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
                </p>
            </div>
        </div>

    </div>

    <div class="home-concept">
        <div class="container">

            <div class="row center">
                <span class="sun"></span>
                <span class="cloud"></span>
                <div class="col-md-2 col-md-offset-1">
                    <div class="process-image appear-animation" data-appear-animation="bounceIn">
                        <img src="img/home-concept-item-1.png" alt="" />
                        <strong>Strategy</strong>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="300">
                        <img src="img/home-concept-item-2.png" alt="" />
                        <strong>Planning</strong>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="600">
                        <img src="img/home-concept-item-3.png" alt="" />
                        <strong>Build</strong>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="project-image">
                        <div id="fcSlideshow" class="fc-slideshow">
                            <ul class="fc-slides">
                                <li><a href="#"><img class="img-responsive" src="img/projects/project-home-1.jpg" alt="" /></a></li>
                                <li><a href="#"><img class="img-responsive" src="img/projects/project-home-2.jpg" alt="" /></a></li>
                                <li><a href="#"><img class="img-responsive" src="img/projects/project-home-3.jpg" alt="" /></a></li>
                            </ul>
                        </div>
                        <strong class="our-work">Our Work</strong>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">

        <div class="row">
            <hr class="tall">
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Latest <strong>Blog</strong> Posts</h2>

                <div class="owl-carousel owl-theme" data-plugin-options='{"responsive": {"0": {"items": 1}, "479": {"items": 1}, "768": {"items": 2}, "979": {"items": 3}, "1199": {"items": 3}}, "items": 3, "margin": 10, "loop": false, "nav": false, "dots": true}'>
                    <div>
                        <div class="recent-posts">
                            <article class="post">
                                <div class="date">
                                    <span class="day">15</span>
                                    <span class="month">Jan</span>
                                </div>
                                <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. Lorem ipsum amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="recent-posts">
                            <article class="post">
                                <div class="date">
                                    <span class="day">15</span>
                                    <span class="month">Jan</span>
                                </div>
                                <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. Lorem ipsum amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="recent-posts">
                            <article class="post">
                                <div class="date">
                                    <span class="day">15</span>
                                    <span class="month">Jan</span>
                                </div>
                                <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. Lorem ipsum amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="recent-posts">
                            <article class="post">
                                <div class="date">
                                    <span class="day">15</span>
                                    <span class="month">Jan</span>
                                </div>
                                <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. Lorem ipsum amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="recent-posts">
                            <article class="post">
                                <div class="date">
                                    <span class="day">15</span>
                                    <span class="month">Jan</span>
                                </div>
                                <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. Lorem ipsum amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="recent-posts">
                            <article class="post">
                                <div class="date">
                                    <span class="day">15</span>
                                    <span class="month">Jan</span>
                                </div>
                                <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. Lorem ipsum amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="recent-posts">
                            <article class="post">
                                <div class="date">
                                    <span class="day">15</span>
                                    <span class="month">Jan</span>
                                </div>
                                <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. Lorem ipsum amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop

@section('contenido_footer')
    <script src="/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
    <script src="/js/views/view.home.js"></script>
@stop