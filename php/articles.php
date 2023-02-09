<?php include('../vue/navbar.php');
include('class/articles.class.php');
$a = new Articles();
$al = $a->getAll();
include('../vue/articles.php');
include('../vue/footer.php');
