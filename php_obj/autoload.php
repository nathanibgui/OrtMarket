<?php
include('PHP_Class/bdd.php');
function autoloader($class)
{
    include('PHP_Class/'.$class.'.php');
}
spl_autoload_register('autoloader');
?>
