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
$ul = $u->listeone($_GET['id']);
if (isset($_POST['submit'])) {
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $mail = $_POST['Mail'];
    $login = $_POST['Login'];
    $password = $_POST['password'];
    $conf = $_POST['conf'];
  
    // validate form data and insert user into database
    if ($password == $conf) {
      
        $a = $u->UPDATE($_GET['id'],$nom, $prenom, $mail, $login, $password);
        ?>
        <SCRIPT LANGUAGE="JavaScript">
        document.location.href="../?er=100"
        </SCRIPT> <?php

        
       
      }
      else
      { ?>
        <SCRIPT LANGUAGE="JavaScript">
        document.location.href="update_usr.php?er=00&id=<?php echo $_GET['id']?>"
        </SCRIPT> <?php
      }
    // ...
  }
  else
  {
    include('../vue/update_usr.php');
  }
