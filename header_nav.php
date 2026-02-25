 <header id="header" class="header d-flex align-items-center sticky-top">
   <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

     <a href="index" class="logo d-flex align-items-center me-auto me-xl-0">
       <!-- Uncomment the line below if you also wish to use an image logo -->
       <!-- <img src="assets/img/logo.webp" alt=""> -->
       <h1 class="sitename fw-bold">Nasima Anwara</h1>
     </a>

     <nav id="navmenu" class="navmenu">
       <ul>
         <li><a href="index" class="">Home</a></li>
         <li><a href="about">About</a></li>
         <li><a href="book-list">My Books</a></li>
         <li><a href="photo-gallery">Photo Gallery</a></li>
         <li><a href="blogs">Blogs</a></li>
         <!--- 
		  <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
		  -->

         <li><a href="contact">Contact</a></li>
       </ul>
       <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
     </nav>
     <?php
      $social_query = mysqli_query($con, "SELECT `id`, `user_id`, `twitter`, `facebook`, `instagram`, `linkedin` FROM `social_media` LIMIT 1");
      if ($social_query && mysqli_num_rows($social_query) > 0) {
        $social_row = mysqli_fetch_array($social_query);
      ?>
       <div class="header-social-links">
         <a href="<?php echo $social_row['twitter']; ?>" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
         <a href="<?php echo $social_row['facebook']; ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
         <a href="<?php echo $social_row['instagram']; ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
         <a href="<?php echo $social_row['linkedin']; ?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
       </div>
     <?php } ?>
   </div>
 </header>