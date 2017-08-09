<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">


    <title>铜锣湾</title>
    <!-- Stylesheets -->
    <link href="/Public/resource/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/static/css/revolution-slider.css" rel="stylesheet">
    <link href="/Public/static/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/Public/static/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/Public/static/images/favicon.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="/Public/static/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="/Public/static/js/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="/Public/static/js/respond.js"></script><![endif]-->


</head>

<body>
<div class="page-wrapper">

    

<!-- Preloader -->
<div class="preloader"  style="z-index: 10000000;"></div>
<!--header-style-two-->
<!-- Main Header-->
<header class="main-header " style="z-index: 30;">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container clearfix">
            <!-- Top Left -->
            <div class="top-left">
                <ul class="clearfix">
                    <li><span class="icon fa flaticon-old-typical-phone"></span> <a href="#">+920-637-8294</a></li>
                    <li><span class="icon fa fa-envelope"></span> <a href="mailto:something@gmail.com">something@gmail.com</a></li>
                </ul>
            </div>

            <!-- Top Right -->
            <div class="top-right">
                <ul class="clearfix">
                    <!--<li><a href="#">Career</a></li>-->
                    <!--<li><a href="#">Privacy Policy</a></li>-->
                    <!--<li><a href="/Public/static/contact.html">Help &amp; Support</a></li>-->
                    <!--<li><a href="/Public/static/faq-1.html">FAQ</a></li>-->

                    <li><a <?php if($account == 'on'){ }else{ echo 'target="_blank"';} ?> href="index.php?a=<?php if($account == 'on'){ echo "account"; }else{ echo 'signin';} ?>"><?php if($account == 'on'){ echo "用户中心"; }else{ echo '登录';} ?></a></li>
                    <li><a href="#">|</a></li>
                    <li><a <?php if($account == 'on'){ }else{ echo 'target="_blank"';} ?> href="index.php?a=<?php if($account == 'on'){ echo "logout"; }else{ echo 'signup';} ?>"><?php if($account == 'on'){ echo "退出"; }else{ echo '注册';} ?></a></li>
                    <!--<li><a href="/Public/static/faq-1.html">FAQ</a></li>-->


                </ul>
            </div>

        </div>
    </div><!-- Header Top End -->

    <!--Header-Lower-->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer clearfix">
                <!--Logo -->
                <div class="logo-outer">
                    <div class="logo"><a href="index.html"><img src="/Public/img/logo.png" alt=""></a></div>

                    <!--<div class="logo"><a href="index.html"><img src="/Public/static/images/logo.png" alt=""></a></div>-->
                </div>

                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>





                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current "><a href="index.php">首页</a>
                                <!--<ul>-->
                                    <!--<li><a href="/Public/static/index.html">Homepage One</a></li>-->
                                    <!--<li><a href="/Public/static/index-2.html">Homepage Two</a></li>-->
                                <!--</ul>-->
                            </li>
                            <li class="dropdown"><a href="#">我要理财</a>
                                <ul>
                                    <li><a href="about-us-1.html">ICO基金</a></li>
                                    <li><a href="about-us-2.html">指数基金</a></li>
                                    <li><a href="about-us-2.html">套利基金</a></li>
                                    <!--<li class="dropdown"><a href="#">Our Team</a>-->
                                        <!--<ul>-->
                                            <!--<li><a href="/Public/static/team-grid.html">Team Grid View</a></li>-->
                                            <!--<li><a href="/Public/static/team-single.html">Single Member</a></li>-->
                                        <!--</ul>-->
                                    <!--</li>-->
                                </ul>
                            </li>
                            <li class=""><a href="index.php?a=features">产品特色</a>
                                <!--<ul>-->
                                    <!--<li><a href="/Public/static/services.html">Services Style One</a></li>-->
                                    <!--<li><a href="/Public/static/services-2.html">Services Style Two</a></li>-->
                                    <!--<li><a href="/Public/static/single-service.html">Single Service</a></li>-->
                                <!--</ul>-->
                            </li>
                            <li class=""><a href="#">安全保障</a>
                                <!--<ul>-->
                                    <!--<li><a href="/Public/static/faq-1.html">FAQs Style One</a></li>-->
                                    <!--<li><a href="/Public/static/faq-2.html">FAQs Style Two</a></li>-->
                                    <!--<li><a href="/Public/static/error-page.html">404 Page</a></li>-->
                                <!--</ul>-->
                            </li>

                            <li class=""><a href="index.php?a=faq">问题解答</a>
                                <!--<ul>-->
                                    <!--<li><a href="/Public/static/blog.html">Blog Classic</a></li>-->
                                    <!--<li><a href="/Public/static/blog-three-column.html">Blog Three Column</a></li>-->
                                    <!--<li><a href="/Public/static/blog-single.html">Blog Single</a></li>-->
                                <!--</ul>-->
                            </li>

                            <li class=""><a href="index.php?a=about">关于我们</a>
                                <!--<ul>-->
                                <!--<li><a href="/Public/static/gallery-1.html">Gallery One</a></li>-->
                                <!--<li><a href="/Public/static/gallery-2.html">Gallery Two</a></li>-->
                                <!--<li><a href="/Public/static/gallery-single.html">Gallery Single</a></li>-->
                                <!--</ul>-->
                            </li>
                            <!--<li class="dropdown"><a href="#">Contact Us</a>-->
                                <!--<ul class="from-right">-->
                                    <!--<li><a href="/Public/static/contact.html">Contact Us One</a></li>-->
                                    <!--<li><a href="/Public/static/contact-2.html">Contact Us Two</a></li>-->
                                <!--</ul>-->
                            <!--</li>-->
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->

            </div>
        </div>
    </div>

</header>
<!--End Main Header -->



    <!--Page Title-->
    <section class="page-title">
        <div class="auto-container text-center">

            <!--<h4 class="small-text">SINCE 2004</h4>-->
            <h2 class="page-name">ABOUT US</h2>

            <!--Bread Crumb-->
            <!--<ul class="bread-crumb clearfix">-->
                <!--<li><a href="#">Home</a></li>-->
                <!--<li class="active">About Us</li>-->
            <!--</ul>-->

        </div>
    </section>


    <!--Tabs Section-->
    <section class="tabs-section default-section with-padding">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title text-center">
                <h3>We’re Incredible!</h3>
                <h2>Why Choose Us?</h2>
                <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span></div>
            </div>

            <div class="outer-container">
                <!--Tabs Box-->
                <div class="tabs-box">

                    <!--Tab Buttons-->
                    <div class="tab-buttons clearfix">
                        <a href="#tab-one" class="tab-btn active-btn">We Care Our Customers</a>
                        <a href="#tab-two" class="tab-btn">Best Supports Ever</a>
                        <a href="#tab-three" class="tab-btn">Very Quick Responses</a>
                        <a href="#tab-four" class="tab-btn">Chat With Us Anytime</a>
                    </div>

                    <!--Tabs Content-->
                    <div class="tab-content">

                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="tab-one">
                            <div class="row clearfix">
                                <!--Content Column-->
                                <div class="content-column col-lg-7 col-sm-7 col-xs-12">
                                    <h3>Sorto is A Real Beautiful Theme</h3>
                                    <div class="upper-content">
                                        <div class="text">
                                            <p>Classifieds are usually the first place you think of when you are getting ready to make a purchase. Whether you want to purchase a vehicle, bed, or pet, the classified section of your local newspaper can be one of the best resources available. With the emergence of the web however, many sites are being developed to host free classifieds.</p>
                                            <p>More and more people are using the web daily; making these classified sites some of the most popular sites around. Free classified ad sites are great for other things as well however.</p>
                                        </div>
                                    </div>
                                </div>

                                <!--Image Column-->
                                <div class="image-column col-lg-5 col-sm-5 col-xs-12">
                                    <figure class="image-box"><img src="/Public/static/images/resource/featured-image-1.jpg" alt=""><div class="over-layer"><span class="left-layer"></span><span class="right-layer"></span></div></figure>
                                </div>

                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-two">
                            <div class="row clearfix">
                                <!--Content Column-->
                                <div class="content-column col-lg-7 col-sm-7 col-xs-12">
                                    <h3>Experience the Best Support.</h3>
                                    <div class="upper-content">
                                        <div class="text">
                                            <p>Classifieds are usually the first place you think of when you are getting ready to make a purchase. Whether you want to purchase a vehicle, bed, or pet, the classified section of your local newspaper can be one of the best resources available. With the emergence of the web however, many sites are being developed to host free classifieds.</p>
                                            <p>More and more people are using the web daily; making these classified sites some of the most popular sites around. Free classified ad sites are great for other things as well however.</p>
                                        </div>
                                    </div>
                                </div>

                                <!--Image Column-->
                                <div class="image-column col-lg-5 col-sm-5 col-xs-12">
                                    <figure class="image-box"><img src="/Public/static/images/resource/featured-image-1.jpg" alt=""><div class="over-layer"><span class="left-layer"></span><span class="right-layer"></span></div></figure>
                                </div>

                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-three">
                            <div class="row clearfix">
                                <!--Content Column-->
                                <div class="content-column col-lg-7 col-sm-7 col-xs-12">
                                    <h3>Advertising Laying Your Cards On The Table.</h3>
                                    <div class="upper-content">
                                        <div class="text">
                                            <p>Classifieds are usually the first place you think of when you are getting ready to make a purchase. Whether you want to purchase a vehicle, bed, or pet, the classified section of your local newspaper can be one of the best resources available. With the emergence of the web however, many sites are being developed to host free classifieds.</p>
                                            <p>More and more people are using the web daily; making these classified sites some of the most popular sites around. Free classified ad sites are great for other things as well however.</p>
                                        </div>
                                    </div>
                                </div>

                                <!--Image Column-->
                                <div class="image-column col-lg-5 col-sm-5 col-xs-12">
                                    <figure class="image-box"><img src="/Public/static/images/resource/featured-image-1.jpg" alt=""><div class="over-layer"><span class="left-layer"></span><span class="right-layer"></span></div></figure>
                                </div>

                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-four">
                            <div class="row clearfix">
                                <!--Content Column-->
                                <div class="content-column col-lg-7 col-sm-7 col-xs-12">
                                    <h3>24/7 Support</h3>
                                    <div class="upper-content">
                                        <div class="text">
                                            <p>Classifieds are usually the first place you think of when you are getting ready to make a purchase. Whether you want to purchase a vehicle, bed, or pet, the classified section of your local newspaper can be one of the best resources available. With the emergence of the web however, many sites are being developed to host free classifieds.</p>
                                            <p>More and more people are using the web daily; making these classified sites some of the most popular sites around. Free classified ad sites are great for other things as well however.</p>
                                        </div>
                                    </div>
                                </div>

                                <!--Image Column-->
                                <div class="image-column col-lg-5 col-sm-5 col-xs-12">
                                    <figure class="image-box"><img src="/Public/static/images/resource/featured-image-1.jpg" alt=""><div class="over-layer"><span class="left-layer"></span><span class="right-layer"></span></div></figure>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--Features Section-->
    <section class="features-section style-two">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title text-center">
                <h3>Here Are What We Offer</h3>
                <h2>Check Out Theme Features</h2>
                <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span></div>
            </div>

            <div class="row clearfix">

                <!--Default Icon Column-->
                <div class="column default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box"><span class="flaticon-computer-screen"></span></div>
                        <h3>Responsive Design</h3>
                        <div class="text">Postcards have been consistently one of the more popular collectibles.</div>
                    </div>
                </div>

                <!--Default Icon Column-->
                <div class="column default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box"><span class="flaticon-clipboard-2"></span></div>
                        <h3>Awesome Checklist</h3>
                        <div class="text">Postcards have been consistently one of the more popular collectibles.</div>
                    </div>
                </div>

                <!--Default Icon Column-->
                <div class="column default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box"><span class="flaticon-interface-5"></span></div>
                        <h3>Live Chat Support</h3>
                        <div class="text">Postcards have been consistently one of the more popular collectibles.</div>
                    </div>
                </div>

                <!--Default Icon Column-->
                <div class="column default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box"><span class="flaticon-sharing-big-symbol"></span></div>
                        <h3>Popular Across The World</h3>
                        <div class="text">Postcards have been consistently one of the more popular collectibles.</div>
                    </div>
                </div>

                <!--Default Icon Column-->
                <div class="column default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box"><span class="flaticon-tool"></span></div>
                        <h3>Lifetime Customer Support</h3>
                        <div class="text">Postcards have been consistently one of the more popular collectibles.</div>
                    </div>
                </div>

                <!--Default Icon Column-->
                <div class="column default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box"><span class="flaticon-ribbon"></span></div>
                        <h3>Award Winning Theme</h3>
                        <div class="text">Postcards have been consistently one of the more popular collectibles.</div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Team Section-->
    <section class="team-section bg-lightgrey">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title text-center">
                <h3>Agency Rocks!</h3>
                <h2>Company Team Members</h2>
                <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span></div>
            </div>

            <div class="row clearfix">

                <!--Team Member-->
                <div class="column team-member col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="mailto:mail@mail.com"><img src="/Public/static/images/resource/team-image-1.jpg" alt=""></a></figure>
                        <div class="content-box">
                            <h3>Tillie Mendoza</h3>
                            <div class="designation">Marketing Advisor</div>
                            <div class="text">The buying of large-screen TVs has absolutely skyrocketed lately. It seems that everyone wants one – and with good reason.</div>
                        </div>
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <!--Team Member-->
                <div class="column team-member col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="mailto:mail@mail.com"><img src="/Public/static/images/resource/team-image-2.jpg" alt=""></a></figure>
                        <div class="content-box">
                            <h3>Lucinda Reese</h3>
                            <div class="designation">Senior UX Designer</div>
                            <div class="text">The buying of large-screen TVs has absolutely skyrocketed lately. It seems that everyone wants one – and with good reason.</div>
                        </div>
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <!--Team Member-->
                <div class="column team-member col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="mailto:mail@mail.com"><img src="/Public/static/images/resource/team-image-3.jpg" alt=""></a></figure>
                        <div class="content-box">
                            <h3>Christine Hale</h3>
                            <div class="designation">CEO &amp; Founder</div>
                            <div class="text">The buying of large-screen TVs has absolutely skyrocketed lately. It seems that everyone wants one – and with good reason.</div>
                        </div>
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <!--Team Member-->
                <div class="column team-member col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="mailto:mail@mail.com"><img src="/Public/static/images/resource/team-image-4.jpg" alt=""></a></figure>
                        <div class="content-box">
                            <h3>Tillie Mendoza</h3>
                            <div class="designation">Marketing Advisor</div>
                            <div class="text">The buying of large-screen TVs has absolutely skyrocketed lately. It seems that everyone wants one – and with good reason.</div>
                        </div>
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <!--Team Member-->
                <div class="column team-member col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="mailto:mail@mail.com"><img src="/Public/static/images/resource/team-image-5.jpg" alt=""></a></figure>
                        <div class="content-box">
                            <h3>Lucinda Reese</h3>
                            <div class="designation">Senior UX Designer</div>
                            <div class="text">The buying of large-screen TVs has absolutely skyrocketed lately. It seems that everyone wants one – and with good reason.</div>
                        </div>
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <!--Team Member-->
                <div class="column team-member col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="mailto:mail@mail.com"><img src="/Public/static/images/resource/team-image-6.jpg" alt=""></a></figure>
                        <div class="content-box">
                            <h3>Christine Hale</h3>
                            <div class="designation">CEO &amp; Founder</div>
                            <div class="text">The buying of large-screen TVs has absolutely skyrocketed lately. It seems that everyone wants one – and with good reason.</div>
                        </div>
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Testimonials Style Two / Light Theme-->
    <section class="testimonials-section testimonials-style-two light-theme">
        <div class="auto-container">

            <!--Section Title-->
            <div class="sec-title text-center">
                <h3>Our Clients Love Us</h3>
                <h2>Client’s Testimonials</h2>
                <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span></div>
            </div>

            <div class="slider-outer">

                <div class="row clearfix">

                    <!--Column / Slides-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 column slides-column pull-right">
                        <div class="inner-box">
                            <div class="testimonials-slider">

                                <div class="slide-item">
                                    <div class="slide-text">If you are looking for great ways to decorate your home or office, then you know as well as I do that you have nearly countless options. There are so many ways to decorate that it can easily be very overwhelming to find</div>
                                    <div class="slide-info">
                                        <h4 class="author-title">Ben Kingsley</h4>
                                        <div class="designation">The Actor, Holywood</div>
                                    </div>
                                </div>

                                <div class="slide-item">
                                    <div class="slide-text">If you are looking for great ways to decorate your home or office, then you know as well as I do that you have nearly countless options. There are so many ways to decorate that it can easily be very overwhelming to find</div>
                                    <div class="slide-info">
                                        <h4 class="author-title">Ben Kingsley</h4>
                                        <div class="designation">The Actor, Holywood</div>
                                    </div>
                                </div>

                                <div class="slide-item">
                                    <div class="slide-text">If you are looking for great ways to decorate your home or office, then you know as well as I do that you have nearly countless options. There are so many ways to decorate that it can easily be very overwhelming to find</div>
                                    <div class="slide-info">
                                        <h4 class="author-title">Ben Kingsley</h4>
                                        <div class="designation">The Actor, Holywood</div>
                                    </div>
                                </div>

                                <div class="slide-item">
                                    <div class="slide-text">If you are looking for great ways to decorate your home or office, then you know as well as I do that you have nearly countless options. There are so many ways to decorate that it can easily be very overwhelming to find</div>
                                    <div class="slide-info">
                                        <h4 class="author-title">Ben Kingsley</h4>
                                        <div class="designation">The Actor, Holywood</div>
                                    </div>
                                </div>

                                <div class="slide-item">
                                    <div class="slide-text">If you are looking for great ways to decorate your home or office, then you know as well as I do that you have nearly countless options. There are so many ways to decorate that it can easily be very overwhelming to find</div>
                                    <div class="slide-info">
                                        <h4 class="author-title">Ben Kingsley</h4>
                                        <div class="designation">The Actor, Holywood</div>
                                    </div>
                                </div>

                                <div class="slide-item">
                                    <div class="slide-text">If you are looking for great ways to decorate your home or office, then you know as well as I do that you have nearly countless options. There are so many ways to decorate that it can easily be very overwhelming to find</div>
                                    <div class="slide-info">
                                        <h4 class="author-title">Ben Kingsley</h4>
                                        <div class="designation">The Actor, Holywood</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--Column / Custom Pager-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 column pager-column pull-left">
                        <div class="inner-box">
                            <div class="testimonials-pager clearfix" id="testimonials-pager">
                                <a class="pager" data-slide-index="0" href=""><div class="image"><img src="/Public/static/images/resource/author-thumb-7.jpg" alt=""></div></a>
                                <a class="pager" data-slide-index="1" href=""><div class="image"><img src="/Public/static/images/resource/author-thumb-8.jpg" alt=""></div></a>
                                <a class="pager" data-slide-index="2" href=""><div class="image"><img src="/Public/static/images/resource/author-thumb-9.jpg" alt=""></div></a>
                                <a class="pager" data-slide-index="3" href=""><div class="image"><img src="/Public/static/images/resource/author-thumb-10.jpg" alt=""></div></a>
                                <a class="pager" data-slide-index="4" href=""><div class="image"><img src="/Public/static/images/resource/author-thumb-11.jpg" alt=""></div></a>
                                <a class="pager" data-slide-index="5" href=""><div class="image"><img src="/Public/static/images/resource/author-thumb-12.jpg" alt=""></div></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="auto-container">
            <!--Sponsors SLider-->
            <ul class="sponsors-slider">
                <li><a href="#"><img src="/Public/static/images/clients/1.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/2.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/3.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/4.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/5.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/6.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/1.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/2.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/3.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/4.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/5.png" alt=""></a></li>
                <li><a href="#"><img src="/Public/static/images/clients/6.png" alt=""></a></li>
            </ul>
        </div>
    </section>


    <!--Main Footer-->
    <footer class="main-footer">

    <!--Footer Upper-->
    <div class="footer-upper">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                    <div class="footer-widget about-widget">
                        <h2>About Sorto</h2>
                        <div class="text">
                            <p>These days are all share them with me oh baby a man is born he's a man of means then along come two they got nothing but their jeans the mate. </p>
                        </div>

                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                        </div>

                    </div>
                </div>

                <!--Footer Column-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                    <div class="footer-widget latest-news">
                        <h2>Latest News</h2>
                        <!--News Item-->
                        <div class="news-item">
                            <a href="#" class="news-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</a>
                            <div class="update-time">JANUARY 05, 2016</div>
                        </div>
                        <!--News Item-->
                        <div class="news-item">
                            <a href="#" class="news-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</a>
                            <div class="update-time">JANUARY 02, 2016</div>
                        </div>
                    </div>
                </div>

                <!--Footer Column-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column padd-left-60">
                    <div class="footer-widget links-widget">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>

                    </div>
                </div>

                <!--Footer Column-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                    <div class="footer-widget gallery-widget">
                        <h2>Flickr Widget</h2>
                        <div class="clearfix">
                            <figure class="image"><a href="/Public/static/images/resource/footer-gallery-1.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-1.jpg" alt=""></a></figure>
                            <figure class="image"><a href="/Public/static/images/resource/footer-gallery-2.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-2.jpg" alt=""></a></figure>
                            <figure class="image"><a href="/Public/static/images/resource/footer-gallery-3.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-3.jpg" alt=""></a></figure>
                            <figure class="image"><a href="/Public/static/images/resource/footer-gallery-4.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-4.jpg" alt=""></a></figure>
                            <figure class="image"><a href="/Public/static/images/resource/footer-gallery-5.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-5.jpg" alt=""></a></figure>
                            <figure class="image"><a href="/Public/static/images/resource/footer-gallery-6.jpg" class="lightbox-image" title="Caption Here"><img src="/Public/static/images/resource/footer-gallery-6.jpg" alt=""></a></figure>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="outer-box text-center">

                <!--Copyright-->
                <div class="copyright">&copy; Copyrights 2016 <a href="/Public/static/" target="_blank">ThemeCraze</a>. All rights reserved</div>

            </div>
        </div>
    </div>

</footer>



</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-transport-2"></span></div>



<script src="/Public/resource/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/Public/resource/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script src="/Public/static/js/revolution.min.js"></script>
<script src="/Public/static/js/jquery.fancybox.pack.js"></script>
<script src="/Public/static/js/mixitup.js"></script>
<script src="/Public/static/js/bxslider.js"></script>
<script src="/Public/static/js/owl.js"></script>
<script src="/Public/static/js/wow.js"></script>
<script src="/Public/static/js/script.js"></script>


</body>
</html>