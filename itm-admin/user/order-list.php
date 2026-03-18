<!DOCTYPE html>
<html lang="en"> 

<head>
<?php   require_once 'head_link.php'; ?>

</head>

<body>
 
<?php   require_once 'header1.php'; ?> 

<?php
if (isset($_GET['delete_id'])) {
	$delete_id = mysqli_real_escape_string($con, $_GET['delete_id']);
	$sql_delete = "DELETE FROM order_list WHERE OrderId = '$delete_id'";
	if (mysqli_query($con, $sql_delete)) {
		header("Location: order-list.php?msg=deleted");
	} else {
		header("Location: order-list.php?msg=error");
	}
	exit();
}
?>

<?php  require_once 'sidebar.php'; ?>


  <main id="main" class="main">

    <div class="pagetitle">
     <h1>Order Lists   </h1>
       <hr>
    </div> 

    <section class="section">
      <div class="row">
	  
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             
              <table class="table table-hover datatable">
                <thead>
			<tr>


				<th> SL</th>
				<th> Date</th>
				<th> Order Id </th>
				<th> Customer </th>
				<th> Product </th>
				<th> Total </th>
				<th> Quantity</th>
				<th> Payment</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
						
               <tbody id="tbody">
			<?php
			$sl = 0;
			$eq = mysqli_query($con, "SELECT order_list.*, products.product_name FROM order_list
            LEFT JOIN products ON products.pro_id = order_list.product_id
			ORDER BY order_list.OrderId DESC");
			
			if (!$eq) {
				echo "Error: " . mysqli_error($con);
			} else {
				while ($eqrow = mysqli_fetch_array($eq)) {
			?>
				<tr>

					<td><?php echo  ++$sl; ?></td>
					<td><?php echo date("d-M-Y | h:i:sa", strtotime($eqrow['create_at'])); ?></td>
					<td>Order #<?php echo $eqrow['OrderId']; ?></td> 
					<td>
						<strong><?php echo $eqrow['CustName']; ?></strong><br>
						<small class="text-muted"><i class="bi bi-telephone"></i> <?php echo $eqrow['Phone']; ?></small><br>
						<small class="text-muted"><i class="bi bi-geo-alt"></i> <?php echo $eqrow['Address']; ?></small>
					</td>
					<td><?php echo $eqrow['product_name']; ?> <br><small class="text-muted">Code: <?php echo $eqrow['product_id']; ?></small></td>
					<td>
						<strong>BDT <?php echo $eqrow['TotalPrice']; ?></strong><br>
						<small class="text-muted"><?php echo ($eqrow['delivery_area'] == 100) ? 'Inside Dhaka' : 'Outside Dhaka'; ?> (<?php echo $eqrow['delivery_area']; ?>)</small>
					</td>
					<td><?php echo $eqrow['Qty']; ?></td>
					<td>
						<span class="badge bg-info text-dark"><?php echo $eqrow['PaymentType']; ?></span>
						<?php if (!empty($eqrow['TransactionID'])) { ?>
							<br><small class="text-muted">TxID: <?php echo $eqrow['TransactionID']; ?></small>
						<?php } ?>
					</td>

					<td>
						<?php 
						$status = $eqrow['status'];
						switch($status) {
							case 0: echo '<span class="badge bg-secondary">Pending</span>'; break;
							case 1: echo '<span class="badge bg-primary">Confirmed</span>'; break;
							case 2: echo '<span class="badge bg-info text-dark">Processing</span>'; break;
							case 3: echo '<span class="badge bg-primary">Shipped</span>'; break;
							case 4: echo '<span class="badge bg-warning text-dark">Out for Delivery</span>'; break;
							case 5: echo '<span class="badge bg-success">Delivered</span>'; break;
							case 6: echo '<span class="badge bg-danger">Cancelled</span>'; break;
							case 7: echo '<span class="badge bg-dark">Returned</span>'; break;
							case 8: echo '<span class="badge bg-light text-dark shadow-sm">Refunded</span>'; break;
							case 9: echo '<span class="badge bg-black">Failed</span>'; break;
							default: echo '<span class="badge bg-secondary">Unknown</span>'; break;
						}
						?>
					</td>
					
					<td>
						<div class="btn-group">
							<a class="btn btn-sm btn-outline-primary" href="print-order?id=<?php echo $eqrow['OrderId']; ?>" target="_blank" title="Print Order"><i class="bi bi-printer"></i></a> 
							<a class="btn btn-sm btn-outline-success" href="order-edit?edit_id=<?php echo $eqrow['OrderId']; ?>" title="Edit Order"><i class="bi bi-pencil"></i></a> 
							<a class="btn btn-sm btn-outline-danger" href="?delete_id=<?php echo $eqrow['OrderId']; ?>" title="Delete Order" onclick="return confirm('Are you sure you want to delete this order?')"><i class="bi bi-trash"></i></a> 
						</div>
					</td>


				</tr>
			<?php
				}
			}
			?>

		</tbody>
              </table>
            
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  
  <?php  require_once 'footer1.php'; ?>