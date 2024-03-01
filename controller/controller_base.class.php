<?php
class ControllerBase{
        static function event(){
            
            
            if(isset($_POST['name']) && isset($_POST['firstName']) && isset($_POST['mailAddress']) && isset($_POST['password']))
            { # vérification des champs
                    
                $name=$_POST['name'];
                $firstName=$_POST['firstName'];
                $mailAddress=$_POST['mailAddress'];
                $pwd=$_POST['password'];
                
                echo $name . " " . $firstName . " " . $mailAddress . " " . $pwd . "<BR>";

                # vérification si le format du mail est correcte 
                if(filter_var($_POST['mailAddress'], FILTER_VALIDATE_EMAIL) && $_POST['password'])
                {                    
                    require_once __DIR__ . '\bdd.inc.php';
                    try
                    {
                        ControllerBdd::addNewUser($name,$firstName,$mailAddress,$pwd); 
                        echo "L'utilisateur a été créé en BDD<BR>";
                        header("Location:./connection.php"); # redirection vers une autre page
                    }
                    catch(Exception $ex)
                    {
                        echo $ex->getMessage();                    
                    }
                }
                else
                {
                    
                    die("<p> Tous les champs sont obligatoires !!! <a href=\"index.php\">Veuillez recharger la page</a></p>");
                }
                return false;
                
            }
            
        }

        static function connectionEvent(){
            
            
            if(isset($_POST['mailAddress']) && isset($_POST['password']))
            { # vérification des champs                    
                
                $mailAddress=$_POST['mailAddress'];
                $pwd=$_POST['password'];
                
                echo $mailAddress . " " . $pwd . "<BR>";

                # vérification si le format du mail est correcte 
                if(filter_var($_POST['mailAddress'], FILTER_VALIDATE_EMAIL) && $_POST['password'])
                {                    
                    require_once __DIR__ . '\bdd.inc.php';
                    try
                    {
                        $connectionOK = ControllerBdd::checkUser($mailAddress,$pwd); 
                        if($connectionOK)
                        {
                            echo "L'utilisateur est connecté<BR>";
                            header("Location:./connecter.php"); # redirection vers une autre page
                        }
                    }
                    catch(Exception $ex)
                    {
                        echo $ex->getMessage();                    
                    }
                }
                else
                {
                    
                    die("<p> Tous les champs sont obligatoires !!! <a href=\"index.php\">Veuillez recharger la page</a></p>");
                }
                return false;
                
            }
            
        }

        
    }

?>