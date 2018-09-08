@extends('layout.master.web_master')

@section('title','Merlions Travels:Home')

@section('content')
    <style type="text/css">
        .home_show
        {
            display: block;
        }
    </style>
    <section class="banner_box">
        <div class="chef_animation" id="animated_imgbox">
            <img src="{{url('images/bannernew.png')}}"/>
        </div>
        <div class="banner_caption">
            <h1 class="travels-font">Merlion Travels </h1>
            <h3>Welcomes You in Singapura</h3>
        </div>
        <!-- <div class="img_searchbox">
             <input type="text" class="header_search" placeholder="Type Here...">
             <i class="search_txt">Search</i>
         </div>-->
        <!--<div class="banner_submit_btn">Submit Recipe</div>-->

    </section>
    <div class="banner-block">
        <div class="container content-block">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">

                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>

                        </ol>

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">

                            <!-- Quote 1 -->
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-12">


                                        <p class="service-text"> "SERVICE DELAY IS SERVICE DENY"</p>

                                        </p>

                                    </div>
                                </div>
                            </div>

                            <!-- Quote 2 -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="service-text">"SERVICE ALWAYS COME WITH ITS COST"</p>

                                    </div>
                                </div>
                            </div>


                            <!-- Quote 3 -->


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="tourists-block">
        <div class="tourists-place">

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-1">
                        <img src="images/2.png" class="img-responsive img-width">
                    </div>
                    <div class="col-md-1">
                        <img src="images/3.png" class="img-responsive img-width">
                    </div>
                    <div class="col-md-1">
                        <img src="images/pic3.jpg" class="img-responsive img-width">
                    </div>
                    <div class="col-md-1">
                        <img src="images/4.png" class="img-responsive img-width">
                    </div>
                    <div class="col-md-1">
                        <img src="images/6.png" class="img-responsive img-width">
                    </div>
                    <div class="col-md-1">
                        <img src="images/7.png" class="img-responsive img-width">
                    </div>
                    <div class="col-md-1">
                        <img src="images/8.png" class="img-responsive img-width">
                    </div>
                    <div class="col-md-1">
                        <img src="images/9.png" class="img-responsive img-width">
                    </div>
                    <div class="col-md-1">
                        <img src="images/10.png" class="img-responsive img-width">
                    </div>
                    <div class="col-md-1">
                        <img src="images/11.png" class="img-responsive">
                    </div>
                    <div class="col-md-1">
                        <img src="images/12.png" class="img-responsive">
                    </div>

                    <div class="col-md-1">
                        <img src="images/13.png" class="img-responsive">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <section class="footer-block">
        <div class="footer-top">
            <div class="container mt-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <div class="contact-info">
                                <p class="mt-20">Call Us at</p>
                                <div class="glyph-look"><i
                                            class="fa fa-mobile"></i>&nbsp;&nbsp;<span>(+91) 9424389077<br><br><span><i
                                                    class="fa fa-mobile"></i>&nbsp;&nbsp;&nbsp;</span>(+65)82817581</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <p class="mt-20">Mail Us at</p>
                                <div class="glyph-look"><i class="fa fa-envelope"></i>&nbsp;<span><a href="#"
                                                                                                     class="footer-mailadd"> india1@merliontravels.in</a></span></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-info">
                                <p class="mt-20"></p>
                                <div class="glyph-look">
                                    <p><b>India Address</b></p>
                                    <i class="glyphicon glyphicon-map-marker"></i><span> Merlion Travels
                                Raaj chamber, 5 floor, new nagardas road, Andheri East, Mumbai-53, Maharashtra<br><br><p><b>Singapore Address</b></p>Minora Cenrter, 202 Serangoon Raod Singapore 218069</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <p class="mt-20">Follow us</p>
                                <ul class="social-nav">

                                    <li><a href="#" target="_blank" title="Facebook" rel="nofollow" class="facebook"><i
                                                    class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank" title="Google plus" rel="nofollow" class="google"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" target="_blank" title="Linkedin" rel="nofollow" class="linkedin"><i
                                                    class="fa fa-linkedin"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
