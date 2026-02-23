<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once 'head_link.php'; ?>

</head>

<body>

  <?php require_once 'header1.php'; ?>

  <?php
  if (isset($_GET['delete_id'])) {
    // select image from db to delete
    $stmt_select = $DB_con->prepare('SELECT userPic FROM about_section WHERE  id =:uid');
    $stmt_select->execute(array(':uid' => $_GET['delete_id']));
    $imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);
    //unlink("user_images/".$imgRow['userPic']);

    // it will delete an actual record from db
    $stmt_delete = $DB_con->prepare('DELETE FROM about_section WHERE  id =:uid');
    $stmt_delete->bindParam(':uid', $_GET['delete_id']);
    $stmt_delete->execute();

    //header("Location:customer.php");
  }

  ?>

  <?php require_once 'sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1> About Us </h1>
      <hr>
    </div>

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <div style="margin-bottom: 2rem;">
                <table width="100%" class="table table-hover" id="dataTables-example">
                  <?php
                  $eq = mysqli_query($con, "select * from about_section  where id=17 and user_id='" . $_SESSION['id'] . "' ORDER BY id ASC   ");
                  while ($eqrow = mysqli_fetch_array($eq)) {
                  ?>

                    <tr>
                      <td><label class="control-label">Title</label></td>
                      <td><?php echo $eqrow['about_title']; ?></td>
                    </tr>


                    <tr>
                      <td><label class="control-label">Details</label></td>
                      <td><?php echo $eqrow['about_subtitle']; ?></td>
                    </tr>

                    <tr>
                      <td><label class="control-label">Details Two</label></td>
                      <td><?php echo $eqrow['details_02']; ?></td>
                    </tr>
                    <tr>
                      <td><label class="control-label">Support 1</label></td>
                      <td><?php echo $eqrow['support1']; ?></td>
                    </tr>
                    <tr>
                      <td><label class="control-label">Support 2</label></td>
                      <td><?php echo $eqrow['support2']; ?></td>
                    </tr>
                    <tr>
                      <td><label class="control-label">Support 3</label></td>
                      <td><?php echo $eqrow['support3']; ?></td>
                    </tr>
                    <tr>
                      <td><label class="control-label">Support 4</label></td>
                      <td><?php echo $eqrow['support4']; ?></td>
                    </tr>

                    <tr>
                      <td><label class="control-label">Image</label></td>
                      <td> <img src="user_images/<?php echo $eqrow['userPic']; ?>" class="img-rounded" height="105px;" width="100px;" /></td>
                    </tr>


                </table>

                <tr>
                  <td><a class="btn btn-info" href="about-edit?edit_id=<?php echo $eqrow['id']; ?>" title="click for edit" onclick="return confirm('Are You Sure To Edit ?')"><span class="bi bi-pencil-square"></span> Edit</a> </td>

                </tr>

              <?php
                  }
              ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php require_once 'footer1.php'; ?>