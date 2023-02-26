
<br><br><br><br>
<h2 style="text-align:center">Commande Validée <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
  <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
</svg></h2>
<div class="container">
    <div class="container">
    <div class="card" style="text-align:center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Commande N°: <?php echo $id_c; ?></h5>
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
      <td style="text-align: center;">
  <img src="<?php echo $img[0]['picture'] ?>" alt="" style="max-width: 100px; max-height: 100px;">
</td>

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
