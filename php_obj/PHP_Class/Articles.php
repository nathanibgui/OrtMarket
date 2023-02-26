<?php

class Articles
{

    function add($title,$des,$date_aj,$idc,$picture,$prix,$qtn)
    {
        $cnx = cnx_bdd();
        $requete = "INSERT INTO Articles (Title,`Description`,Date_ajout,picture,prix,qtn) VALUES ('".$title."','".$des."','".$date_aj."','".$picture."','".$prix."','".$qtn."');";
        $ok=$cnx->query($requete);
        
    }
    function del($id)
    {
        $cnx = cnx_bdd();
        $requete = "Delete from Articles where id = $id";
        $ok=$cnx->query($requete);
    }
    function update($id,$title,$des,$picture,$prix)
    {
        $cnx = cnx_bdd();
        $requete = "UPDATE Articles  SET Title = '".$title."',`Description`='".$des."',Date_ajout = '".date('d-m-y')."',picture = '".$picture."',qtn= $prix where id = $id;";
       echo $requete;
        $ok=$cnx->query($requete);
    }
    function liste_api()
{
    $cnx = cnx_bdd();

    $res = $cnx->query("SELECT * FROM Articles");
    //Initialiser un tableau
    $data = array();
    //Récupérer les lignes
    while ( $row = $res->fetch(PDO::FETCH_ASSOC)) {
       $data[] = $row;
    }
    //Afficher le tableau au format JSON
    echo json_encode($data);
}
    function liste_all()
    {
        $cnx = cnx_bdd();
        $requete="SELECT * from Articles; ";
        // echo $requete;
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['Title']=$ligne['Title'];
            $info[$i]['Description']=$ligne['Description'];
            $info[$i]['picture']=$ligne['picture'];
            $info[$i]['qtn']=$ligne['qtn'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
        
    }
    // function liste_allv2($id)
    // {
    //     $cnx = cnx_bdd();
    //     $requete="SELECT c.Title from Articles a inner join Catégories c on a.id_Catégories = c.id where a.id = $id; ";
    //     // echo $requete;
    //     $jeuResultat=$cnx->query($requete);  
    //     $i = 0;
    //     $ligne = $jeuResultat->fetch();
    //     while($ligne)
    //     {
    //         $info[$i]['Title']=$ligne['Title'];
           
    //         $ligne=$jeuResultat->fetch();
    //         $i = $i + 1;
    //     }
    //     $jeuResultat->closeCursor();  
    //     return $info;
    // }
  function add_com($idc)
  {
    $cnx = cnx_bdd();
    $requete = "INSERT INTO commande (date_commande,id_client) VALUE (NOW(),'".$idc."' )";
    $ok=$cnx->query($requete);
    $requete = "SELECT LAST_VALUE(id_commande) OVER (ORDER BY date_commande ROWS BETWEEN UNBOUNDED PRECEDING AND UNBOUNDED FOLLOWING) AS last_id
    FROM commande";
    $jeuResultat=$cnx->query($requete);  
    $i = 0;
    $ligne = $jeuResultat->fetch();
    return $ligne[0];
  }
  function add_ligne($qtn,$idc,$idp)
  {
    $cnx = cnx_bdd();
    $requete = "INSERT INTO ligne_commande (quantite,id_commande,id_produit) VALUE ($qtn,$idc,$idp)";
    $ok=$cnx->query($requete);
  }
  function qtn_1($id,$qtn)//Enleve 1 quantité a un articles lorsque que qql commande 
  {
    $cnx = cnx_bdd();
    $requete = "UPDATE Articles SET qtn = qtn - $qtn WHERE id = $id";
    $ok=$cnx->query($requete);
  }
  function get_product_com($id_c,$id_u)
  {
    $cnx = cnx_bdd();
    $requete="SELECT l.quantite,l.id_produit from ligne_commande l inner join commande c on c.id_commande = l.id_commande where c.id_commande  = $id_c and c.id_client = $id_u;";
    $jeuResultat=$cnx->query($requete);  
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {
        $info[$i]['quantite']=$ligne['id'];
        $info[$i]['id_produit']=$ligne['Title'];
        $i = $i+1;
    }
    return $info;

  }

    function liste_com($id_u)
    {
        $cnx = cnx_bdd();
        $requete="SELECT * from commande where id_client = $id_u;";
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['Date']=$ligne['date_commande'];
            $info[$i]['id']=$ligne['id_commande'];
            $ligne=$jeuResultat->fetch();
            $i = $i+1;
        }
        return $info;
    
    }
    function liste($id)
    {
        $cnx = cnx_bdd();
        $requete="SELECT a.id,a.Title,a.Description,a.Date_ajout,a.prix,a.picture FROM Articles a INNER JOIN Catégories c on a.id_Catégories = c.id WHERE c.id = $id; ";
        // echo $requete;
        // $requete = "SELECT * from Articles where id = $id;";
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['Title']=$ligne['Title'];
            $info[$i]['Description']=$ligne['Description'];
            $info[$i]['picture']=$ligne['picture'];
            $info[$i]['prix']=$ligne['prix'];
           
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }
    function liste2($id)
    {
        $cnx = cnx_bdd();
        // $requete="SELECT a.id,a.Title,a.Description,a.Date_ajout,a.prix,a.picture FROM Articles a INNER JOIN Catégories c on a.id_Catégories = c.id WHERE c.id = $id; ";
        // echo $requete;
        $requete = "SELECT * from Articles where id = $id;";
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['Title']=$ligne['Title'];
            $info[$i]['Description']=$ligne['Description'];
            $info[$i]['picture']=$ligne['picture'];
            $info[$i]['prix']=$ligne['prix'];
           
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }
    function liste_one($id)
    {
        $cnx = cnx_bdd();
        $requete="SELECT * from Articles where id = $id; ";
       
        // echo $requete;
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['Title']=$ligne['Title'];
            $info[$i]['Description']=$ligne['Description'];
            $info[$i]['picture']=$ligne['picture'];
            $info[$i]['qtn']=$ligne['qtn'];
            $info[$i]['cat']=$ligne['id_Catégories'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }




}
?>