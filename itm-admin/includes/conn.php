<?php
error_reporting(0);
$con = mysqli_connect("localhost", "root", "", "remico_agro_web");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL:" . mysqli_connect_error();
};
