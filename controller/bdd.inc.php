<?php
   # connexion à la base
 class ControllerBdd
 {
  
   ///Connexion à la BDD "session_gmail" et affichage du contenu de la table "user_connect"
    static function bdd()
    {

      try
      {
         echo "toto";
         $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
         
         //Connexion à la BDD
         $_bdd = new PDO('mysql:host=localhost; dbname=session_gmail','root','', 
                         array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));
         
         // Récupération du contenu de la table user_connect par le biais de la requête SQL 
         $_response = $_bdd->query('SELECT * FROM user_connect');
      }
      catch(Exception $e)
      {
         die("Error Data base de votre base ".$e->getMessage());
      }

   }

   static function addNewUser($name,$firstName,$mail,$pwd)
    {
      try
      {
         $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
         
         //Connexion à la BDD
         $_bdd = new PDO('mysql:host=localhost; dbname=session_gmail','root','', 
                         array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));
         
         // Récupération du contenu de la table user_connect par le biais de la requête SQL 
         $query="INSERT INTO user_connect (name, firstName, mailAddress, password) VALUES ('".$name."','".$firstName."','".$mail."','".$pwd."')";
         //echo $query."<BR>";
         
         $_bdd->query($query);
      }
      catch(Exception $e)
      {
         die("Error Data base de votre base ".$e->getMessage());
      }

   }

   static function checkUser($mail,$pwd): bool
    {
      $exist=false;
      try
      {
         $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
         
         //Connexion à la BDD
         $_bdd = new PDO('mysql:host=localhost; dbname=session_gmail','root','', 
                         array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));
         
         // Récupération du contenu de la table user_connect par le biais de la requête SQL 
         $query="SELECT * FROM user_connect WHERE mailAddress='".$mail."' and  password='".$pwd."'";
         echo $query."<BR>";  

         $req=$_bdd->prepare($query);
         $req->execute();
         
         $result = $req-> fetchAll();

         foreach($result as $line)
         {
            echo $line['mailAddress']."<BR>";
            if($line['mailAddress']==$mail && $line['password']==$pwd)
            {
               $exist=true;
               echo "user authentified.";
               break;
            }
         }

      }
      catch(Exception $e)
      {
         die("Error Data base de votre base ".$e->getMessage());
      }

      return $exist;
   }
}
//ControllerBdd::bdd();