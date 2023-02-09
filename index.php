<?php include('navbar.php');
include('php/class/articles.class.php');
$a = new Articles;
$al = $a->getAll();
if(isset($_GET['er']))
{
  if($_GET['er']==10)
  {
    ?>
      <div style="text-align:center;" class="alert alert-success" role="alert">
 Bienvenue <?php echo $_SESSION['EMAIL']; ?>
</div>
    <?php
  }
}
include('index.vue.php');
?>
