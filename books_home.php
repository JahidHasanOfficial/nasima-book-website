  <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
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
          $sql = mysqli_query($con, "SELECT * FROM blog_section LEFT JOIN blog_category ON blog_section.category_id = blog_category.b_c_id ORDER BY id DESC");
          while ($srow = mysqli_fetch_assoc($sql)) {
          ?>

            <div class="col-lg-4  col-md-4 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="itm-admin/user/user_images/<?php echo $srow['userPic']; ?>" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="book-details?view=<?php echo $srow['id']; ?>" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="book-details?view=<?php echo $srow['id']; ?>" class="details-link"><i class="bi bi-arrow-right"></i></a>
                      <a href="book-details?view=<?php echo $srow['id']; ?>" class="details-link"><i class="bi bi-cart"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category"><?php echo $srow['cat_name']; ?></span>
                  <a href="book-details?view=<?php echo $srow['id']; ?>">
                    <h3><?php echo $srow['title']; ?></h3>
                  </a>
                  <p><?php
                      $words = explode(' ', $srow['details']);
                      echo count($words) > 30 ? implode(' ', array_slice($words, 0, 30)) . '...' : $srow['details'];
                      ?></p>
                </div>
              </div>
            </div>
          <?php } ?>

          <!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Portfolio Section -->