<?php
include('../php_obj/autoload.php');
$p = new Panier;
$p->del($_GET['id']);

?>
   <SCRIPT LANGUAGE="JavaScript">
document.location.href="view_panier.php"
</SCRIPT>