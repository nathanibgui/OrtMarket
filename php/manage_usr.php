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
else
{
    include('../vue/manage_usr.php');
    include('../vue/footer.php');
}
?>