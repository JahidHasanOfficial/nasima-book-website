<?php
$con = mysqli_connect("localhost", "root", "", "nasimanwara_web_db");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL:" . mysqli_connect_error();
};
?>

  <?php 
header('Content-Type: text/html; charset=utf-8'); 
mysqli_set_charset($con, "utf8");
  ?> 


