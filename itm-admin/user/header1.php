<?php 
  require_once 'session.php';
  error_reporting( ~E_NOTICE );
  require_once '../includes/conn.php';
  require_once '../includes/dbconfig.php';
  include('../scripts2.php');
  //include('modal.php'); 
  //include('more-fals/access_point.php'); 
  ?> 
  
  <style type="text/css"> 
  .header {
    transition: all 0.5s;
    z-index: 997;
    height: 60px;
    box-shadow: 0px 2px 20px #0a58cac9;
    background-color: #fff;
    padding-left: 20px;
}
  </style>

  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="home" class="logo d-flex align-items-center">
        <img src="../includes/web.jpg" alt="ITM" class="rounded">
        <span class="d-none d-lg-block">ITM-CMS</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

      
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../<?php if ($srow['photo']==""){echo "img/profile.jpg"; } else {echo $srow['photo'];} ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $user; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile rounded">
            <li class="dropdown-header">
              <h6><?php echo $FulName; ?></h6>
              <span><?php echo $BizName; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
<!-- 
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
-->
           

            <li>
              <a class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#Logout" href="#Logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
              </a>
            </li>

          </ul> 
        </li> 
		
		

      </ul>
    </nav> 

  </header> 
  
  
   <div class="modal fade" id="Logout" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Are You Sure To Logout !</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"> 
            <div class="row g-0">
              <div class="col-md-4 text-center p-2">
               <img src="../<?php if ($srow['photo']==""){echo "img/profile.jpg"; } else {echo $srow['photo'];} ?>" width="70%" class="rounded-circle">
              </div>
              <div class="col-md-8">
                <div class="card-body"><br>
				
				<?php
								$dq=mysqli_query($con,"select * from stuff 
								left join `user` on user.userid=stuff.userid  
								where stuff.status='1' and stuff.userid='".$_SESSION['id']."'
								order by stuff.userid asc ");
								while($dqrow=mysqli_fetch_array($dq)){
									$did=$dqrow['userid'];
								?>
			        
							
                  		<b><span style="font-size:22px;"> <?php echo $dqrow['business_name']; ?></span></b><br>		  
                  		<b><span style="font-size:15px;"> 
					    <?php echo $dqrow['business_details']; ?>
						</span></b>		  
			

			<?php
								}
							?>	   			  
                </div>
              </div>
            </div> 
		  
					</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <a href="logout.php" class="btn btn-danger"><i class="fa fa-sign-out"></i> Logout</a>
                    </div>
                  </div>
                </div>
              </div> 

