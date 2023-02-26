<?php
include('../php_obj/autoload.php');
include('../vue/navbar.php');
include('../vue/footer.php');
$a = new Articles;
$cl = $a->liste_com($_GET['id']);

// include("../vue/"); ?>
<br><br><br>
<H2 style="text-align:center">Liste des commandes</H2>
<br><br>
<div class="container">
    <div class="container">


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Date</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 0; while($i<count($cl))
    { ?>
    <tr>
      <th scope="row"><?php echo $cl[$i]['id'] ?></th>
      <td><?php echo $cl[$i]['Date'] ?></td>
      <td> <a href="com.detail.php?id=<?php echo $cl[$i]['id'] ?>&user=<?php echo $_GET['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
  <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
</svg></a> </td>
  
    </tr>
    <?php $i = $i+1; } ?>
   
  </tbody>
</table>
</div>
</div>