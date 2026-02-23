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
      <h1> Industries Contents</h1>
      <hr>
    </div>

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <div style="margin-bottom: 2rem;">
               <table class="table table-hover datatable">
				
				<thead class="bg-light">
									<tr>
										<th> SL</th>
										<th>Title</th>
										<th>Image</th> 
										<th>Edit</th> 
									</tr>
								</thead>
								<tbody id="tbody">
									<?php
									$sl=0;
                  $eq = mysqli_query($con, "select * from about_section  where type=2 and user_id='" . $_SESSION['id'] . "' ORDER BY id ASC   ");
                  while ($eqrow = mysqli_fetch_array($eq)) {

                  ?>
										<tr>
											<td class="align-middle"><?php echo  ++$sl; ?></td>
											<td class="align-middle"><?php echo $eqrow['about_title']; ?></td>
											<td class="align-middle"> <img src="user_images/<?php echo $eqrow['userPic']; ?>" class="img-rounded" height="105px;" width="100px;" /></td>
											<td class="align-middle"> <a class="btn btn-info" href="industries-edit?edit_id=<?php echo $eqrow['id']; ?>" title="click for edit" onclick="return confirm('Are You Sure To Edit ?')"><span class="bi bi-pencil"></span> Edit</a></td>
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
      </div>
    </section>

  </main>

  <?php require_once 'footer1.php'; ?>