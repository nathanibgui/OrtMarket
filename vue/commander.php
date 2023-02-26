<header class="bg-dark py-5">
            <div class="container px-2  px-lg-2 my-2">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Commande <?php echo $panier["ref"][0]; ?></h1>
                </div>
            </div>
        </header>
        <br>
        <div class="container" id="test">

      
        <div class="row">
  <div style="text-align:center" class="col-8"><br><br><?php $i = 0;
$total = 0;
while($i<count($panier['ref']))
{

   
    $art = $a->liste_one($panier['ref'][$i]);
   $total = $total + $art[0]['prix']*$panier['qte'][$i];
  
?><div class="card">
    <div style="text-align:right;"><a style="color:black"; href="../php/del_panier.php?id=<?php echo $art[0]['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
</svg></a></div>
  <!-- <div class="card-header">
    Featured
  </div> -->
  <div class="card-body">
   <div class="row">
    <div class="col-3">
<!-- <img src="https://boulanger.scene7.com/is/image/Boulanger/3660767970977_h_f_l_0?wid=122&hei=122" alt=""> -->
<style>img {
max-height : 100%;
width : 100%;
}</style>
<img src="<?php echo $art[0]['picture'] ?>" alt="Bootstrap" class="img-responsive">
    </div>
    <div class="col-6">
        
<h6 style="text-align:left"><?php echo $art[0]['Title'] ?></h6>
    </div>
    <div class="col-3">
        <div style="text-align:right"><strike>699.00€</strike>&ensp;<button type="button" class="btn btn-outline-warning">-33%</button></div>
        <h4 style=""><?php echo $art[0]['prix'] ?>€</h4>
      <div style="font-size:10px;">dont 5,00€ d’éco-part. DEEE</div> 
    </div>
    <div><input style="width:5%;" type="number" name="qtn" value="<?php echo $panier['qte'][$i]; ?>" id=""></div>
   </div>
  </div>
</div><br><?php $i=$i+1; } ?></div>
  
  <div class="col-4"><h7>Mon panier (<?php echo $count;?>)</h7>
  <br><br>
  <div class="card" style="width: 18rem;">
  <div class="card-body">
      <div class="card-header">
    <div class="row">
        <div class="col">
            <h6>Total:</h6>
           
        </div>
     
        <div class="col">
           <H5><?php echo $total; ?>€</H5> 
        </div>
        <div>Hors frais de livraison</div>
    </div>
  </div>
  <br>
  <h6>Vendu par Nathan + :</h6>
  <div class="row">
    <div class="col-7">
    <div>Retrait en magasin:</div>
    <div>Frais de livraison :</div>
    </div>
    <div class="col-5">
        <div style="font-weight: bold;">offert</div>
        <div style="font-weight: bold;">offert</div>
    </div>
  </div>
  
   
   
  </div>
  
</div>
<br>
<a href="../php/commande_ok.php"><button style="width:80%" type="button" class="btn btn-secondary">Valider mon panier</button></a> 
</div>
</div>
</div>
<script>
    function hid() {
document.getElementById("test").addEventListener(
  "click",
  () => {
    document.getElementById("nav").hidden = true;
    
  },
  false
);
    }
    
    function show() {
document.getElementById("test").addEventListener(
  "click",
  () => {
    document.getElementById("nav").hidden = false;
    
  },
  false
);
    }  </script>