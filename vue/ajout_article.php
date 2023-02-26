<div class="container">
    <div class="container">
        <br><br>
        <h3>Ajouter un Article</h3>
        <br>
        <?php if(isset($_GET['pre'])) { ?>
        <div class="row">
  <div class="col">

  <section class="py-0">
            <div class="container px-2 px-lg-5 mt-3">
                <div class="row gx-4 gx-lg-3 row-cols-4 row-cols-md-1 row-cols-xl-2 justify-content-center">
                 
                    <div class="col mb-5">
                        <div class="card h-100" id="test">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo $_GET['pic']; ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <p class="fw-bolder"><?php echo $_GET['title']; ?></p>
                                    <!-- Product price-->
                                  <?php echo $_GET['pr']; ?>€
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a> <a href="../php/add_panier.php?idart=<?php echo $al[$i]['id'] ;?>"><button type="button" class="btn btn-success">+</button></a> </div> -->
                              
                            </div>
                        </div>
                    </div>
                  
                  
        </section>
  </div>
  <div class="col">
    <?php } ?>
        <form action="" method="post">
        
            <!-- <label for="exampleInputEmail1">Categorie </label>

        <select class="form-select" aria-label="Default select example" name="cat">
  <?php $i=0; while($i<count($cl)) { ?>
  <option value="<?php echo $cl[$i]['id']; ?>"><?php echo $cl[$i]['Title']; ?></option>
  <?php $i = $i+1; } ?>

</select> -->
<br>



  <div class="form-group">
    <label for="exampleInputEmail1">Title </label>
    <input type="texte" class="form-control" name="title"  <?php if(isset($_GET['pre'])) {?> value="<?php echo $_GET['title']; ?>" <?php } ?> required>
  </div>
  <br>
  <div class="row">
    <div class="col">
    <label for="exampleInputEmail1">Description </label>

      <input type="text" class="form-control"  name="des" <?php if(isset($_GET['pre'])) {?> value="<?php echo $_GET['title']; ?>" <?php } ?>>
    </div>
    <div class="col">
    <label for="exampleInputEmail1">Prix </label>

      <input type="text" class="form-control"  name="prix" <?php if(isset($_GET['pre'])) {?> value="<?php echo $_GET['pr']; ?>" <?php } ?> required>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="form-group">
      <label for="exampleInputPassword1">Picture</label>
      <input type="texte" class="form-control" id="exampleInputPassword1" name="pic" <?php if(isset($_GET['pre'])) {?> value="<?php echo $_GET['pic']; ?>" <?php } ?> required>
      </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="exampleInputPassword1">Quantité</label>
    <input type="texte" class="form-control" id="exampleInputPassword1" name="qtn" <?php if(isset($_GET['pre'])) {?> value="<?php echo $_GET['qtn']; ?>" <?php } ?> required>
  </div>
    </div>
  </div>
  
  <br>
  <button type="submit" class="btn btn-primary" name="pre">Previsualiser</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  <?php if(isset($_GET['pre'])) { ?>
    </div>
</div>
<?php } ?>
</div>
</div>