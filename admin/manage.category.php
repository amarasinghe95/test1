<?php
include('header.php');
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1>
    </div>
    
</div>

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
