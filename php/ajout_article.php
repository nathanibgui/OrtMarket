<?php
include('../php_obj/autoload.php');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<?php
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
$c = new Categories;
$cl = $c->liste();
$a = new Articles;

if(count($_POST)==0)
{
    include('../vue/ajout_article.php');
    include('../vue/footer.php');

}
else
{
    if(isset($_POST['pre']))
    {
        
        ?>
        <SCRIPT LANGUAGE="JavaScript">
        document.location.href="ajout_article.php?pre=ok&title=<?php echo $_POST['title'];?>&pic=<?php echo $_POST['pic'];?>&pr=<?php echo $_POST['prix']; ?>"
        </SCRIPT>
        <?php
    }
    else
    {

    $date = date('d-m-y');
    $a->add( $_POST['title'],$_POST['des'],$date,$_POST['cat'],$_POST['pic'],$_POST['prix'],$_POST['qtn']);
    
    }
    
   ?>
   <SCRIPT LANGUAGE="JavaScript">
document.location.href="../#test"
</SCRIPT>
<?php

}


?>