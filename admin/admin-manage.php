<?php
include('header.php');
?>

<!--Update Now Button to New page -->
<a href="edit-product.php", class="btn-primary"></a>

<?php
include('scripts.php');
include('footer.php');
?>
<script>
    $(function() {
    $("#expire_date").datepicker({
        defaultDate: "3/22/2021";
        });
    });
</script>