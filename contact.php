<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact Me - Nasima Anwara</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

   <?php include('head_link.php'); ?>

</head>

<body class="service-details-page">

   <?php include('header_nav.php'); ?>
   
  <main class="main">
  
      <section id="contact" class="contact section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <div class="section-category mb-3">Contact</div>
              <h2 class="display-5 mb-4">Nemo enim ipsam voluptatem quia voluptas aspernatur</h2>
              <p class="lead mb-4">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>

              <div class="contact-info mt-5">
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-envelope-at me-3"></i>
                  <span>info@example.com</span>
                </div>

                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3"></i>
                  <span>+1 5589 55488 558</span>
                </div>

                <div class="info-item d-flex mb-4">
                  <i class="bi bi-geo-alt me-3"></i>
                  <span>A108 Adam Street, New York, NY 535022</span>
                </div>

                <a href="#" class="map-link d-inline-flex align-items-center">
                  Open Map
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
              <div class="card-body p-4 p-lg-5">

               <?php
                    // Handle form submission
                    if (isset($_POST['submit_contact'])) {
                        $name = mysqli_real_escape_string($con, $_POST['name']);
                        $email = mysqli_real_escape_string($con, $_POST['email']);
                        $subject = mysqli_real_escape_string($con, $_POST['subject']);
                        $message = mysqli_real_escape_string($con, $_POST['message']);

                        // Basic validation
                        if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
                            // Insert into contact_info table
                            $insert_query = "INSERT INTO contact_info (name, email, subject, message, entry_date) VALUES ('$name', '$email', '$subject', '$message', NOW())";

                            if (mysqli_query($con, $insert_query)) {
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Thank you!</strong> Your message has been sent successfully. We will get back to you soon.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>';
                            } else {
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error!</strong> There was a problem sending your message. Please try again.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>';
                            }
                        } else {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Warning!</strong> Please fill in all required fields.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>';
                        }
                    }
                    ?>


                <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">

                    <div class="col-12">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                    </div>

                    <div class="col-12 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>

                    <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>

                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>

                      <button type="submit" class="btn btn-submit w-100">Submit Message</button>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>

              

        </div>

      </div>

    </section><!-- /Contact Section -->

  
  </main>

  <?php include('footer.php'); ?>