<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'head_link.php'; ?>

</head>

<body>

    <?php require_once 'header1.php'; ?>

    <?php

    if (isset($_GET['edit_id'])) {
        $eq = mysqli_query($con, "SELECT * FROM products WHERE pro_id='" . $_GET['edit_id'] . "' ORDER BY pro_id DESC");
        $data = mysqli_fetch_array($eq);
    }

    $category_id = isset($data) ? $data['category_id'] : '';
    $pdct_typ = isset($data) ? $data['pdct_typ'] : '';
    $product_name = isset($data) ? $data['product_name'] : '';
    $short_details = isset($data) ? $data['short_details'] : '';
    $details = isset($data) ? $data['details'] : '';
    $size = isset($data) ? $data['size'] : '';
    $weight = isset($data) ? $data['weight'] : '';
    $price = isset($data) ? $data['price'] : '';
    $offer_price = isset($data) ? $data['offer_price'] : '';
    $photo = isset($data) ? $data['photo'] : '';


    error_reporting(~E_NOTICE); // avoid notice
    if (isset($_POST['btnsave'])) {

        $oldImage = $_POST['oldImage'];
        $user_id = $_POST['user_id'];
        $pro_id = $_POST['pro_id'];

        $category_id = $_POST['category_id'];
        $pdct_typ = $_POST['pdct_typ'];
        $product_name = $_POST['product_name'];
        $short_details = $_POST['short_details'];
        $details = $_POST['details'];
        $size = $_POST['size'];
        $weight = $_POST['weight'];
        $price = $_POST['price'];
        $OfferPrice = $_POST['OfferPrice'];


        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];


        if (empty($product_name)) {
            $errMSG = "Please Enter Product Name .";
        } else {
            $upload_dir = 'user_images/'; // upload directory

            if (!empty($imgFile)) {
                $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

                // valid image extensions
                $valid_extensions = array('jpeg', 'jpg', 'png', 'webp'); // valid extensions


                if (in_array($imgExt, $valid_extensions)) {
                    //$photo = rand(1000, 1000000) . "." . $imgExt;
					$photo ="$PhotoName-" .rand(1000, 1000000). "-" .$imgFile;
                    if ($imgSize < 5000000) {
                        if (!empty($oldImage)) {
                            if (file_exists($upload_dir . $oldImage)) {
                                unlink($upload_dir . $oldImage);
                            }
                        }

                        move_uploaded_file($tmp_dir, $upload_dir . $photo);
                    } else {
                        $errMSG = "Sorry, your file is too large.";
                    }
                }
            } else {
                $photo = $oldImage;
            }
        }


        // if no error occured, continue ....
        if (!isset($errMSG)) {
            if ($pro_id == 0) {
                $stmt = $DB_con->prepare('INSERT INTO products (user_id,category_id,pdct_typ,product_name,short_details,details, size, weight, price,offer_price, photo) 
                                                        VALUES(:user_id,:category_id,:pdct_typ,:product_name,:short_details, :details,:size, :weight,:price,:OfferPrice, :upic)');

                $stmt->bindParam(':user_id', $user_id);

                $stmt->bindParam(':category_id', $category_id);
                $stmt->bindParam(':pdct_typ', $pdct_typ);
                $stmt->bindParam(':product_name', $product_name);
                $stmt->bindParam(':short_details', $short_details);
                $stmt->bindParam(':details', $details);
                $stmt->bindParam(':size', $size);
                $stmt->bindParam(':weight', $weight);
                $stmt->bindParam(':price', $price);
                $stmt->bindParam(':OfferPrice', $OfferPrice);

                $stmt->bindParam(':upic', $photo);

                if ($stmt->execute()) {
    ?>
                    <script>
                        alert('Successfully Added ...');
                        window.location.href = 'product-list';
                    </script>
                <?php
                } else {
                    $errMSG = "error while inserting....";
                }
            } else {
                $stmt = $DB_con->prepare('UPDATE products  SET category_id=:category_id,pdct_typ=:pdct_typ, product_name =:product_name, short_details=:short_details,details=:details,size=:size, weight=:weight,price=:price,offer_price=:OfferPrice, photo=:photo  WHERE pro_id=:uid');

                $stmt->bindParam(':category_id', $category_id);
                $stmt->bindParam(':pdct_typ', $pdct_typ);
                $stmt->bindParam(':product_name', $product_name);
                $stmt->bindParam(':short_details', $short_details);
                $stmt->bindParam(':details', $details);
                $stmt->bindParam(':size', $size);
                $stmt->bindParam(':weight', $weight);
                $stmt->bindParam(':price', $price);
                $stmt->bindParam(':OfferPrice', $OfferPrice);
                $stmt->bindParam(':photo', $photo);
                $stmt->bindParam(':uid', $pro_id);
                if ($stmt->execute()) {
                ?>
                    <script>
                        alert('Successfully Updated ...');
                        window.location.href = 'product-list';
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
            <h1>Add Product | <span> <a href="product-list"> <i class="bi bi-table"></i> </a> </span> </h1>
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

                                        <input type="hidden" name="pro_id" value="<?php echo (!empty($data) ? $data['pro_id'] : '0') ?>">
                                        <?php
                                        $pq = mysqli_query($con, "SELECT * FROM stuff LEFT JOIN `user` on user.userid=stuff.userid where stuff.userid='" . $_SESSION['id'] . "'");
                                        while ($pqrow = mysqli_fetch_array($pq)) {
                                        ?>
                                            <input class="form-control" type="hidden" name="user_id" value="<?php echo $pqrow['userid']; ?>" />
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <td><label class="control-label"> Category </label></td>

                                        <td>
                                            <select name="category_id" id="" class="form-select" required>
                                                <option value="" >Select Category</option>
                                                <?php
                                                $ct = mysqli_query($con, "SELECT * FROM product_category WHERE user_id='" . $_SESSION['id'] . "'");
                                                while ($category = mysqli_fetch_assoc($ct)) {
                                                    echo '<option value="' . $category['cat_id'] . '"  ' . ($category_id == $category["cat_id"] ? "selected" : "") . '>' . $category['cat_name'] . '</option>';
                                                } ?>
                                            </select>
                                        </td>
                                    </tr>
									
									 <tr class="d-none">
                                        <td><label class="control-label"> Type </label></td>

                                        <td>
                                            <select name="pdct_typ" id="" class="form-select"> 
                                                <?php
                                                $ct = mysqli_query($con, "SELECT * FROM product_type WHERE user_id='" . $_SESSION['id'] . "'");
                                                while ($pdct_typ = mysqli_fetch_assoc($ct)) {
                                                    echo '<option value="' . $pdct_typ['ptype_id'] . '"  ' . ($pdct_typ == $pdct_typ["ptype_id"] ? "selected" : "") . '>' . $pdct_typ['type_name'] . '</option>';
                                                } ?>
                                            </select>
                                        </td>
                                    </tr>
									
									
                                    <tr>
                                        <td><label class="control-label"> Product Name </label></td>
                                        <td><input class="form-control" type="text" name="product_name" placeholder="Product Name" value="<?php echo $product_name ?>" required /></td>
                                    </tr>
									
                                    <tr>
                                        <td><label class="control-label"> Short Details </label></td>
                                        <td><input class="form-control" type="text" name="short_details" placeholder="Short Details" value="<?php echo ($short_details !== "") ? $short_details : 'Na'; ?>" required /></td>
                                    </tr>

                                    <tr>
                                        <td><label class="control-label"> Details </label></td>
                                        <td><textarea name="details" id="summernote" placeholder="Details"><?php echo $details; ?></textarea></td>
                                    </tr>
									
                                    <tr class="">
                                        <td><label class="control-label"> Size </label></td>
                                        <td><input class="form-control" type="text" name="size" placeholder="Size" value="<?php echo ($size !== "") ? $size : 'Na'; ?>" required /></td>
                                    </tr>
									
                                    <tr>
                                        <td><label class="control-label"> Weight </label></td>
                                        <td><input class="form-control" type="text" name="weight" placeholder="Weight" value="<?php echo $weight ?>" required /></td>
                                    </tr>
                                    
									<tr>
                                        <td><label class="control-label"> Sale Price </label></td>
                                        <td><input class="form-control" type="text" name="price" placeholder="Price" value="<?php echo $price ?>" required /></td>
                                    </tr>
									
									<tr class="">
                                        <td><label class="control-label"> Offer Price </label></td>
                                        <td><input class="form-control" type="text" name="OfferPrice" placeholder="Price" value="<?php echo ($offer_price !== "") ? $offer_price : '0'; ?>" required /></td>
                                    </tr>

                                    <tr>
                                        <td><label class="control-label">Picture </label></td>
                                        <td>
                                            <?php
                                            if (!empty($photo)) { ?>
                                                <p><img src="user_images/<?php echo $photo ?>" height="150" width="150" /></p>
                                                <input type="hidden" name="oldImage" value="<?= $photo ?>">
                                            <?php  }
                                            ?>

                                            <input class="input-group" type="file" name="user_image" accept="image/*" />
                                        </td>
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

    <?php
    require_once 'summernote_link.php';
    summernote('summernote');
    ?>