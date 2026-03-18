   <section id="hero" class="hero section">

     <div class="container" data-aos="fade-up" data-aos-delay="100">

       <div class="row align-items-center content">
         <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
           <?php
            $sql = mysqli_query($con, "SELECT * FROM hero_section_content ORDER BY id DESC");
            while ($srow = mysqli_fetch_assoc($sql)) {
            ?>
             <h2><?php echo $srow['title']; ?></h2>
             <p class="lead"><?php echo $srow['subtitle']; ?></p>
           <?php } ?>
           <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
             <a href="book-list" class="btn btn-primary">View My Books</a>
             <a href="contact" class="btn btn-outline">About Me</a>
           </div>


         </div>
         <div class="col-lg-6">
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
               <?php
                $sql = mysqli_query($con, "SELECT * FROM slider_section ORDER BY id DESC");
                while ($srow = mysqli_fetch_assoc($sql)) {
                ?>
                 <div class="swiper-slide">
                   <img src="itm-admin/user/user_images/<?php echo $srow['userPic']; ?>" alt="" class="img-fluid rounded" loading="lazy">
                 </div>
               <?php } ?>


             </div>
             <div class="swiper-pagination"></div>
           </div>

         </div>
       </div>

     </div>

   </section><!-- /Hero Section -->