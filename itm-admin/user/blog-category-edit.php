<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once 'head_link.php'; ?>

</head>

<body>

  <?php require_once 'header1.php'; ?>

  <?php

  if (isset($_GET['edit_id'])) {
    $eq = mysqli_query($con, "SELECT * FROM blog_category WHERE b_c_id='" . $_GET['edit_id'] . "' ");
    $data = mysqli_fetch_array($eq);
  }

  $CatName = isset($data) ? $data['cat_name'] : '';


  error_reporting(~E_NOTICE); // avoid notice
  if (isset($_POST['btnsave'])) {

    $user_id = $_POST['user_id'];
    $id = $_POST['id'];

    $CatName = $_POST['CatName'];


    if (empty($CatName)) {
      $errMSG = "Please Enter Category Name.";
    }


    // if no error occured, continue ....
    if (!isset($errMSG)) {
      if ($id == 0) {
        $stmt = $DB_con->prepare('INSERT INTO blog_category (user_id,cat_name)
                                                                VALUES(:user_id,:CatName)');

        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':CatName', $CatName);

        if ($stmt->execute()) {
  ?>
          <script>
            alert('Successfully Added ...');
            window.location.href = 'blog-category';
          </script>
        <?php
        } else {
          $errMSG = "error while inserting....";
        }
      } else {
        $stmt = $DB_con->prepare('UPDATE blog_category SET cat_name =:CatName WHERE b_c_id=:uid');

        $stmt->bindParam(':CatName', $CatName);
        $stmt->bindParam(':uid', $id);

        if ($stmt->execute()) {
        ?>
          <script>
            alert('Successfully Updated ...');
            window.location.href = 'blog-category';
          </script>
  <?php
        } else {
          $errMSG = "Sorry Data Could Not Updated !";
        }
      }
    }
  }
  ?>

  <?php require_once 'sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1> Blog Category Update | <span> <a href="blog-category"> <i class="bi bi-table"></i> </a> </span> </h1>
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

              <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" class="form-horizontal">

                <table class="table table-responsive">

                  <tr>

                    <?php
                    $pq = mysqli_query($con, "select * from stuff left join `user` on user.userid=stuff.userid where stuff.userid='" . $_SESSION['id'] . "'");
                    while ($pqrow = mysqli_fetch_array($pq)) {
                    ?>
                      <input type="hidden" name="id" value="<?php echo (!empty($data) ? $data['id'] : '0') ?>">
                      <input class="form-control" type="hidden" name="user_id" value="<?php echo $pqrow['userid']; ?>" />
                    <?php } ?>
                  </tr>


                  <tr>
                    <td><label class="control-label">Category Name</label></td>
                    <td><input class="form-control" type="text" name="CatName" placeholder="Enter Category Name" value="<?php echo $CatName ?>" required /></td>
                  </tr>


                </table>
                <tr>
                  <td colspan="2"><button type="submit" name="btnsave" class="btn btn-primary">
                      <span class="glyphicon glyphicon-save"></span> &nbsp; save
                    </button>
                  </td>
                </tr>


              </form>


            </div>
          </div>


        </div>


    </section>

  </main>

  <?php require_once 'footer1.php'; ?>

