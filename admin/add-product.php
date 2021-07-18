<?php
include('header.php');
?>
<!--connection create with database and call fuunctions folder-->

<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Add Product</h2>
          </div>
        </div>

        <div class="row tm-edit-product-row">
          <div class="col-xl-6 col-lg-6 col-md-12">
            <form action="../includes/add.inc.php" role="form" method="POST" class="tm-edit-product-form">
              <div class="form-group mb-3">
                <label for="name">Product Name
                </label>
                <input id="name" name="product_name" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name">Brand Name
                </label>
                <input id="name" name="brand_name" type="text" class="form-control validate" required />
              </div>

              <div class="form-group mb-3">
                <label for="description">Product Description</label>

                <textarea name="product_description" ; class="form-control validate" rows="3" required></textarea>
              </div>

              <div class="row">

                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label for="stock">Units In Stock
                  </label>
                  <input id="qty" name="qty" type="text" class="form-control validate" required />
                </div>
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label for="price">Price
                  </label>
                  <input id="price" name="price" type="text" class="form-control validate" required />
                </div>
              </div>

          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
            <div class="tm-product-img-dummy mx-auto">
              <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
            </div>
            <div class="custom-file mt-3 mb-3">
              <input id="fileInput" type="file" style="display:none;" />
              <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('fileInput').click();" />
            </div>
          </div>
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
          </div>
          <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "successful") {
              echo "<p> Item added !</p>";
            }
          }
          ?>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('scripts.php');
  include('footer.php');
  ?>
  <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
  <!-- https://jqueryui.com/download/ -->
  <script>
    $(function() {
      $("#expire_date").datepicker();
    });
  </script>