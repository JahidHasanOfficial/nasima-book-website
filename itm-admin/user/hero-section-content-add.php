<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once 'head_link.php'; ?>

</head>
<body>

  <?php require_once 'header1.php'; ?>

  <?php

  error_reporting(~E_NOTICE); // avoid notice
  if (isset($_POST['btnsave'])) {

    $user_id = $_POST['user_id'];
    $Title = $_POST['Title'];
    $SubTitle = $_POST['SubTitle'];

    if (empty($Title)) {
      $errMSG = "Please Enter Title.";
    } else {
    }

    // if no error occured, continue ....
    if (!isset($errMSG)) {
      $stmt = $DB_con->prepare('INSERT INTO hero_section_content (user_id, title, subtitle) 
														                      	VALUES(:user_id, :Title, :SubTitle)');

      $stmt->bindParam(':user_id', $user_id);
      $stmt->bindParam(':Title', $Title);
      $stmt->bindParam(':SubTitle', $SubTitle);

      if ($stmt->execute()) {
  ?>
        <script>
          alert('Successfully Added ...');
          window.location.href = 'hero-section-content';
        </script>
  <?php
      } else {
        $errMSG = "error while inserting....";
      }
    }
  }
  ?>

  <?php require_once 'sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add New Hero Section Content | <span> <a href="hero-section-content"> <i class="bi bi-table"></i> </a> </span> </h1>
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

              <form method="post" enctype="multipart/form-data" class="form-horizontal">
                <table class="table table-hover table-responsive">

                  <tr>

                    <?php
                    $pq = mysqli_query($con, "select * from stuff left join `user` on user.userid=stuff.userid where stuff.userid='" . $_SESSION['id'] . "'");
                    while ($pqrow = mysqli_fetch_array($pq)) {
                    ?>
                      <input class="form-control" type="hidden" name="user_id" value="<?php echo $pqrow['userid']; ?>" />
                    <?php } ?>
                  </tr>

                  <tr>
                    <td><label class="control-label"> Title </label></td>
                    <td><input class="form-control" type="text" name="Title" placeholder="Title" value="<?php echo $Title; ?>" /></td>
                  </tr>

                  <tr>
                    <td><label class="control-label"> Sub Title </label></td>
                    <td><input class="form-control" type="text" name="SubTitle" placeholder="Sub Title" value="<?php echo $SubTitle; ?>" /></td>
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


  <script src="js/chosen.js"></script>
  <script type="text/javascript">
    $('.chosen-select').chosen({
      width: "100%"
    });
  </script>