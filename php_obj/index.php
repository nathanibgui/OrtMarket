<?php
include('./autoload.php');
include('vue/navbar.php');
$u = new Users();
if($u->verif_session())
{
    header('Location:compte.php');
}
else
{
    if(count($_POST)==0)
    {
        include('vue/connexion.php');
    }
    else
    {
        $cnx = $u->connexion($_POST['mail'],$_POST['mdp']);
        if(!$cnx)
        {
           
            ?>
            <div class="alert alert-danger" role="alert">
                Email ou mot de passe incorrecte !
            </div>
            <?php
            include('vue/connexion.php');


        }
        else
        {
           
            header('Location:compte.php');
        }
    }
}





?>