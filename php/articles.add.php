<?php include('../vue/navbar.php');
include('class/articles.class.php');
$a = new Articles;

if($_POST['title']!='' Or $_POST['qtn']!='' or $_POST['img']!='')
{
    $a->add($_POST['title'],$_POST['qtn'],$_POST['img']);
    header('Location:articles.php');
}
else
{
    include('../vue/articles.add.php'); 

}

?>
