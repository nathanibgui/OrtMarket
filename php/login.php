<?php include('../vue/navbar.php');
include('class/users.class.php');
if(isset($_GET['er']))
{
    if($_GET['er']==01)
    {
        ?>
        <div style="text-align:center;" class="alert alert-danger" role="alert">
             Connexion Faild !
        </div>
        <?php
    }
  
}
if(count($_POST)==0)
{
    include('../vue/login.php');
}
else{

    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    if($Email=='' OR $Password == '')
    {
        include('../vue/login.php');
    }
    else
    {
        $user = new User();
        $result = $user->verif_mdp($Email,$Password);
        if($result)
        {
            
            header('Location:../index.php?er=10');
        }
        else
        {
            header('Location:login.php?er=01');
        }

      
   
}
}
?>