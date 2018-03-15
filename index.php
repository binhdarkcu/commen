<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Commen</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">


    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet" >

    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" >
    <link rel="stylesheet" href="css/owl.theme.css" >
    <link rel="stylesheet" href="css/owl.transitions.css" >
    <link rel="stylesheet" href="css/feature-carousel.css" charset="utf-8" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/quickstyle.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css">



    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="css/color/light-green.css" title="light-green">
	<link href="css/all.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>


    <!-- Modernizer js -->
    <script src="js/modernizr.custom.js"></script>


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">
    <?php include('header.php')?>

    <div class="homepage">
      <?php include('./slider.php')?>

      <!-- <section class="carousel">
          <div class="carousel-container">
              <div id="carousel">
                <div class="carousel-feature">
                  <a href="#"><img class="carousel-image" alt="Image Caption" src="images/product1.jpg"></a>
                </div>
                <div class="carousel-feature">
                  <a href="#"><img class="carousel-image" alt="Image Caption" src="images/product1.jpg"></a>
                </div>
                <div class="carousel-feature">
                  <a href="#"><img class="carousel-image" alt="Image Caption" src="images/product1.jpg"></a>
                </div>
                <div class="carousel-feature">
                  <a href="#"><img class="carousel-image" alt="Image Caption" src="images/product1.jpg"></a>
                </div>
                <div class="carousel-feature">
                  <a href="#"><img class="carousel-image" alt="Image Caption" src="images/product1.jpg"></a>
                </div>
                <div class="carousel-feature">
                  <a href="#"><img class="carousel-image" alt="Image Caption" src="images/product1.jpg"></a>
                </div>
                <div class="carousel-feature">
                  <a href="#"><img class="carousel-image" alt="Image Caption" src="images/product1.jpg"></a>
                </div>
              </div>
      	</div>
      </section> -->
      <!-- Filter -->
       <?php include('popup.php')?>
      <section class="section-filter" id="filter">
          <h2>Memoirs</h2>
          <div class="container">
            <div class="row">
              <div class="section-filter__main">
                <div class="section-filter__main--nav">
                  <a href="#">all</a>
                  <a href="#">trainning</a>
                  <a href="#">on tour</a>
                  <a href="#">guest runing</a>
                </div>
                <div class="section-filter__main--content clearfix">

                  <!-- item -->
                  <div class="col-md-4">
                    <div class="filter-item">
                      <img src="images/filter-item.png" alt="">
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                      <a href="#">READ MORE</a>
                    </div>
                  </div>

                  <!-- item -->
                  <div class="col-md-4">
                    <div class="filter-item">
                      <img src="images/filter-item.png" alt="">
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                      <a href="#">READ MORE</a>
                    </div>
                  </div>

                  <!-- item -->
                  <div class="col-md-4">
                    <div class="filter-item">
                      <img src="images/filter-item.png" alt="">
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                      <a href="#">READ MORE</a>
                    </div>
                  </div>



                </div>
              </div>
            </div>
          </div>
          <a href="#" class="btn-style">see all</a>
      </section>
      <!-- End filter -->
    </div>


    <!-- Loader -->
    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>


    <?php include ('footer.php') ?>
    <!-- jQuery Version 2.1.1 -->
    <script src="js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/count-to.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/velocity.min.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->
    
    <!-- Custom Theme JavaScript -->
    <script src="js/script.js"></script>
	<script src="js/class.SiteMain.js"></script>
</body>

</html>
