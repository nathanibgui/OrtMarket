<?php
include('../php_obj/autoload.php');
$u = new Users;
$ad = new Addresse;
if(!$u->verif_session())
{
    ?>
        <SCRIPT LANGUAGE="JavaScript">
        document.location.href="login.php?er=02"
        </SCRIPT>
        <?php
}
else
{
    $adl = $ad->liste_user($_SESSION['id']);

include('../vue/navbar.php');
if(isset($_GET['er']))
{
    if($_GET['er']==10)
    {

    
    ?>
    <div style="text-align:center;"class="alert alert-success" role="alert">
  L'addresse a été modifiée !
</div>
<?php
    }
    if($_GET['er']==11)
    {
        ?>
  <div style="text-align:center;"class="alert alert-success" role="alert">
  L'addresse a été ajoutée !
</div>
        <?php
    }
    if($_GET['er']==12)
    {
        ?>
  <div style="text-align:center;"class="alert alert-success" role="alert">
  L'addresse a été Suprimée !
</div>
        <?php
    }

}
include('../vue/livraison.php');
include('../vue/footer.php');
}


?>
