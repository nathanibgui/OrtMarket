<div class="container">
<br><br>
<h1 style="text-align:center">Articles</h1>
<br><br>
<table class="table table-bordered">
  <thead>
    <tr>
    <!-- <th scope="col">image</th> -->
      <th scope="col">Titre</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantité</th>
      <th scope="col">Edit</th>
    
    </tr>
  </thead>
  <tbody style="text-align:center;">
    <?php $i = 0; while($i<count($al)){ ?>
    <tr>
      <!-- <th scope="row"><img src="<?php echo $al[$i]['image'] ?>" alt=""></th> -->
      <td><?php echo $al[$i]['nom'] ?></td>
      <td><?php echo $al[$i]['prix'] ?></td>
      <td><?php echo $al[$i]['quantite'] ?></td>
      <td><a href="php/edit.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
</svg></a>    <a href="delete.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></a></td>
    </tr>
    <?php $i = $i+1; }  ?>

    </div>