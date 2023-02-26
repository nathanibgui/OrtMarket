<?php
include('../php_obj/autoload.php');
$u = new Users;
include('../vue/navbar.php');
include('../vue/footer.php');
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
$a = new Articles;
$id_c = $a->add_com($_SESSION['id']);
$p = new Panier;
$po = $p->obtenirPanier();
$i = 0;
while($i<count($po['qte']))
{
    $qte =  $po['qte'][$i];
    $ref = $po['ref'][$i];
    $a->qtn_1($ref,$qte);
    $a->add_ligne($qte,$id_c,$ref);
    unset($_SESSION['panier']);
    $i=$i+1;
}
include('../vue/vue_commande_ok.php');
}
?>