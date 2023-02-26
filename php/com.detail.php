<?php
include('../php_obj/autoload.php');
$a = new Articles;
include('../vue/navbar.php');
include('../vue/footer.php');
$id = $_GET['id'];

$user = $_GET['user'];
$art = $a->get_product_com($id,$user);
include('../vue/com.detail.php');