<?php
include('../php_obj/autoload.php');
$p = new Panier;
$p->add($_GET['idart']);


?>
   <SCRIPT LANGUAGE="JavaScript">
document.location.href="../#test"
</SCRIPT>