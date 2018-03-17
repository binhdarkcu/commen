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
    <!-- Colors CSS -->
	<link href="css/all.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery Version 2.1.1 -->
    <script src="js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waterwheelCarousel.min.js"></script>

    <!-- Custom Theme JavaScript -->
	<script src="js/class.SiteMain.js"></script>
</head>

<body class="index">
    <?php include('header.php')?>
    <div class="homepage">
      <?php include('slider.php')?>
      <?php include('popup.php')?>
      <?php include('shopnow.php')?>
      <!-- Filter -->
      <section class="section-filter" id="filter">
          <h2>Memoirs</h2>
          <div class="container">
            <div class="row">
              <div class="section-filter__main">
                <div class="section-filter__main--nav">
                  <a href="#">All</a>
                  <a href="#">Trainning</a>
                  <a href="#">On tour</a>
                  <a href="#">Guest runing</a>
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
</body>
</html>
