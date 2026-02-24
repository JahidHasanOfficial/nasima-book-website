<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About - Nasima Anwara</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

   <?php include('head_link.php'); ?>

</head>

<body class="service-details-page">

   <?php include('header_nav.php'); ?>
   
  <main class="main">
  
  
  <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="assets/img/profile/profile-square-2.webp" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <span class="subtitle">About Me</span>

            <?php
          $eq = mysqli_query($con, "select * from about_section where type=1 ");
          while ($eqrow = mysqli_fetch_array($eq)) {

          ?>

            <h2><?php echo $eqrow['about_title']; ?></h2>
            <p class="mb-4"><?php echo $eqrow['about_subtitle']; ?></p>



            <div class="personal-info">
              <div class="row g-4">
                <!-- <div class="col-6">
                    <div class="info-item">
                      <span class="label">Name</span>
                      <span class="value">Eliot Johnson</span>
                    </div>
                  </div> -->

                <div class="col-6">
                  <div class="info-item">
                    <span class="label"><?php echo $eqrow['support1']; ?></span>
                    <!-- <span class="value">+123 456 7890</span> -->
                  </div>
                </div>

                <div class="col-6">
                  <div class="info-item">
                    <span class="label"><?php echo $eqrow['support2']; ?></span>
                    <!-- <span class="value">26 Years</span> -->
                  </div>
                </div>

                <div class="col-6">
                  <div class="info-item">
                    <span class="label"><?php echo $eqrow['support3']; ?></span>
                    <!-- <span class="value">email@example.com</span> -->
                  </div>
                </div>

                <div class="col-6">
                  <div class="info-item">
                    <span class="label"><?php echo $eqrow['support4']; ?></span>
                    <!-- <span class="value">Lorem Engineer</span> -->
                  </div>
                </div>

              </div>
            </div>

          <?php } ?>
              <!-- <div class="signature mt-4">
                <div class="signature-image">
                  <img src="assets/img/misc/signature-1.webp" alt="" class="img-fluid">
                </div>
                <div class="signature-info">
                  <h4>Eliot Johnson</h4>
                  <p>Adipiscing Elit, Lorem Ipsum</p>
                </div>
              </div> -->
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

  
  </main>

  <?php include('footer.php'); ?>