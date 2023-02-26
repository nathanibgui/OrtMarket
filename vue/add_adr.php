<header class="bg-dark py-5">
            <div class="container px-2  px-lg-2 my-2">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Addresse :</h1>
                </div>
            </div>
        </header>

<br><br><br>

<div class="container">
    <div class="container">
    <form method="post">
    <label for="Pays">Nom :</label>
      <input type="text" class="form-control" id="Pays" placeholder="Title" name="Title" <?php if(isset($_GET['id'])) { ?> value="<?php echo $adl[0]['Title']; ?>" <?php } ?>>
      <br>
    <div class="row">
        <div class="col-5">
        <label for="Pays">Pays</label>
      <input type="text" class="form-control" id="Pays" placeholder="Pays" name="Pays" <?php if(isset($_GET['id'])) { ?> value="<?php echo $adl[0]['Pays']; ?>" <?php } ?>>
        </div>
        <div class="col-4">
        <label for="Pays">Ville</label>
      <input type="text" class="form-control" id="Pays" placeholder="Ville" name="Ville" <?php if(isset($_GET['id'])) { ?> value="<?php echo $adl[0]['Ville']; ?>" <?php } ?>>
        </div>
        <div class="col-3">
        <label for="Pays">Code Postal</label>
      <input type="number" class="form-control" id="Pays" placeholder="Code Postal" name="Code_postal" <?php if(isset($_GET['id'])) { ?> value="<?php echo $adl[0]['Code_postal']; ?>" <?php } ?>>
        </div>
    </div><br>
    <div class="row">
        <div class="col-3">
        <label for="Pays">Numéro :</label>
      <input type="number" class="form-control" id="Pays" placeholder="N°" name="N°" <?php if(isset($_GET['id'])) { ?> value="<?php echo $adl[0]['N°']; ?>" <?php } ?>>
        </div>
        <div class="col-9">
        <label for="Pays">Rue</label>
      <input type="text" class="form-control" id="Pays" placeholder="Rue" name="Rue" <?php if(isset($_GET['id'])) { ?> value="<?php echo $adl[0]['Rue']; ?>" <?php } ?>>
        </div>
    </div><br>
    
<button type="submit" class="btn btn-success">Enregistrer</button>  
</form>
    </div>
</div>