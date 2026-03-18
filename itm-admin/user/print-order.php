<?php
require_once '../includes/conn.php';

if (!isset($_GET['id'])) {
    header("Location: order-list.php");
    exit();
}

$order_id = mysqli_real_escape_string($con, $_GET['id']);
$query = mysqli_query($con, "SELECT order_list.*, products.product_name FROM order_list 
                            LEFT JOIN products ON products.pro_id = order_list.product_id 
                            WHERE order_list.OrderId = '$order_id'");

if (mysqli_num_rows($query) == 0) {
    echo "Order not found.";
    exit();
}

$order = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        @page {
            size: auto;
            margin: 0mm;
        }
        body { background: #f9f9f9; padding: 50px 0; }
        .invoice-card { background: #fff; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.1); padding: 50px; margin: 0 auto 50px auto; }
        .logo-section img { height: 80px; }
        .invoice-title { color: #dc3545; font-weight: 800; font-size: 2.5rem; letter-spacing: -1px; }
        .table thead th { background: #f8f9fa; border-top: none; }
        .print-btn { position: fixed; bottom: 20px; right: 20px; z-index: 1000; }
        @media print {
            .print-btn, .no-print { display: none !important; }
            body { background: #fff; padding: 0; margin: 1.5cm; }
            .invoice-card { box-shadow: none; border: none; padding: 0; margin: 0; }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="invoice-card mx-auto" style="max-width: 900px;">
        <div class="row mb-5 align-items-center">
            <div class="col-sm-6">
                <div class="logo-section d-flex align-items-center">
                    <img src="../../assets/img/nasima-book-logo.png" alt="Logo" class="me-3">
                    <div>
                        <h2 class="mb-0 fw-bold">Nasima Anwara</h2>
                        <p class="text-muted small mb-0">Book Store & Author</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-sm-end mt-4 mt-sm-0">
                <h1 class="invoice-title mb-0 text-uppercase">Invoice</h1>
                <p class="text-muted mb-0">#INV-<?php echo 1000 + $order['OrderId']; ?></p>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <div class="row mb-5">
            <div class="col-sm-6">
                <p class="text-muted small text-uppercase fw-bold mb-2">Billed To:</p>
                <h5 class="mb-1 text-dark fw-bold"><?php echo $order['CustName']; ?></h5>
                <p class="text-muted mb-0">
                    <i class="bi bi-telephone-fill small me-1"></i> <?php echo $order['Phone']; ?><br>
                    <i class="bi bi-geo-alt-fill small me-1"></i> <?php echo $order['Address']; ?>
                </p>
            </div>
            <div class="col-sm-6 text-sm-end mt-4 mt-sm-0">
                <p class="text-muted small text-uppercase fw-bold mb-2">Order Details:</p>
                <p class="mb-0"><strong>Order Date:</strong> <?php echo date("d M, Y", strtotime($order['create_at'])); ?></p>
                <p class="mb-0"><strong>Status:</strong> 
                    <?php 
                    $status_labels = [0=>'Pending', 1=>'Confirmed', 2=>'Processing', 3=>'Shipped', 4=>'Out for Delivery', 5=>'Delivered', 6=>'Cancelled', 7=>'Returned', 8=>'Refunded', 9=>'Failed'];
                    echo isset($status_labels[$order['status']]) ? $status_labels[$order['status']] : 'unknown'; 
                    ?>
                </p>
                <p class="mb-0"><strong>Payment:</strong> <?php echo $order['PaymentType']; ?></p>
            </div>
        </div>

        <div class="table-responsive mb-5">
            <table class="table table-borderless">
                <thead>
                    <tr class="border-bottom text-muted small text-uppercase">
                        <th class="ps-0">Product Description</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Qty</th>
                        <th class="text-end pe-0">Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-bottom">
                        <td class="ps-0 py-3">
                            <h6 class="mb-1 fw-bold"><?php echo $order['product_name']; ?></h6>
                            <span class="text-muted small">Code ID: <?php echo $order['product_id']; ?></span>
                        </td>
                        <td class="text-center py-4">BDT <?php echo number_format($order['Price'], 2); ?></td>
                        <td class="text-center py-4"><?php echo $order['Qty']; ?></td>
                        <td class="text-end pe-0 py-4 fw-bold">BDT <?php echo number_format($order['Price'] * $order['Qty'], 2); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row justify-content-end">
            <div class="col-sm-6 col-md-5">
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Subtotal (Items):</span>
                    <span class="fw-semibold text-dark">BDT <?php echo number_format($order['Price'] * $order['Qty'], 2); ?></span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Shipping (<?php echo ($order['delivery_area'] == 100) ? 'Inside Dhaka' : 'Outside Dhaka'; ?>):</span>
                    <span class="fw-semibold text-secondary">BDT <?php echo number_format($order['delivery_area'], 2); ?></span>
                </div>
                <hr class="my-3 opacity-25">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="mb-0 fw-bold">Total Payable:</h5>
                    <h4 class="mb-0 fw-bold text-danger">BDT <?php echo number_format($order['TotalPrice'], 2); ?></h4>
                </div>
            </div>
        </div>

        <div class="pt-3 text-center text-muted small">
            <p class="mb-1">Thank you for your purchase from <strong>Nasima Anwara</strong>!</p>
            <p class="mb-0">If you have any questions, please contact us at <br>
            Phone: 01821-946688 <br>
            Email: nasimaanwara16@gmail.com
        </p>
        <p class="mb-1">Design & Developed By <strong>itmsofts.com</strong></p>
            
        </div>
    </div>
</div>

<div class="print-btn no-print">
    <button onclick="window.print()" class="btn btn-danger btn-lg rounded-circle shadow-lg p-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zM3 7a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1zm1 3v2a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2z"/>
        </svg>
    </button>
</div>

<script>
    // Optional: Automatically open print dialog
    // window.onload = function() { window.print(); }
</script>

</body>
</html>
