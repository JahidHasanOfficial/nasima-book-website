  <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "slidesPerView": 1,
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">

            <?php
            $sql = mysqli_query($con, "SELECT * FROM testimonial ORDER BY ts_id DESC");
            while ($trow = mysqli_fetch_array($sql)) {
            ?>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2><?php echo $trow['title']; ?></h2>
                    <p>
                      <?php echo $trow['details']; ?>
                    </p>
                   
                    <div class="profile d-flex align-items-center">
                      <img src="itm-admin/user/user_images/<?php echo $trow['userPic']; ?>" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3><?php echo $trow['name']; ?></h3>
                        <span><?php echo $trow['position']; ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="itm-admin/user/user_images/<?php echo $trow['userPic']; ?>" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            
            <!-- End Testimonial Item -->
          </div>

          <div class="swiper-navigation w-100 d-flex align-items-center justify-content-center">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->
