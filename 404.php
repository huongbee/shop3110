<?php
if(!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  
<!-- Mirrored from swin-themes.com/html/fooday/page-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2017 09:24:15 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Bootstrap CSS-->
    <link href="public/source/assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="public/source/assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!-- IE 9-->
    <!-- Vendors-->
    <link rel="stylesheet" href="public/source/assets/vendors/flexslider/flexslider.min.css">
    <link rel="stylesheet" href="public/source/assets/vendors/swipebox/css/swipebox.min.css">
    <link rel="stylesheet" href="public/source/assets/vendors/slick/slick.min.css">
    <link rel="stylesheet" href="public/source/assets/vendors/slick/slick-theme.min.css">
    <link rel="stylesheet" href="public/source/assets/vendors/animate.min.css">
    <link rel="stylesheet" href="public/source/assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="public/source/assets/vendors/pageloading/css/component.min.css">
    <!-- Font-icon-->
    <link rel="stylesheet" href="public/source/assets/fonts/font-icon/style.css">
    <!-- Style-->
    <link rel="stylesheet" type="text/css" href="public/source/assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="public/source/assets/css/elements.css">
    <link rel="stylesheet" type="text/css" href="public/source/assets/css/extra.css">
    <link rel="stylesheet" type="text/css" href="public/source/assets/css/widget.css">
    <link id="colorpattern" rel="stylesheet" type="text/css" href="public/source/assets/css/color/colordefault.css">
    <link rel="stylesheet" type="text/css" href="public/source/assets/css/responsive.css">
    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <!-- Script Loading Page-->
    <script src="public/source/assets/vendors/html5shiv.js"></script>
    <script src="public/source/assets/vendors/respond.min.js"></script>
    <script src="public/source/assets/vendors/pageloading/js/snap.svg-min.js"></script>
    <script src="public/source/assets/vendors/pageloading/sidebartransition/js/modernizr.custom.js"></script>
  </head>
  <body>
    <div class="wrapper-content">
      <div class="page-container">
        <div class="page-404 section-full-screen">
          <div class="content-wrapper"><img src="public/source/assets/images/404/image-main.png" alt="fooday" class="img-main img-responsive">

            <?php if(isset($_SESSION['error'])):?>
                <div class="title"><?=$_SESSION['error']?></div>
            <?php else:?>
              <div class="title">OOOP... Không tìm thấy sản phẩm</div>
            <?php endif?>
            <div class="bt-wrapper"><a href="./" class="swin-btn center btn-transparent btn-right"> <span>Về trang chủ</span></a></div>
          </div>
        </div>
      </div>
    </div>
    <div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
      <div class="loader-wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60" preserveaspectratio="none">
          <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
        </svg>
        <div class="sk-circle">
          <div class="sk-circle1 sk-child"></div>
          <div class="sk-circle2 sk-child"></div>
          <div class="sk-circle3 sk-child"></div>
          <div class="sk-circle4 sk-child"></div>
          <div class="sk-circle5 sk-child"></div>
          <div class="sk-circle6 sk-child"></div>
          <div class="sk-circle7 sk-child"></div>
          <div class="sk-circle8 sk-child"></div>
          <div class="sk-circle9 sk-child"></div>
          <div class="sk-circle10 sk-child"></div>
          <div class="sk-circle11 sk-child"></div>
          <div class="sk-circle12 sk-child"></div>
        </div>
        <div class="sk-circle sk-circle-out">
          <div class="sk-circle1 sk-child"></div>
          <div class="sk-circle2 sk-child"></div>
          <div class="sk-circle3 sk-child"></div>
          <div class="sk-circle4 sk-child"></div>
          <div class="sk-circle5 sk-child"></div>
          <div class="sk-circle6 sk-child"></div>
          <div class="sk-circle7 sk-child"></div>
          <div class="sk-circle8 sk-child"></div>
          <div class="sk-circle9 sk-child"></div>
          <div class="sk-circle10 sk-child"></div>
          <div class="sk-circle11 sk-child"></div>
          <div class="sk-circle12 sk-child"></div>
        </div>
      </div>
    </div>
    <!-- jQuery-->
    <script src="public/source/assets/vendors/jquery-1.10.2.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script src="public/source/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <!-- Vendors-->
    <script src="public/source/assets/vendors/flexslider/jquery.flexslider-min.js"></script>
    <script src="public/source/assets/vendors/swipebox/js/jquery.swipebox.min.js"></script>
    <script src="public/source/assets/vendors/slick/slick.min.js"></script>
    <script src="public/source/assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="public/source/assets/vendors/jquery-countTo/jquery.countTo.min.js"></script>
    <script src="public/source/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="public/source/assets/vendors/parallax/parallax.min.js"></script>
    <script src="public/source/assets/vendors/gmaps/gmaps.min.js"></script>
    <script src="public/source/assets/vendors/audiojs/audio.min.js"></script>
    <script src="public/source/assets/vendors/vide/jquery.vide.min.js"></script>
    <script src="public/source/assets/vendors/pageloading/js/svgLoader.min.js"></script>
    <script src="public/source/assets/vendors/pageloading/js/classie.min.js"></script>
    <script src="public/source/assets/vendors/pageloading/sidebartransition/js/sidebarEffects.min.js"></script>
    <script src="public/source/assets/vendors/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="public/source/assets/vendors/wowjs/wow.min.js"></script>
    <script src="public/source/assets/vendors/skrollr.min.js"></script>
    <script src="public/source/assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="public/source/assets/vendors/jquery-cookie/js.cookie.js"></script>
    <!-- Own script-->
    <script src="public/source/assets/js/layout.js"></script>
    <script src="public/source/assets/js/elements.js"></script>
    <script src="public/source/assets/js/widget.js"></script>
  </body>

<!-- Mirrored from swin-themes.com/html/fooday/page-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2017 09:24:16 GMT -->
</html>