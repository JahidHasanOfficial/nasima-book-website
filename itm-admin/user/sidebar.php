<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="home">
        <i class="bi bi-grid"></i>
        <span class="text-center"> Dashboard</span>
      </a>
    </li>

    <?php
    $home = ['banner-section','slider', 'slider-add', 'slider-edit', 'hero-section-content', 'hero-section-content-add', 'hero-section-content-edit', 'faq','faq-setting', 'quotation', 'quotation-edit', 'faq-add', 'faq-edit', 'stats', 'Stats-add', 'stats-edit', 'brand', 'brand-add', 'brand-edit', 'counter', 'counter-edit',  'header-section', 'header-section-add', 'header-section-edit', 'feature-1', 'join-section-title', 'feature-2'];
    ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $home)) ? 'active' : ''; ?>" data-bs-target="#home" data-bs-toggle="collapse" href="#">
        <i class="bi bi-house-fill"></i><span>Home & Features </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="home" class="nav-content collapse  <?= is_numeric(array_search($activePage, $home)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li><a href="slider" class="<?= ($activePage == 'slider' ||  $activePage == 'slider-add' ||  $activePage == 'slider-edit') ? 'active' : ''; ?>"><i class="bi bi-images"></i><span> Slider </span> </a> </li>
        <li><a href="hero-section-content" class="<?= ($activePage == 'hero-section-content' ||  $activePage == 'hero-section-content-add' ||  $activePage == 'hero-section-content-edit') ? 'active' : ''; ?>"><i class="bi bi-images"></i><span> Hero Section Content </span> </a> </li>
    
		<!--
        <li><a href="brand" class="<?= ($activePage == 'brand' ||  $activePage == 'brand-add' ||  $activePage == 'brand-edit') ? 'active' : ''; ?>"><i class="bi bi-map"></i><span> Brand </span> </a> </li>
       
		<li><a href="counter" class="<?= ($activePage == 'counter' ||  $activePage == 'counter-edit') ? 'active' : ''; ?>"><i class="bi bi-map"></i><span> Counter </span> </a> </li>
       --> 

	  </ul>
    </li>
	

    <?php $about_arr = ['about', 'about-edit', 'about-feature', 'about-feature-add', 'about-feature-edit', 'team', 'add-team', 'edit-team', 'teacher', 'teacher-add', 'teacher-edit', 'testimonial', 'Testimonial-add', 'testimonial-edit', 'mission', 'Mission-add', 'mission-edit', 'vision', 'Vision-add', 'vision-edit', 'our-values', 'our-value-add', 'our-value-edit', 'why', 'why-setting', 'why-add', 'why-edit'] ?>

    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $about_arr)) ? 'active' : ''; ?>" data-bs-target="#Website" data-bs-toggle="collapse" href="#">
        <i class="bi bi-laptop"></i><span>About</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>

      <ul id="Website" class="nav-content collapse <?= is_numeric(array_search($activePage, $about_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li><a href="about" class="<?= ($activePage == 'about' || $activePage == 'about-edit') ? 'active' : ''; ?>"><i class="bi bi-card-checklist"></i><span> About Us </span> </a> </li>
        
		<li><a href="mission" class="<?= ($activePage == 'mission' ||  $activePage == 'Mission-add' ||  $activePage == 'mission-edit') ? 'active' : ''; ?>"><i class="bi bi-bricks"></i><span> Mission </span> </a> </li>
        <li><a href="vision" class="<?= ($activePage == 'vision' ||  $activePage == 'Vision-add' ||  $activePage == 'vision-edit') ? 'active' : ''; ?>"><i class="bi bi-binoculars-fill"></i><span> Vision </span> </a> </li>
        <li><a href="our-values" class="<?= ($activePage == 'our-values' ||  $activePage == 'our-value-add' ||  $activePage == 'our-value-edit') ? 'active' : ''; ?>"><i class="bi bi-binoculars-fill"></i><span> Our Values </span> </a> </li>
        <li><a href="team" class="<?= ($activePage == 'team' ||  $activePage == 'add-team' ||  $activePage == 'edit-team') ? 'active' : ''; ?>"><i class="bi bi-people-fill"></i><span> Management Team  </span> </a> </li>
       <li class=""><a href="why" class="<?= ($activePage == 'why' || $activePage == 'why-setting' ||  $activePage == 'why-add' ||  $activePage == 'why-edit') ? 'active' : ''; ?>"><i class="bi bi-person-check"></i><span> Why Chose Us</span> </a> </li>
       
	   <!--
	   <li><a href="testimonial" class="<?= ($activePage == 'testimonial' ||  $activePage == 'Testimonial-add' ||  $activePage == 'testimonial-edit') ? 'active' : ''; ?>"><i class="bi bi-chat-left-quote-fill"></i><span> Testimonial </span> </a> </li>
       <li><a href="about-feature" class="<?= ($activePage == 'about-feature' || $activePage == 'about-feature-add' || $activePage == 'about-feature-edit') ? 'active' : ''; ?>"><i class="bi bi-card-checklist"></i><span> About Feature </span> </a> </li>
         --> 
      </ul>
    </li>
	
	<?php
    $product_arr = ['product-category', 'product-category-add', 'product-list', 'product-list-add', 'product-type', 'product-type-add', 'product-type-edit'];
    ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $product_arr)) ? 'active' : ''; ?>" data-bs-target="#Products" data-bs-toggle="collapse" href="#">
        <i class="bi bi-list"></i><span>Products </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Products" class="nav-content collapse  <?= is_numeric(array_search($activePage, $product_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">

        <li><a href="product-category" class=" <?php echo ($activePage == 'product-category' || $activePage == 'product-category-add' || $activePage == 'product-category-edit') ? 'active' : ''  ?>"><i class="bi bi-menu-app-fill"></i><span> Category </span> </a> </li>
		<!--
        <li><a href="product-type" class=" <?php echo ($activePage == 'product-type' || $activePage == 'product-type-add' || $activePage == 'product-type-edit') ? 'active' : ''  ?>"><i class="bi bi-menu-app-fill"></i><span> Product Type </span> </a> </li>
        --> 
        <li><a href="product-list" class=" <?php echo ($activePage == 'product-list' || $activePage == 'product-list-add') ? 'active' : ''  ?>"><i class="bi bi-list"></i><span> Product List </span> </a> </li>

      </ul>
    </li>
	
	<!--
	<li class="nav-item">
      <a href="service" class="nav-link collapsed <?= ($activePage == 'service' ||  $activePage == 'service-add' ||  $activePage == 'service-edit') ? 'active' : ''; ?>"><i class="bi bi-layers-fill"></i><span> Service </span> </a>
    </li>	
	
	<li class="nav-item">
      <a class="nav-link collapsed <?= ($activePage == 'industries' || $activePage == 'industries-edit') ? 'active' : ''; ?>" href="industries">
        <i class="bi bi-house"></i>
        <span>Industries</span>
      </a>
    </li>
	
	<li class="nav-item">
      <a class="nav-link collapsed <?= ($activePage == 'trading' || $activePage == 'trading-edit') ? 'active' : ''; ?>" href="trading">
        <i class="bi bi-house"></i>
        <span>Trading</span>
      </a>
    </li>
	 
	 --> 

    <?php $about_arr = ['video', 'video-add', 'video-edit', 'image', 'image-add', 'image-edit'] ?>

    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $about_arr)) ? 'active' : ''; ?>" data-bs-target="#Gallery" data-bs-toggle="collapse" href="#">
        <i class="bi bi-laptop"></i><span>Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>

      <ul id="Gallery" class="nav-content collapse <?= is_numeric(array_search($activePage, $about_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">

        <li><a href="image" class="<?= ($activePage == 'image' || $activePage == 'image-add' || $activePage == 'image-edit') ? 'active' : ''; ?>"><i class="bi bi-images"></i><span> Image Gallery </span> </a> </li>
      <!-- 
	   <li><a href="video" class="<?= ($activePage == 'video' ||  $activePage == 'video-add' ||  $activePage == 'video-edit') ? 'active' : ''; ?>"><i class="bi bi-camera-reels"></i><span> Video Gallery </span> </a> </li>
       --> 
     
      </ul>
    </li>

 

	<?php  $news_arr = ['contact-list', 'contact-sub', 'contact-sub-add', 'contact-sub-edit']; ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $news_arr)) ? 'active' : ''; ?>" data-bs-target="#Apply" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-lines-fill"></i><span>Contact </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Apply" class="nav-content collapse  <?= is_numeric(array_search($activePage, $news_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li><a href="contact-list" class="<?= ($activePage == 'contact-list') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Contact List </span> </a> </li>
       <!--  
	   <li><a href="contact-sub" class="<?= ($activePage == 'contact-sub' || $activePage == 'contact-sub-add' || $activePage == 'contact-sub-edit') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Contact Subject</span> </a> </li>
      -->
	  </ul>
    </li>
	 
   
    <?php
    $service_arr = ['service', 'service-add', 'service-edit', 'service-category', 'service-category-add', 'services-feature', 'blog', 'blog-add', 'blog-edit', 'blog-category', 'blog-category-add', 'blog-category-edit'];
    ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $service_arr)) ? 'active' : ''; ?>" data-bs-target="#Service" data-bs-toggle="collapse" href="#">
        <i class="bi bi-newspaper"></i><span>Blogs </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Service" class="nav-content collapse  <?= is_numeric(array_search($activePage, $service_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
       <li><a href="blog" class="<?= ($activePage == 'blog' ||  $activePage == 'blog-add' ||  $activePage == 'blog-edit') ? 'active' : ''; ?>"><i class="bi bi-newspaper"></i><span> Blog List </span> </a> </li>
        
		<!--
		 <li><a href="blog-category" class="<?= ($activePage == 'blog-category' ||  $activePage == 'blog-category-add' ||  $activePage == 'blog-category-edit') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Blog Category </span> </a> </li>
        
		<li><a href="service-category" class="<?= ($activePage == 'service-category' ||  $activePage == 'service-category-add') ? 'active' : ''; ?>"><i class="bi bi-bookmarks-fill"></i><span> Category </span> </a> </li>
        <li><a href="services-feature" class="<?= ($activePage == 'services-feature') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Service Features </span> </a> </li>
        -->
		
	  </ul>
    </li>
	

	<?php
    $service_arr = ['why-chosse-feature', 'call-to-action', 'team-feature', 'apply-feature'];
    ?>
    <li class="nav-item d-none">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $service_arr)) ? 'active' : ''; ?>" data-bs-target="#Features" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layers-fill"></i><span>Features </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Features" class="nav-content collapse  <?= is_numeric(array_search($activePage, $service_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li><a href="why-chosse-feature" class="<?= ($activePage == 'why-chosse-feature') ? 'active' : ''; ?>"><i class="bi bi-bookmarks-fill"></i><span> Why Chose Us </span> </a> </li> 
        <li><a href="call-to-action" class="<?= ($activePage == 'call-to-action') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Call To Action </span> </a> </li>
        <li><a href="team-feature" class="<?= ($activePage == 'team-feature') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Team Features </span> </a> </li>
        <li><a href="apply-feature" class="<?= ($activePage == 'apply-feature') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Course Apply  </span> </a> </li>
      </ul>
    </li>


    <li class="nav-item d-none">
      <a class="nav-link collapsed <?= ($activePage == 'seo' || $activePage == 'seo-add' || $activePage == 'seo-edit') ? 'active' : ''; ?>" href="seo">
        <i class="bi bi-search"></i>
        <span>Page & SEO Settings</span>
      </a>
    </li>
	
	
	 <li class="nav-item">
      <a class="nav-link collapsed <?= ($activePage == 'contact-info' || $activePage == 'contact-info-add' || $activePage == 'contact-info-edit' || $activePage == 'social-media' ||  $activePage == 'social-media-add' ||  $activePage == 'social-media-edit' || $activePage == 'branch' || $activePage == 'Branch-add' || $activePage == 'branch-edit' || $activePage == 'map' || $activePage == 'map-add' || $activePage == 'map-edit') ? 'active' : ''; ?>" data-bs-target="#Contact" data-bs-toggle="collapse" href="#">
        <i class="bi bi-telephone"></i><span>Contact Settings </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Contact" class="nav-content collapse <?= ($activePage == 'contact-info' || $activePage == 'contact-info-add' || $activePage == 'contact-info-edit' || $activePage == 'social-media' ||  $activePage == 'social-media-add' ||  $activePage == 'social-media-edit' || $activePage == 'branch' || $activePage == 'Branch-add' || $activePage == 'branch-edit' || $activePage == 'map' || $activePage == 'map-add' || $activePage == 'map-edit') ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">

        <li><a href="contact-info" class="<?= ($activePage == 'contact-info' || $activePage == 'contact-info-add' || $activePage == 'contact-info-edit') ? 'active' : ''; ?>"><i class="bi bi-telephone"></i><span> Contact </span> </a> </li>
        <li><a href="social-media" class="<?= ($activePage == 'social-media' ||  $activePage == 'social-media-add' ||  $activePage == 'social-media-edit') ? 'active' : ''; ?>"><i class="bi bi-menu-app-fill"></i><span> Social Media </span> </a> </li>
 <!--       
		<li><a href="map" class="<?= ($activePage == 'map' ||  $activePage == 'Map-add' ||  $activePage == 'map-edit') ? 'active' : ''; ?>"><i class="bi bi-geo-alt-fill"></i><span> Map </span> </a> </li>
-->
      </ul>
    </li>



    

<!--
    <li class="nav-heading">Settings Panel</li>


    <li class="nav-item">
      <a class="nav-link collapsed <?= ($activePage == 'users-profile') ? 'active' : ''; ?>" href="users-profile">
        <i class="bi bi-person"></i>
        <span>Profile Settings</span>
      </a>
    </li>
-->


    <li class="nav-item mt-5 text-center d-none">
      <img class="opacity-25" src="../includes/itm.png" width="70%">
    </li>


  </ul>

</aside>