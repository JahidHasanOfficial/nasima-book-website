<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'head_link.php'; ?>
</head>

<body>

    <?php require_once 'header1.php'; ?>
    <?php require_once 'sidebar.php'; ?>

    <?php
    if (isset($_POST['update_order'])) {
        $order_id = $_POST['order_id'];
        $status = $_POST['status'];
        $cust_name = $_POST['cust_name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $sql = "UPDATE order_list SET CustName = '$cust_name', Phone = '$phone', Address = '$address', Status = '$status' WHERE OrderId = '$order_id'";
        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Order updated successfully!'); window.location.href='order-list.php';</script>";
        } else {
            echo "<script>alert('Error updating order: " . mysqli_error($con) . "');</script>";
        }
    }

    if (isset($_GET['edit_id'])) {
        $edit_id = $_GET['edit_id'];
        $query = mysqli_query($con, "SELECT * FROM order_list WHERE OrderId = '$edit_id'");
        $order = mysqli_fetch_array($query);
    } else {
        header("Location: order-list.php");
        exit();
    }
    ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Order #<?php echo $order['OrderId']; ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="order-list.php">Orders</a></li>
                    <li class="breadcrumb-item active">Edit Order</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Order Information</h5>
                            <form action="" method="POST">
                                <input type="hidden" name="order_id" value="<?php echo $order['OrderId']; ?>">
                                
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Customer Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="cust_name" class="form-control" value="<?php echo $order['CustName']; ?>" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone" class="form-control" value="<?php echo $order['Phone']; ?>" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea name="address" class="form-control" rows="3" required><?php echo $order['Address']; ?></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label text-danger fw-bold">Order Status</label>
                                    <div class="col-sm-9">
                                        <select name="status" class="form-select border-danger">
                                            <option value="0" <?php echo ($order['Status'] == 0) ? 'selected' : ''; ?>>Pending</option>
                                            <option value="1" <?php echo ($order['Status'] == 1) ? 'selected' : ''; ?>>Confirmed</option>
                                            <option value="2" <?php echo ($order['Status'] == 2) ? 'selected' : ''; ?>>Processing</option>
                                            <option value="3" <?php echo ($order['Status'] == 3) ? 'selected' : ''; ?>>Shipped</option>
                                            <option value="4" <?php echo ($order['Status'] == 4) ? 'selected' : ''; ?>>Out for Delivery</option>
                                            <option value="5" <?php echo ($order['Status'] == 5) ? 'selected' : ''; ?>>Delivered</option>
                                            <option value="6" <?php echo ($order['Status'] == 6) ? 'selected' : ''; ?>>Cancelled</option>
                                            <option value="7" <?php echo ($order['Status'] == 7) ? 'selected' : ''; ?>>Returned</option>
                                            <option value="8" <?php echo ($order['Status'] == 8) ? 'selected' : ''; ?>>Refunded</option>
                                            <option value="9" <?php echo ($order['Status'] == 9) ? 'selected' : ''; ?>>Failed</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <a href="order-list.php" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" name="update_order" class="btn btn-primary">Update Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Payment & Totals</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Payment Method
                                    <span class="badge bg-info text-dark"><?php echo $order['PaymentType']; ?></span>
                                </li>
                                <?php if (!empty($order['TransactionID'])) { ?>
                                <li class="list-group-item">
                                    <small class="text-muted">Transaction ID:</small><br>
                                    <strong><?php echo $order['TransactionID']; ?></strong>
                                </li>
                                <?php } ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Product Price
                                    <span>BDT <?php echo $order['Price']; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Quantity
                                    <span><?php echo $order['Qty']; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">
                                    Total Amount
                                    <span class="text-danger">BDT <?php echo $order['TotalPrice']; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'footer1.php'; ?>
</body>

</html>
