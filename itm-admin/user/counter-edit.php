<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once 'head_link.php'; ?>

</head>

<body>

  <?php require_once 'header1.php'; ?>


  <?php


  if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    $stmt_edit = $DB_con->prepare('SELECT * FROM count WHERE co_id =:uid');
    $stmt_edit->execute(array(':uid' => $id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
  } else {
    header("Location: count");
  }



  if (isset($_POST['btn_save_updates'])) {

    $Count1 = $_POST['Count1'];
    $Count2 = $_POST['Count2'];
    $Count3 = $_POST['Count3'];
    $Count4 = $_POST['Count4'];

   

    // if no error occured, continue ....
    if (!isset($errMSG)) {
      $stmt = $DB_con->prepare('UPDATE count SET count1=:Count1, count2=:Count2, count3=:Count3, count4=:Count4 WHERE  co_id = :uid');


      $stmt->bindParam(':Count1', $Count1);
      $stmt->bindParam(':Count2', $Count2);
      $stmt->bindParam(':Count3', $Count3);
      $stmt->bindParam(':Count4', $Count4);


      $stmt->bindParam(':uid', $id);

      if ($stmt->execute()) {
  ?>
        <script>
          alert(' Update Successful...');
          window.location.href = 'counter';
        </script>
  <?php
      } else {
        $errMSG = "Sorry Data Could Not Updated !";
      }
    }
  }

  ?>

  <?php require_once 'sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cunt Edit</h1>
      <hr>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

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


                <?php
                if (isset($errMSG)) {
                ?>
                  <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
                  </div>
                <?php
                }
                ?>


                <table class="table table-hover table-responsive">



                  <tr>
                    <td><label class="control-label">Years Experience</label></td>
                    <td><input class="form-control" type="text" name="Count1" value="<?php echo $count1; ?>" required /></td>
                  </tr>

                  <tr>
                    <td><label class="control-label">Projects Completed</label></td>
                    <td><input class="form-control" type="text" name="Count2" value="<?php echo $count2; ?>" required /></td>
                  </tr>

                  <tr>
                    <td><label class="control-label">Happy Clients</label></td>
                    <td><input class="form-control" type="text" name="Count3" value="<?php echo $count3; ?>" required /></td>
                  </tr>

                  <tr class="d-none">
                    <td><label class="control-label">Project In Progress</label></td>
                    <td><input class="form-control" type="text" name="Count4" value="<?php echo $count4; ?>" required /></td>
                  </tr>


                </table>
                <tr>
                  <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-primary">
                      <span class="glyphicon glyphicon-save"></span> Update
                    </button>

                    <a class="btn btn-danger" href="count"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>

                  </td>
                </tr>

              </form>

            </div>
          </div>


        </div>


    </section>

  </main>

  <?php require_once 'footer1.php'; ?>