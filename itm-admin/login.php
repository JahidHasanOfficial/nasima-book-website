<?php
include('includes/conn.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function check_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = trim($_POST['username']);
    $password = check_input($_POST['password']); // plain input password

    if (empty($username)) {
        echo "<script>
            alert('Username should not be empty!');
            window.location.href = 'login_form';
        </script>";
        exit;
    }

    $date = date("Y-m-d");

    // Fetch user by username
    $query = mysqli_query($con, "SELECT * FROM `user` WHERE username='$username' AND status=1");
    $user  = mysqli_fetch_assoc($query);

    if (!$user) {
        header('location:logout-please');
        exit;
    }

    $dbPassword = $user['password'];
    $passwordValid = false;

    // 1. Check bcrypt
    if (password_verify($password, $dbPassword)) {
        $passwordValid = true;
    }
    // 2. If not bcrypt, check old MD5
    elseif ($dbPassword === md5($password)) {
        $passwordValid = true;

        // OPTIONAL: upgrade old MD5 password to bcrypt automatically
        $newHash = password_hash($password, PASSWORD_BCRYPT);
        mysqli_query($con, "UPDATE `user` SET password='$newHash' WHERE userid='" . $user['userid'] . "'");
    }

    if (!$passwordValid) {
        header('location:log-fail.php');
        exit;
    }

    // Check expiry
    if ($user['expire_date'] < $date) {
        $_SESSION['id'] = $user['userid'];
        header('location:logout-expair');
        exit;
    }

    // Set session
    $_SESSION['id'] = $user['userid'];

    // Redirect by role
    if ($user['access_level'] == "1") {
        echo "<script>alert('Welcome Admin!'); window.location.href='admin/';</script>";
    } elseif ($user['access_level'] == "2") {
        echo "<script>alert('Welcome To Collector!'); window.location.href='collection/index.php';</script>";
    } elseif ($user['access_level'] == "3") {
        echo "<script>alert('Welcome To Accounts Section!'); window.location.href='itm/';</script>";
    } else {
        echo "<script>alert('Welcome To Remico Group !'); window.location.href='user/';</script>";
    }
}
?>
