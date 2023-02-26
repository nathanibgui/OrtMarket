<?php 
include('php_obj/autoload.php');
include('vue/navbar.php');
if(isset($_GET['er']))
{
    if($_GET['er']==01)
    {
        ?>
        <div style="text-align:center"class="alert alert-danger" role="alert">
  Permission denied !!
</div> <?php
    }
    if($_GET['er']==100)
    {
        ?>
        <div style="text-align:center" class="alert alert-success" role="alert">
  Le compte a été modifié!!
</div>
       <?php
    }

}
include('vue/shop.php'); 
include('vue/footer.php');

?>
