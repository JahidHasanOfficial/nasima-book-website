<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Photo Gallery - Nasima Anwara</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <?php include('head_link.php'); ?>

</head>

<body class="service-details-page">

  <?php include('header_nav.php'); ?>

  <main class="main">

    <section id="portfolio" class="portfolio section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Photo Gallery</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <!--
          <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio-filters isotope-filters">
              <li data-filter="*" class="filter-active">All Work</li>
              <li data-filter=".filter-web">Web Design</li>
              <li data-filter=".filter-graphics">Graphics</li>
              <li data-filter=".filter-motion">Motion</li>
              <li data-filter=".filter-brand">Branding</li>
            </ul>
          </div>
		  -->

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <?php
            $sql = mysqli_query($con, "SELECT * FROM gallery ORDER BY id DESC");
            while ($trow = mysqli_fetch_array($sql)) {
            ?>
              <div class="col-lg-4  col-md-4 portfolio-item isotope-item filter-web">
                <div class="portfolio-card">
                  <div class="portfolio-image">
                    <img src="itm-admin/user/user_images/<?php echo $trow['userPic']; ?>" class="img-fluid" alt="" loading="lazy">
                  </div>
                  <div class="portfolio-content">

                    <h3><?php echo $trow['title']; ?></h3>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

            <?php } ?>
            <!-- <div class="col-lg-4  col-md-4 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-10.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-10.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Graphics</span>
                  <h3>Creative Brand Identity</h3>
                  <p>Vestibulum id ligula porta felis euismod semper at vulputate.</p>
                </div>
              </div>
            </div> -->
            <!-- End Portfolio Item -->
          </div>

        </div>

      </div>

    </section>


  </main>

  <?php include('footer.php'); ?>