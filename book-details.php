<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <?php
  include('head_link.php');
  if (isset($_GET['view'])) {
    $pro_id = $_GET['view'];
    $eq = mysqli_query($con, "select distinct products.category_id, products.pro_id,products.product_name,products.short_details,products.details,products.size,products.weight,products.price,products.offer_price,products.photo,product_category.user_id,product_category.cat_name,product_category.cat_details,product_category.cat_photo from product_category left join products on products.category_id = product_category.cat_id where products.pro_id = '$pro_id'");
    $prow = mysqli_fetch_array($eq);
  }
  ?>

  <title>Book Details - <?php echo isset($prow['product_name']) ? $prow['product_name'] : ''; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

</head>

<body class="service-details-page">

  <?php include('header_nav.php'); ?>

  <main class="main">


    <!-- Service Details Section -->
    <section id="service-details" class="service-details section bg-light">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="shadow rounded p-2 text-center">
              <h3 class="fw-bold"><?php echo isset($prow['product_name']) ? $prow['product_name'] : ''; ?></h3>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="service-details-slider swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": 1,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="itm-admin/user/user_images/<?php echo isset($prow['photo']) ? $prow['photo'] : ''; ?>" alt="" class="img-fluid" loading="lazy">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <div class="content mt-5">
              <h3><?php echo isset($prow['product_name']) ? $prow['product_name'] : ''; ?></h3>
              <p>
                <?php echo isset($prow['short_details']) ? $prow['short_details'] : ''; ?>
              </p>
              <p>
                <?php echo isset($prow['details']) ? $prow['details'] : ''; ?>
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="service-info">
              <h4>Book Details</h4>
              <div class="info-item">
                <h5> <i class="bi bi-tag"></i> Category</h5>
                <p><?php echo isset($prow['cat_name']) ? $prow['cat_name'] : ''; ?></p>
              </div>
              <div class="info-item">
                <i class="bi bi-box"></i>
                <h5>Size</h5>
                <p><?php echo isset($prow['size']) ? $prow['size'] : ''; ?></p>
              </div>
              <div class="info-item">
                <i class="bi bi-inboxes"></i>
                <h5>Weight</h5>
                <p><?php echo isset($prow['weight']) ? $prow['weight'] : ''; ?></p>
              </div>
              <div class="info-item">
                <i class="bi bi-currency-dollar"></i>
                <h5>Price</h5>
                <p><del>$<?php echo isset($prow['price']) ? $prow['price'] : ''; ?></del> <strong>$<?php echo isset($prow['offer_price']) ? $prow['offer_price'] : ''; ?></strong></p>
              </div>
            </div>

            <div class="related-services mt-5 d-none">
              <!-- Related services can be here -->
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

  <?php include('footer.php'); ?>