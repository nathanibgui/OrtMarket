<?php
// include('bdd.php');
class Users
{

    
    function add($nom,$prenom,$mail,$login,$mdp) //Ajouter un Utilisateurs
    {

        $cnx = cnx_bdd();
        //On verifie que le mail n'existe pas dans la bdd
        $requete = "select * from Users where mail = '".$mail."';";
        $jeuResultat=$cnx->query($requete);  
        $ligne = $jeuResultat->fetch();
        //Si il n'existe pas alors on insert le user dans la bdd
        if(!$ligne)
        {
            $requete = "Insert into Users (cat,Nom,Prenom,Mail,Login,Password) VALUES ('user','".$nom."','".$prenom."','".$mail."','".$login."','".$mdp."');";
            $ok=$cnx->query($requete);
            return True;
        }
        //Si il existe alors 
        else
        {
            return False;
        }
     
    }
    function UPDATE($id,$nom,$prenom,$mail,$login,$mdp) //Ajouter un Utilisateurs
    {

        $cnx = cnx_bdd();
            $requete = "UPDATE Users set Nom = '".$nom."',Prenom = '".$prenom."',Mail = '".$mail."',Login = '".$login."',Password = '".$mdp."' where id = $id;";
            $ok=$cnx->query($requete);
          
        //Si il existe alors 
       
     
    }
 
    function del($id)  // Suprimer un utilisateurs
    {
        $cnx = cnx_bdd();
        $requete = "delete from Users where id = $id;";
        $ok=$cnx->query($requete);
    }

    function count_order_week($userId)
    {
        
            // Récupérer la date et l'heure actuelles
            $now = new DateTime();
            // Récupérer le début de la semaine (lundi) en utilisant le format "N" de DateTime (1 = lundi, 7 = dimanche)
            $startOfWeek = $now->modify('this week')->modify('+' . (1 - $now->format('N')) . ' days');
            // Récupérer la fin de la semaine (dimanche) en ajoutant 6 jours à la date de début de la semaine
            $endOfWeek = $startOfWeek->modify('+6 days');
            $cnx = cnx_bdd();
            $requete = "SELECT COUNT(*) FROM commande WHERE id_client = $userId AND date_commande BETWEEN '{$startOfWeek->format('Y-m-d')}' AND '{$endOfWeek->format('Y-m-d')}'";
            // Requête SQL pour compter le nombre de commandes passées par l'utilisateur au cours de la semaine actuelle
           
            
            // Exécuter la requête SQL
         
            $ok=$cnx->query($requete);
            // Récupérer le nombre de commandes à partir du résultat de la requête
            $count = $ok->fetchColumn();
            
            // Retourner le nombre de commandes
            return $count;
        
    }
// function test()
// {
//     $cnx = cnx_bdd();

//     $res = $cnx->query("SELECT * FROM Users");
//     //Initialiser un tableau
//     $data = array();
//     //Récupérer les lignes
//     while ( $row = $res->fetch(PDO::FETCH_ASSOC)) {
//        $data[] = $row;
//     }
//     //Afficher le tableau au format JSON
//     echo json_encode($data);
// }
function test()
{
    $cnx = cnx_bdd();

    $res = $cnx->query("SELECT * FROM Users");
    //Initialiser un tableau
    $data = array();
    //Récupérer les lignes
    while ( $row = $res->fetch(PDO::FETCH_ASSOC)) {
       // Compter le nombre de commandes passées par l'utilisateur dans la semaine actuelle
       $count = $this->count_order_week($row['id']);
       // Ajouter le nombre de commandes à la ligne de l'utilisateur
       $row['count_order'] = $count;
       // Ajouter la ligne au tableau de données
       $data[] = $row;
    }
    //Afficher le tableau au format JSON
    echo json_encode($data);
}
    function liste() //Lister les utilisateurs
    {
        $cnx = cnx_bdd();
        $requete = "select * from Users;";
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['Nom']=$ligne['Nom'];
            $info[$i]['Nom']=$ligne['Prenom'];
            $info[$i]['Mail']=$ligne['Mail'];
            $info[$i]['Nom']=$ligne['Login'];
            $info[$i]['Password']=$ligne['Password'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }
    function listeone($id) //Lister les utilisateurs
    {
        $cnx = cnx_bdd();
        $requete = "select * from Users where id = $id;";
        $jeuResultat=$cnx->query($requete);  
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['Nom']=$ligne['Nom'];
            $info[$i]['Prenom']=$ligne['Prenom'];
            $info[$i]['Mail']=$ligne['Mail'];
            $info[$i]['Login']=$ligne['Login'];
            $info[$i]['Password']=$ligne['Password'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();  
        return $info;
    }

    function connexion($mail,$mdp)//Connexion de l'utilisateurs
    {
        $cnx = cnx_bdd();
        $requete = "select * from Users where Mail = '".$mail."';"; //On teste si le mail du User existe
        $jeuResultat=$cnx->query($requete);  
        $ligne = $jeuResultat->fetch();
        //Si il existe alors
        if($ligne) 
        {
            //On teste si il a mis le bon mot de passe
            $requete = "select * from Users where Mail = '".$mail."' and Password = '".$mdp."';";
            $jeuResultat=$cnx->query($requete);  
            $ligne = $jeuResultat->fetch();
            //Si il a mis le bon mot de passe alors
            if($ligne)
            {
                
               //On rentre les info du compte dans les variables de sessions
                $_SESSION['id'] = $ligne['id'];
                $_SESSION['mail'] = $ligne['Mail'];
                $_SESSION['cat'] = $ligne['cat'];
                return True;

            }
            //Si le mot de passe n'est pas bon
            else
            {
                return False;
            }
        }
        //Si le mail n'existe pas dans la bdd
        else
        {
            return False;
        }
    }
    //Efface les variable de session/Deconnecte le User
    function del_session()
    {
        unset($_SESSION['id']);
        unset($_SESSION['mail']);
        unset($_SESSION['nom']);
        unset($_SESSION['cat']);
    }
    function root()
    {
        if(isset($_SESSION['cat']) && $_SESSION['cat']=="root")
        {
            return True;
        }
        else
        {
            return False;
        }
    }
    //Verifie si le user est connecter
    function verif_session()
    {
        if(empty($_SESSION['id']))
        {
            return False;
        }
        else
        {
            return TRUE;
        }
    }
    //Affiche les variables de sessions
    function echo_session()
    {
        echo $_SESSION['id'];
        echo $_SESSION['mail'];
    }
}




?>