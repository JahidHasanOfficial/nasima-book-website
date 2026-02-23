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
    $stmt_select = $DB_con->prepare('SELECT userPic FROM teacher_section WHERE  id =:uid');
    $stmt_select->execute(array(':uid' => $_GET['delete_id']));
    $imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);
    //unlink("user_images/".$imgRow['userPic']);

    //header("Location:customer.php");
  }

  ?>

  <?php require_once 'sidebar.php'; ?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Teacher Member | <span> <a href="teacher-add"> <i class="bi bi-plus-square-fill"></i> </a> </span> </h1>
      <hr>
    </div>

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <table class="table table-hover datatable">
                <thead class="bg-light">
                  <tr>

                    <th> SL</th>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>

                    <th>Action</th>
                  </tr>
                </thead>


               <tbody id="tbody">
  <?php
  $sl = 0;
  $eq = mysqli_query($con, "SELECT * FROM profiles  ORDER BY id ASC");
  while ($eqrow = mysqli_fetch_array($eq)) {
  ?>
    <tr>
      <td><?php echo ++$sl; ?></td>
      <td><?php echo $eqrow['id']; ?></td>
      <td><?php echo $eqrow['first_name']; ?></td>
      <td><?php echo $eqrow['email']; ?></td>
      <!-- যদি প্রোফাইল ইমেজ দেখাতে চান -->
      <!-- <td><img src="<?php echo $eqrow['profile_image']; ?>" class="img-rounded" height="65px" width="60px" /></td> -->

      <td>
        <a class="btn btn-info" 
           href="profile-edit.php?edit_id=<?php echo $eqrow['id']; ?>" 
           title="Click for edit" 
           onclick="return confirm('Are You Sure To Edit ?')">
          <span class="bi bi-pencil-square"></span> Edit
        </a>
      </td>
    </tr>
  <?php
  }
  ?>
</tbody>

              </table>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <?php require_once 'footer1.php'; ?>