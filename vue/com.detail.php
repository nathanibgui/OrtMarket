<div class="container">
    <br><br><br>
    <div class="container">
    <div class="card" style="text-align:center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Commande N°: <?php echo $_GET['id']; ?></h5>
    <br>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id_produit</th>
      <th scope="col">image</th>
      <th scope="col">quantité</th>
     
    </tr>
  </thead>
  <tbody>
    <?php $i=0;  while($i<count($art)){ $img = $a->liste_one($art[$i]['idp']); ?>
    <tr>
      <th scope="row"><?php echo $art[$i]['idp'] ?></th>
      <td><img src="<?php echo $img[0]['picture'] ?>" alt=""></td>
      <td><?php echo $art[$i]['qtn'] ?></td>
     
    </tr>
  <?php $i=$i+1; } ?>
  
  </tbody>
</table>
    <a href="#" class="btn btn-primary">Revenir à mes achats</a>
  </div>
</div>
    </div>
</div>