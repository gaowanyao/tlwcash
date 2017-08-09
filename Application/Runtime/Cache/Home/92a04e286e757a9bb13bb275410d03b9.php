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

            <!--<h4 class="small-text">-->
                <!--&lt;!&ndash;want to know&ndash;&gt;-->
                <!--想知道-->
            <!--</h4>-->
            <h2 class="page-name">
                常见问题解答
                <!--Frequently Asked Questions-->
            </h2>

            <!--Bread Crumb-->
            <ul class="bread-crumb clearfix">

                <li><a href="#"></a></li>
                <!--<li><a href="#">Home</a></li>-->
                <!--<li class="active">FAQs</li>-->
            </ul>

        </div>
    </section>


    <!--FAQs Section-->
    <section class="faqs-section">
        <div class="auto-container">

            <!--Accordion Box-->
            <ul class="accordion-box">

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn active"><div class="icon-outer"><span class="icon fa icon-up fa-angle-up"></span> <span class="icon fa icon-down fa-angle-down"></span></div>Q1：政策风险</div>
                    <div class="acc-content current">
                        <div class="content">
                            <p>A：国家宏观政策以及市场法律法规、相关监管规定发生变化，可以影响产品的运营、清算等进行。</p>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon fa icon-up fa-angle-up"></span> <span class="icon fa icon-down fa-angle-down"></span></div>Q2：信用风险</div>
                    <div class="acc-content">
                        <div class="content">
                            <p>A：发行人可能出现违约情形或者交易对手方未能按约履行的情形。</p>
                            <!--<p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>-->
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon fa icon-up fa-angle-up"></span> <span class="icon fa icon-down fa-angle-down"></span></div>Q3：市场风险</div>
                    <div class="acc-content">
                        <div class="content">
                            <p>A：金融产品的基础资产价值受未来市场的不确定影响，产生的收益波动。</p>
                            <!--<p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>-->
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon fa icon-up fa-angle-up"></span> <span class="icon fa icon-down fa-angle-down"></span></div>Q4：不可抗力及意外事件</div>
                    <div class="acc-content">
                        <div class="content">
                            <p>A：包括但不限于自然灾害、金融市场危机、战争或国家政策变化等。</p>
                            <!--<p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>-->
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon fa icon-up fa-angle-up"></span> <span class="icon fa icon-down fa-angle-down"></span></div>Q5：合规风险</div>
                    <div class="acc-content">
                        <div class="content">
                            <p>A：金融产品的管理人的管理运作不符合法律法规和合同规定，可能造成的风险。</p>
                            <!--<p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>-->
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon fa icon-up fa-angle-up"></span> <span class="icon fa icon-down fa-angle-down"></span></div>Q6：管理风险</div>
                    <div class="acc-content">
                        <div class="content">
                            <p>A：管理人和发行人受经验、技能、判断力、执行力等方面的限制，可能对产品的运作及管理造成一定影响。</p>
                            <!--<p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>-->
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon fa icon-up fa-angle-up"></span> <span class="icon fa icon-down fa-angle-down"></span></div>Q7：其他数字货币和区块链技术问题</div>
                    <div class="acc-content">
                        <div class="content">
                            <p>A：相对于比特币/莱特币这些去中心化的数字货币在市值还小的情况下无法兼顾流动性良好和币值稳定两个目标。Tcash是中心化发行，一定程度上应用区块链技术中的特性去中心化运营、来相对稳定币值、以流通为目的数字货币，即能解决法币流通中的流动性问题，又能解决比特币、莱特币流通中价值波动的问题。</p>
                        </div>
                    </div>
                </li>

            </ul><!--End Accordion Box-->

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