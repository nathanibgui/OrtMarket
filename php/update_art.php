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
$al = $a->liste_one($_GET['id']);
if(count($_POST)==0)
{
    include('../vue/update_art.php');
    include('../vue/footer.php');

}
else
{
if(isset($_POST['pre']))
{
    
    ?>
    <SCRIPT LANGUAGE="JavaScript">
    document.location.href="update_art.php?id=<?php echo $_GET['id']; ?>&pre=ok&title=<?php echo $_POST['title'];?>&pic=<?php echo $_POST['pic'];?>&pr=<?php echo $_POST['qtn']; ?>&des=<?php echo $_POST['des'];?>"
    </SCRIPT>
    <?php
}
else
{
    $a->update($_GET['id'],$_POST['title'],$_POST['des'],$_POST['pic'],$_POST['qtn']);
    
    ?>
    <SCRIPT LANGUAGE="JavaScript">
    document.location.href="manage_art.php"
    </SCRIPT>
    <?php
}
}
?>