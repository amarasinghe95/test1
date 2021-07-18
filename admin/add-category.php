<?php
include('header.php');
?>
<!--connection create with database and call fuunctions folder-->


<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Category</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="includes/add.inc.php" role="form" method="POST"class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Category Name
                    </label>
                    <input
                      id="name"
                      name="product_name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  
                  </div>
                  
              </div>
              
              
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Category Now</button>
              </div>
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