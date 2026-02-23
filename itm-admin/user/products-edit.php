<?php require_once 'header.php'; ?>

<?php
if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
	$id = $_GET['edit_id'];
	$stmt_edit = $DB_con->prepare('SELECT * FROM product WHERE product_id=:uid');
	$stmt_edit->execute(array(':uid' => $id));
	$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	extract($edit_row);
} else {
	header("Location: products");
}

if (isset($_POST['btn_save_updates'])) {

	//$Product_Code = $_POST['Product_Code'];
	$CourseName = $_POST['CourseName'];
	$Duration = $_POST['Duration'];
	$CourseFee = $_POST['CourseFee'];
	$MyCost = $_POST['MyCost'];

	// if no error occured, continue ....
	if (!isset($errMSG)) {
		$stmt = $DB_con->prepare('UPDATE product 
									   SET   product_name=:CourseName,
										     duration=:Duration, 
										     course_fee=:CourseFee, 
										     my_cost=:MyCost 
											 
								       WHERE  product_id = :uid');

		//$stmt->bindParam(':Product_Code',$Product_Code);
		$stmt->bindParam(':CourseName', $CourseName);

		$stmt->bindParam(':Duration', $Duration);
		$stmt->bindParam(':CourseFee', $CourseFee);
		$stmt->bindParam(':MyCost', $MyCost);

		$stmt->bindParam(':uid', $id);

		if ($stmt->execute()) {
?>
			<script>
				alert('Data Successfully Add ...');
				window.location.href = 'products';
			</script>
<?php
		} else {
			$errMSG = "Sorry Data Could Not Updated !";
		}
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/buttons.css">

	<link rel="stylesheet" href="style.css">

</head>

<body>

	<center>
		<h4>
			<ol class="breadcrumb">
				<li class="active"> Course Edit / Update </li>
			</ol>
		</h4>
	</center>

	<?php require_once 'courses-info-left-menu-link.php'; ?>
	<div class="col-md-8">
	
	
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
				<td><label class="control-label">Course Name </label></td>
				<td><input class="form-control" type="text" name="CourseName" value="<?php echo $product_name; ?>"></td>
			</tr>

			<tr>
				<td><label class="control-label">Course Duration </label></td>
				<td>
					<input class="form-control" type="text" id="Duration" name="Duration" value="<?php echo $duration; ?>" />
				</td>
			</tr>

			<tr>
				<td><label class="control-label">Course Fee</label></td>
				<td>
					<input class="form-control" type="text" id="CourseFee" name="CourseFee" value="<?php echo $course_fee; ?>" />
				</td>
			</tr>

			<tr>
				<td><label class="control-label">My Cost</label></td>
				<td>
					<input class="form-control" type="text" id="MyCost" name="MyCost" value="<?php echo $my_cost; ?>" />
				</td>
			</tr>


			<tr>
				<td></td>
				<td></td>
			</tr>

		</table>
		<button type="submit" name="btn_save_updates" class="btn btn-primary"> <span class="glyphicon glyphicon-save"></span> Update </button>
		<a class="btn btn-danger" href="products"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>

	</form>


	</div>


<div class="col-md-12">
<?php include('../includes/footer.php'); ?>

</div>