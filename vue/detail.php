<div class="container mt-5">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $pl[0]['picture']; ?>" alt="{{ product.name }}" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h1><?php echo $pl[0]['Title']; ?></h1>
            <p class="lead"><?php echo $pl[0]['Description']; ?>         
            <p class="font-weight-bold"><?php echo $pl[0]['prix']; ?>€</p>
          
              <input type="hidden" name="productId" value="{{ product.id }}">
              <label for="quantity" class="sr-only">Quantité :</label>
              <input type="number" id="quantity" name="quantity" value="1" class="form-control mr-2">
            <br>
              <a href="ajouter_panier.php?id=<?php echo $pl[0]['id']; ?>"><button type="text" class="btn btn-primary">Ajouter au panier</button></a> 
           
          </div>
        </div>
      </div>
    </main>
    <footer class="bg-light py-3 mt-5">
      <div style="text-align:center;" class="container">
        &copy; {{ currentYear }} Mon site e-commerce
      </div>
    </footer>
    <!-- Charger Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBn