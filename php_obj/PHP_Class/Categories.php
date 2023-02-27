<?php

class Categories
{
    function add($title)
    {
        $cnx = cnx_bdd();
        $requete="INSERT INTO Catégories (title) Values ('".$title."');";
        $ok=$cnx->query($requete);

    }
    // function liste()
    // {
        
    //     $cnx = cnx_bdd();
    //     $requete = "select * from Catégories ;";
    //     $jeuResultat=$cnx->query($requete);  
    //     $i = 0;
    //     $ligne = $jeuResultat->fetch();
    //     while($ligne)
    //     {
           
    //         $info[$i]['id']=$ligne['id'];
    //         $info[$i]['Title']=$ligne['Title'];
    //         $info[$i]['Description']=$ligne['Description'];
    //         $ligne=$jeuResultat->fetch();
    //         $i = $i + 1;
    //     }
    //     $jeuResultat->closeCursor();  
    //     return $info;
    // }
    // function liste_id($id)
    // {
    //     $cnx = cnx_bdd();
    //     $requete = "select * from Catégories where id = $id ;";
    //     $jeuResultat=$cnx->query($requete);  
    //     $i = 0;
    //     $ligne = $jeuResultat->fetch();
    //     while($ligne)
    //     {
           
    //         $info[$i]['id']=$ligne['id'];
    //         $info[$i]['Title']=$ligne['Title'];
    //         $info[$i]['Description']=$ligne['Description'];
    //         $ligne=$jeuResultat->fetch();
    //         $i = $i + 1;
    //     }
    //     $jeuResultat->closeCursor();  
    //     return $info;
    // }
}

?>