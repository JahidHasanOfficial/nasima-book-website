<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once 'head_link.php'; ?>

</head>

<body>

	<?php require_once 'header1.php'; ?>

	<?php

	if (isset($_GET['edit_id'])) {
		$eq = mysqli_query($con, "SELECT * FROM product_type WHERE ptype_id='" . $_GET['edit_id'] . "' ");
		$data = mysqli_fetch_array($eq);
	}

	$TypeName = isset($data) ? $data['type_name'] : '';
	$Status = isset($data) ? $data['status'] : '';
	 

	error_reporting(~E_NOTICE); // avoid notice
	if (isset($_POST['btnsave'])) {

		 
		$user_id = $_POST['user_id'];
		$ptype_id = $_POST['ptype_id'];

		$TypeName = $_POST['TypeName'];
		$Status = $_POST['Status'];
		 

 

		if (empty($TypeName)) {
			$errMSG = "Please Enter Type .";
		}

		// if no error occured, continue ....
		if (!isset($errMSG)) {
			if ($ptype_id == 0) {
				$stmt = $DB_con->prepare('INSERT INTO product_type (user_id,type_name,status) 
                                                                VALUES(:user_id,:TypeName,:Status)');

				$stmt->bindParam(':user_id', $user_id);

				$stmt->bindParam(':TypeName', $TypeName);
				$stmt->bindParam(':Status', $Status);
			 

				if ($stmt->execute()) {
	?>
					<script>
						alert('Successfully Added ...');
						window.location.href = 'product-type';
					</script>
				<?php
				} else {
					$errMSG = "error while inserting....";
				}
			} else {
				$stmt = $DB_con->prepare('UPDATE product_type  SET  type_name =:TypeName, status=:Status WHERE ptype_id=:uid');

				$stmt->bindParam(':TypeName', $TypeName);
				$stmt->bindParam(':Status', $Status);
				
				$stmt->bindParam(':uid', $ptype_id);

				if ($stmt->execute()) {
				?>
					<script>
						alert('Successfully Updated ...');
						window.location.href = 'product-type';
					</script>
	<?php
				} else {
					$errMSG = "Sorry Data Could Not Updated !";
				}
			}
		}
	}
	?>

	<?php require_once 'sidebar.php'; ?>

	<main id="main" class="main">

		<div class="pagetitle">
			<h1>Add Product Type | <span> <a href="product-type"> <i class="bi bi-table"></i> </a> </span> </h1>
			<hr>
		</div>

		<section class="section">
			<div class="row">
				<div class="col-lg-10">

					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<?php
								if (isset($errMSG)) {
								?>
									<div class="alert alert-danger">
										<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
									</div>
								<?php
								} else if (isset($successMSG)) {
								?>
									<div class="alert alert-success">
										<strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
									</div>
								<?php
								}
								?>

							</h5>

							<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" class="form-horizontal">

								<table class="table table-responsive">

									<tr>

										<?php
										$pq = mysqli_query($con, "select * from stuff left join `user` on user.userid=stuff.userid where stuff.userid='" . $_SESSION['id'] . "'");
										while ($pqrow = mysqli_fetch_array($pq)) {
										?>
											<input type="hidden" name="ptype_id" value="<?php echo (!empty($data) ? $data['ptype_id'] : '0') ?>">
											<input class="form-control" type="hidden" name="user_id" value="<?php echo $pqrow['userid']; ?>" />
										<?php } ?>
									</tr>


									<tr>
										<td><label class="control-label"> Type </label></td>
										<td><input class="form-control" type="text" name="TypeName" placeholder="Type Name" value="<?php echo $TypeName ?>" /></td>
									</tr>

									<tr class="d-none">
										<td><label class="control-label"> Status </label></td>
										<td><input class="form-control" type="text" name="Status" value="1" value="<?php echo $Status ?>" /></td>
									</tr>

								</table>
								<tr>
									<td colspan="2"><button type="submit" name="btnsave" class="btn btn-primary">
											<span class="glyphicon glyphicon-save"></span> &nbsp; save
										</button>
									</td>
								</tr>


							</form>


						</div>
					</div>


				</div>


		</section>

	</main>

	<?php require_once 'footer1.php'; ?>


	<script src="js/chosen.js"></script>
	<script type="text/javascript">
		$('.chosen-select').chosen({
			width: "100%"
		});
	</script>

	<?php
	require_once 'summernote_link.php';
	summernote('summernote');
	?>