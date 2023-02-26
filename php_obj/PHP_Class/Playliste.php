<?php
class Playliste
{
    function add($user,$artiste)
    {
        $cnx = cnx_bdd();
        $requete = "Select * from Playlist where id_artistes = $artiste and id_users = $user;";
       
        $jeuResultat=$cnx->query($requete);  
        $ligne = $jeuResultat->fetch();
        //Si il n'existe pas alors on insert l'artiste dans la bdd
        if(!$ligne)
        {
            $requete = "INSERT INTO Playlist (id_users,id_artistes) VALUES ($user,$artiste);";
            $ok=$cnx->query($requete);
        }
        else
        {
            return False;
        }
    }
    function liste($id)
    {
        $cnx = cnx_bdd();
        $requete = "select a.nom,a.chanel_id,a.pictures,a.albums from artistes a inner join Playlist p on a.id = p.id_artistes inner join users u  on u.id = p.id_users where p.id_users = $id   ;";
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
           
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