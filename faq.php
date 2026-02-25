    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <?php
              $sql = mysqli_query($con, "SELECT * FROM faq_section ORDER BY id DESC");
              $isFirstFaq = true;
              while ($frow = mysqli_fetch_array($sql)) {
              ?>
                <div class="faq-item <?= $isFirstFaq ? 'faq-active' : '' ?>">
                  <h3><?= $frow['title'] ?></h3>
                  <div class="faq-content">
                    <p><?= $frow['details'] ?></p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
              <?php
                $isFirstFaq = false;
              } ?>
              <!-- End Faq item-->
            </div>
          </div>
        </div>
      </div>
    </section>