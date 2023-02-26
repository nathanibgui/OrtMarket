<?php
include('../php_obj/autoload.php');
$u = new Users;
if(!$u->root())
{
    ?>
   <SCRIPT LANGUAGE="JavaScript">
document.location.href="../?er=01"
</SCRIPT>
<?php
}
else
{


$a = new Articles;
$a->del($_GET['id']);


?>
   <SCRIPT LANGUAGE="JavaScript">
document.location.href="manage_art.php"
</SCRIPT>
<?php } ?>
