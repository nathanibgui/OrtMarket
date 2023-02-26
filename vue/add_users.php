<div class="container">
    <br><br>
    <h2 style="text-align:center    ">Add Users</h2>
    <br>
    <?php if(isset($_GET['er'])){if($_GET['er']==01){
                    ?>
                      <span style="color:red;">Il existe deja un compte avec cette adresse mail connard</span><?php
                }} ?>
  <form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="inputNom">Nom</label>
                <input type="text" class="form-control" id="inputNom" placeholder="Nom" name="Nom" required>
             </div>
        </div>
        <div class="col">
             <div class="form-group">
                  <label for="inputNom">Prenom</label>
                  <input type="text" class="form-control" id="inputNom" placeholder="Prenom" name="Prenom" required >
             </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="form-group">
                  <label for="inputNom">Mail</label>
                  <input type="mail" class="form-control" id="inputNom" placeholder="Mail" name="Mail" required >
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                  <label for="inputNom">Login</label>
                  <input type="text" class="form-control" id="inputNom" placeholder="Login" name="Login" required>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="form-group">
                
                  
                  <label for="inputNom">Mot de passe :</label>
                  <input type="password" class="form-control" id="inputNom" placeholder="Password" name="password" required>
            </div>
        </div>
        <div class="col">
       
            <div class="form-group">
           
                  <label for="inputNom">Confirmation Mot de passe :</label>
                  <input type="password" class="form-control" id="inputNom" placeholder="Password" name="conf" required >
                  <?php if(isset($_GET['er'])){if($_GET['er']==00){
                    ?>
                      <span style="color:red;">Les mots de passes doivent êtres identiques</span><?php
                }} ?>
            </div>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success" name="submit">Success</button>
  </form>
</div>
