<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <?php
  include('head_link.php');
  if (isset($_GET['view'])) {
    $pro_id = $_GET['view'];
    $eq = mysqli_query($con, "select distinct products.category_id, products.pro_id,products.product_name,products.short_details,products.details,products.size,products.weight,products.price,products.offer_price,products.photo,product_category.user_id,product_category.cat_name,product_category.cat_details,product_category.cat_photo from product_category left join products on products.category_id = product_category.cat_id where products.pro_id = '$pro_id'");
    $prow = mysqli_fetch_array($eq);
  }
  ?>

  <title><?php echo isset($prow['product_name']) ? $prow['product_name'] : ''; ?> - Nasima Anwara</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

</head>

<body class="service-details-page">

  <?php include('header_nav.php'); ?>

  <main class="main">

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section bg-light">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <?php if (isset($_GET['status'])) { ?>
            <div class="row">
                <div class="col-12">
                    <?php if ($_GET['status'] == 'success') { ?>
                        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i> <strong>Congratulations!</strong> Your order has been placed successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> <strong>Oops!</strong> Something went wrong. Please try again.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="shadow rounded p-2 text-center">
              <h3 class="fw-bold"><?php echo isset($prow['product_name']) ? $prow['product_name'] : ''; ?></h3>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="service-details-slider swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": 1,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="itm-admin/user/user_images/<?php echo isset($prow['photo']) ? $prow['photo'] : ''; ?>" alt="" class="img-fluid" loading="lazy">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <div class="content mt-5">
              <h3><?php echo isset($prow['product_name']) ? $prow['product_name'] : ''; ?></h3>
              <p>
                <?php echo isset($prow['short_details']) ? $prow['short_details'] : ''; ?>
              </p>
              <p>
                <?php echo isset($prow['details']) ? $prow['details'] : ''; ?>
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="service-info">
              <h4><center>Short Details</center></h4>
			  
              <div class="info-item"> 
                <h4><i class="bi bi-calendar"></i>  : <?php echo isset($prow['size']) ? $prow['size'] : ''; ?> </h4> 
              </div>
              <div class="info-item">                
                <h4><i class="bi bi-files"></i> Page : <?php echo isset($prow['weight']) ? $prow['weight'] : ''; ?></h4> 
              </div>
              <div class="info-item">                
                <h4><i class="bi bi-cash"></i> Price : <?php echo isset($prow['price']) ? $prow['price'] : ''; ?></h4> 
              </div>
			  
			   
				  <center> 
					<button type="button" class="btn btn-danger btn-lg px-5 py-3 shadow-sm rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#orderModal">
						<i class="bi bi-cart-fill me-2"></i> Buy Now
					</button>
				  </center>  
				  
            </div>
			

            <div class="related-services mt-5 d-none">
              <!-- Related services can be here -->
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

  <!-- Order Modal -->
  <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow-lg">
        <div class="modal-header bg-danger text-white border-0">
          <h5 class="modal-title fw-bold" id="orderModalLabel">Complete Your Order</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="process_order.php" method="POST">
          <div class="modal-body p-4">
            <input type="hidden" name="product_id" value="<?php echo $prow['pro_id']; ?>">
            <input type="hidden" name="price" value="<?php echo $prow['price']; ?>">
            
            <div class="mb-3">
              <label class="form-label fw-semibold">Product Name</label>
              <input type="text" class="form-control bg-light border-0" value="<?php echo $prow['product_name']; ?>" readonly disabled>
            </div>

            <div class="row mb-3">
              <div class="col-6">
                <label class="form-label fw-semibold">Price</label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-0">BDT</span>
                  <input type="text" class="form-control bg-light border-0" value="<?php echo $prow['price']; ?>" readonly disabled>
                </div>
              </div>
              <div class="col-6">
                <label for="qty" class="form-label fw-semibold">Quantity</label>
                <div class="input-group border border-danger-subtle rounded overflow-hidden">
                    <button type="button" class="btn btn-light border-0 px-3" id="minus-btn"><i class="bi bi-dash"></i></button>
                    <input type="number" name="qty" id="qty" class="form-control border-0 text-center fw-bold" value="1" min="1" required style="width: 50px;">
                    <button type="button" class="btn btn-light border-0 px-3" id="plus-btn"><i class="bi bi-plus"></i></button>
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="delivery_area" class="form-label fw-semibold">Shipping Charge <span class="text-danger">*</span></label>
              <select name="delivery_area" id="delivery_area" class="form-select border-danger-subtle" required>
                <option value="" disabled selected>Shipping Charge</option>
                <option value="100">Inside Dhaka (100 TK)</option>
                <option value="150">Outside Dhaka (150 TK)</option>
              </select>
            </div>

            <div class="mb-3">
              <p class="mb-1 fw-semibold text-danger h5">Total Payable: BDT <span id="total_price_display"><?php echo $prow['price']; ?></span></p>
              <input type="hidden" name="delivery_charge" id="delivery_charge_val" value="0">
            </div>

            <div class="mb-3">
              <label for="cust_name" class="form-label fw-semibold">Your Name <span class="text-danger">*</span></label>
              <input type="text" name="cust_name" id="cust_name" class="form-control border-danger-subtle" placeholder="Enter your full name" required>
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label fw-semibold">Phone Number <span class="text-danger">*</span></label>
              <input type="text" name="phone" id="phone" class="form-control border-danger-subtle" placeholder="e.g. 01712345678" required>
            </div>

            <div class="mb-3">
              <label for="address" class="form-label fw-semibold">Delivery Address <span class="text-danger">*</span></label>
              <textarea name="address" id="address" class="form-control border-danger-subtle" rows="2" placeholder="Street, City, Postal Code" required></textarea>
            </div>

            <div class="mb-3">
              <label for="payment_type" class="form-label fw-semibold">Payment Type</label>
              <select name="payment_type" id="payment_type" class="form-select border-danger-subtle">
                <option value="Cash on Delivery" selected>Cash on Delivery</option>
                <option value="bKash">bKash</option>
                <option value="Nagad">Nagad</option>
                <option value="Rocket">Rocket</option>
              </select>
            </div>

            <div class="mb-3 d-none" id="transaction_field">
              <label for="transaction_id" class="form-label fw-semibold">Transaction ID</label>
              <input type="text" name="transaction_id" id="transaction_id" class="form-control border-danger-subtle" placeholder="Enter Transaction ID">
            </div>
          </div>
          <div class="modal-footer border-0 p-4 pt-0">
            <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" name="place_order" class="btn btn-danger rounded-pill px-4 fw-bold">Confirm Order</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    const qtyInput = document.getElementById('qty');
    const areaInput = document.getElementById('delivery_area');
    const totalDisplay = document.getElementById('total_price_display');
    const deliveryChargeHidden = document.getElementById('delivery_charge_val');
    const unitPrice = <?php echo $prow['price']; ?>;

    function calculateTotal() {
      const qty = parseInt(qtyInput.value) || 0;
      const deliveryCharge = parseInt(areaInput.value) || 0;
      const total = (qty * unitPrice) + deliveryCharge;
      
      if (totalDisplay) {
        totalDisplay.innerText = total.toFixed(2);
      }
      if (deliveryChargeHidden) {
        deliveryChargeHidden.value = deliveryCharge;
      }
    }
    
    document.getElementById('payment_type').addEventListener('change', function() {
      const transactionField = document.getElementById('transaction_field');
      if (this.value !== 'Cash on Delivery') {
        transactionField.classList.remove('d-none');
      } else {
        transactionField.classList.add('d-none');
      }
    });

    qtyInput.addEventListener('input', calculateTotal);
    areaInput.addEventListener('change', calculateTotal);

    const plusBtn = document.getElementById('plus-btn');
    const minusBtn = document.getElementById('minus-btn');

    plusBtn.addEventListener('click', () => {
      qtyInput.value = parseInt(qtyInput.value) + 1;
      calculateTotal();
    });

    minusBtn.addEventListener('click', () => {
      const currentVal = parseInt(qtyInput.value);
      if (currentVal > 1) {
        qtyInput.value = currentVal - 1;
        calculateTotal();
      }
    });
  </script>

  <style>
    /* Hide Chrome/Safari/Edge/Opera number spin buttons */
    #qty::-webkit-outer-spin-button,
    #qty::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    /* Hide Firefox number spin buttons */
    #qty {
      -moz-appearance: textfield;
    }
  </style>

  <?php include('footer.php'); ?>