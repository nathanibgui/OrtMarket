<?php
class User {
   private $db;

   public function __construct() {
      // Connexion à la base de données
      $this->db = new mysqli("localhost", "root", "root", "OrtMarket");
      if ($this->db->connect_error) {
         die("Impossible de se connecter à la base de données: " . $this->db->connect_error);
      }
   }

   // Ajouter un utilisateur
   public function addUser($Nom, $Prenom, $Email, $Password, $Type) {
      $query = "INSERT INTO Users (Nom, Prenom, Email, Password, Type, Date_Update) VALUES ('$Nom', '$Prenom', '$Email', '$Password', '$Type', NOW())";
      if ($this->db->query($query) === TRUE) {
         return true;
      } else {
         return false;
      }
   }

   // Récupérer tous les utilisateurs
   public function getAllUsers() {
    $query = "SELECT * FROM Users";
    $result = $this->db->query($query);
  
    if ($result) {
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    } else {
        return false;
    }
  }
  public function getUserByEmail($Email) {
    $query = "SELECT * FROM Users where Email = '$Email'";
    $result = $this->db->query($query);
    if ($result) {
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    } else {
        return false;
    }
  }
   // Récupérer un utilisateur par ID
   public function getUserById($Id) {
      $query = "SELECT * FROM Users WHERE Id = '$Id'";
      $result = $this->db->query($query);
      return $result->fetch_assoc();
   }
   public function verif_mdp($Email,$Password)
   {
    $query = "SELECT * FROM Users where Email = '$Email'";
    $result = $this->db->query($query);
    if ($result) {
        $users = array();
        while($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
       
        $Pass = $users[0]['Password'];
       
        if($Password!=$Pass)
        {
            return False;
        }
        else
        {
           $_SESSION['EMAIL'] = $Email;
           $_SESSION['Role'] =  $users[0]['Type'];
           return True; 
        }
    }
    else
    {
        return False;
    }
}

   // Mettre à jour un utilisateur
   public function updateUser($Id, $Nom, $Prenom, $Email, $Password, $Type) {
      $query = "UPDATE Users SET Nom = '$Nom', Prenom = '$Prenom', Email = '$Email', Password = '$Password', Type = '$Type', Date_Update = NOW() WHERE Id = '$Id'";
      if ($this->db->query($query) === TRUE) {
         return true;
      } else {
         return false;
      }
   }

   // Supprimer un utilisateur
   public function deleteUser($Id) {
      $query = "DELETE FROM Users WHERE Id = '$Id'";
      if ($this->db->query($query) === TRUE) {
         return true;
      } else {
         return false;
      }
   }
}
?>
