 <footer id="footer" class="footer">

   <div class="container">
     <div class="copyright text-center d-none ">
       <p>© <span>Copyright</span> <strong class="px-1 sitename">Nasima Anwara</strong> <span>All Rights Reserved</span></p>
     </div>
     <?php
      $social_query = mysqli_query($con, "SELECT `id`, `user_id`, `facebook`, `youtube`, `instagram`, `linkedin` FROM `social_media` LIMIT 1");
      if ($social_query && mysqli_num_rows($social_query) > 0) {
        $social_row = mysqli_fetch_array($social_query);
      ?>
       <div class="social-links d-flex justify-content-center">
         <?php if (!empty($social_row['facebook'])) { ?><a href="<?php echo $social_row['facebook']; ?>" target="_blank"><i class="bi bi-facebook"></i></a><?php } ?>
         <?php if (!empty($social_row['youtube'])) { ?><a href="<?php echo $social_row['youtube']; ?>" target="_blank"><i class="bi bi-youtube"></i></a><?php } ?>
         <?php if (!empty($social_row['instagram'])) { ?><a href="<?php echo $social_row['instagram']; ?>" target="_blank"><i class="bi bi-instagram"></i></a><?php } ?>
         <?php if (!empty($social_row['linkedin'])) { ?><a href="<?php echo $social_row['linkedin']; ?>" target="_blank"><i class="bi bi-linkedin"></i></a><?php } ?>
       </div>
     <?php } ?>
     <div class="credits">
       Design & Developed By <a href="https://itmsofts.com/">ITM-SOFTS</a>
     </div>
   </div>

 </footer>

 <!-- Scroll Top -->
 <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>
 <script src="assets/vendor/aos/aos.js"></script>
 <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

 <!-- Main JS File -->
 <script src="assets/js/main.js"></script>

 </body>

 </html>