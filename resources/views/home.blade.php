@extends('layout.index')

@section('content')
    <!--Slider-->
    <section id="slide-show">
        <div id="slider" class="sl-slider-wrapper">

            <!--Slider Items-->
            <div class="sl-slider">
                <!--Slider Item1-->
                <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <div class="container">
                            <img class="pull-right" src="images/sample/slider/img1.png" alt="" />
                            <h2>Creative Ideas</h2>
                            <h3 class="gap">Tincidunt condimentum eros</h3>
                            <a class="btn btn-large btn-transparent" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <!--/Slider Item1-->

                <!--Slider Item2-->
                <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner">
                        <div class="container">
                            <img class="pull-right" src="images/sample/slider/img2.png" alt="" />
                            <h2>Planning &amp; Analysis</h2>
                            <h3 class="gap">Aenean ultricies mi vitast</h3>
                            <a class="btn btn-large btn-transparent" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <!--Slider Item2-->

                <!--Slider Item3-->
                <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="container">
                            <img class="pull-right" src="images/sample/slider/img3.png" alt="" />
                            <h2>Unique Solutions</h2>
                            <h3 class="gap">Breatures who have been utterly</h3>
                            <a class="btn btn-large btn-transparent" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <!--Slider Item3-->

            </div>
            <!--/Slider Items-->

            <!--Slider Next Prev button-->
            <nav id="nav-arrows" class="nav-arrows">
                <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
                <span class="nav-arrow-next"><i class="icon-angle-right"></i></span>
            </nav>
            <!--/Slider Next Prev button-->

        </div>
        <!-- /slider-wrapper -->
    </section>
    <!--/Slider-->

    <section class="main-info">
        <div class="container">
            <div class="row-fluid">
                <div class="span9">
                    <h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</h4>
                    <p class="no-margin">Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet</p>
                </div>
                <div class="span3">
                    <a class="btn btn-success btn-large pull-right" href="http://shapebootstrap.net">Free Download Nova</a>
                </div>
            </div>
        </div>
    </section>

    <!--Services-->
    <section id="services">
        <div class="container">
            <div class="center gap">
                <h3>What We Offer</h3>
                <p class="lead">Look at some of the recent projects we have completed for our valuble clients</p>
            </div>

            <div class="row-fluid">
                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-globe icon-medium"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Web Design</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                    </div>
                </div>

                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-thumbs-up-alt icon-medium"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Graphic Design</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                    </div>
                </div>

                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-leaf icon-medium icon-rounded"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Email Marketing</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap"></div>

            <div class="row-fluid">
                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-shopping-cart icon-medium"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Ecommerce Solution</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                    </div>
                </div>

                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-globe icon-medium"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">SEO &amp; Solution</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                    </div>
                </div>

                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-globe icon-medium"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Bootstrap</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--/Services-->

    <section id="recent-works">
        <div class="container">
            <div class="center">
                <h3>Our Recent Works</h3>
                <p class="lead">Look at some of the recent projects we have completed for our valuble clients</p>
            </div>
            <div class="gap"></div>
            <ul class="gallery col-4">
                <!--Item 1-->
                <li>
                    <div class="preview">
                        <img alt=" " src="images/portfolio/thumb/item1.jpg">
                        <div class="overlay">
                        </div>
                        <div class="links">
                            <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                        </div>
                    </div>
                    <div class="desc">
                        <h5>Lorem ipsum dolor sit amet</h5>
                    </div>
                    <div id="modal-1" class="modal hide fade">
                        <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                        <div class="modal-body">
                            <img src="images/portfolio/full/item1.jpg" alt=" " width="100%" style="max-height:400px">
                        </div>
                    </div>
                </li>
                <!--/Item 1-->

                <!--Item 2-->
                <li>
                    <div class="preview">
                        <img alt=" " src="images/portfolio/thumb/item2.jpg">
                        <div class="overlay">
                        </div>
                        <div class="links">
                            <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                        </div>
                    </div>
                    <div class="desc">
                        <h5>Lorem ipsum dolor sit amet</h5>
                    </div>
                    <div id="modal-1" class="modal hide fade">
                        <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                        <div class="modal-body">
                            <img src="images/portfolio/full/item2.jpg" alt=" " width="100%" style="max-height:400px">
                        </div>
                    </div>
                </li>
                <!--/Item 2-->

                <!--Item 3-->
                <li>
                    <div class="preview">
                        <img alt=" " src="images/portfolio/thumb/item3.jpg">
                        <div class="overlay">
                        </div>
                        <div class="links">
                            <a data-toggle="modal" href="#modal-3"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                        </div>
                    </div>
                    <div class="desc">
                        <h5>Lorem ipsum dolor sit amet</h5>
                    </div>
                    <div id="modal-3" class="modal hide fade">
                        <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                        <div class="modal-body">
                            <img src="images/portfolio/full/item3.jpg" alt=" " width="100%" style="max-height:400px">
                        </div>
                    </div>
                </li>
                <!--/Item 3-->

                <!--Item 4-->
                <li>
                    <div class="preview">
                        <img alt=" " src="images/portfolio/thumb/item4.jpg">
                        <div class="overlay">
                        </div>
                        <div class="links">
                            <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                        </div>
                    </div>
                    <div class="desc">
                        <h5>Lorem ipsum dolor sit amet</h5>
                    </div>
                    <div id="modal-4" class="modal hide fade">
                        <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                        <div class="modal-body">
                            <img src="images/portfolio/full/item4.jpg" alt=" " width="100%" style="max-height:400px">
                        </div>
                    </div>
                </li>
                <!--/Item 4-->

            </ul>
        </div>

    </section>

    <section id="clients" class="main">
        <div class="container">
            <div class="row-fluid">
                <div class="span2">
                    <div class="clearfix">
                        <h4 class="pull-left">OUR PARTNERS</h4>
                        <div class="pull-right">
                            <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                        </div>
                    </div>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
                <div class="span10">
                    <div id="myCarousel" class="carousel slide clients">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client1.png"></a></li>
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client2.png"></a></li>
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client3.png"></a></li>
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client4.png"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client4.png"></a></li>
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client3.png"></a></li>
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client2.png"></a></li>
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client1.png"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client1.png"></a></li>
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client2.png"></a></li>
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client3.png"></a></li>
                                        <li class="span3"><a href="#"><img src="images/sample/clients/client4.png"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Carousel items -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection