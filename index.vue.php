
    <div class="container mt-5">
      <h1 class="text-center">ORT MARKET</h1>
      <p class="text-center">Bienvenue sur la plateforme de commande de snacks pour les élèves</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   
    <div class="container mt-5">
      <?php
    $numOfSnacks = count($al);
    $numOfRows = ceil($numOfSnacks / 3);

    for ($row = 0; $row < $numOfRows; $row++) {
      echo '<div class="row">';
      for ($col = 0; $col < 3; $col++) {
        $index = $row * 3 + $col;
        if ($index < $numOfSnacks) {
          echo '<div class="col-sm-4">
                  <div class="card">
                    <img src="'.$al[$index]['image'].'" class="card-img-top" alt="Snack 1">
                    <div class="card-body">
                      <h5 class="card-title">'.$al[$index]['nom'].'</h5>
                      <p class="card-text">DESCription</p>
                      <a href="#" class="btn btn-primary">Ajouter au panier</a>
                    </div>
                  </div>
                </div>';
        }
      }
      echo '</div>';
    }
  ?>
</div>
</body>
</html>
