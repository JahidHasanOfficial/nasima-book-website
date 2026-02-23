<!DOCTYPE html>
<html lang="en"> 

<head>
<?php   require_once 'head_link.php'; ?>

</head>

<body>
 
<?php   require_once 'header1.php'; ?>
<?php  require_once 'sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>User List   <span class="d-none"> <a data-bs-toggle="modal" data-bs-target="#ClientAdd" href="#ClientAdd"> <i class="bi bi-plus-square-fill"></i> </a> </span> </h1>
     <hr>
    </div> 

    <section class="section">
      <div class="row">
	  
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

                   <table width="100%" class="table ">
                        <thead class="bg-light">
                            <tr>
                                <th>SL</th>
                                <th>Id</th>
                                <th>Name</th>
								<th>Position</th>
						<!--    <th>Join</th>
								<th>Expire</th>  -->		
								<th>User Name</th>
								<th>Password</th>
                                <th>Photo</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
							$sl=0;
								$dq=mysqli_query($con,"select * 
							    from stuff 
							   left join `user` on user.userid=stuff.userid  
							    order by stuff.userid asc ");
								while($dqrow=mysqli_fetch_array($dq)){
									$did=$dqrow['userid'];
								?>
								<tr>
									<td><?php echo ++$sl; ?> </td>
									<td><?php echo $dqrow['userid']; ?> </td>
									<td><?php echo $dqrow['business_name']; ?> </td>
									<td><?php echo $dqrow['position']; ?> </td>
						<!--        <td><?php echo $dqrow['join_date']; ?> </td> 
									<td><?php echo $dqrow['expire_date']; ?> </td>  -->		
									<td><?php echo $dqrow['username']; ?></td>
									<td>
										<?php
											$pass=mysqli_query($con,"select * from `password` where mdfive='".$dqrow['password']."'");
											$passrow=mysqli_fetch_array($pass);												
											echo $passrow['original'];
										?>
									</td>
									
									<td><img src="../<?php if($dqrow['photo']==""){echo "/img/profile.jpg";}else{echo $dqrow['photo'];} ?>" height="30px;" width="30px;"></td>
									<td>
									 
										<a href="#ClientEdit<?php echo $did; ?>" data-bs-toggle="modal" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
							<!--			<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delemp_<?php echo $did; ?>"><i class="fa fa-trash"></i> Delete </button> -->
										
										<?php   include('modal/client-update-modal.php'); ?>
										
									</td>
								</tr>
								<?php
								}
							?>
                        </tbody>
                    </table>
					 
                </div>
                 
            </div>
            </div>
            
        </div>
		
	<?php //   include('../includes/footer.php'); ?>
	
	</section>
	
	 </main>
	
	
    <?php //  require_once 'modal/ClientAdd.php'; ?>
  
    <?php  require_once 'footer1.php'; ?>
	<?php // include ('modal.php'); ?>
	<?php  // include ('stuff_modal.php'); ?>
	
	
	
