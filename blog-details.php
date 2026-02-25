<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <?php
    include('head_link.php');
    if (isset($_GET['view'])) {
        $b_id = $_GET['view'];
        $eq = mysqli_query($con, "SELECT * FROM blog_section LEFT JOIN blog_category ON blog_section.category_id = blog_category.b_c_id WHERE blog_section.id = '$b_id'");
        $srow = mysqli_fetch_array($eq);
    }
    ?>

    <title>Blog Details - <?php echo isset($srow['title']) ? $srow['title'] : ''; ?></title>
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
                            <h3 class="fw-bold"><?php echo isset($srow['title']) ? $srow['title'] : ''; ?></h3>
                        </div>
                    </div>

                    <div class="col-12">
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
                            <div class="swiper-wrapper align-items-center d-flex justify-content-center">
                                <div class="swiper-slide">
                                    <img src="itm-admin/user/user_images/<?php echo isset($srow['userPic']) ? $srow['userPic'] : ''; ?>" alt="" class="img-fluid" loading="lazy">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <div class="content mt-5">
                            <h3><?php echo isset($srow['title']) ? $srow['title'] : ''; ?></h3>
                            <p>
                                <?php echo isset($srow['details']) ? nl2br($srow['details']) : ''; ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-5 d-none">
                        <div class="service-info">
                            <h4>Blog Information</h4>
                            <div class="info-item">
                                <h5> <i class="bi bi-tag"></i> Category</h5>
                                <p><?php echo isset($srow['cat_name']) ? $srow['cat_name'] : ''; ?></p>
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