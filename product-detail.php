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
              <div class="col-md-8 customcol8">
                <div id="carousel-custom" class="carousel slide left_img" data-ride="carousel">
                      <div class="row">
                          <div class="col-md-3 noPaddingRight customcol3">
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
                          <div class="col-md-9 paddingLeft5 customcol9">
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
              <div class="col-md-4 customRightCol">
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
      </div>
      <div class="borderLine"></div>
      <div class="relatedProduct">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h3>You may also like</h3>
                      <ul>
                          <li><a href="#"><img src="images/product-detail-thumb.jpg"/></a></li>
                          <li><a href="#"><img src="images/product-detail-thumb.jpg"/></a></li>
                          <li><a href="#"><img src="images/product-detail-thumb.jpg"/></a></li>
                          <li><a href="#"><img src="images/product-detail-thumb.jpg"/></a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
    </section>
</div>
<?php include ('footer.php') ?>
