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
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
		
		<?php
              $eq = mysqli_query($con, "select * from about_section where type=1 ");
              while ($eqrow = mysqli_fetch_array($eq)) {

              ?>
			  
          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="itm-admin/user/user_images/<?php echo $eqrow['userPic']; ?>" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <span class="subtitle">About Me</span> 

                <h2><?php echo $eqrow['about_title']; ?></h2>
                <p class="mb-4"><?php echo $eqrow['about_subtitle']; ?></p>
 

              <?php } ?>
              
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
	
	<?php  include('testimonials.php'); ?>


  </main>

  <?php include('footer.php'); ?>