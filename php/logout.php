<?php
include('../php_obj/autoload.php');
$u = new Users;
$u->del_session();
header('Location:../');
?>