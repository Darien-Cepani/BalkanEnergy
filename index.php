<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Fuel Energy Transportation" />
    <meta name="description" content="Sample Text" />
    <meta name="author" content="impuls.al" />

    <!-- Title  -->
    <link rel="icon" href="img/icon.png" type="image/png">
    <title>Balkan Energy</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/marquee.css" type="text/css" />

</head>

<body>



    <!-- ==================== Start Navbar ==================== -->

    <?php include("navDark.php")?>

    <!-- ==================== End Navbar ==================== -->

    <!-- ==================== Start Slider ==================== -->
    <header class="slider slider-prlx fixed-slider text-center" >
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img" data-overlay-dark="1">
                        
                            <video autoplay muted loop id="myVideo">
                              <source src="video/background.mp4" type="video/mp4">
                              Your browser does not support HTML5 video.
                            </video>
                            
                            <video autoplay muted loop id="myVideoPortrait">
                              <source src="video/backgroundPortrait.mp4" type="video/mp4">
                              Your browser does not support HTML5 video.
                            </video>
                            
                            <div class="container" id="heroText">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center mt-30" style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                        <h1 class="heroSlogan" style="font-family: Unidaas, sans-serif; font-weight: bold; line-height: 0.9em">SUPPLYING THE FUTURE</h1>
                                        <p style="line-height: 1.4em">Integrated energy operator <br> with a <b>wide</b> network.</p>
                                        <a href="#about" class="butn bord curve" id="heroBtn" style="z-index: 100 !important; font-weight: bold;">Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="social-icon">-->
            <!--    <a href="#0"><i class="fab fa-facebook-f"></i></a>-->
            <!--    <a href="#0"><i class="fab fa-twitter"></i></a>-->
            <!--</div>-->
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->


    <div class="main-content">

        <!-- ==================== Start about ==================== -->

        <section class="about-us section-padding" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 valign md-mb50">
                        <div class="mb-50">
                            <h6 class="fw-100 text-u ls10 mb-10">Who we are</h6>
                            <h3 class="fw-600 text-u ls1 mb-30 color-font">Our Company.</h3>
                            <p>Every day, billions of companies and individuals use oil and gas to commute, work, heat homes and 
                            offices and perform many other activities. We buy and sell this oil and gas around the world. Our 
                            teams work to maximize the value of our products, secure supply to refineries and transport energy to 
                            consumer hubs, all while managing the related financial and logistical risks. We are active in many 
                            countries, especially in the Balkans, where we deal with all aspects of oil and gas trading, including 
                            physical trading, derivatives and shipping.</p>
                            <a href="about.php" class="butn bord curve mt-30">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 img" style="align-content: center; padding-top: 10%; max-width: 75%;">
                        <img src="img/whoweare1.jpg" alt="" style="border-radius: 20px">
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End about ==================== -->


        <!-- ==================== Start Mobile Services ==================== -->
        <section class="services bords section-padding pt-0 mobileServices" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h6 class="wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">What we do</h6>
                            <h3 class="wow color-font animated" style="visibility: visible; font-weight: bold">Our services.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                        <div class="item-box" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(img/fuel4.jpg); background-size: cover;">
                            <h2 style="color: white;">Oil and gas supply.</h2>
                            <!--<p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p>-->
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                        <div class="item-box" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(img/fuel5.jpg); background-size: cover;">
                            <h2 style="color: white;">Maritime Transport.</h2>
                            <!--<p>Tempore corrupti temporibus fuga earum asperiores fugit.</p>-->
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInLeft;">
                        <div class="item-box" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(img/fuel2.jpg); background-size: cover;">
                            <h2 style="color: white;">International Trading</h2>
                            <!--<p>Tempore corrupti temporibus fuga earum asperiores fugit.</p>-->
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeInLeft;">
                        <div class="item-box" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(img/fuel.jpg); background-size: cover;">
                            <h2 style="color: white;">OnShore Infrastructure</h2>
                            <!--<p>Tempore corrupti temporibus fuga earum asperiores fugit.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================== End Services ==================== -->



        <!-- ==================== Start works ==================== -->

        <section class="work-carousel metro position-re desktopServices" id="services" style="padding-bottom: 6em">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h6 class="wow fadeIn" data-wow-delay=".5s" style="font-weight: bold">What we do</h6>
                            <h3 class="wow color-font" style="font-weight: bold;">Our services.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="img/fuel4.jpg">
                                        </div>
                                        <div class="cont">
                                            <!--<h6 class="color-font"><a href="#0">art & illustration</a></h6>-->
                                            <h4>Oil and gas supply.</h4>
                                            <!--<h4><a href="project-details2.html">Innovation and Crafts.</a></h4>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="img/fuel5.jpg">
                                        </div>
                                        <div class="cont">
                                            <!--<h6 class="color-font"><a href="#0">art & illustration</a></h6>-->
                                            <h4>Maritime Transport.</h4>
                                            <!--<h4><a href="project-details2.html">Innovation and Crafts.</a></h4>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="img/fuel2.jpg">
                                        </div>
                                        <div class="cont">
                                            <!--<h6 class="color-font"><a href="#0">Oil Supply</a></h6>-->
                                            <h4>International Trading</h4>
                                            <!--<h4><a href="project-details2.html">Innovation and Crafts.</a></h4>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="img/fuel.jpg">
                                        </div>
                                        <div class="cont">
                                            <!--<h6 class="color-font"><a href="#0">Gas Supply</a></h6>-->
                                            <h4>OnShore Infrastructure</h4>
                                            <!--<h4><a href="project-details2.html">Innovation and Crafts.</a></h4>-->
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="swiper-button-next swiper-nav-ctrl simp-next cursor-pointer">
                                <span class="simple-btn right">Next</span>
                            </div>
                            <div class="swiper-button-prev swiper-nav-ctrl simp-prev cursor-pointer">
                                <span class="simple-btn">Prev</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End works ==================== -->



        <!-- ==================== Start Partners ==================== -->
        <section class="work-carousel metro position-re" style="padding-bottom: 6em">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h6 class="wow fadeIn" data-wow-delay=".5s" style="font-weight: bold"></h6>
                            <h3 class="wow color-font" style="font-weight: bold;">Our Partners</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="marquee">
                        <ul class="marquee-content line1">
                            <li><h4>Tripoli Co.</h4><p>Libya</p></li>
                            <li><h4>3B Trading DMCC</h4><p>United Arab Emirates</p></li>
                            <li><h4>S.E.T Select Energy GMBH</h4><p>Germany</p></li>
                            <li><h4>Bitbulk SRL</h4><p>Italy</p></li>
                            <li><h4>Gunvor SA</h4><p>Estonia</p></li>
                            <li><h4>Pinharras LTD</h4><p>Panama</p></li>
                            <li><h4>Vitol S.A</h4><p>Switzerland</p></li>
                            <li><h4>Proton Energy S.A</h4><p>Switzerland</p></li>
                            <li><h4>Raways Company for <br>Construction and Maintenance</h4><p>Libya</p></li>
                            <li><h4>Amalgamated Road <br>Construction SUPP</h4><p>Malta</p></li>
                        </ul>
                  </div>
                </div>
            </div>
        </section>
        <!-- ==================== End Partners ==================== -->



        <!-- ==================== Start Blog ==================== -->

        <section class="blog section-padding sub-bg pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h6 class="wow fadeIn" data-wow-delay=".5s" style="font-weight: bold">Understand</h6>
                            <h3 class="wow color-font" style="font-weight: bold;">Our values.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img redImg">
                                <img src="img/value1.jpg" alt="">
                            </div>
                            <div class="cont">
                                <div>
                                    <!--<div class="info">-->
                                    <!--    <a href="#0" class="date">-->
                                    <!--        <span><i>06</i> August</span>-->
                                    <!--    </a>-->
                                    <!--    <span>/</span>-->
                                    <!--    <a href="#0" class="tag">-->
                                    <!--        <span>WordPress</span>-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <h5>
                                        <a href="#0">CORPORATE SOCIAL RESPONSIBILITY.</a>
                                    </h5>
                                    <!--<div class="btn-more">-->
                                    <!--    <a href="values.html" class="simple-btn">Read More</a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img redImg">
                                <img src="img/value2.jpg" alt="">
                            </div>
                            <div class="cont">
                                <div>
                                    <!--<div class="info">-->
                                    <!--    <a href="#0" class="date">-->
                                    <!--        <span><i>06</i> August</span>-->
                                    <!--    </a>-->
                                    <!--    <span>/</span>-->
                                    <!--    <a href="#0" class="tag">-->
                                    <!--        <span>WordPress</span>-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <h5>
                                        <a href="#0">HEALTH, SAFETY & ENVIRONMENT.</a>
                                    </h5>
                                    <!--<div class="btn-more">-->
                                    <!--    <a href="values.html" class="simple-btn">Read More</a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                                <div class="img redImg">
                                    <img src="img/value3.jpg" alt="">
                                </div>
                            <div class="cont">
                                <div>
                                    <!--<div class="info">-->
                                    <!--    <a href="#0" class="date">-->
                                    <!--        <span><i>06</i> August</span>-->
                                    <!--    </a>-->
                                    <!--    <span>/</span>-->
                                    <!--    <a href="#0" class="tag">-->
                                    <!--        <span>WordPress</span>-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <h5>
                                        <a href="#0">CODE OF CONDUCT & ETHICS.</a>
                                    </h5>
                                    <!--<div class="btn-more">-->
                                    <!--    <a href="values.html" class="simple-btn">Read More</a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="values.php" class="butn bord curve mt-50">
                        <span>Read More</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ==================== End Blog ==================== -->



        <!-- ==================== Start call-to-action ==================== -->

        <section class="contact-sec position-re" data-scroll-index="7" style="padding: 0 0 120px 0 !important">
            <section class="call-action section-padding sub-bg bg-img" data-background="img/patrn.svg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="content sm-mb30">
                            <h6 class="wow" style="font-weight: bold;" data-splitting id="line1">Let’s Talk</h6>
                            <h2 class="wow" data-splitting id="line2">Need our<br><b class="back-color">help</b>?</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="form wow fadeInUp" data-wow-delay=".5s">
                            <form id="contact-form " method="post" action="contact.php">

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="row ">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="name" placeholder="Name"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input id="form_email" type="email" name="email" placeholder="Email"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input id="form_number" type="tel" name="number" placeholder="Phone Number"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea id="form_message" name="message" placeholder="Message"
                                                    rows="4" required="required"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-center">
                                                <a href="#0" class="butn bord curve mt-30">
                                                    <span>Get In Touch</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line bottom left"></div>
        </section>

        <!-- ==================== End call-to-action ==================== -->



        <!-- ==================== Start Footer ==================== -->

        <?php include("footer.php")?>

        <!-- ==================== End Footer ==================== -->
    </div>
    
    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script type="text/javascript" src="js/marquee.js"></script>

    <!-- plugins -->
    <script src="js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>

</body>

</html>