<?php
include('../php_obj/autoload.php');
$ad = new Addresse;
$ad->del($_GET['id']);
?>
    <SCRIPT LANGUAGE="JavaScript">
document.location.href="livraison.php?er=12"
</SCRIPT>
