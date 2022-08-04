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

</head>

<style>
    .nav-scroll {
        background-color: white !important;
        border: 2px solid lightgray;
    }
    .navbar .navbar-nav .nav-link {
        color: black !important;
    }
</style>

<body>



    <!-- ==================== Start Navbar ==================== -->

    <?php include("navLight.php")?>

    <!-- ==================== End Navbar ==================== -->


    <!-- ==================== Start header ==================== -->

    <header class="pages-header circle-bg valign position-re" style="padding: 120px 0 0 !important; overflow: hidden;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11">
                    <div class="capt">
                        <div class="text-center">
                            <h1 class="mb-10 fw-700" id="pageTitle">How may <br> we help?</h1>
                            <p>Let’s talk about our future collaboration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-color">
            <div class="gradient-circle"></div>
            <div class="gradient-circle two"></div>
        </div>

        <div class="line bottom right"></div>
    </header>

    <!-- ==================== End header ==================== -->


    <!-- ==================== Start main-content ==================== -->

    <div class="main-content">

        <!-- ==================== Start Contact ==================== -->

        <section class="contact section-padding" style=" background-color: #1b1b1b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form md-mb50">

                            <h4 class="fw-700 color-font mb-50" style="font-size: 1.7em;">Get In Touch.</h4>

                            <form id="contact-form" method="post" action="contact.php">

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                            required="required">
                                    </div>

                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required="required">
                                    </div>

                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                            required="required"></textarea>
                                    </div>

                                    <button type="submit" class="butn bord curve mt-30"><span>Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="cont-info">
                            <h4 class="fw-700 color-font mb-50" style="font-size: 1.7em;">Contact Info.</h4>
                            <h3 class="wow" data-splitting style="color: white">Let's Talk.
                            </h3>
                            <div class="item mb-40">
                                <!-- <h5><a href="#0">Email@example.com</a></h5> -->
                                <h5>+355 4 631 5784</h5>
                            </div>
                            <h3 class="wow" data-splitting style="color: white">Visit Us.
                            </h3>
                            <div class="item">
                                <h6><b style="font-weight: bold">Balkan Energy SHA</b>
                                    <br>Rr Ibrahim Rugova, Sky Tower, nr 10/2, Tirana, Albania
                                </h6>
                            </div>
                            <!--<div class="social mt-50">-->
                            <!--    <a href="#0" class="icon">-->
                            <!--        <i class="fab fa-facebook-f" style="color: white"></i>-->
                            <!--    </a>-->
                            <!--    <a href="#0" class="icon">-->
                            <!--        <i class="fab fa-twitter" style="color: white"></i>-->
                            <!--    </a>-->
                            <!--    <a href="#0" class="icon">-->
                            <!--        <i class="fab fa-instagram" style="color: white"></i>-->
                            <!--    </a>-->
                            <!--    <a href="#0" class="icon">-->
                            <!--        <i class="fab fa-linkedin" style="color: white"></i>-->
                            <!--    </a>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->


        <!-- ==================== Start Map ==================== -->

        <div class="map" id="ieatmaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d749.0998821917552!2d19.81719124311969!3d41.32192483707039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13503104863f5eed%3A0x69d90172930d670c!2sSky%20Hotel%20Tirana!5e0!3m2!1sen!2s!4v1659182279191!5m2!1sen!2s" width="100%" height="550" style="border:0;" allowfullscreen="0" loading="lazy"></iframe>
        </div>

        <!-- ==================== End Map ==================== -->


        <!-- ==================== Start Footer ==================== -->

        <?php include("footer.php")?>

        <!-- ==================== End Footer ==================== -->


    </div>

    <!-- ==================== End main-content ==================== -->






    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>


</body>

</html>