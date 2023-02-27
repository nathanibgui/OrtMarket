<?php
include('../php_obj/autoload.php');
$a = new Articles;
include('../vue/navbar.php');
include('../vue/footer.php');
if(!$u->root())
{
    ?>
   <SCRIPT LANGUAGE="JavaScript">
document.location.href="../?er=01"
</SCRIPT>
<?php
}
include('test.php');