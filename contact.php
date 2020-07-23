<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WENO</title>
    <meta name="keywords" content="themeforest template" />
    <meta name="description" content="best responsive html template in themeforest">
    <meta name="author" content="codelayers">

    <!-- Mobile view -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/fav-icon.ico">
    <link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">

    <!-- Google fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">

    <!-- Template's stylesheets -->
    <link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">
    <link rel="stylesheet" href="css/theme-default.css" type="text/css">
    <link rel="stylesheet" href="js/loaders/stylesheets/screen.css">
    <link rel="stylesheet" href="css/corporate.css" type="text/css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css"
        media="screen" />
    <link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">
    <link rel="stylesheet" type="text/css" href="js/smart-forms/smart-forms.css">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="js/animations/css/sections.css">
    <link rel="stylesheet" type="text/css" href="css/menu-image.css">
    <!-- Template's stylesheets END -->

    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- Style Customizer's stylesheets -->

    <link rel="stylesheet/less" type="text/css" href="less/skin.less">
    <!-- Style Customizer's stylesheets END -->

    <!-- Skin stylesheet -->

</head>

<body>
    <div class="wrapper-boxed">
        <div class="site-wrapper">
            <?php require_once('template_parts/header.php')?>

            <div class="clearfix"></div>

            <!-- end section -->
            <div class="header-inner-tmargin">
                <section class="section-side-image clearfix">
                    <div class="img-holder col-md-12 col-sm-12 col-xs-12">
                        <div class="background-imgholder"
                            style="background:url(images/asrobki/sparks-1405851_1920.jpg);">
                            <img class="nodisplay-image" src="http://via.placeholder.com/1500x1000" alt="" /> </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
                                <div class="header-inner">
                                    <div class="overlay">
                                        <div class="text text-center">
                                            <h3 class="uppercase text-white less-mar-1 title">Kontakt</h3>
                                            <h6 class="uppercase text-white sub-title">Napisz Wiadomość</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class=" clearfix"></div>
                <!--end section-->
            </div>
            <div class="clearfix"></div>
            <!--end header inner-->
            <section class="sec-padding section-light">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8 col-sm-12 col-xs-12">

                            <h3 class="uppercase">Formularz kontaktowy</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent
                                mattis commodo augue. Aliquam ornare hendrerit consectetuer adipiscing elit. Suspendisse
                                et justo. augue.</p>
                            <br />
                            <br />

                            <div class="text-box white padding-4">
                                <div class="smartforms-modal-body">
                                    <div class="smart-wrap">
                                        <div class="smart-forms smart-container transparent wrap-full">
                                            <div class="form-body no-padd">
                                                <form method="post" action="php/smartprocess.php" id="smart-form">
                                                    <div class="section">
                                                        <label class="field prepend-icon">
                                                            <input type="text" name="sendername" id="sendername"
                                                                class="gui-input" placeholder="Imie i Nazwisko">
                                                            <span class="field-icon"><i class="fa fa-user"></i></span>
                                                        </label>
                                                    </div><!-- end section -->
                                                    <div class="section">
                                                        <label class="field prepend-icon">
                                                            <input type="email" name="emailaddress" id="emailaddress"
                                                                class="gui-input" placeholder="E-mail">
                                                            <span class="field-icon"><i
                                                                    class="fa fa-envelope"></i></span>
                                                        </label>
                                                    </div><!-- end section -->
                                                    <div class="section">
                                                        <label class="field prepend-icon">
                                                            <input type="text" name="telephone" id="telephone"
                                                                class="gui-input" placeholder="Numer telefonu">
                                                            <span class="field-icon"><i
                                                                    class="fa fa-phone-square"></i></span>
                                                        </label>
                                                    </div><!-- end section -->
                                                    <div class="section">
                                                        <label class="field prepend-icon">
                                                            <input type="text" name="sendersubject" id="sendersubject"
                                                                class="gui-input" placeholder="Temat">
                                                            <span class="field-icon"><i
                                                                    class="fa fa-lightbulb-o"></i></span>
                                                        </label>
                                                    </div><!-- end section -->
                                                    <div class="section">
                                                        <label class="field prepend-icon">
                                                            <textarea class="gui-textarea" id="sendermessage"
                                                                name="sendermessage" placeholder="Wiadomość"></textarea>
                                                            <span class="field-icon"><i
                                                                    class="fa fa-comments"></i></span>
                                                            <span class="input-hint"> <strong>Wskazówka:</strong>
                                                                Proszę, wpisz pomiędzy 80 a 300 znaków.</span>
                                                        </label>
                                                    </div><!-- end section -->
                                                    <div class="result"></div><!-- end .result  section -->
                                                    <!-- end .form-body section -->
                                                    <div class="form-footer text-left">
                                                        <button type="submit" data-btntext-sending="Sending..."
                                                            class="button btn-primary">Wyślij</button>
                                                        <button type="reset" class="button"> Anuluj </button>
                                                    </div><!-- end .form-footer section -->
                                                </form>
                                            </div><!-- end .form-body section -->
                                        </div><!-- end .smart-forms section -->
                                    </div><!-- end .smart-wrap section -->
                                </div>
                            </div><!-- end .smart-wrap section -->
                            <!-- end .smart-forms section -->
                        </div>
                        <!--end item-->
                        <div class="col-md-4 col-sm-12 col-xs-12 text-left">
                            <h4>Address Info</h4>
                            <h6>WENO Sp. z o.o. Technika Mocowań Sp.k.</h6>
                            <p>ul. Opolska 19
                                47-208 Większyce
                                tel. +48 77 40 61 680; fax +48 77 40 61 690</p>
                            <br />
                            <p>E-mail: info@weno.net.pl</p>
                            <p>www.weno.net.pl</p>
                        </div>
                        <!--end item-->
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <!-- end section -->
            <div class="parallax vertical-align" data-parallax-bg-image="images/asrobki/spanner-3013129_1920.jpg"
                data-parallax-speed="0.9" data-parallax-direction="down">
                <div class="parallax-overlay bg-opacity-8">
                    <div class="container sec-tpadding-3 sec-bpadding-3">
                        <div class="row">
                            <div id="owl-demo11" class="owl-carousel owl-theme">
                                <div class="item">
                                    <ul class="clients-list grid-cols-5 hover-7 noborder">
                                        <li><a href="#"
                                                style="background-image:url(images/asrobki/stainless-steel-screws-4607197_1920.jpg)"></a>
                                        </li>
                                        <li><a href="#"
                                                style="background-image:url(images/asrobki/industry-798944_1920.jpg)"></a>
                                        </li>
                                        <li><a href="#"
                                                style="background-image:url(images/asrobki/the-screws-736747_1920.jpg)"></a>
                                        </li>
                                        <li><a href="#"
                                                style="background-image:url(images/asrobki/screws-2428946_1920.jpg)"></a>
                                        </li>
                                        <li><a href="#"
                                                style="background-image:url(images/asrobki/nuts-1298689_1920.jpg)"></a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end carousel item-->

                                <div class="item">
                                    <ul class="clients-list grid-cols-5 hover-7 noborder">
                                        <li><a href="#"
                                                style="background-image:url(images/asrobki/drill-933656_1920.jpg)"></a>
                                        </li>
                                        <li><a href="#"
                                                style="background-image:url(images/asrobki/screw-1924173_1920.jpg)"></a>
                                        </li>
                                        <li><a href="#"
                                                style="background-image:url(images/asrobki/motorcycle-2651286_1920.jpg)"></a>
                                        </li>
                                        <li><a href="#"
                                                style="background-image:url(images/asrobki/gears-1236578_1920.jpg)"></a>
                                        </li>
                                        <li><a href="#"
                                                style="background-image:url(images/asrobki/drill-bit-set-444485_1920.jpg)"></a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end carousel item-->
                            </div>
                            <!--end carousel-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- end section -->
            <?php require_once('template_parts/footer.php'); ?> >
        </div>
        <!--end site wrapper-->
    </div>
    <!--end wrapper boxed-->

    <!-- Scripts -->
    <script src="js/jquery/jquery.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script src="js/less/less.min.js" data-env="development"></script>

    <!-- Scripts END -->

    <!-- Template scripts -->
    <script src="js/megamenu/js/main.js"></script>
    <script src="js/owl-carousel/owl.carousel.js"></script>
    <script src="js/owl-carousel/custom.js"></script>
    <script src="js/owl-carousel/owl.carousel.js"></script>
    <script src="js/owl-carousel/custom.js"></script>
    <script src="js/parallax/jquery.parallax-1.1.3.js"></script>
    <script src="js/parallax/parallax-background.min.js"></script>
    <script src="js/smart-forms/smart-form.js"></script>
    <script src="js/smart-forms/additional-methods.min.js"></script>
    <script src="js/smart-forms/jquery.form.min.js"></script>
    <script src="js/smart-forms/jquery.validate.min.js"></script>
    <script src="js/animations/js/sections.js"></script>
    <script src="js/megamenu/js/menu-images.js"></script>
    <script>
        $(window).load(function () {
            setTimeout(function () {

                $('.loader-live').fadeOut();
            }, 1000);
        })
    </script>
    <script src="js/parallax/parallax-background.min.js"></script>

    <script>
        (function ($) {
            $('.parallax').parallaxBackground();
        })(jQuery);
    </script>
    <script src="js/functions/functions.js"></script>

</body>

</html>