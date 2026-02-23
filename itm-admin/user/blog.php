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
    $stmt_select = $DB_con->prepare('SELECT userPic FROM blog_section WHERE  id =:uid');
    $stmt_select->execute(array(':uid' => $_GET['delete_id']));
    $imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);
    //unlink("user_images/".$imgRow['userPic']);

    // it will delete an actual record from db
    $stmt_delete = $DB_con->prepare('DELETE FROM blog_section WHERE  id =:uid');
    $stmt_delete->bindParam(':uid', $_GET['delete_id']);
    $stmt_delete->execute();

    //header("Location:customer.php");
  }

  ?>

  <?php require_once 'sidebar.php'; ?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog Lists | <span> <a href="blog-add"> <i class="bi bi-plus-square-fill"></i> </a> </span> </h1>
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
                    <th>Blog Title</th>
                    <th>Picture</th>
                   <th>Action</th>
                  </tr>
                </thead>


                <tbody id="tbody">
                  <?php
                  $sl = 0;
                  // Check if category_id column exists
                  $check_column = mysqli_query($con, "SHOW COLUMNS FROM blog_section LIKE 'category_id'");
                  $category_column_exists = (mysqli_num_rows($check_column) > 0);

                  if ($category_column_exists) {
                    $query = "select blog_section.*, blog_category.cat_name from blog_section left join blog_category on blog_section.category_id = blog_category.b_c_id where blog_section.user_id='" . $_SESSION['id'] . "' ORDER BY blog_section.id desc";
                  } else {
                    $query = "select * from blog_section where user_id='" . $_SESSION['id'] . "' ORDER BY id desc";
                  }

                  $eq = mysqli_query($con, $query);
                  if (!$eq) {
                    echo "Query failed: " . mysqli_error($con);
                    exit;
                  }
                  while ($eqrow = mysqli_fetch_array($eq)) {
                  ?>
                    <tr>
                      <td><?php echo  ++$sl; ?></td>
                       <td><?php echo $eqrow['title']; ?></td>
                      <td> <img src="user_images/<?php echo $eqrow['userPic']; ?>" class="img-rounded" height="65px;" width="60px;" /></td>

                      <td><a class="btn btn-info" href="blog-edit?edit_id=<?php echo $eqrow['id']; ?>" title="click for edit" onclick="return confirm('Are You Sure To Edit ?')"><span class="bi bi-pencil-square"></span></a>
                 <a class="btn btn-danger" href="?delete_id=<?php echo $eqrow['id']; ?>" title="click for delete" onclick="return confirm('Are You Sure To Delete ?')"><span class="bi bi-trash"></span></a> </td>


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