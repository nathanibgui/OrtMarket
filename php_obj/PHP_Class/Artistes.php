<?php

class Artistes
{
    function add($nom,$chanel,$picture,$album)
    {
        $cnx = cnx_bdd();
        $requete = "Select * from artistes where chanel_id = '".$chanel."';";
        $jeuResultat=$cnx->query($requete);  
        $ligne = $jeuResultat->fetch();
        //Si il n'existe pas alors on insert l'artiste dans la bdd
        if(!$ligne)
        {
            $requete = "INSERT INTO artistes (nom,chanel_id,pictures,albums) VALUES ('".$nom."','".$chanel."','".$picture."','".$album."');";
            $ok=$cnx->query($requete);
        }
        else
        {
            return False;
        }
    }
    function liste()
    {
        $cnx = cnx_bdd();
        $requete = "select * from artistes;";
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['nom']=$ligne['nom'];
            $info[$i]['chanel_id']=$ligne['chanel_id'];
            $info[$i]['pictures']=$ligne['pictures'];
            $info[$i]['albums']=$ligne['albums'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }
    function liste_byid($id)
    {
        $cnx = cnx_bdd();
        $requete = "select * from artistes where id = $id limit 1   ;";
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['nom']=$ligne['nom'];
            $info[$i]['chanel_id']=$ligne['chanel_id'];
            $info[$i]['pictures']=$ligne['pictures'];
            $info[$i]['albums']=$ligne['albums'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;

    }
}
?>