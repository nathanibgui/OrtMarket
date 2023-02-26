<?php
include('../php_obj/autoload.php');
include('../vue/navbar.php');
$u = new Users;
if(!$u->root())
{
    ?>
   <SCRIPT LANGUAGE="JavaScript">
document.location.href="../?er=01"
</SCRIPT>
<?php
}
$a = new Articles;
$al = $a->liste_all();
include('../vue/manage_art.php');
include('../vue/footer.php');
?>