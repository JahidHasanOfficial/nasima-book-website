<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>My Books - Nasima Anwara</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <?php include('head_link.php'); ?>

</head>

<body class="service-details-page">

  <?php include('header_nav.php'); ?>

  <main class="main">

    <section id="portfolio" class="portfolio section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>My Books</h2>
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
            $eq = mysqli_query($con, "select distinct products.category_id, products.pro_id,products.product_name,products.short_details,products.details,products.size,products.weight,products.price,products.offer_price,products.photo,product_category.user_id,product_category.cat_name,product_category.cat_details,product_category.cat_photo from product_category 
									left join products on products.category_id = product_category.cat_id 
									ORDER BY product_category.cat_id asc limit 6
									");
            while ($prow = mysqli_fetch_array($eq)) {
            ?>

              <div class="col-lg-4  col-md-4 portfolio-item isotope-item filter-web">
                <div class="portfolio-card">
                  <div class="portfolio-image">
                    <img src="itm-admin/user/user_images/<?php echo $prow['photo']; ?>" class="img-fluid" alt="" loading="lazy">
                    <div class="portfolio-overlay">
                      <div class="portfolio-actions">
                        <a href="book-details?view=<?php echo $prow['pro_id']; ?>" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                        <a href="book-details?view=<?php echo $prow['pro_id']; ?>" class="details-link"><i class="bi bi-arrow-right"></i></a>
                        <a href="book-details?view=<?php echo $prow['pro_id']; ?>" class="details-link"><i class="bi bi-cart"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="portfolio-content">
                    <span class="category"><?php echo $prow['cat_name']; ?></span>
                    <a href="book-details?view=<?php echo $prow['pro_id']; ?>">
                      <h3><?php echo $prow['product_name']; ?></h3>
                    </a>
                    <p><?php
                        $words = explode(' ', $prow['short_details']);
                        echo count($words) > 30 ? implode(' ', array_slice($words, 0, 30)) . '...' : $prow['short_details'];
                        ?></p>
                  </div>
                </div>
              </div>
            <?php } ?>


          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include('footer.php'); ?>