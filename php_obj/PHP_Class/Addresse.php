<?php
class Addresse
{
    function edit($idu,$title,$pays,$ville,$cp,$rue,$n°)
    {
        $cnx = cnx_bdd();
        $requete = "UPDATE  Adresse SET Title = '".$title."',Pays ='".$pays."',Ville = '".$ville."',Code_postal = $cp,Rue = '".$rue."' ,N° = $n° where id  = $idu;";
        $ok=$cnx->query($requete);
        // echo $requete;
    }
    function add($idu,$title,$pays,$ville,$cp,$rue,$n°)
    {
        $cnx = cnx_bdd();
        $requete = "INSERT INTO Adresse (id_users,Title,Pays,Ville,Code_postal,Rue,N°) Values ($idu,'".$title."','".$pays."','".$ville."',$cp,'".$rue."',$n°);";
        $ok=$cnx->query($requete);
    }
    function del($id)
    {
        $cnx=cnx_bdd();
        $requete = "DELETE from Adresse where id = $id;";
        // echo $requete;
        $ok=$cnx->query($requete);

    }
    function liste_user($id)
    {
        $cnx = cnx_bdd();
        $requete="SELECT * from Adresse where id_users = $id; ";
        // echo $requete;
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['Title']=$ligne['Title'];
            $info[$i]['Pays']=$ligne['Pays'];
            $info[$i]['Ville']=$ligne['Ville'];
            $info[$i]['Code_postal']=$ligne['Code_postal'];
            $info[$i]['Rue']=$ligne['Rue'];
            $info[$i]['N°']=$ligne['N°'];

            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }
    function liste_id($id)
    {
        $cnx = cnx_bdd();
        $requete="SELECT * from Adresse where id = $id; ";
        // echo $requete;
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['Title']=$ligne['Title'];
            $info[$i]['Pays']=$ligne['Pays'];
            $info[$i]['Ville']=$ligne['Ville'];
            $info[$i]['Code_postal']=$ligne['Code_postal'];
            $info[$i]['Rue']=$ligne['Rue'];
            $info[$i]['N°']=$ligne['N°'];

            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }
}

?>