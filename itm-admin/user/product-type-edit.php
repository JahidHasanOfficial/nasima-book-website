<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once 'head_link.php'; ?>

</head>

<body>

	<?php require_once 'header1.php'; ?>
	<?php
	error_reporting(~E_NOTICE);
	if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM product_type WHERE ptype_id =:uid');
		$stmt_edit->execute(array(':uid' => $id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	} else {
		header("Location: index");
	}



	if (isset($_POST['btn_save_updates'])) {
			$TypeName = $_POST['TypeName'];
		$Status = $_POST['Status'];


		 


		// if no error occured, continue ....
		if (!isset($errMSG)) {
			$stmt = $DB_con->prepare('UPDATE product_type  SET  type_name =:TypeName, status=:Status WHERE ptype_id=:uid');

			$stmt->bindParam(':TypeName', $TypeName);
			$stmt->bindParam(':Status', $Status);

		 
			$stmt->bindParam(':uid', $id);

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

	?>

	<?php require_once 'sidebar.php'; ?>

	<main id="main" class="main">

		<div class="pagetitle">
			<h1>Product Type Edit</h1>
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

							<form method="post" enctype="multipart/form-data" class="form-horizontal">


								<?php
								if (isset($errMSG)) {
								?>
									<div class="alert alert-danger">
										<span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
									</div>
								<?php
								}
								?>

								<table class="table table-hover table-responsive">
									<tr>
										<td><label class="control-label"> Type </label></td>
										<td><input class="form-control" type="text" name="TypeName" placeholder="Type Name" value="<?php echo $type_name ?>" /></td>
									</tr>

									<tr>
										<td><label class="control-label"> Status </label></td>
										<td><input class="form-control" type="text" name="Status"   value="<?php echo $status ?>" /></td>
									</tr>


 

								</table>

								<tr>
									<td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-primary">
											<span class="glyphicon glyphicon-save"></span> Update
										</button>

										<a class="btn btn-danger" href="service"> <span class="glyphicon glyphicon-backward"></span> cancel </a>

									</td>
								</tr>

							</form>


						</div>
					</div>


				</div>


		</section>

	</main>

	<?php require_once 'footer1.php'; ?>



	<?php
	require_once 'summernote_link.php';
	summernote('summernote');
	?>