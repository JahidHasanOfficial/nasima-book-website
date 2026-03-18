<?php
require_once 'itm-admin/includes/conn.php';

if (isset($_POST['place_order'])) {
    $product_id = $_POST['product_id'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $cust_name = $_POST['cust_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment_type = $_POST['payment_type'];
    $delivery_charge = $_POST['delivery_charge'];
    $transaction_id = isset($_POST['transaction_id']) ? $_POST['transaction_id'] : '';

    $total_price = ($price * $qty) + $delivery_charge;
    $create_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO `order_list` (`product_id`, `Price`, `Qty`, `CustName`, `TotalPrice`, `delivery_area`, `PaymentType`, `TransactionID`, `Phone`, `Address`, `create_at`, `status`) 
            VALUES ('$product_id', '$price', '$qty', '$cust_name', '$total_price', '$delivery_charge', '$payment_type', '$transaction_id', '$phone', '$address', '$create_at', '0')";

    if (mysqli_query($con, $sql)) {
        header("Location: book-details.php?view=$product_id&status=success");
    } else {
        header("Location: book-details.php?view=$product_id&status=error");
    }
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
