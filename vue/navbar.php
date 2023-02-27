<!DOCTYPE html>
<?php 
$u = new Users;
if(isset($_SESSION['id']))
 { 
   if($_SESSION['id']!='')
   {
      $u->update_activite($_SESSION['id']);
   } 
 }
$p = new Panier;
$count = $p->comptePanier();
$c = new Categories;
// $cl = $c->liste();
$u = new Users;
 ?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <?php if($u->verif_session()==True) { ?>
                        <li class="nav-item"><a class="nav-link" href="../php/logout.php">Logout</a></li>
                        <?php } else { ?>
                            <li class="nav-item"><a class="nav-link" href="../php/login.php">Login</a></li>
                            <?php } ?>
<!-- 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                               

                                
                            </ul>
                        </li> -->
                        <?php if($u->verif_session()==True) { if($_SESSION['cat']=="root") {?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Articles</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../php/ajout_article.php">Ajouter</a></li>
                                <li><a class="dropdown-item" href="../php/manage_art.php">Manage</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Users</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../php/add_usr.php">Ajouter</a></li>
                                <li><a class="dropdown-item" href="../php/manage_usr.php">Manage</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../php_obj/tools/adminer.php">Adminer</a></li>

                        <?php } } ?>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../php/test.php">Info Client (Reseaux)</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../php/cgv.php">CGV/CGU</a></li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
      <input style="" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
    </form>&emsp;
                    <form class="d-flex"> <a href="../php/view_panier.php">
                        <button class="btn btn-outline-dark" type="button">
                    
                            <i class="bi-cart-fill me-1"></i>
                       Cart
                      <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $count; ?></span>
                        </button></a>
                    </form>
                </div>
            </div>
        </nav>
       

        <!-- Header-->