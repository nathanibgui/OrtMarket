  
        <header class="bg-dark py-5">
            
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">NATHAN +</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With Nathan+ On attend + que vous</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php $i=0; while($i<count($al))
                    {
                        ?>
                          <div class="col mb-5">
    <div class="card h-100" id="test">
    <!-- Product image-->
    <img class="card-img-top" src="<?php echo $al[$i]['picture'] ?>" alt="...">
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <p class="fw-bolder"><?php echo $al[$i]['Title'] ?></p>
            <!-- Product price-->
        
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <p style="text-align:center"><?php echo $al[$i]['prix'] ?>€</p>
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a> <a href="../php/add_panier.php?idart=<?php echo $al[$i]['id'] ?>"><button type="button" class="btn btn-success">+</button></a> </div>
      
    </div>
</div>
    </div><?php $i=$i+1;
                    } ?>
        </section>
     

        <!-- Footer-->
      