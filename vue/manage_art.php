<div class="container">
    <div class="container">
<br><br><h3 style="text-align:center">Articles</h3>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <!-- <th scope="col">Article</th> -->
      <th scope="col">Title</th>
      <th scope="col">Quantité</th>
      <!-- <th scope="col">Catégorie</th> -->
      <th scope="col">Edit <a href="../php/com.stat.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg></a></th> 
    
    
    </tr>
  </thead>
  <tbody>
    <?php
$i = 0;
$total = 0;
while($i<count($al))
{
  // $cat = $a->liste_allv2($al[$i]['id']);
?>
 <tr>
      <th scope="row"><?php  echo $al[$i]['id']; ?></th>
      <!-- <td><img src="" alt=""></td> -->
      <td><?php   echo $al[$i]['Title']; ?></td>
      <td><?php   echo $al[$i]['qtn']; ?></td>
      <!-- <td><?php echo $al[$i]; ?></td> -->
      <!-- <td><?php echo $cat[0]['Title']; ?></td> -->
      <td><a href="../php/update_art.php?id=<?php echo $al[$i]['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
</svg></a>&nbsp;&nbsp;<a href="../php/del_art.php?id=<?php echo $al[$i]['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
</svg></a></td>

    </tr>
    <?php
   $i=$i+1;
   
}


    ?>
   
   
  </tbody>
</table>
</div>
</div>