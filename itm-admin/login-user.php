<?php
include('includes/conn.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  function check_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $email = check_input($_POST['email']);
  $fpassword = md5(check_input($_POST['password'])); // ⚠️ Better use password_hash later

  // ✅ Email validation
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    ?>
    <script>
      window.alert('Invalid email format! Please enter a valid email address.');
      window.location.href = 'login_form';
    </script>
    <?php
    exit;
  }

  $date = date("Y-m-d");

  // ✅ Check active user
  $lquery = mysqli_query($con, "SELECT * FROM `user_profile` WHERE email='$email' AND password='$fpassword' AND status=1");
  $lrow = mysqli_fetch_array($lquery);
  $lnum = mysqli_num_rows($lquery);

  if ($lnum == 0) {
    header('location:logout-please');
    exit;
  }

  // ✅ Check user again without status
  $lquery = mysqli_query($con, "SELECT * FROM `user_profile` WHERE email='$email' AND password='$fpassword'");
  $lrow = mysqli_fetch_array($lquery);
  $lnum = mysqli_num_rows($lquery);

  if ($lnum == 0) {
    header('location:log-fail.php');
    exit;
  } else {
    $_SESSION['id'] = $lrow['userid'];

    if ($lrow['access_level'] == "5") {
      ?>
      <script>
        window.alert('Welcome User !');
        window.location.href = 'user-dashboard/';
      </script>
      <?php
    } else {
      ?>
      <script>
        window.alert('Welcome To LSE Decor !');
        window.location.href = 'user/';
      </script>
      <?php
    }
  }
}
?>
