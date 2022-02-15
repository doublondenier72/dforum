<?php

require('config.php');

class ErrorMessage {

    public static function Error001() {
        return "<h1>Erreur 001</h1>";
    }

    public static function HelpMSG() {
        return "<h3>Une erreur est survenue si l'erreur persiste veuillez conacter le Web Master | Doublondenier#8995</h3>";
    }
}

// Base de données


try {
  $bdd = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
} catch (PDOException $e) {
  echo ErrorMessage::Error001().ErrorMessage::HelpMSG();
  die();
}

  // Déclaration d'une nouvelle classe
  class connexionDB {       // mot de passe
    //private $pass    = '';          // Ne rien mettre si on est sous windows
    private $connexion;
                    
    function __construct(){
      include('config.php');
        $this->host = $servername;           
        $this->name = $dbname;           
        $this->user = $username;          
        $this->pass = $password;
      try{
        $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name,
          $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8', 
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
      }catch (PDOException $e){
        echo ErrorMessage::Error001().ErrorMessage::HelpMSG();
        die();
      }
    }
    
    public function query($sql, $data = array()){
      $req = $this->connexion->prepare($sql);
      $req->execute($data);
      return $req;
    }
    
    public function insert($sql, $data = array()){
      $req = $this->connexion->prepare($sql);
      $req->execute($data);
    }
  }
  
  // Faire une connexion à votre fonction
  $DB = new connexionDB();
?>