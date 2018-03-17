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
    <div class="productDetail paddingBody ">
        <section id="description">
          <div class="container">
            <div class="row">
                <h2 class="detailTitle">COMMEN CLOTHING</h2>
                <ul class="categoryName">
                    <li><a href="#">All</a></li>
                    <li><a href="#">Tee</a></li>
                    <li><a href="#">Shorts</a></li>
                    <li><a href="#">Accesories</a></li>
                </ul>
                  <div class="col-md-8 ">
                    <div id="carousel-custom" class="carousel slide left_img" data-ride="carousel">
                          <div class="row">
                              <div class="col-md-3 noPaddingRight">
                                  <ol class="carousel-indicators mCustomScrollbar meartlab">
                                    <li data-target="#carousel-custom" data-slide-to="0" class="active">
                                        <img src="images/product-detail-thumb.jpg" alt="" />
                                    </li>
                                    <li data-target="#carousel-custom" data-slide-to="1">
                                        <img src="images/product-detail-thumb.jpg" alt="" />
                                    </li>
                                    <li data-target="#carousel-custom" data-slide-to="2">
                                        <img src="images/product-detail-thumb.jpg" alt="" />
                                    </li>
                                  </ol>
                              </div>
                              <div class="col-md-9 paddingLeft5">
                                  <div class="carousel-outer">
                                    <!-- me art lab slider -->
                                    <div class="carousel-inner ">
                                          <div class="item active">
                                              <img class="current" src="images/product-detail.jpg" alt="" />
                                          </div>
                                          <div class="item" >
                                              <img class="current" src="images/product-detail.jpg" alt="" />
                                          </div>
                                          <div class="item" >
                                              <img class="current" src="images/product-detail.jpg" alt="" />
                                          </div>
                                        </div>
                                    </div>
                                </div>
                          </div>
                          <!-- thumb -->

                        </div>
                  </div>
                  <div class="col-md-4">
                      <div class="product-information">
                          <h2>COMMEN PURPLE<br/><span>£29.99</span></h2>
                          <span class="color"><b>Colour:</b> Purple</span>
                          <div class="cd-item-select">
                            <span><b>Size</b></span>
                            <select class="" name="">
                              <option value="" selected hidden>Please select</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                            </select>
                          </div>
                          <ul class="cd-item-action">
                              <li><button class="add-to-cart">Add to bag</button></li>
                          </ul> <!-- cd-item-action -->
                          <div class="cd-item-description">
                            <h3 class="item-title">Product Details</h3>
                            <p>This is one of our running shirts.<br/>We searched the globe for our favourite technical fabrics.
                            <br/>and when we were happy we got to work on making these.<br/>We hope you like them as much as we do.</p>
                            <h3 class="item-title">So you know, they are:</h3>
                            <ul>
                              <li>– Lightweight & breathable</li>
                              <li>– Moisture wicking</li>
                              <li>– 100% Birdseye mesh polyester</li>
                              <li>– Perfect for all training and racedays</li>
                            </ul>
                          </div>
                      </div>
                  </div>
                </div>
            <h2>About this Product</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
          </div>
        </section>
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
