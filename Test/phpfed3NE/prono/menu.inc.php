<?php

if (isset($_COOKIE['user'])) {$user_pseudo=$_COOKIE['user'];} else {$user_pseudo='';}
if (isset($_COOKIE['mot_de_passe'])) {$user_mdp=$_COOKIE['mot_de_passe'];} else {$user_mdp='';}


VerifSession ($user_pseudo,$user_mdp, $idconnect);

if (VerifSession ($user_pseudo,$user_mdp, $idconnect)=="1")
                {
              
                
               $result=$idconnect->query("	SELECT pseudo, id_prono 
											FROM phpfed3NE_membres 
											WHERE pseudo='$user_pseudo'");
                
                $row = mysqli_fetch_array($result);
                $user_pseudo=$row[0];
                
                $user_id=$row[1];
                
                echo "<br>";
         
                $connecte="oui";
             
                include ("menu.identifie.htm");
               
                  
                }
else
 { 
  
   include ("menu.non-identifie.htm");
   $connecte="non";
 }

?>
