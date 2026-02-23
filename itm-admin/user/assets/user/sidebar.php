<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="home">
        <i class="bi bi-grid"></i>
        <span class="text-center"> Dashboard</span>
      </a>
    </li>

    <?php
    $home = ['banner-section','slider', 'slider-add', 'slider-edit', 'why', 'why-setting', 'why-add', 'why-edit', 'faq','faq-setting', 'quotation', 'quotation-edit', 'faq-add', 'faq-edit', 'stats', 'Stats-add', 'stats-edit', 'partner', 'partner-add', 'partner-edit', 'counter', 'counter-edit',  'header-section', 'header-section-add', 'header-section-edit', 'feature-1', 'join-section-title', 'feature-2'];
    ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $home)) ? 'active' : ''; ?>" data-bs-target="#home" data-bs-toggle="collapse" href="#">
        <i class="bi bi-house-fill"></i><span>Home & Features </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="home" class="nav-content collapse  <?= is_numeric(array_search($activePage, $home)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
  <!--  <li><a href="banner-section" class="<?= ($activePage == 'banner-section') ? 'active' : ''; ?>"><i class="bi bi-image"></i><span> Banner </span> </a> </li> -->
        <li><a href="slider" class="<?= ($activePage == 'slider' ||  $activePage == 'slider-add' ||  $activePage == 'slider-edit') ? 'active' : ''; ?>"><i class="bi bi-images"></i><span> Slider </span> </a> </li>
        <li><a href="header-section" class="<?= ($activePage == 'header-section' || $activePage == 'header-section-add' || $activePage == 'header-section-edit') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Heading Section </span> </a> </li>
      
		<li><a href="why" class="<?= ($activePage == 'why' || $activePage == 'why-setting' ||  $activePage == 'why-add' ||  $activePage == 'why-edit') ? 'active' : ''; ?>"><i class="bi bi-person-check"></i><span> Why Chose </span> </a> </li>
       
        <li><a href="partner" class="<?= ($activePage == 'partner' ||  $activePage == 'partner-add' ||  $activePage == 'partner-edit') ? 'active' : ''; ?>"><i class="bi bi-map"></i><span> Partner </span> </a> </li>
        <li><a href="counter" class="<?= ($activePage == 'counter' ||  $activePage == 'counter-edit') ? 'active' : ''; ?>"><i class="bi bi-map"></i><span> Counter </span> </a> </li>
       
	<!-- 
	 <li><a href="stats" class="<?= ($activePage == 'stats' ||  $activePage == 'Stats-add' ||  $activePage == 'stats-edit') ? 'active' : ''; ?>"><i class="bi bi-bar-chart"></i><span> Stats / Counter </span> </a> </li>
     <li><a href="quotation" class="<?= ($activePage == 'quotation' ||  $activePage == 'quotation-edit') ? 'active' : ''; ?>"><i class="bi bi-patch-question"></i><span> Quotation </span> </a> </li>
     <li><a href="faq" class="<?= ($activePage == 'faq' || $activePage == 'faq-setting' ||  $activePage == 'faq-add' ||  $activePage == 'faq-edit') ? 'active' : ''; ?>"><i class="bi bi-patch-question"></i><span> FAQ </span> </a> </li>
     <li><a href="feature-1" class="<?= ($activePage == 'feature-1') ? 'active' : ''; ?>"><i class="bi bi-bookmarks"></i><span> Home Feature </span> </a> </li>

        <li><a href="feature-2" class="<?= ($activePage == 'feature-2') ? 'active' : ''; ?>"><i class="bi bi-bookmarks"></i><span> About Feature </span> </a> </li>
        <li><a href="join-section-title" class="<?= ($activePage == 'join-section-title') ? 'active' : ''; ?>"><i class="bi bi-bookmarks"></i><span> Join Section Title </span> </a> </li>
      
	  -->
	  </ul>
    </li>
	
	
	<li class="nav-item">
        <a class="nav-link collapsed <?= ($activePage == 'client') ? 'active' : ''; ?>" href="client">
          <i class="bi bi-people-fill"></i>
          <span>All Users</span>
        </a>
      </li> 



    <?php $about_arr = ['web-about-sec', 'edit-web-about-sec', 'about-feature', 'about-feature-add', 'about-feature-edit', 'team', 'add-team', 'edit-team', 'teacher', 'teacher-add', 'teacher-edit', 'testimonial', 'Testimonial-add', 'testimonial-edit', 'mission', 'Mission-add', 'mission-edit', 'vision', 'Vision-add', 'vision-edit', 'success-student', 'success-student-add', 'success-student-edit'] ?>

    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $about_arr)) ? 'active' : ''; ?>" data-bs-target="#Website" data-bs-toggle="collapse" href="#">
        <i class="bi bi-laptop"></i><span>About</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>

      <ul id="Website" class="nav-content collapse <?= is_numeric(array_search($activePage, $about_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li><a href="web-about-sec" class="<?= ($activePage == 'web-about-sec' || $activePage == 'edit-web-about-sec') ? 'active' : ''; ?>"><i class="bi bi-card-checklist"></i><span> About Us </span> </a> </li>
        <li><a href="about-feature" class="<?= ($activePage == 'about-feature' || $activePage == 'about-feature-add' || $activePage == 'about-feature-edit') ? 'active' : ''; ?>"><i class="bi bi-card-checklist"></i><span> About Feature </span> </a> </li>
        <li><a href="mission" class="<?= ($activePage == 'mission' ||  $activePage == 'Mission-add' ||  $activePage == 'mission-edit') ? 'active' : ''; ?>"><i class="bi bi-bricks"></i><span> Mission </span> </a> </li>
        <li><a href="vision" class="<?= ($activePage == 'vision' ||  $activePage == 'Vision-add' ||  $activePage == 'vision-edit') ? 'active' : ''; ?>"><i class="bi bi-binoculars-fill"></i><span> Vision </span> </a> </li>
        <li><a href="team" class="<?= ($activePage == 'team' ||  $activePage == 'add-team' ||  $activePage == 'edit-team') ? 'active' : ''; ?>"><i class="bi bi-people-fill"></i><span> Team Member </span> </a> </li>
        <li><a href="testimonial" class="<?= ($activePage == 'testimonial' ||  $activePage == 'Testimonial-add' ||  $activePage == 'testimonial-edit') ? 'active' : ''; ?>"><i class="bi bi-chat-left-quote-fill"></i><span> Testimonial </span> </a> </li>
     <!--    <li><a href="success-student" class="<?= ($activePage == 'success-student' ||  $activePage == 'success-student-add' ||  $activePage == 'success-student-edit') ? 'active' : ''; ?>"><i class="bi bi-images"></i><span> Successful Students </span> </a> </li> -->
      </ul>
    </li>


    <?php $about_arr = ['video', 'video-add', 'video-edit', 'image', 'image-add', 'image-edit'] ?>

    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $about_arr)) ? 'active' : ''; ?>" data-bs-target="#Gallery" data-bs-toggle="collapse" href="#">
        <i class="bi bi-laptop"></i><span>Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>

      <ul id="Gallery" class="nav-content collapse <?= is_numeric(array_search($activePage, $about_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">

        <li><a href="image" class="<?= ($activePage == 'image' || $activePage == 'image-add' || $activePage == 'image-edit') ? 'active' : ''; ?>"><i class="bi bi-images"></i><span> Image Gallery </span> </a> </li>
        <li><a href="video" class="<?= ($activePage == 'video' ||  $activePage == 'video-add' ||  $activePage == 'video-edit') ? 'active' : ''; ?>"><i class="bi bi-camera-reels"></i><span> Video Gallery </span> </a> </li>

     
      </ul>
    </li>



    <!-- Admissions  -->
    <?php
    $admission_arr = ['diploma-admission', 'diploma-admission-add', 'medical-admission', 'medical-admission-add', 'medical-assistant', 'medical-assistant-add', 'nursing-admission', 'nursing-admission-add'];
    ?>
    <li class="nav-item d-none">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $admission_arr)) ? 'active' : ''; ?>" data-bs-target="#Admission" data-bs-toggle="collapse" href="#">
        <i class="bi bi-building"></i><span>Admission </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Admission" class="nav-content collapse  <?= is_numeric(array_search($activePage, $admission_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">

        <li><a href="diploma-admission" class=" <?php echo ($activePage == 'diploma-admission' || $activePage == 'diploma-admission-add') ? 'active' : ''  ?>"><i class="bi bi-menu-app-fill"></i><span> Diploma In Engineering </span> </a> </li>

        <li><a href="medical-admission" class=" <?php echo ($activePage == 'medical-admission' || $activePage == 'medical-admission-add') ? 'active' : ''  ?>"><i class="bi bi-menu-app-fill"></i><span> Medical Diploma </span> </a> </li>

        <li><a href="medical-assistant" class=" <?php echo ($activePage == 'medical-assistant' || $activePage == 'medical-assistant-add') ? 'active' : ''  ?>"><i class="bi bi-menu-app-fill"></i><span> Medical Assistant </span> </a> </li>

        <li><a href="nursing-admission" class=" <?php echo ($activePage == 'nursing-admission' || $activePage == 'nursing-admission-add') ? 'active' : ''  ?>"><i class="bi bi-menu-app-fill"></i><span> Diploma In Nursing & Midwifery </span> </a> </li>

      </ul>
    </li>
<!-- 
    <li class="nav-item"><a href="gallery-sec" class="nav-link collapsed <?= ($activePage == 'gallery-sec' ||  $activePage == 'gallery-sec-add' ||  $activePage == 'gallery-sec-edit') ? 'active' : ''; ?>"><i class="bi bi-images"></i><span> Gallery </span> </a> </li>
  --->

	<?php  $news_arr = ['contact-list', 'contact-sub', 'contact-sub-add', 'contact-sub-edit']; ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $news_arr)) ? 'active' : ''; ?>" data-bs-target="#Apply" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-lines-fill"></i><span>Contact </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Apply" class="nav-content collapse  <?= is_numeric(array_search($activePage, $news_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li><a href="contact-list" class="<?= ($activePage == 'contact-list') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Contact List </span> </a> </li>
       <li><a href="contact-sub" class="<?= ($activePage == 'contact-sub' || $activePage == 'contact-sub-add' || $activePage == 'contact-sub-edit') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Contact Subject</span> </a> </li>
      </ul>
    </li>
	
	
    <?php
    $service_arr = ['notice', 'notice-add', 'notice-edit', 'publish', 'publish-add', 'publish-edit', 'blog', 'blog-add', 'blog-edit'];
    ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $service_arr)) ? 'active' : ''; ?>" data-bs-target="#news" data-bs-toggle="collapse" href="#">
        <i class="bi bi-newspaper"></i><span>News / Blog </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="news" class="nav-content collapse  <?= is_numeric(array_search($activePage, $service_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li><a href="blog" class="<?= ($activePage == 'blog' ||  $activePage == 'blog-add' ||  $activePage == 'blog-edit') ? 'active' : ''; ?>"><i class="bi bi-images"></i><span> Blog </span> </a> </li>
       </ul>
    </li>


   
    <?php
    $service_arr = ['service', 'service-add', 'service-edit', 'service-category', 'service-category-add', 'services-feature'];
    ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $service_arr)) ? 'active' : ''; ?>" data-bs-target="#Service" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layers-fill"></i><span>Service </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Service" class="nav-content collapse  <?= is_numeric(array_search($activePage, $service_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li><a href="service" class="<?= ($activePage == 'service' ||  $activePage == 'service-add' ||  $activePage == 'service-edit') ? 'active' : ''; ?>"><i class="bi bi-layers-fill"></i><span> Service List </span> </a> </li>
        
		<!--
		<li><a href="service-category" class="<?= ($activePage == 'service-category' ||  $activePage == 'service-category-add') ? 'active' : ''; ?>"><i class="bi bi-bookmarks-fill"></i><span> Category </span> </a> </li>
        <li><a href="services-feature" class="<?= ($activePage == 'services-feature') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Service Features </span> </a> </li>
        -->
		
	  </ul>
    </li>
	
	 <?php
    $project_arr = ['project', 'project-add', 'project-edit', 'project-portfolio', 'project-portfolio-add', 'project-portfolio-edit', 'project-feature'];
    ?>
    <li class="nav-item">
      <a class="nav-link collapsed <?= is_numeric(array_search($activePage, $project_arr)) ? 'active' : ''; ?>" data-bs-target="#Project" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layers-fill"></i><span>Project </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Project" class="nav-content collapse  <?= is_numeric(array_search($activePage, $project_arr)) ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
       <li><a href="project" class="<?= ($activePage == 'project' ||  $activePage == 'project-add' ||  $activePage == 'service-edit') ? 'active' : ''; ?>"><i class="bi bi-layers-fill"></i><span> Project List </span> </a> </li>
         
		 <li><a href="project-portfolio" class="<?= ($activePage == 'project-portfolio' ||  $activePage == 'project-portfolio-add' ||  $activePage == 'project-portfolio-edit') ? 'active' : ''; ?>"><i class="bi bi-bookmarks-fill"></i><span> Project Portfolio </span> </a> </li>
       <!--   <li><a href="project-feature" class="<?= ($activePage == 'project-feature') ? 'active' : ''; ?>"><i class="bi bi-list"></i><span> Service Features </span> </a> </li>
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


    <li class="nav-item">
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
        <li><a href="map" class="<?= ($activePage == 'map' ||  $activePage == 'Map-add' ||  $activePage == 'map-edit') ? 'active' : ''; ?>"><i class="bi bi-geo-alt-fill"></i><span> Map </span> </a> </li>

      </ul>
    </li>



    


    <li class="nav-heading">Settings Panel</li>


    <li class="nav-item">
      <a class="nav-link collapsed <?= ($activePage == 'users-profile') ? 'active' : ''; ?>" href="users-profile">
        <i class="bi bi-person"></i>
        <span>Profile Settings</span>
      </a>
    </li>



    <li class="nav-item mt-5 text-center d-none">
      <img class="opacity-25" src="../includes/itm.png" width="70%">
    </li>


  </ul>

</aside>