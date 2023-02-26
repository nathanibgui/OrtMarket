<?php
include('../php_obj/autoload.php');
$u = new Users;
include('../vue/navbar.php');
include('../vue/footer.php');
if(isset($_POST['Mail']) && $_POST['Mail']!='')
{


if (isset($_POST['submit'])) {
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $mail = $_POST['Mail'];
    $login = $_POST['Login'];
    $password = $_POST['password'];
    $conf = $_POST['conf'];
  
    // validate form data and insert user into database
    if ($password == $conf) {
      
        $a = $u->add($nom, $prenom, $mail, $login, $password);
        if($a==False)
        {
            ?>
            <SCRIPT LANGUAGE="JavaScript">
            document.location.href="add_usr.php?er=01"
            </SCRIPT> <?php
        }
        else
        {
            ?>
            <SCRIPT LANGUAGE="JavaScript">
            document.location.href="login.php?er=0101"
            </SCRIPT> <?php
        }

      }
      else
      { ?>
        <SCRIPT LANGUAGE="JavaScript">
        document.location.href="add_usr.php?er=00"
        </SCRIPT> <?php
      }
    // ...
  }
}
  else
  {
    include('../vue/add_users.php');

  }
?>