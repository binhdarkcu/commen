
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
                      <span>READ MORE</span>
                    </div>
                  </div>

                  <!-- item -->
                  <div class="col-md-4">
                    <div class="filter-item">
                      <img src="images/filter-item.png" alt="">
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                      <span>READ MORE</span>
                    </div>
                  </div>

                  <!-- item -->
                  <div class="col-md-4">
                    <div class="filter-item">
                      <img src="images/filter-item.png" alt="">
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                      <span>READ MORE</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="btn-style">See All</a>
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
