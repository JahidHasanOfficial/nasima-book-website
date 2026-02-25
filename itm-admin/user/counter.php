<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once 'head_link.php'; ?>

</head>

<body>

  <?php require_once 'header1.php'; ?>


  <?php require_once 'sidebar.php'; ?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Counter </h1>
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
                    <th>SL</th>
                    <th>Years Experience</th>
                    <th>Projects Completed</th>
                    <th>Happy Clients</th>
                    <!-- <th>Project In Progress</th> -->
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody id="tbody">
                  <?php
                  $sl = 0;
                  $eq = mysqli_query($con, "select * from count  ORDER BY co_id DESC ");
                  while ($eqrow = mysqli_fetch_array($eq)) {
                  ?>
                    <tr>

                      <td><?php echo  ++$sl; ?></td>
                      <td><?php echo $eqrow['count1']; ?></td>
                      <td><?php echo $eqrow['count2']; ?></td>
                      <td><?php echo $eqrow['count3']; ?></td>
                      <!-- <td><?php echo $eqrow['count4']; ?></td> -->


                      <td>
                        <a class="btn btn-info" href="counter-edit?edit_id=<?php echo $eqrow['co_id']; ?>" title="click for edit" onclick="return confirm('Do you want to Edit ?')"><span class="bi bi-pencil-square"></span> </a>
                         </td>


                    </tr>
                  <?php } ?>

                </tbody>


              </table>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <?php require_once 'footer1.php'; ?>