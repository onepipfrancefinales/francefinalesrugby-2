<html>
  <head>
    <title>modification de données en PHP :: partie2</title>
  </head>
<body>
<b> <font size="4"> 

 
  
  
<?php
require ("connect.php") ;
 ?> 
 <?php 
  
$nid  = $_GET['nid'] ;
  echo "$nid";
 
  //requête SQL:
  
 
  //exécution de la requête:
  $requete = mysql_query( "SELECT * FROM infosclub WHERE id = ".$nid ) ;
 echo "$nid"; echo "$nid";
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
</font></b> 
<div align="center"><font size="4"><b></b></font></div>
<form name="insertion" action="modif3_quart.php?nid=<?php echo $nid ?>" method="POST">
  <input type="hidden" name="id" value="<?php echo($nid) ;?>">
  <table border="0" align="center" cellspacing="2" cellpadding="2" width="903">
    <tr align="center"> 
      <td width="175">id</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175"> 
        <div align="center">Club</div>
      </td>
      <td width="539"> 
        <div align="left"> 
          <input type="text" name="siege" value="<?php echo($result->siege) ;?>" size="30">
        </div>
      </td>
      <td width="228"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center"> 
      <td width="175">&nbsp;</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">Pr&eacute;sident</td>
      <td width="539"> 
        <div align="left"> 
          <input type="text" name="siege2" value="<?php echo($result->president) ;?>" size="30">
        </div>
      </td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">Secretariat</td>
      <td width="539"> 
        <div align="left"> 
          <input type="text" name="siege3" value="<?php echo($result->secretariat) ;?>" size="30">
        </div>
      </td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">contact</td>
      <td width="539"> 
        <div align="left"> 
          <input type="text" name="siege4" value="<?php echo($result->contact) ;?>" size="30">
        </div>
      </td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">Siege1</td>
      <td width="539"> 
        <div align="left"></div>
      </td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">siege2</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">&nbsp;</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">Nom du stade</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">Adresse</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">tel</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">Capacite</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">&nbsp;</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">&nbsp;</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">Adresse</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">E-mail</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">&nbsp;</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">Sigle</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">Couleurs</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="175">Comit&eacute;</td>
      <td width="539">&nbsp;</td>
      <td width="228">&nbsp;</td>
    </tr>
  </table>
</form>
  <?php
  }//fin if 
  ?>
