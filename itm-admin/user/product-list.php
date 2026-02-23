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
        $stmt_select = $DB_con->prepare('SELECT photo FROM products WHERE  pro_id =:uid');
        $stmt_select->execute(array(':uid' => $_GET['delete_id']));
        $imgRow = $stmt_select->fetch(PDO::FETCH_ASSOC);
        //unlink("user_images/".$imgRow['userPic']);

        // it will delete an actual record from db
        $stmt_delete = $DB_con->prepare('DELETE FROM products WHERE  pro_id =:uid');
        $stmt_delete->bindParam(':uid', $_GET['delete_id']);
        $stmt_delete->execute();

        //header("Location:customer.php");
    }

    ?>

    <?php require_once 'sidebar.php'; ?>


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Product List | <span> <a href="product-list-add"> <i class="bi bi-plus-square-fill"></i> </a> </span> </h1>
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
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Weight</th>
                                        <th>Price</th>
                                        <th>Photo</th>

                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>


                                <tbody id="tbody">
                                    <?php
                                    $sl = 0;
                                    $eq = mysqli_query($con, "SELECT * FROM products  WHERE user_id='" . $_SESSION['id'] . "' ORDER BY pro_id desc   ");
                                    while ($eqrow = mysqli_fetch_array($eq)) {

                                    ?>
                                        <tr>
                                            <td class="align-middle"><?php echo  ++$sl; ?></td>
                                            <td class="align-middle"><?php echo $eqrow['product_name']; ?></td>
                                            <td class="align-middle"><?php echo mysqli_fetch_array(mysqli_query($con, 'SELECT product_category.cat_name FROM product_category WHERE cat_id="' . $eqrow['category_id'] . '"'))['cat_name'] ?? ''; ?></td>
                                            <td class="align-middle"><?php echo $eqrow['weight']; ?></td>
                                            <td class="align-middle"><?php echo number_format($eqrow['price']); ?></td>
                                            <td class="align-middle"> <img src="user_images/<?php echo $eqrow['photo']; ?>" class="img-rounded" height="65px;" width="60px;" /></td>

                                            <td class="align-middle"><a class="btn btn-info" href="product-list-add?edit_id=<?php echo $eqrow['pro_id']; ?>" title="click for edit" onclick="return confirm('Are You Sure To Edit ?')"><span class="bi bi-pencil-square"></span> </a> </td>
                                            <td class="align-middle"><a class="btn btn-danger" href="?delete_id=<?php echo $eqrow['pro_id']; ?>" title="click for delete" onclick="return confirm('Are You Sure To Delete ?')"><span class="bi bi-trash"></span> </a> </td>


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