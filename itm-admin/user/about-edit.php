<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once 'head_link.php'; ?>

</head>

<body>

  <?php require_once 'header1.php'; ?>
  <?php
  error_reporting(~E_NOTICE);
  if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
    $customer_id = $_GET['edit_id'];
    $stmt_edit = $DB_con->prepare('SELECT * FROM about_section WHERE id =:uid');
    $stmt_edit->execute(array(':uid' => $customer_id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
  } else {
    header("Location: index");
  }

  if (isset($_POST['btn_save_updates'])) {
    $AboutTitle = $_POST['AboutTitle'];
    $AboutSubTitle = $_POST['AboutSubTitle'];
    $Details02 = $_POST['Details02'];
    $Support1 = $_POST['Support1'];
    $Support2 = $_POST['Support2'];
    $Support3 = $_POST['Support3'];
    $Support4 = $_POST['Support4'];

    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];

    if ($imgFile) {
      $upload_dir = 'user_images/'; // upload directory	
      $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

      $userpic = $ImageNameWithSlug . "-" . rand(1000, 1000000) . "-" . $imgFile;

      if (in_array($imgExt, $valid_extensions)) {
        if ($imgSize < 5000000) {
          unlink($upload_dir . $edit_row['userPic']);
          move_uploaded_file($tmp_dir, $upload_dir . $userpic);
        } else {
          $errMSG = "Sorry, your file is too large it should be less then 5MB";
        }
      } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      }
    } else {
      // if no image selected the old image remain as it is.
      $userpic = $edit_row['userPic']; // old image from database
    }


    // if no error occured, continue ....
    if (!isset($errMSG)) {
      $stmt = $DB_con->prepare('UPDATE about_section 
									     SET  about_title =:AboutTitle,
											  about_subtitle=:AboutSubTitle,
											  details_02=:Details02,
                          support1=:Support1,
                          support2=:Support2,
                          support3=:Support3,
                          support4=:Support4,
										     userPic=:upic 
								       WHERE id=:uid');

      $stmt->bindParam(':AboutTitle', $AboutTitle);
      $stmt->bindParam(':AboutSubTitle', $AboutSubTitle);
      $stmt->bindParam(':Details02', $Details02);
      $stmt->bindParam(':Support1', $Support1);
      $stmt->bindParam(':Support2', $Support2);
      $stmt->bindParam(':Support3', $Support3);
      $stmt->bindParam(':Support4', $Support4);
      $stmt->bindParam(':upic', $userpic);
      $stmt->bindParam(':uid', $id);

      if ($stmt->execute()) {
  ?>
        <script>
          alert('Successfully Updated ...');
          window.location.href = 'about';
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
      <h1>Edit About Us</h1>
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
                    <td><label class="control-label">Title</label></td>
                    <td><input class="form-control" type="text" name="AboutTitle" placeholder="About Title" value="<?php echo $about_title; ?>" /></td>
                  </tr>


                  <tr>
                    <td><label class="control-label">Details</label></td>
                    <td><textarea class="tinymce-editor" name="AboutSubTitle" placeholder="Please Write Here "><?php echo $about_subtitle; ?></textarea></td>
                  </tr>

                  <tr class="">
                    <td><label class="control-label">Details 02</label></td>
                    <td><textarea class="tinymce-editor" name="Details02" placeholder="Please Write Here "><?php echo $details_02; ?></textarea></td>
                  </tr>

                  <tr>
                    <td><label class="control-label">Support 1</label></td>
                    <td><input class="form-control" type="text" name="Support1" placeholder="Support 1" value="<?php echo $support1; ?>" /></td>
                  </tr>
                  <tr>
                    <td><label class="control-label">Support 2</label></td>
                    <td><input class="form-control" type="text" name="Support2" placeholder="Support 2" value="<?php echo $support2; ?>" /></td>
                  </tr>
                  <tr>
                    <td><label class="control-label">Support 3</label></td>
                    <td><input class="form-control" type="text" name="Support3" placeholder="Support 3" value="<?php echo $support3; ?>" /></td>
                  </tr>
                  <tr>
                    <td><label class="control-label">Support 4</label></td>
                    <td><input class="form-control" type="text" name="Support4" placeholder="Support 4" value="<?php echo $support4; ?>" /></td>
                  </tr>


                  <tr>
                    <td><label class="control-label">Picture </label></td>
                    <td>
                      <?php
                      if (!empty($userPic)) { ?>
                        <p><img id="imagePreview" src="user_images/<?php echo $userPic ?>" height="150" width="150" /></p>
                        <input type="hidden" name="oldImage" value="<?= $userPic ?>">
                      <?php  }
                      ?>
                      <p><img id="imagePreview" src="#" alt="Image Preview" style="display:none;" height="150" width="150" /></p>
                      <input class="input-group" type="file" name="user_image" accept="image/*" onchange="previewImage(event)" />
                      <!-- <input class="input-group" type="file" name="user_image" accept="image/*" /> -->
                    </td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                </table>

                <button type="submit" name="btn_save_updates" class="btn btn-primary">
                  <span class="glyphicon glyphicon-save"></span> Update
                </button>

                <a class="btn btn-danger" href="web-about-sec"> <span class="glyphicon glyphicon-backward"></span> cancel </a>



              </form>


            </div>
          </div>


        </div>


    </section>

  </main>

  <?php require_once 'footer1.php'; ?>