<?php
class ControllerBase{
        static function event(){
            
            if(isset($_POST['mail']) && isset($_POST['password'])){ # vérification des champs
                    
                # vérification si le format du mail est correcte 
                if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) && $_POST['password']){
                        print "<p>Bonjour ".$_POST['mail']."</p>";
                        
                        print '<p><a href="mailto:'.$_POST['mail'].'">Contactez moi</a></p>';
                        print "<p>Votre sécurité c'est notre tranquillité : ".password_hash($_POST['password'], PASSWORD_DEFAULT)."</p>";
                }
                else{
                    
                    die("<p> Champs Obligatoires!!! <a href=\"index.php\">Rechargez la page</a></p>");
                }
                return false;
                
            }
        }
    }

?>