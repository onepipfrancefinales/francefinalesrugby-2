
<?php 
$champion = $_POST['champion']; //
// On fait une boucle pour lister tout ce que contient la table :

$chaine = $champion; //transforme en minuscule
$chaine = strtolower($chaine);
?>









<meta name="description"
content=" <?php echo $titre;?> : Présentation du club (Bureau; Siège; Stade; Contacts); les grandes du dates du club; les palmarès; les résultats du clubs au cours des dernières saisons et un album photos dédié au club. ">
<meta name="keywords"
content="comité Bourgogne,Comite Midi Pyrenees de Rugby,Comite Midi Pyrenees Rugby,Stade toulousain,Colomiers,FFR,Rugby,Federation,Française,Rugbyman,Rugbymen,Sport,Ballon,Ovale,">
<meta name="classification" content="Sport,Rugby">
<meta name="resource-type" content="document">
<meta name="copyright" content="Comite Midi Pyrenees de Rugby">
<meta name="author" content="Equipe Onepip">
<meta name="robots" content="All">


<title> <?php echo $titre;?>  </title>










<div align="center">
  <table width="1000" height="639">
    <tr valign="middle" align="center" bordercolor="#FFFFFF"> 
      <td colspan="3" height="74"> 
        <table width="820" border="1" bordercolor="#000000" height="150">
          <tr> 
            <td height="151"> 
              <div align="left"><img src="../images/stade3.jpg" width="1000" height="150"></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td height="24" colspan="3"><font color="#FFFFFF"></font><font color="#FFFFFF"> 
        <?php
    // On inclut le haut de la page
    include("ligne_fem.php");
    	?>
        </font></td>
    </tr>
    <tr valign="middle" align="center" bgcolor="#000000"> 
      <td width="225" height="505" bgcolor="#996699" align="center" valign="top"> 
        <div align="center"> </div>
        <div align="center"> 
          <p align="center"> 
            <?php
    // On inclut le haut de la page
    include("01gauche_fem.php");
    		?>
            <b><font size="5" color="#FFFFFF"> </font></b></p>
        </div>
      </td>
      <td bgcolor="#FFFFFF" height="505" valign="top" width="586"> 
        <div align="center"> 
          <p><font color="#000000"> 
   
    <?php
require ("connection.php") ;
$reponse = mysql_query("SELECT * FROM bdclubs WHERE code='$chaine' or nom_1='$chaine'or nom_2='$chaine'or sigle='$chaine' or nom_3='$chaine' or nom_4='$chaine'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
		<?php $XX = $donnees['code'] ;?>
		
      
	<?php
 }
mysql_close(); // Déconnexion de MySQL
?>
<?php	
   if ($champion = $XX ) 
		{
		include("01clubs.php");
		}
	else
		{
		include("02clubs.php");
		}
   		 ?>
	

         
		  
		  
		    </font></p>
        </div>
      </td>
      <td height="505" bgcolor="#996699" width="225" valign="top"> 
        <p> 
          <?php
    // On inclut le haut de la page
    include("00droite_fem.php");
    		?>
        </p>
      </td>
    </tr>
  </table>
  <table width="1000" bordercolor="#FFFFFF" align="center">
    <tr valign="top" align="center"> 
      <td bgcolor="#006699" bordercolor="#006699" valign="middle" align="center" height="15"> 
        <b><font color="#FFFFFF" size="+2"> </font></b></td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF"> 
        <p align="center">&nbsp;</p>
        <p align="center"><font color="#FF0000">____________________________________________________</font></p>
        <p align="center"><font color="#FF0000"><b><font size="+2">Photos du club</font></b></font></p>
        
      </td>
    </tr>
    <tr bordercolor="#000000" bgcolor="#FFFFFF"> 
      <td> 
        <div align="center"><font color="#000000"><b> 
          <?php
    // On inclut le haut de la page
    include("../bas.php");
    		?>
          </b></font></div>
      </td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<div align="center"> </div>
