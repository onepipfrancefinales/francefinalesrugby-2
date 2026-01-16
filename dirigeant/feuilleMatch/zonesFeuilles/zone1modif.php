
<p><b><font size="4"> </font></b> </p>
<form name="insertion" action="select_joueurrmodif2.php?" method="POST">
  <b><font size="4"> 
  <?php //indispensable pour recuperer les données de la table
require ("../../connection.php") ;?>
  <?php
 $requete = mysql_query( "SELECT N1, N2,  N3, N4 FROM Phpmpy_feuilleA WHERE id = '560'" ) ;
 if($result = mysql_fetch_object( $requete )  or die(mysql_error()))
 {
 }
mysql_close(); // Déconnexion de MySQL
 ?>
  </font></b> 
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" cellspacing="2" cellpadding="2" width="683">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="32"> 
             
      </td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">cr&eacute;ation du club :</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="N1" value="<?php echo($result->N1) ;?>" size="6">
        </div>
      </td>
      <td width="48">N1</td>
    </tr>
    <tr align="center" valign="middle"> 
      <td colspan="4" bgcolor="#FF0000"><b></b><b></b><b>BUREAU</b></td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Pr&eacute;sident </td>
      <td width="533"> 
        <div align="left">
          <input type="text" name="2" value="<?php echo($result->N2) ;?>" size="50">
          <?php $N2=($result->N2) ;?>
        </div>
      </td>
      <td width="48">N2</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Tr&eacute;sorier</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="N3" value="<?php echo($result->N3) ;?>" size="50">
          <?php echo $N2;?>
        </div>
      </td>
      <td width="48">N3</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Secretaire </td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="N4" value="<?php echo($result->N4) ;?>" size="50">
        </div>
      </td>
      <td width="48">N4</td>
    </tr>
    <tr align="center"> 
      <td width="1">&nbsp;</td>
      <td width="91">Contact</td>
      <td width="533"> 
        <div align="left"> 
          <input type="text" name="N5" value="<?php echo($result->N5) ;?>" size="50">
        </div>
      </td>
      <td width="48">N5</td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
  </table>


<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link type="text/css" rel="stylesheet" href="../feuille_matchA/feuilledestyle.css"/>
</head>

<?php //$comite = $_GET['comite'];?>
<?php //$equipeA = $_GET['equipeA'];?>
<?php //$equipeB = $_GET['equipeB'];?>
<?php //echo $equipeA ;?>
<?php //echo $equipeB ;?>
<?php //echo $comite ;?>
<?php //echo $equipe ;?>
<?php //$equipe_dom = $equipeA;?>
<?php
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>

 <?
if ($equipe>35000)
 $comite='r';
elseif ($equipe>34000)
 {
 $comite='pr';
 $php='php';
 $connect='connexion6';
 }
elseif ($equipe>33000)
  {
 $comite='pch';
 $php='php';
 $connect='connexion6';
 }
elseif ($equipe>32000)
 {
 $comite='pa';
 $php='php';
 $connect='connexion6';
 }
elseif ($equipe>31000)
{
 $comite='br';
 $php='php';
 $connect='connexion6';
 }
elseif ($equipe>30000)
{
 $comite='n';
 $php='php';
 $connect='connexion6';
 }
elseif ($equipe>29000)
 {
 $comite='mpy';
 $php='Php';
 $connect='connexion6';
 }
elseif ($equipe>28000)
{
  $comite='ly';
  $php='php';
  $connect='connexion6';
 }
 
elseif ($equipe>27000)
{
 $comite='lm';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>26000)
{
 $comite='ld';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>25000)
 {
 $comite='idf';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>24000)
 {
 $comite='bg';
 $php='php';
 $connect='connexion6';
 }

 elseif ($equipe>23000)
{
 $comite='fl';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>22000)
 {
 $comite='ly';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>21000)
 $comite='pr';
 elseif ($equipe>20000)
 {
 $comite='ca';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>19000)
 {
 $comite='cbl';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>18000)
 $comite='c';
 elseif ($equipe>17000)
  {
 $comite='ce';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>16000)
 {
 $comite='br';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>15000)
 {
 $comite='bg';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>14000)
 {
 $comite='be';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>13000)
 $comite='au';
 elseif ($equipe>12000)
 {
 $comite='ab';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>11000)
  {
 $comite='al';
 $php='php';
 $connect='connexion6';
 }
 elseif ($equipe>10000)
 $comite='ly';
 
else 
 $comite='()';

//echo $comite;
?> 

<?php $bdcomite=("php".''.$comite.''."_joueurs");?>
<?php// echo $bdcomite;?>

<?php //echo $bdcomite;?>
<?php// echo $equipe;?>
<?php// echo $comite;?>


<?php 
//$nb=mysql_query("SELECT SUM(photo) from $bdcomite where club=$equipe "); // Requête SQL
//$nb=mysql_fetch_array($nb);
//echo "$nb[0]"; 
?>


<? //echo $equipe;?>
<?// echo $comite;?>





<body >

<?php $capitaine= $_POST['capitaine'];?>
<?php $M1= $_POST['M1'];?>
<?php $M2= $_POST['M2'];?>
<?php $M3= $_POST['M3'];?>
<?php $M4= $_POST['M4'];?>
<?php $M5= $_POST['M5'];?>
<?php $M6= $_POST['M6'];?>
<?php $M7= $_POST['M7'];?>
<?php $M8= $_POST['M8'];?>
<?php $M9= $_POST['M9'];?>
<?php $M10= $_POST['M10'];?>
<?php $M11= $_POST['M11'];?>
<?php $M12= $_POST['M12'];?>
<?php $M13= $_POST['M13'];?>
<?php $M14= $_POST['M14'];?>
<?php $M15= $_POST['M15'];?>
<?php $M16= $_POST['M16'];?>
<?php $M17= $_POST['M17'];?>
<?php $M18= $_POST['M18'];?>
<?php $M19= $_POST['M19'];?>
<?php $M20= $_POST['M20'];?>
<?php $M21= $_POST['M21'];?>
<?php $M22= $_POST['M22'];?>
<?php $M23= $_POST['M23'];?>
<?php $M24= $_POST['M24'];?>
<?php $M25= $_POST['M25'];?>
<?php $M26= $_POST['M26'];?>
<?php $M27= $_POST['M27'];?>
<?php $M28= $_POST['M28'];?>
<?php $M29= $_POST['M29'];?>
<?php $M30= $_POST['M30'];?>
<?php $M31= $_POST['M31'];?>
<?php $M32= $_POST['M32'];?>
<?php $M33= $_POST['M33'];?>
<?php $M34= $_POST['M34'];?>
<?php $M35= $_POST['M35'];?>
<?php $M36= $_POST['M36'];?>
<?php $M37= $_POST['M37'];?>
<?php $M38= $_POST['M38'];?>
<?php $M39= $_POST['M39'];?>
<?php $M40= $_POST['M40'];?>
<?php $M41= $_POST['M41'];?>
<?php $M42= $_POST['M42'];?>
<?php $M43= $_POST['M43'];?>
<?php $M44= $_POST['M44'];?>
<?php $M45= $_POST['M45'];?>
<?php $M46= $_POST['M46'];?>
<?php $M47= $_POST['M47'];?>
<?php $M48= $_POST['M48'];?>
<?php $M49= $_POST['M49'];?>
<?php $M50= $_POST['M50'];?>
<?php $M51= $_POST['M51'];?>
<?php $M52= $_POST['M52'];?>
<?php $M53= $_POST['M53'];?>
<?php $M54= $_POST['M54'];?>
<?php $M55= $_POST['M55'];?>
<?php $M56= $_POST['M56'];?>
<?php $M57= $_POST['M57'];?>
<?php $M58= $_POST['M58'];?>
<?php $M59= $_POST['M59'];?>
<?php $M60= $_POST['M60'];?>
<?php $M61= $_POST['M61'];?>
<?php $M62= $_POST['M62'];?>
<?php $M63= $_POST['M63'];?>
<?php $M64= $_POST['M64'];?>
<?php $M65= $_POST['M65'];?>
<?php $M66= $_POST['M66'];?>
<?php $M67= $_POST['M67'];?>
<?php $M68= $_POST['M68'];?>
<?php $M69= $_POST['M69'];?>
<?php $M70= $_POST['M70'];?>
<?php $M71= $_POST['M71'];?>
<?php $M72= $_POST['M72'];?>
<?php $M73= $_POST['M73'];?>
<?php $M74= $_POST['M74'];?>
<?php $M75= $_POST['M75'];?>
<?php $M76= $_POST['M76'];?>
<?php $M77= $_POST['M77'];?>
<?php $M78= $_POST['M78'];?>
<?php $M79= $_POST['M79'];?>
<?php $M80= $_POST['M80'];?>

<?php $M81= $_POST['M81'];?>
<?php $M82= $_POST['M82'];?>
<?php $M83= $_POST['M83'];?>
<?php $M84= $_POST['M84'];?>
<?php $M85= $_POST['M85'];?>
<?php $M86= $_POST['M86'];?>
<?php $M87= $_POST['M87'];?>
<?php $M88= $_POST['M88'];?>
<?php $M89= $_POST['M89'];?>
<?php $M90= $_POST['M90'];?>
<?php $M91= $_POST['M91'];?>
<?php $M92= $_POST['M92'];?>
<?php $M93= $_POST['M93'];?>
<?php $M94= $_POST['M94'];?>
<?php $M95= $_POST['M95'];?>
<?php $M96= $_POST['M96'];?>
<?php $M97= $_POST['M97'];?>
<?php $M98= $_POST['M98'];?>
<?php $M99= $_POST['M99'];?>




<?php
require ("../../$connect.php")?>
<?php //echo $connect; ?>
<?php
//mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
//mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>

<?php// $bdcomite=Phpmpy_joueurs; ?>
<?php// require ("fonctions.php");?>


<?php
$reponse = mysql_query("SELECT nom, prenom, position_terrain, type_licence FROM $bdcomite WHERE id_perso='1' and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom1= $donnees['nom']; 
$licence1= $donnees['position_terrain']; 
$nom1 = strtoupper($nom1);
$type_licence1= $donnees['type_licence']; 
 }
	
 	 ?>
<?php
	
	echo $nom;
	echo $id_perso;
 
 
 
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom, position_terrain, type_licence  FROM $bdcomite  WHERE id_perso='2'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom2= $donnees['nom'];
$licence2= $donnees['position_terrain']; 
$nom2 = strtoupper($nom2); 
$type_licence2= $donnees['type_licence'];  
  
 }
  
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence  FROM $bdcomite  WHERE id_perso='3'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom3= $donnees['nom'];
$licence3= $donnees['position_terrain'];
$nom3 = strtoupper($nom3); 
$type_licence3= $donnees['type_licence']; 
 }

 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence  FROM $bdcomite  WHERE id_perso='4'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom4= $donnees['nom'];
$licence4= $donnees['position_terrain']; 
$nom4 = strtoupper($nom4);
$type_licence4= $donnees['type_licence']; 
 }
  
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence  FROM $bdcomite  WHERE id_perso='5'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom5= $donnees['nom'];
$licence5= $donnees['position_terrain'];
$nom5 = strtoupper($nom5); 
$type_licence5= $donnees['type_licence'];  
 }
 
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence  FROM $bdcomite  WHERE id_perso='6'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom6= $donnees['nom'];
$licence6= $donnees['position_terrain'];
$nom6 = strtoupper($nom6); 
$type_licence6= $donnees['type_licence']; 
 }
   

 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence  FROM $bdcomite  WHERE id_perso='7'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom7= $donnees['nom'];
$licence7= $donnees['position_terrain'];  
$nom7 = strtoupper($nom7);
$type_licence7= $donnees['type_licence']; 
 }
 
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence  FROM $bdcomite  WHERE id_perso='8'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom8= $donnees['nom'];
$licence8= $donnees['position_terrain']; 
$nom8 = strtoupper($nom8);
$type_licence8= $donnees['type_licence'];  
 }

 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence  FROM $bdcomite  WHERE id_perso='9'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom9= $donnees['nom'];
$licence9= $donnees['position_terrain']; 
$nom9 = strtoupper($nom9);
$type_licence9= $donnees['type_licence'];  
 }
 
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence  FROM $bdcomite  WHERE id_perso='10'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom10= $donnees['nom'];
$licence10= $donnees['position_terrain']; 
$nom10 = strtoupper($nom10);
$type_licence10= $donnees['type_licence'];  
 }
  
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso=11 and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom11= $donnees['nom'];
$licence11= $donnees['position_terrain']; 
$nom11 = strtoupper($nom11);
$type_licence11= $donnees['type_licence'];  
 }
 
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain , type_licence FROM $bdcomite  WHERE id_perso='12'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom12= $donnees['nom'];
$licence12= $donnees['position_terrain'];  
$nom12 = strtoupper($nom12);
$type_licence12= $donnees['type_licence']; 
 }
 
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='13'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom13= $donnees['nom'];
$licence13= $donnees['position_terrain']; 
$nom13 = strtoupper($nom13); 
$type_licence13= $donnees['type_licence']; 
 }
 
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='14'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom14= $donnees['nom'];
$licence14= $donnees['position_terrain'];
$nom14 = strtoupper($nom14); 
$type_licence14= $donnees['type_licence'];  
 }

 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='15'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom15= $donnees['nom'];
$licence15= $donnees['position_terrain']; 
$nom15 = strtoupper($nom15);
$type_licence15= $donnees['type_licence'];  
 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='16'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom16= $donnees['nom'];
$licence16= $donnees['position_terrain']; 
$nom16 = strtoupper($nom16);
$type_licence16= $donnees['type_licence']; 

 }

 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='17'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom17= $donnees['nom'];
$licence17= $donnees['position_terrain']; 
$nom17 = strtoupper($nom17);
$type_licence17= $donnees['type_licence']; 

 }
 
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='18'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom18= $donnees['nom'];
$licence18= $donnees['position_terrain']; 
$nom18 = strtoupper($nom18);
$type_licence18= $donnees['type_licence'];  
 }
 
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='19'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom19= $donnees['nom'];
$licence19= $donnees['position_terrain'];  
$nom19 = strtoupper($nom19);
$type_licence19= $donnees['type_licence'];  
 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='20'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom20= $donnees['nom'];
$licence20= $donnees['position_terrain']; 
$nom20 = strtoupper($nom20);
$type_licence20= $donnees['type_licence'];  
 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='21'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom21= $donnees['nom'];
$licence21= $donnees['position_terrain']; 
$nom21 = strtoupper($nom21);
$type_licence21= $donnees['type_licence'];  
 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence,club FROM $bdcomite  WHERE id_perso='22'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom22= $donnees['nom'];
$licence22= $donnees['position_terrain']; 
$nom22 = strtoupper($nom22);
$type_licence22= $donnees['type_licence'];  
 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='23'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom23= $donnees['nom'];
$licence23= $donnees['position_terrain']; 
$nom23 = strtoupper($nom23);
$type_licence23= $donnees['type_licence'];  

 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='24'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom24= $donnees['nom'];
$licence24= $donnees['position_terrain']; 
$nom24 = strtoupper($nom24);
$type_licence24= $donnees['type_licence'];  
 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='25'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom25= $donnees['nom'];
$licence25= $donnees['position_terrain']; 
 $nom25 = strtoupper($nom25);
$type_licence25= $donnees['type_licence'];  
 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='26'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom26= $donnees['nom'];
$licence26= $donnees['position_terrain'];
 $nom26 = strtoupper($nom26); 
$type_licence26= $donnees['type_licence'];   
 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='27'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom27= $donnees['nom'];
$licence27= $donnees['position_terrain']; 
$nom27 = strtoupper($nom27);
$type_licence27= $donnees['type_licence'];   
 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite  WHERE id_perso='28'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom28= $donnees['nom'];  
$licence28= $donnees['position_terrain']; 
 $nom28 = strtoupper($nom28);
$type_licence28= $donnees['type_licence'];   
 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='29'and club='$equipe'"); // Requête SQL

while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom29= $donnees['nom'];
$licence29= $donnees['position_terrain']; 
 $nom29 = strtoupper($nom29);
$type_licence29= $donnees['type_licence'];  
 }
 ?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='30' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom30= $donnees['nom'];
$licence30= $donnees['position_terrain']; 
$nom30 = strtoupper($nom30);
$type_licence30= $donnees['type_licence'];  
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='31' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom31= $donnees['nom'];
$licence31= $donnees['position_terrain']; 
$nom31 = strtoupper($nom31);
$type_licence31= $donnees['type_licence'];  
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='32' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom32= $donnees['nom'];
$licence32= $donnees['position_terrain']; 
$nom32 = strtoupper($nom32);
$type_licence32= $donnees['type_licence'];  
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='33' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom33= $donnees['nom'];
$licence33= $donnees['position_terrain']; 
$nom33 = strtoupper($nom33);
$type_licence33= $donnees['type_licence'];  
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='34' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom34= $donnees['nom'];
$licence34= $donnees['position_terrain']; 
$nom34 = strtoupper($nom34);
$type_licence34= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='35' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom35= $donnees['nom'];
$licence35= $donnees['position_terrain']; 
$nom35 = strtoupper($nom35);
$type_licence35= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='36' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom36= $donnees['nom'];
$licence36= $donnees['position_terrain']; 
$nom36 = strtoupper($nom36);
$type_licence36= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='37' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom37= $donnees['nom'];
$licence37= $donnees['position_terrain']; 
$nom37 = strtoupper($nom37);
$type_licence37= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='38' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom38= $donnees['nom'];
$licence38= $donnees['position_terrain']; 
$nom38 = strtoupper($nom38);
$type_licence38= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='39' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom39= $donnees['nom'];
$licence39= $donnees['position_terrain']; 
$nom39 = strtoupper($nom39);
$type_licence39= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='40' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom40= $donnees['nom'];
$licence40= $donnees['position_terrain']; 
$nom40 = strtoupper($nom40);
$type_licence40= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='41' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom41= $donnees['nom'];
$licence41= $donnees['position_terrain']; 
$nom41 = strtoupper($nom41);
$type_licence41= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='42' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom42= $donnees['nom'];
$licence42= $donnees['position_terrain']; 
$nom42 = strtoupper($nom42);
$type_licence42= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='43' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom43= $donnees['nom'];
$licence43= $donnees['position_terrain']; 
$nom43 = strtoupper($nom43);
$type_licence43= $donnees['type_licence'];

}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='44' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom44= $donnees['nom'];
$licence44= $donnees['position_terrain']; 
$nom44 = strtoupper($nom44);
$type_licence44= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='45' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom45= $donnees['nom'];
$licence45= $donnees['position_terrain']; 
$nom45 = strtoupper($nom45);
$type_licence45= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='46' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom46= $donnees['nom'];
$licence46= $donnees['position_terrain']; 
$nom46 = strtoupper($nom46);
$type_licence46= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='47' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom47= $donnees['nom'];
$licence47= $donnees['position_terrain']; 
$nom47 = strtoupper($nom47);
$type_licence47= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='48' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom48= $donnees['nom'];
$licence48= $donnees['position_terrain']; 
$nom48 = strtoupper($nom48);
$type_licence48= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='49' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom49= $donnees['nom'];
$licence49= $donnees['position_terrain']; 
$nom49 = strtoupper($nom49);
$type_licence49= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='50' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom50= $donnees['nom'];
$licence50= $donnees['position_terrain']; 
$nom50 = strtoupper($nom50);
$type_licence50= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='51' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom51= $donnees['nom'];
$licence51= $donnees['position_terrain']; 
$nom51 = strtoupper($nom51);
$type_licence51= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='52' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom52= $donnees['nom'];
$licence52= $donnees['position_terrain']; 
$nom52 = strtoupper($nom52);
$type_licence52= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='53' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom53= $donnees['nom'];
$licence53= $donnees['position_terrain']; 
$nom53 = strtoupper($nom53);
$type_licence53= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='54' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom54= $donnees['nom'];
$licence54= $donnees['position_terrain']; 
$nom54 = strtoupper($nom54);
$type_licence54= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso=55 and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom55= $donnees['nom'];
$licence55= $donnees['position_terrain']; 
$nom55 = strtoupper($nom55);
$type_licence55= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='56' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom56= $donnees['nom'];
$licence56= $donnees['position_terrain']; 
$nom56 = strtoupper($nom56);
$type_licence56= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='57' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom57= $donnees['nom'];
$licence57= $donnees['position_terrain']; 
$nom57 = strtoupper($nom57);
$type_licence57= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='58' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom58= $donnees['nom'];
$licence58= $donnees['position_terrain']; 
$nom58 = strtoupper($nom58);
$type_licence58= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='59' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom59= $donnees['nom'];
$licence59= $donnees['position_terrain']; 
$nom59 = strtoupper($nom59);
$type_licence59= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='60' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom60= $donnees['nom'];
$licence60= $donnees['position_terrain']; 
$nom60 = strtoupper($nom60);
$type_licence60= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='61' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom61= $donnees['nom'];
$licence61= $donnees['position_terrain']; 
$nom61 = strtoupper($nom61);
$type_licence61= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='62' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom62= $donnees['nom'];
$licence62= $donnees['position_terrain']; 
$nom62 = strtoupper($nom62);
$type_licence62= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='63' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom63= $donnees['nom'];
$licence63= $donnees['position_terrain']; 
$nom63 = strtoupper($nom63);
$type_licence63= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='64' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom64= $donnees['nom'];
$licence64= $donnees['position_terrain']; 
$nom64 = strtoupper($nom64);
$type_licence64= $donnees['type_licence'];
}
?>

<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='65' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom65= $donnees['nom'];
$licence65= $donnees['position_terrain']; 
$nom65 = strtoupper($nom65);
$type_licence65= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='66' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom66= $donnees['nom'];
$licence66= $donnees['position_terrain']; 
$nom66 = strtoupper($nom66);
$type_licence66= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='67' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom67= $donnees['nom'];
$licence67= $donnees['position_terrain']; 
$nom67 = strtoupper($nom67);
$type_licence67= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='68' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom68= $donnees['nom'];
$licence68= $donnees['position_terrain']; 
$nom68 = strtoupper($nom68);
$type_licence68= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='69' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom69= $donnees['nom'];
$licence69= $donnees['position_terrain']; 
$nom69 = strtoupper($nom69);
$type_licence69= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='70' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom70= $donnees['nom'];
$licence70= $donnees['position_terrain']; 
$nom70 = strtoupper($nom70);
$type_licence70= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='71' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom71= $donnees['nom'];
$licence71= $donnees['position_terrain']; 
$nom71 = strtoupper($nom71);
$type_licence71= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='72' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom72= $donnees['nom'];
$licence72= $donnees['position_terrain']; 
$nom72 = strtoupper($nom72);
$type_licence72= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='73' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom73= $donnees['nom'];
$licence73= $donnees['position_terrain']; 
$nom73 = strtoupper($nom73);
$type_licence73= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='74' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom74= $donnees['nom'];
$licence74= $donnees['position_terrain']; 
$nom74 = strtoupper($nom74);
$type_licence74= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='75' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom75= $donnees['nom'];
$licence75= $donnees['position_terrain']; 
$nom75 = strtoupper($nom75);
$type_licence75= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='76' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom76= $donnees['nom'];
$licence76= $donnees['position_terrain']; 
$nom76 = strtoupper($nom76);
$type_licence76= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='77' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom77= $donnees['nom'];
$licence77= $donnees['position_terrain']; 
$nom77 = strtoupper($nom77);
$type_licence60= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='78' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom78= $donnees['nom'];
$licence78= $donnees['position_terrain']; 
$nom78 = strtoupper($nom78);
$type_licence78= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='79' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom79= $donnees['nom'];
$licence79= $donnees['position_terrain']; 
$nom79 = strtoupper($nom79);
$type_licence79= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='80' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom80= $donnees['nom'];
$licence80= $donnees['position_terrain']; 
$nom80 = strtoupper($nom80);
$type_licence80= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='81' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom81= $donnees['nom'];
$licence81= $donnees['position_terrain']; 
$nom81 = strtoupper($nom81);
$type_licence81= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='82' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom82= $donnees['nom'];
$licence82= $donnees['position_terrain']; 
$nom82 = strtoupper($nom82);
$type_licence82= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='83' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom83= $donnees['nom'];
$licence83= $donnees['position_terrain']; 
$nom83 = strtoupper($nom83);
$type_licence83= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='84' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom84= $donnees['nom'];
$licence84= $donnees['position_terrain']; 
$nom84 = strtoupper($nom84);
$type_licence84= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='85' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom85= $donnees['nom'];
$licence85= $donnees['position_terrain']; 
$nom85 = strtoupper($nom85);
$type_licence85= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='86' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom86= $donnees['nom'];
$licence86= $donnees['position_terrain']; 
$nom86 = strtoupper($nom86);
$type_licence86= $donnees['type_licence'];
}
?><?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='87' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom87= $donnees['nom'];
$licence87= $donnees['position_terrain']; 
$nom87 = strtoupper($nom87);
$type_licence87= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='88' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom88= $donnees['nom'];
$licence88= $donnees['position_terrain']; 
$nom88 = strtoupper($nom88);
$type_licence88= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='89' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom89= $donnees['nom'];
$licence89= $donnees['position_terrain']; 
$nom89 = strtoupper($nom89);
$type_licence89= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='90' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom90= $donnees['nom'];
$licence90= $donnees['position_terrain']; 
$nom90 = strtoupper($nom90);
$type_licence90= $donnees['type_licence'];
}
?><?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='91' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom91= $donnees['nom'];
$licence91= $donnees['position_terrain']; 
$nom91 = strtoupper($nom91);
$type_licence91= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='92' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom92= $donnees['nom'];
$licence92= $donnees['position_terrain']; 
$nom92 = strtoupper($nom92);
$type_licence92= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='93' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom93= $donnees['nom'];
$licence93= $donnees['position_terrain']; 
$nom93 = strtoupper($nom93);
$type_licence93= $donnees['type_licence'];
}
?><?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='94' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom94= $donnees['nom'];
$licence94= $donnees['position_terrain']; 
$nom94 = strtoupper($nom94);
$type_licence60= $donnees['type_licence'];
}
?><?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='95' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom95= $donnees['nom'];
$licence95= $donnees['position_terrain']; 
$nom95 = strtoupper($nom95);
$type_licence60= $donnees['type_licence'];
}
?>
<?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='96' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom96= $donnees['nom'];
$licence96= $donnees['position_terrain']; 
$nom96 = strtoupper($nom96);
$type_licence96= $donnees['type_licence'];
}
?><?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='97' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom97= $donnees['nom'];
$licence97= $donnees['position_terrain']; 
$nom97 = strtoupper($nom97);
$type_licence97= $donnees['type_licence'];
}
?><?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='98' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom98= $donnees['nom'];
$licence98= $donnees['position_terrain']; 
$nom98 = strtoupper($nom98);
$type_licence98= $donnees['type_licence'];
}
?><?php
$reponse = mysql_query("SELECT nom, prenom,  position_terrain, type_licence FROM $bdcomite WHERE id_perso='99' and club='$equipe'"); // Requête SQL
while ($donnees = mysql_fetch_array($reponse) )
{ 
$nom99= $donnees['nom'];
$licence99= $donnees['position_terrain']; 
$nom99 = strtoupper($nom99);
$type_licence99= $donnees['type_licence'];
}
?>
<div align="center">
  <table width="775" border="1" cellspacing="0"  cellpadding="0" align="left" height="500">
    <tr> 
      <td height="14" width="18" bordercolor="#000000" bgcolor="#FFFFFF"> 
        <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
          A </font></b></div>
      </td>
      <td colspan="3" height="14" bordercolor="#000000">Equipe <b>:<font face="Arial, Helvetica, sans-serif"> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT sigle,comite, code FROM bdclubs WHERE code='$equipeA'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php echo $donnees['sigle'];?>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></b></td>
      <td colspan="4" height="14" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Couleur<br>
          de licence</font></div>
      </td>
      <td height="14" width="19" bgcolor="#FFFFFF" bordercolor="#000000"> 
        <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4"> 
          B </font></b></div>
      </td>
      <td height="14" colspan="3" bgcolor="#FFFFFF" bordercolor="#000000">Equipe 
        <b>:<font face="Arial, Helvetica, sans-serif"> 
        <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
$reponse = mysql_query("SELECT sigle,comite, code FROM bdclubs WHERE code='$equipeB'"); // Requête SQL 
While ($donnees = mysql_fetch_array($reponse) )
{ 
?>
        <?php echo $donnees['sigle'];?>
        <?php
 }
mysql_close(); // Déconnexion de MySQL
?>
        </font></b></td>
      <td colspan="3" height="14" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Couleur<br>
          de licence</font></div>
      </td>
      <td height="14" width="28" bgcolor="#CCCCCC" bordercolor="#000000">&nbsp;</td>
    </tr>
    <tr> 
      <td height="23" width="18" bordercolor="#000000"><font size="2" face="Arial, Helvetica, sans-serif"> 
        <?php
//	require ("../../$connect.php")	  
		  
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
        </font></td>
      <td width="14" height="23" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;</font></div>
      </td>
      <td width="122" height="23" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM 
          (lettres capitales)</font></div>
      </td>
      <td width="113" height="23" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de 
          licence</font></div>
      </td>
      <td width="27" height="23" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">O</font></div>
      </td>
      <td width="26" height="23" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">BJ</font></div>
      </td>
      <td width="32" height="23" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">B</font></div>
      </td>
      <td height="23" width="27" bgcolor="#CCCCCC" bordercolor="#000000"><font face="Arial, Helvetica, sans-serif">T</font></td>
      <td height="23" bgcolor="#FFFFFF" bordercolor="#000000" width="19"> 
        <div align="center"></div>
      </td>
      <td height="23" width="17" bgcolor="#FFFFFF" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif">N&deg;</font></div>
      </td>
      <td height="23" width="141" bgcolor="#FFFFFF" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">NOM 
          (lettres capitales)</font></div>
      </td>
      <td height="23" width="92" bgcolor="#FFFFFF" bordercolor="#000000"> 
        <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">N&deg;de 
          licence</font></div>
      </td>
      <td height="23" width="20" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif">O</font></div>
      </td>
      <td height="23" width="22" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif">BJ</font></div>
      </td>
      <td height="23" width="23" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif">B</font></div>
      </td>
      <td height="23" width="28" bgcolor="#CCCCCC" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif">T</font></div>
      </td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="10" width="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==1)
$joueur1=$nom1;
elseif($M2==1)
$joueur1=$nom2;
elseif($M3==1)
$joueur1=$nom3;
elseif($M4==1)
$joueur1=$nom4;
elseif($M5==1)
$joueur1=$nom5;
elseif($M6==1)
$joueur1=$nom6;
elseif($M7==1)
$joueur1=$nom7;
elseif($M8==1)
$joueur1=$nom8;
elseif($M9==1)
$joueur1=$nom9;
elseif($M10==1)
$joueur1=$nom10;
elseif($M11==1)
$joueur1=$nom11;
elseif($M12==1)
$joueur1=$nom12;
elseif($M13==1)
$joueur1=$nom13;
elseif($M14==1)
$joueur1=$nom14;
elseif($M15==1)
$joueur1=$nom15;
elseif($M16==1)
$joueur1=$nom16;
elseif($M17==1)
$joueur1=$nom17;
elseif($M18==1)
$joueur1=$nom18;
elseif($M19==1)
$joueur1=$nom19;
elseif($M20==1)
$joueur1=$nom20;
elseif($M21==1)
$joueur1=$nom21;
elseif($M22==1)
$joueur1=$nom22;
elseif($M23==1)
$joueur1=$nom23;
elseif($M24==1)
$joueur1=$nom24;
elseif($M25==1)
$joueur1=$nom25;
elseif($M26==1)
$joueur1=$nom26;
elseif($M27==1)
$joueur1=$nom27;
elseif($M28==1)
$joueur1=$nom28;
elseif($M29==1)
$joueur1=$nom29;
elseif($M30==1)
$joueur1=$nom30;
elseif($M31==1)
$joueur1=$nom31;
elseif($M32==1)
$joueur1=$nom32;
elseif($M33==1)
$joueur1=$nom33;
elseif($M34==1)
$joueur1=$nom34;
elseif($M35==1)
$joueur1=$nom35;
elseif($M36==1)
$joueur1=$nom36;
elseif($M37==1)
$joueur1=$nom37;
elseif($M38==1)
$joueur1=$nom38;
elseif($M39==1)
$joueur1=$nom39;
elseif($M40==1)
$joueur1=$nom40;
elseif($M41==1)
$joueur1=$nom41;
elseif($M42==1)
$joueur1=$nom42;
elseif($M43==1)
$joueur1=$nom43;
elseif($M44==1)
$joueur1=$nom44;
elseif($M45==1)
$joueur1=$nom45;
elseif($M46==1)
$joueur1=$nom46;
elseif($M47==1)
$joueur1=$nom47;
elseif($M48==1)
$joueur1=$nom48;
elseif($M49==1)
$joueur1=$nom49;
elseif($M50==1)
$joueur1=$nom50;
elseif($M51==1)
$joueur1=$nom51;
elseif($M52==1)
$joueur1=$nom52;
elseif($M53==1)
$joueur1=$nom53;
elseif($M54==1)
$joueur1=$nom54;
elseif($M55==1)
$joueur1=$nom55;
elseif($M56==1)
$joueur1=$nom56;
elseif($M57==1)
$joueur1=$nom57;
elseif($M58==1)
$joueur1=$nom58;
elseif($M59==1)
$joueur1=$nom59;
elseif($M60==1)
$joueur1=$nom60;



elseif($M61==1)
$joueur1=$nom61;
elseif($M62==1)
$joueur1=$nom62;
elseif($M63==1)
$joueur1=$nom63;
elseif($M64==1)
$joueur1=$nom64;
elseif($M65==1)
$joueur1=$nom65;
elseif($M66==1)
$joueur1=$nom66;
elseif($M67==1)
$joueur1=$nom67;
elseif($M68==1)
$joueur1=$nom68;
elseif($M69==1)
$joueur1=$nom69;
elseif($M70==1)
$joueur1=$nom70;
elseif($M71==1)
$joueur1=$nom71;
elseif($M72==1)
$joueur1=$nom72;
elseif($M73==1)
$joueur1=$nom73;
elseif($M74==1)
$joueur1=$nom74;
elseif($M75==1)
$joueur1=$nom75;
elseif($M76==1)
$joueur1=$nom76;
elseif($M77==1)
$joueur1=$nom77;
elseif($M78==1)
$joueur1=$nom78;
elseif($M79==1)
$joueur1=$nom79;
elseif($M80==1)
$joueur1=$nom80;
elseif($M81==1)
$joueur1=$nom81;
elseif($M82==1)
$joueur1=$nom82;
elseif($M83==1)
$joueur1=$nom83;
elseif($M84==1)
$joueur1=$nom84;
elseif($M85==1)
$joueur1=$nom85;
elseif($M86==1)
$joueur1=$nom86;
elseif($M87==1)
$joueur1=$nom87;

elseif($M88==1)
$joueur1=$nom88;

elseif($M89==1)
$joueur1=$nom89;
elseif($M90==1)
$joueur1=$nom90;
elseif($M91==1)
$joueur1=$nom91;
elseif($M92==1)
$joueur1=$nom92;
elseif($M93==1)
$joueur1=$nom93;
elseif($M94==1)
$joueur1=$nom94;
elseif($M95==1)
$joueur1=$nom95;
elseif($M96==1)
$joueur1=$nom96;
elseif($M97==1)
$joueur1=$nom97;
elseif($M98==1)
$joueur1=$nom98;
elseif($M99==1)
$joueur1=$nom99;

else
$joueur1="";
//echo $joueur1;
$joueur=$joueur1;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> <font face="Arial, Helvetica, sans-serif" size="1"> 
          </font><font face="Arial, Helvetica, sans-serif" size="1"> </font></b> 
          </font></div>
      </td>
      <td width="14" height="10" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">1</font></div>
      </td>
      <td width="122" height="10" valign="top"> 
        <div align="center"> <font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="10" valign="top"> 
        <div align="center"> <font size="2" face="Arial, Helvetica, sans-serif"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="10" valign="top"> 
        <div align="center"> <font size="2" face="Arial, Helvetica, sans-serif"> 
          <?php couleurO1($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="10" valign="top"> 
        <div align="center"> <font size="2" face="Arial, Helvetica, sans-serif"> 
          <?php couleurBJ1($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="32" bgcolor="#CCCCCC" height="10" valign="top"> 
        <div align="center"> <font size="2" face="Arial, Helvetica, sans-serif"> 
          <?php couleurB1($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="10" valign="top"> 
        <div align="center"> <font size="2" face="Arial, Helvetica, sans-serif"> 
          <?php couleurT1($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td height="10" bgcolor="#FFFFFF" bordercolor="#000000" width="19"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></td>
      <td width="17" bgcolor="#FFFFFF" height="10" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">1</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" height="10" valign="middle">&nbsp;</td>
      <td width="92" bgcolor="#FFFFFF" height="10" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" height="10" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" height="10" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" height="10" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" height="10" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="4" width="18" bordercolor="#000000"> 
        <div align="center"><b><font size="1" face="Arial, Helvetica, sans-serif"> 
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==2)
$joueur2=$nom1;
elseif($M2==2)
$joueur2=$nom2;
elseif($M3==2)
$joueur2=$nom3;
elseif($M4==2)
$joueur2=$nom4;
elseif($M5==2)
$joueur2=$nom5;
elseif($M6==2)
$joueur2=$nom6;
elseif($M7==2)
$joueur2=$nom7;
elseif($M8==2)
$joueur2=$nom8;
elseif($M9==2)
$joueur2=$nom9;
elseif($M10==2)
$joueur2=$nom10;
elseif($M11==2)
$joueur2=$nom11;
elseif($M12==2)
$joueur2=$nom12;
elseif($M13==2)
$joueur2=$nom13;
elseif($M14==2)
$joueur2=$nom14;
elseif($M15==2)
$joueur2=$nom15;
 elseif($M16==2)
$joueur2=$nom16;
 elseif($M17==2)
$joueur2=$nom17;
elseif($M18==2)
$joueur2=$nom18;
elseif($M19==2)
$joueur2=$nom19;
elseif($M20==2)
$joueur2=$nom20;
 elseif($M21==2)
$joueur2=$nom21;
elseif($M22==2)
$joueur2=$nom22;
elseif($M23==2)
$joueur2=$nom23;
elseif($M24==2)
$joueur2=$nom24;
elseif($M25==2)
$joueur2=$nom25;
elseif($M26==2)
$joueur2=$nom26;
elseif($M27==2)
$joueur2=$nom27;
elseif($M28==2)
$joueur2=$nom28;
elseif($M29==2)
$joueur2=$nom29;
elseif($M30==2)
$joueur2=$nom30;
elseif($M31==2)
$joueur2=$nom31;
elseif($M32==2)
$joueur2=$nom32;
elseif($M33==2)
$joueur2=$nom33;
elseif($M34==2)
$joueur2=$nom34;
elseif($M35==2)
$joueur2=$nom35;
elseif($M36==2)
$joueur2=$nom36;
elseif($M37==2)
$joueur2=$nom37;
elseif($M38==2)
$joueur2=$nom38;
elseif($M39==2)
$joueur2=$nom39;
elseif($M40==2)
$joueur2=$nom40;

elseif($M41==2)
$joueur2=$nom41;
elseif($M42==2)
$joueur2=$nom42;
elseif($M43==2)
$joueur2=$nom43;
elseif($M44==2)
$joueur2=$nom44;
elseif($M45==2)
$joueur2=$nom45;
elseif($M46==2)
$joueur2=$nom46;
elseif($M47==2)
$joueur2=$nom47;
elseif($M48==2)
$joueur2=$nom48;
elseif($M49==2)
$joueur2=$nom49;
elseif($M50==2)
$joueur2=$nom50;
elseif($M51==2)
$joueur2=$nom51;
elseif($M52==2)
$joueur2=$nom52;
elseif($M53==2)
$joueur2=$nom53;
elseif($M54==2)
$joueur2=$nom54;
elseif($M55==2)
$joueur2=$nom55;
elseif($M56==2)
$joueur2=$nom56;
elseif($M57==2)
$joueur2=$nom57;
elseif($M58==2)
$joueur2=$nom58;
elseif($M59==2)
$joueur2=$nom59;
elseif($M60==2)
$joueur2=$nom60;


elseif($M61==2)
$joueur2=$nom61;
elseif($M62==2)
$joueur2=$nom62;
elseif($M63==2)
$joueur2=$nom63;
elseif($M64==2)
$joueur2=$nom64;
elseif($M65==2)
$joueur2=$nom65;
elseif($M66==2)
$joueur2=$nom66;
elseif($M67==2)
$joueur2=$nom67;
elseif($M68==2)
$joueur2=$nom68;
elseif($M69==2)
$joueur2=$nom69;
elseif($M70==2)
$joueur2=$nom70;
elseif($M71==2)
$joueur2=$nom71;
elseif($M72==2)
$joueur2=$nom72;
elseif($M73==2)
$joueur2=$nom73;
elseif($M74==2)
$joueur2=$nom74;
elseif($M75==2)
$joueur2=$nom75;
elseif($M76==2)
$joueur2=$nom76;
elseif($M77==2)
$joueur2=$nom77;
elseif($M78==2)
$joueur2=$nom78;
elseif($M79==2)
$joueur2=$nom79;
elseif($M80==2)
$joueur2=$nom80;
elseif($M81==2)
$joueur2=$nom81;
elseif($M82==2)
$joueur2=$nom82;
elseif($M83==2)
$joueur2=$nom83;
elseif($M84==2)
$joueur2=$nom84;
elseif($M85==2)
$joueur2=$nom85;
elseif($M86==2)
$joueur2=$nom86;
elseif($M87==2)
$joueur2=$nom87;
elseif($M88==2)
$joueur2=$nom88;
elseif($M89==2)
$joueur2=$nom89;
elseif($M90==2)
$joueur2=$nom90;
elseif($M91==2)
$joueur2=$nom91;
elseif($M92==2)
$joueur2=$nom92;
elseif($M93==2)
$joueur2=$nom93;
elseif($M94==2)
$joueur2=$nom94;
elseif($M95==2)
$joueur2=$nom95;
elseif($M96==2)
$joueur2=$nom96;
elseif($M97==2)
$joueur2=$nom97;
elseif($M98==2)
$joueur2=$nom98;
elseif($M99==2)
$joueur2=$nom99;

else
$joueur2="";
//echo $joueur2;
$joueur=$joueur2;
?>
          </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font></b></div>
      </td>
      <td width="14" valign="middle" height="4"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">2</font></div>
      </td>
      <td width="122" valign="top" height="4"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" valign="top" height="4"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="4"> 
        <div align="center"> 
          <?php couleurO2($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" valign="top" height="4"> 
        <div align="center"> 
          <?php couleurBJ2($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" valign="top" height="4"> 
        <div align="center"> 
          <?php couleurB2($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="4"> 
        <div align="center"> 
          <?php couleurT2($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="4" bgcolor="#FFFFFF" bordercolor="#000000" width="19"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></td>
      <td width="17" bgcolor="#FFFFFF" valign="middle" height="4"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">2</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" valign="middle" height="4"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" valign="middle" height="4"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" valign="middle" height="4"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" valign="middle" height="4"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" valign="middle" height="4"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" valign="middle" height="4"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="0" width="18" bordercolor="#000000"> 
        <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php
if ($M1==3)
$joueur3=$nom1;
elseif($M2==3)
$joueur3=$nom2;
elseif($M3==3)
$joueur3=$nom3;
elseif($M4==3)
$joueur3=$nom4;
elseif($M5==3)
$joueur3=$nom5;
elseif($M6==3)
$joueur3=$nom6;
elseif($M7==3)
$joueur3=$nom7;
elseif($M8==3)
$joueur3=$nom8;
elseif($M9==3)
$joueur3=$nom9;
elseif($M10==3)
$joueur3=$nom10;
elseif($M11==3)
$joueur3=$nom11;
elseif($M12==3)
$joueur3=$nom12;
elseif($M13==3)
$joueur3=$nom13;
elseif($M14==3)
$joueur3=$nom14;
elseif($M15==3)
$joueur3=$nom15;
 elseif($M16==3)
$joueur3=$nom16;
 elseif($M17==3)
$joueur3=$nom17;
elseif($M18==3)
$joueur3=$nom18;
elseif($M19==3)
$joueur3=$nom19;
elseif($M20==3)
$joueur3=$nom20;
 elseif($M21==3)
$joueur3=$nom21;
elseif($M22==3)
$joueur3=$nom22;
elseif($M23==3)
$joueur3=$nom23;
elseif($M24==3)
$joueur3=$nom24;
elseif($M25==3)
$joueur3=$nom25;
elseif($M26==3)
$joueur3=$nom26;
elseif($M27==3)
$joueur3=$nom27;
elseif($M28==3)
$joueur3=$nom28;
elseif($M29==3)
$joueur3=$nom29;
elseif($M30==3)
$joueur3=$nom30;
elseif($M31==3)
$joueur3=$nom31;
elseif($M32==3)
$joueur3=$nom32;
elseif($M33==3)
$joueur3=$nom33;
elseif($M34==3)
$joueur3=$nom34;
elseif($M35==3)
$joueur3=$nom35;
elseif($M36==3)
$joueur3=$nom36;
elseif($M37==3)
$joueur3=$nom37;
elseif($M38==3)
$joueur3=$nom38;
elseif($M39==3)
$joueur3=$nom39;
elseif($M40==3)
$joueur3=$nom40;


elseif($M41==3)
$joueur3=$nom41;
elseif($M42==3)
$joueur3=$nom42;
elseif($M43==3)
$joueur3=$nom43;
elseif($M44==3)
$joueur3=$nom44;
elseif($M45==3)
$joueur3=$nom45;
elseif($M46==3)
$joueur3=$nom46;
elseif($M47==3)
$joueur3=$nom47;
elseif($M48==3)
$joueur3=$nom48;
elseif($M49==3)
$joueur3=$nom49;
elseif($M50==3)
$joueur3=$nom50;
elseif($M51==3)
$joueur3=$nom51;
elseif($M52==3)
$joueur3=$nom52;
elseif($M53==3)
$joueur3=$nom53;
elseif($M54==3)
$joueur3=$nom54;
elseif($M55==3)
$joueur3=$nom55;
elseif($M56==3)
$joueur3=$nom56;
elseif($M57==3)
$joueur3=$nom57;
elseif($M58==3)
$joueur3=$nom58;
elseif($M59==3)
$joueur3=$nom59;
elseif($M60==3)
$joueur3=$nom60;

elseif($M61==3)
$joueur3=$nom61;
elseif($M62==3)
$joueur3=$nom62;
elseif($M63==3)
$joueur3=$nom63;
elseif($M64==3)
$joueur3=$nom64;
elseif($M65==3)
$joueur3=$nom65;
elseif($M66==3)
$joueur3=$nom66;
elseif($M67==3)
$joueur3=$nom67;
elseif($M68==3)
$joueur3=$nom68;
elseif($M69==3)
$joueur3=$nom69;
elseif($M70==3)
$joueur3=$nom70;
elseif($M71==3)
$joueur3=$nom71;
elseif($M72==3)
$joueur3=$nom72;
elseif($M73==3)
$joueur3=$nom73;
elseif($M74==3)
$joueur3=$nom74;
elseif($M75==3)
$joueur3=$nom75;
elseif($M76==3)
$joueur3=$nom76;
elseif($M77==3)
$joueur3=$nom77;
elseif($M78==3)
$joueur3=$nom78;
elseif($M79==3)
$joueur3=$nom79;
elseif($M80==3)
$joueur3=$nom80;
elseif($M81==3)
$joueur3=$nom81;
elseif($M82==3)
$joueur3=$nom82;
elseif($M83==3)
$joueur3=$nom83;
elseif($M84==3)
$joueur3=$nom84;
elseif($M85==3)
$joueur3=$nom85;
elseif($M86==3)
$joueur3=$nom86;
elseif($M87==3)
$joueur3=$nom87;

elseif($M88==3)
$joueur3=$nom88;

elseif($M89==3)
$joueur3=$nom89;
elseif($M90==3)
$joueur3=$nom90;
elseif($M91==3)
$joueur3=$nom91;
elseif($M92==3)
$joueur3=$nom92;
elseif($M93==3)
$joueur3=$nom93;
elseif($M94==3)
$joueur3=$nom94;
elseif($M95==3)
$joueur3=$nom95;
elseif($M96==3)
$joueur3=$nom96;
elseif($M97==3)
$joueur3=$nom97;
elseif($M98==3)
$joueur3=$nom98;
elseif($M99==3)
$joueur3=$nom99;



else
$joueur3="";
//echo $joueur3;
$joueur=$joueur3;
?>
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font></div>
      </td>
      <td width="14" height="2" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">3</font></div>
      </td>
      <td width="122" height="2" valign="top"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="2" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" height="2" bgcolor="#CCCCCC" valign="top"> 
        <div align="center"> 
          <?php couleurO3($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" height="2" bgcolor="#CCCCCC" valign="top"> 
        <div align="center"> 
          <?php couleurBJ3($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" height="2" bgcolor="#CCCCCC" valign="top"> 
        <div align="center"> 
          <?php couleurB3($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" height="2" bgcolor="#CCCCCC" valign="top"> 
        <div align="center"> 
          <?php couleurT3($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="2" bgcolor="#FFFFFF" bordercolor="#000000" width="19"><font face="Arial, Helvetica, sans-serif" size="1"> 
        </font></td>
      <td width="17" height="2" bgcolor="#FFFFFF" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">3</font></div>
      </td>
      <td width="141" height="2" bgcolor="#FFFFFF" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" height="2" bgcolor="#FFFFFF" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" height="2" bgcolor="#CCCCCC" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" height="2" bgcolor="#CCCCCC" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" height="2" bgcolor="#CCCCCC" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" height="2" bgcolor="#CCCCCC" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="17" width="18" bordercolor="#000000"> 
        <div align="center"><b><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php
if ($M1==4)
$joueur4=$nom1;
elseif($M2==4)
$joueur4=$nom2;
elseif($M3==4)
$joueur4=$nom3;
elseif($M4==4)
$joueur4=$nom4;
elseif($M5==4)
$joueur4=$nom5;
elseif($M6==4)
$joueur4=$nom6;
elseif($M7==4)
$joueur4=$nom7;
elseif($M8==4)
$joueur4=$nom8;
elseif($M9==4)
$joueur4=$nom9;
elseif($M10==4)
$joueur4=$nom10;
elseif($M11==4)
$joueur4=$nom11;
elseif($M12==4)
$joueur4=$nom12;
elseif($M13==4)
$joueur4=$nom13;
elseif($M14==4)
$joueur4=$nom14;
elseif($M15==4)
$joueur4=$nom15;
 elseif($M16==4)
$joueur4=$nom16;
 elseif($M17==4)
$joueur4=$nom17;
elseif($M18==4)
$joueur4=$nom18;
elseif($M19==4)
$joueur4=$nom19;
elseif($M20==4)
$joueur4=$nom20;
 elseif($M21==4)
$joueur4=$nom21;
elseif($M22==4)
$joueur4=$nom22;
elseif($M23==4)
$joueur4=$nom23;
elseif($M24==4)
$joueur4=$nom24;
elseif($M25==4)
$joueur4=$nom25;
elseif($M26==4)
$joueur4=$nom26;
elseif($M27==4)
$joueur4=$nom27;
elseif($M28==4)
$joueur4=$nom28;
elseif($M29==4)
$joueur4=$nom29;
elseif($M30==4)
$joueur4=$nom30;
elseif($M31==4)
$joueur4=$nom31;
elseif($M32==4)
$joueur4=$nom32;
elseif($M33==4)
$joueur4=$nom33;
elseif($M34==4)
$joueur4=$nom34;
elseif($M35==4)
$joueur4=$nom35;
elseif($M36==4)
$joueur4=$nom36;
elseif($M37==4)
$joueur4=$nom37;
elseif($M38==4)
$joueur4=$nom38;
elseif($M39==4)
$joueur4=$nom39;
elseif($M40==4)
$joueur4=$nom40;


elseif($M41==4)
$joueur4=$nom41;
elseif($M42==4)
$joueur4=$nom42;
elseif($M43==4)
$joueur4=$nom43;
elseif($M44==4)
$joueur4=$nom44;
elseif($M45==4)
$joueur4=$nom45;
elseif($M46==4)
$joueur4=$nom46;
elseif($M47==4)
$joueur4=$nom47;
elseif($M48==4)
$joueur4=$nom48;
elseif($M49==4)
$joueur4=$nom49;
elseif($M50==4)
$joueur4=$nom50;
elseif($M51==4)
$joueur4=$nom51;
elseif($M52==4)
$joueur4=$nom52;
elseif($M53==4)
$joueur4=$nom53;
elseif($M54==4)
$joueur4=$nom54;
elseif($M55==4)
$joueur4=$nom55;
elseif($M56==4)
$joueur4=$nom56;
elseif($M57==4)
$joueur4=$nom57;
elseif($M58==4)
$joueur4=$nom58;
elseif($M59==4)
$joueur4=$nom59;
elseif($M60==4)
$joueur4=$nom60;

elseif($M61==4)
$joueur4=$nom61;
elseif($M62==4)
$joueur4=$nom62;
elseif($M63==4)
$joueur4=$nom63;
elseif($M64==4)
$joueur4=$nom64;
elseif($M65==4)
$joueur4=$nom65;
elseif($M66==4)
$joueur4=$nom66;
elseif($M67==4)
$joueur4=$nom67;
elseif($M68==4)
$joueur4=$nom68;

elseif($M69==4)
$joueur4=$nom69;

elseif($M70==4)
$joueur4=$nom70;
elseif($M71==4)
$joueur4=$nom71;
elseif($M72==4)
$joueur4=$nom72;
elseif($M73==4)
$joueur4=$nom73;
elseif($M74==4)
$joueur4=$nom74;
elseif($M75==4)
$joueur4=$nom75;
elseif($M76==4)
$joueur4=$nom76;
elseif($M77==4)
$joueur4=$nom77;
elseif($M78==4)
$joueur4=$nom78;
elseif($M79==4)
$joueur4=$nom79;
elseif($M80==4)
$joueur4=$nom80;
elseif($M81==4)
$joueur4=$nom81;
elseif($M82==4)
$joueur4=$nom82;
elseif($M83==4)
$joueur4=$nom83;
elseif($M84==4)
$joueur4=$nom84;
elseif($M85==4)
$joueur4=$nom85;
elseif($M86==4)
$joueur4=$nom86;
elseif($M87==4)
$joueur4=$nom87;
elseif($M88==4)
$joueur4=$nom88;
elseif($M89==4)
$joueur4=$nom89;
elseif($M90==4)
$joueur4=$nom90;
elseif($M91==4)
$joueur4=$nom91;
elseif($M92==4)
$joueur4=$nom92;
elseif($M93==4)
$joueur4=$nom93;
elseif($M94==4)
$joueur4=$nom94;
elseif($M95==4)
$joueur4=$nom95;
elseif($M96==4)
$joueur4=$nom96;
elseif($M97==4)
$joueur4=$nom97;
elseif($M98==4)
$joueur4=$nom98;
elseif($M99==4)
$joueur4=$nom99;


else
$joueur4="";
//echo $joueur4;
$joueur=$joueur4;

?>
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font></b></div>
      </td>
      <td width="14" valign="middle" height="17"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">4</font></div>
      </td>
      <td width="122" valign="top" height="17"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" valign="top" height="17"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="17"> 
        <div align="center"> 
          <?php couleurO4($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" valign="top" height="17"> 
        <div align="center"> 
          <?php couleurBJ4($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" valign="top" height="17"> 
        <div align="center"> 
          <?php couleurB4($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="17"> 
        <div align="center"> 
          <?php couleurT4($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="17" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" valign="middle" height="17"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">4</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" valign="middle" height="17"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" valign="middle" height="17"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" valign="middle" height="17"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" valign="middle" height="17"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" valign="middle" height="17"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" valign="middle" height="17"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="23" width="18" bordercolor="#000000"> 
        <div align="center"><b><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php
if ($M1==5)
$joueur5=$nom1;
elseif($M2==5)
$joueur5=$nom2;
elseif($M3==5)
$joueur5=$nom3;
elseif($M4==5)
$joueur5=$nom4;
elseif($M5==5)
$joueur5=$nom5;
elseif($M6==5)
$joueur5=$nom6;
elseif($M7==5)
$joueur5=$nom7;
elseif($M8==5)
$joueur5=$nom8;
elseif($M9==5)
$joueur5=$nom9;
elseif($M10==5)
$joueur5=$nom10;
elseif($M11==5)
$joueur5=$nom11;
elseif($M12==5)
$joueur5=$nom12;
elseif($M13==5)
$joueur5=$nom13;
elseif($M14==5)
$joueur5=$nom14;
elseif($M15==5)
$joueur5=$nom15;
 elseif($M16==5)
$joueur5=$nom16;
 elseif($M17==5)
$joueur5=$nom17;
elseif($M18==5)
$joueur5=$nom18;
elseif($M19==5)
$joueur5=$nom19;
elseif($M20==5)
$joueur5=$nom20;
 elseif($M21==5)
$joueur5=$nom21;
elseif($M22==5)
$joueur5=$nom22;
elseif($M23==5)
$joueur5=$nom23;
elseif($M24==5)
$joueur5=$nom24;
elseif($M25==5)
$joueur5=$nom25;
elseif($M26==5)
$joueur5=$nom26;
elseif($M27==5)
$joueur5=$nom27;
elseif($M28==5)
$joueur5=$nom28;
elseif($M29==5)
$joueur5=$nom29;
elseif($M30==5)
$joueur5=$nom30;
elseif($M31==5)
$joueur5=$nom31;
elseif($M32==5)
$joueur5=$nom32;
elseif($M33==5)
$joueur5=$nom33;
elseif($M34==5)
$joueur5=$nom34;
elseif($M35==5)
$joueur5=$nom35;
elseif($M36==5)
$joueur5=$nom36;
elseif($M37==5)
$joueur5=$nom37;
elseif($M38==5)
$joueur5=$nom38;
elseif($M39==5)
$joueur5=$nom39;
elseif($M40==5)
$joueur5=$nom40;


elseif($M41==5)
$joueur5=$nom41;
elseif($M42==5)
$joueur5=$nom42;
elseif($M43==5)
$joueur5=$nom43;
elseif($M44==5)
$joueur5=$nom44;
elseif($M45==5)
$joueur5=$nom45;
elseif($M46==5)
$joueur5=$nom46;
elseif($M47==5)
$joueur5=$nom47;
elseif($M48==5)
$joueur5=$nom48;
elseif($M49==5)
$joueur5=$nom49;
elseif($M50==5)
$joueur5=$nom50;
elseif($M51==5)
$joueur5=$nom51;
elseif($M52==5)
$joueur5=$nom52;
elseif($M53==5)
$joueur5=$nom53;
elseif($M54==5)
$joueur5=$nom54;
elseif($M55==5)
$joueur5=$nom55;
elseif($M56==5)
$joueur5=$nom56;
elseif($M57==5)
$joueur5=$nom57;
elseif($M58==5)
$joueur5=$nom58;
elseif($M59==5)
$joueur5=$nom59;
elseif($M60==5)
$joueur5=$nom60;



elseif($M61==5)
$joueur5=$nom61;
elseif($M62==5)
$joueur5=$nom62;
elseif($M63==5)
$joueur5=$nom63;
elseif($M64==5)
$joueur5=$nom64;
elseif($M65==5)
$joueur5=$nom65;
elseif($M66==5)
$joueur5=$nom66;
elseif($M67==5)
$joueur5=$nom67;
elseif($M68==5)
$joueur5=$nom68;
elseif($M69==5)
$joueur5=$nom69;
elseif($M70==5)
$joueur5=$nom70;
elseif($M71==5)
$joueur5=$nom71;
elseif($M72==5)
$joueur5=$nom72;
elseif($M73==5)
$joueur5=$nom73;
elseif($M74==5)
$joueur5=$nom74;
elseif($M75==5)
$joueur5=$nom75;
elseif($M76==5)
$joueur5=$nom76;
elseif($M77==5)
$joueur5=$nom77;
elseif($M78==5)
$joueur5=$nom78;
elseif($M79==5)
$joueur5=$nom79;
elseif($M80==5)
$joueur5=$nom80;
elseif($M81==5)
$joueur5=$nom81;
elseif($M82==5)
$joueur5=$nom82;
elseif($M83==5)
$joueur5=$nom83;
elseif($M84==5)
$joueur5=$nom84;
elseif($M85==5)
$joueur5=$nom85;
elseif($M86==5)
$joueur5=$nom86;
elseif($M87==5)
$joueur5=$nom87;
elseif($M88==5)
$joueur5=$nom88;
elseif($M89==5)
$joueur5=$nom89;
elseif($M90==5)
$joueur5=$nom90;
elseif($M91==5)
$joueur5=$nom91;
elseif($M92==5)
$joueur5=$nom92;
elseif($M93==5)
$joueur5=$nom93;
elseif($M94==5)
$joueur5=$nom94;
elseif($M95==5)
$joueur5=$nom95;
elseif($M96==5)
$joueur5=$nom96;
elseif($M97==5)
$joueur5=$nom97;
elseif($M98==5)
$joueur5=$nom98;
elseif($M99==5)
$joueur5=$nom99;

else
$joueur5="";
//echo $joueur5;
$joueur=$joueur5;
?>
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font></b></div>
      </td>
      <td width="14" valign="middle" height="23"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">5</font></div>
      </td>
      <td width="122" valign="top" height="23"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" valign="top" height="23"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="23"> 
        <div align="center"> 
          <?php couleurO5($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" valign="top" height="23"> 
        <div align="center"> 
          <?php couleurBJ5($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" valign="top" height="23"> 
        <div align="center"> 
          <?php couleurB5($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="23"> 
        <div align="center"> 
          <?php couleurT5($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="23" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" valign="middle" height="23"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">5</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" valign="middle" height="23"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" valign="middle" height="23"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" valign="middle" height="23"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" valign="middle" height="23"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" valign="middle" height="23"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" valign="middle" height="23"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="0" width="18" bordercolor="#000000"> 
        <div align="center"><b><font size="1" face="Arial, Helvetica, sans-serif"> 
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==6)
$joueur6=$nom1;
elseif($M2==6)
$joueur6=$nom2;
elseif($M3==6)
$joueur6=$nom3;
elseif($M4==6)
$joueur6=$nom4;
elseif($M5==6)
$joueur6=$nom5;
elseif($M6==6)
$joueur6=$nom6;
elseif($M7==6)
$joueur6=$nom7;
elseif($M8==6)
$joueur6=$nom8;
elseif($M9==6)
$joueur6=$nom9;
elseif($M10==6)
$joueur6=$nom10;
elseif($M11==6)
$joueur6=$nom11;
elseif($M12==6)
$joueur6=$nom12;
elseif($M13==6)
$joueur6=$nom13;
elseif($M14==6)
$joueur6=$nom14;
elseif($M15==6)
$joueur6=$nom15;
 elseif($M16==6)
$joueur6=$nom16;
 elseif($M17==6)
$joueur6=$nom17;
elseif($M18==6)
$joueur6=$nom18;
elseif($M19==6)
$joueur6=$nom19;
elseif($M20==6)
$joueur6=$nom20;
 elseif($M21==6)
$joueur6=$nom21;
elseif($M22==6)
$joueur6=$nom22;
elseif($M23==6)
$joueur6=$nom23;
elseif($M24==6)
$joueur6=$nom24;
elseif($M25==6)
$joueur6=$nom25;
elseif($M26==6)
$joueur6=$nom26;
elseif($M27==6)
$joueur6=$nom27;
elseif($M28==6)
$joueur6=$nom28;
elseif($M29==6)
$joueur6=$nom29;
elseif($M30==6)
$joueur6=$nom30;
elseif($M31==6)
$joueur6=$nom31;
elseif($M32==6)
$joueur6=$nom32;
elseif($M33==6)
$joueur6=$nom33;
elseif($M34==6)
$joueur6=$nom34;
elseif($M35==6)
$joueur6=$nom35;
elseif($M36==6)
$joueur6=$nom36;
elseif($M37==6)
$joueur6=$nom37;
elseif($M38==6)
$joueur6=$nom38;
elseif($M39==6)
$joueur6=$nom39;
elseif($M40==6)
$joueur6=$nom40;

elseif($M41==6)
$joueur6=$nom41;
elseif($M42==6)
$joueur6=$nom42;
elseif($M43==6)
$joueur6=$nom43;
elseif($M44==6)
$joueur6=$nom44;
elseif($M45==6)
$joueur6=$nom45;
elseif($M46==6)
$joueur6=$nom46;
elseif($M47==6)
$joueur6=$nom47;
elseif($M48==6)
$joueur6=$nom48;
elseif($M49==6)
$joueur6=$nom49;
elseif($M50==6)
$joueur6=$nom50;
elseif($M51==6)
$joueur6=$nom51;
elseif($M52==6)
$joueur6=$nom52;
elseif($M53==6)
$joueur6=$nom53;
elseif($M54==6)
$joueur6=$nom54;
elseif($M55==6)
$joueur6=$nom55;
elseif($M56==6)
$joueur6=$nom56;
elseif($M57==6)
$joueur6=$nom57;
elseif($M58==6)
$joueur6=$nom58;
elseif($M59==6)
$joueur6=$nom59;
elseif($M60==6)
$joueur6=$nom60;

elseif($M61==6)
$joueur6=$nom61;
elseif($M62==6)
$joueur6=$nom62;
elseif($M63==6)
$joueur6=$nom63;
elseif($M64==6)
$joueur6=$nom64;
elseif($M65==6)
$joueur6=$nom65;
elseif($M66==6)
$joueur6=$nom66;
elseif($M67==6)
$joueur6=$nom67;
elseif($M68==6)
$joueur6=$nom68;
elseif($M69==6)
$joueur6=$nom69;
elseif($M70==6)
$joueur6=$nom70;
elseif($M71==6)
$joueur6=$nom71;
elseif($M72==6)
$joueur6=$nom72;
elseif($M73==6)
$joueur6=$nom73;
elseif($M74==6)
$joueur6=$nom74;
elseif($M75==6)
$joueur6=$nom75;
elseif($M76==6)
$joueur6=$nom76;
elseif($M77==6)
$joueur6=$nom77;
elseif($M78==6)
$joueur6=$nom78;
elseif($M79==6)
$joueur6=$nom79;
elseif($M80==6)
$joueur6=$nom80;
elseif($M81==6)
$joueur6=$nom81;
elseif($M82==6)
$joueur6=$nom82;
elseif($M83==6)
$joueur6=$nom83;
elseif($M84==6)
$joueur6=$nom84;
elseif($M85==6)
$joueur6=$nom85;
elseif($M86==6)
$joueur6=$nom86;
elseif($M87==6)
$joueur6=$nom87;
elseif($M88==6)
$joueur6=$nom88;
elseif($M89==6)
$joueur6=$nom89;
elseif($M90==6)
$joueur6=$nom90;
elseif($M91==6)
$joueur6=$nom91;
elseif($M92==6)
$joueur6=$nom92;
elseif($M93==6)
$joueur6=$nom93;
elseif($M94==6)
$joueur6=$nom94;
elseif($M95==6)
$joueur6=$nom95;
elseif($M96==6)
$joueur6=$nom96;
elseif($M97==6)
$joueur6=$nom97;
elseif($M98==6)
$joueur6=$nom98;
elseif($M99==6)
$joueur6=$nom99;
else
$joueur6="";
//echo $joueur6;
$joueur=$joueur6;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></b></div>
      </td>
      <td width="14" valign="middle" height="15"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">6</font></div>
      </td>
      <td width="122" valign="top" height="15"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" valign="top" height="15"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="15"> 
        <div align="center"> 
          <?php couleurO6($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" valign="top" height="15"> 
        <div align="center"> 
          <?php couleurBJ6($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" valign="top" height="15"> 
        <div align="center"> 
          <?php couleurB6($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="15"> 
        <div align="center"> 
          <?php couleurT6($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="15" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" valign="middle" height="15"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">6</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="5" width="18" bordercolor="#000000"> 
        <div align="center"><b><font size="1" face="Arial, Helvetica, sans-serif"> 
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==7)
$joueur7=$nom1;
elseif($M2==7)
$joueur7=$nom2;
elseif($M3==7)
$joueur7=$nom3;
elseif($M4==7)
$joueur7=$nom4;
elseif($M5==7)
$joueur7=$nom5;
elseif($M6==7)
$joueur7=$nom6;
elseif($M7==7)
$joueur7=$nom7;
elseif($M8==7)
$joueur7=$nom8;
elseif($M9==7)
$joueur7=$nom9;
elseif($M10==7)
$joueur7=$nom10;
elseif($M11==7)
$joueur7=$nom11;
elseif($M12==7)
$joueur7=$nom12;
elseif($M13==7)
$joueur7=$nom13;
elseif($M14==7)
$joueur7=$nom14;
elseif($M15==7)
$joueur7=$nom15;
 elseif($M16==7)
$joueur7=$nom16;
 elseif($M17==7)
$joueur7=$nom17;
elseif($M18==7)
$joueur7=$nom18;
elseif($M19==7)
$joueur7=$nom19;
elseif($M20==7)
$joueur7=$nom20;
 elseif($M21==7)
$joueur7=$nom21;
elseif($M22==7)
$joueur7=$nom22;
elseif($M23==7)
$joueur7=$nom23;
elseif($M24==7)
$joueur7=$nom24;
elseif($M25==7)
$joueur7=$nom25;
elseif($M26==7)
$joueur7=$nom26;
elseif($M27==7)
$joueur7=$nom27;
elseif($M28==7)
$joueur7=$nom28;
elseif($M29==7)
$joueur7=$nom29;
elseif($M30==7)
$joueur7=$nom30;
elseif($M31==7)
$joueur7=$nom31;
elseif($M32==7)
$joueur7=$nom32;
elseif($M33==7)
$joueur7=$nom33;
elseif($M34==7)
$joueur7=$nom34;
elseif($M35==7)
$joueur7=$nom35;
elseif($M36==7)
$joueur7=$nom36;
elseif($M37==7)
$joueur7=$nom37;
elseif($M38==7)
$joueur7=$nom38;
elseif($M39==7)
$joueur7=$nom39;
elseif($M40==7)
$joueur7=$nom40;


elseif($M41==7)
$joueur7=$nom41;
elseif($M42==7)
$joueur7=$nom42;
elseif($M43==7)
$joueur7=$nom43;
elseif($M44==7)
$joueur7=$nom44;
elseif($M45==7)
$joueur7=$nom45;
elseif($M46==7)
$joueur7=$nom46;
elseif($M47==7)
$joueur7=$nom47;
elseif($M48==7)
$joueur7=$nom48;
elseif($M49==7)
$joueur7=$nom50;
elseif($M50==7)
$joueur7=$nom50;
elseif($M51==7)
$joueur7=$nom51;
elseif($M52==7)
$joueur7=$nom52;
elseif($M53==7)
$joueur7=$nom53;
elseif($M54==7)
$joueur7=$nom54;
elseif($M55==7)
$joueur7=$nom55;
elseif($M56==7)
$joueur7=$nom56;
elseif($M57==7)
$joueur7=$nom57;
elseif($M58==7)
$joueur7=$nom58;
elseif($M59==7)
$joueur7=$nom59;
elseif($M60==7)
$joueur7=$nom60;

elseif($M61==7)
$joueur7=$nom61;
elseif($M62==7)
$joueur7=$nom62;
elseif($M63==7)
$joueur7=$nom63;
elseif($M64==7)
$joueur7=$nom64;
elseif($M65==7)
$joueur7=$nom65;
elseif($M66==7)
$joueur7=$nom66;
elseif($M67==7)
$joueur7=$nom67;
elseif($M68==7)
$joueur7=$nom68;
elseif($M69==7)
$joueur7=$nom69;
elseif($M70==7)
$joueur7=$nom70;
elseif($M71==7)
$joueur7=$nom71;
elseif($M72==7)
$joueur7=$nom72;
elseif($M73==7)
$joueur7=$nom73;
elseif($M74==7)
$joueur7=$nom74;
elseif($M75==7)
$joueur7=$nom75;
elseif($M76==7)
$joueur7=$nom76;
elseif($M77==7)
$joueur7=$nom77;
elseif($M78==7)
$joueur7=$nom78;
elseif($M79==7)
$joueur7=$nom79;
elseif($M80==7)
$joueur7=$nom80;
elseif($M81==7)
$joueur7=$nom81;
elseif($M82==7)
$joueur7=$nom82;
elseif($M83==7)
$joueur7=$nom83;
elseif($M84==7)
$joueur7=$nom84;
elseif($M85==7)
$joueur7=$nom85;
elseif($M86==7)
$joueur7=$nom86;
elseif($M87==7)
$joueur7=$nom87;
elseif($M88==7)
$joueur7=$nom88;
elseif($M89==7)
$joueur7=$nom89;
elseif($M90==7)
$joueur7=$nom90;
elseif($M91==7)
$joueur7=$nom91;
elseif($M92==7)
$joueur7=$nom92;
elseif($M93==7)
$joueur7=$nom93;
elseif($M94==7)
$joueur7=$nom94;
elseif($M95==7)
$joueur7=$nom95;
elseif($M96==7)
$joueur7=$nom96;
elseif($M97==7)
$joueur7=$nom97;
elseif($M98==7)
$joueur7=$nom98;
elseif($M99==7)
$joueur7=$nom99;


else
$joueur7="";
//echo $joueur7;
$joueur=$joueur7;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></b></div>
      </td>
      <td width="14" valign="middle" height="5"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">7</font></div>
      </td>
      <td width="122" valign="top" height="5"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" valign="top" height="5"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="5"> 
        <div align="center"> 
          <?php couleurO7($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" valign="top" height="5"> 
        <div align="center"> 
          <?php couleurBJ7($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" valign="top" height="5"> 
        <div align="center"> 
          <?php couleurB7($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="5"> 
        <div align="center"> 
          <?php couleurT7($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="5" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" valign="middle" height="5"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">7</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" valign="middle" height="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" valign="middle" height="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" valign="middle" height="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" valign="middle" height="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" valign="middle" height="5"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" valign="middle" height="5"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="1" width="18" bordercolor="#000000"> 
        <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"> 
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==8)
$joueur8=$nom1;
elseif($M2==8)
$joueur8=$nom2;
elseif($M3==8)
$joueur8=$nom3;
elseif($M4==8)
$joueur8=$nom4;
elseif($M5==8)
$joueur8=$nom5;
elseif($M6==8)
$joueur8=$nom6;
elseif($M7==8)
$joueur8=$nom7;
elseif($M8==8)
$joueur8=$nom8;
elseif($M9==8)
$joueur8=$nom9;
elseif($M10==8)
$joueur8=$nom10;
elseif($M11==8)
$joueur8=$nom11;
elseif($M12==8)
$joueur8=$nom12;
elseif($M13==8)
$joueur8=$nom13;
elseif($M14==8)
$joueur8=$nom14;
elseif($M15==8)
$joueur8=$nom15;
 elseif($M16==8)
$joueur8=$nom16;
 elseif($M17==8)
$joueur8=$nom17;
elseif($M18==8)
$joueur8=$nom18;
elseif($M19==8)
$joueur8=$nom19;
elseif($M20==8)
$joueur8=$nom20;
 elseif($M21==8)
$joueur8=$nom21;
elseif($M22==8)
$joueur8=$nom22;
elseif($M23==8)
$joueur8=$nom23;
elseif($M24==8)
$joueur8=$nom24;
elseif($M25==8)
$joueur8=$nom25;
elseif($M26==8)
$joueur8=$nom26;
elseif($M27==8)
$joueur8=$nom27;
elseif($M28==8)
$joueur8=$nom28;
elseif($M29==8)
$joueur8=$nom29;
elseif($M30==8)
$joueur8=$nom30;
elseif($M31==8)
$joueur8=$nom31;
elseif($M32==8)
$joueur8=$nom32;
elseif($M33==8)
$joueur8=$nom33;
elseif($M34==8)
$joueur8=$nom34;
elseif($M35==8)
$joueur8=$nom35;
elseif($M36==8)
$joueur8=$nom36;
elseif($M37==8)
$joueur8=$nom37;
elseif($M38==8)
$joueur8=$nom38;
elseif($M39==8)
$joueur8=$nom39;
elseif($M40==8)
$joueur8=$nom40;



elseif($M41==8)
$joueur8=$nom41;
elseif($M42==8)
$joueur8=$nom42;
elseif($M43==8)
$joueur8=$nom43;
elseif($M44==8)
$joueur8=$nom44;
elseif($M45==8)
$joueur8=$nom45;
elseif($M46==8)
$joueur8=$nom46;
elseif($M47==8)
$joueur8=$nom47;
elseif($M48==8)
$joueur8=$nom48;
elseif($M49==8)
$joueur8=$nom49;
elseif($M50==8)
$joueur8=$nom50;
elseif($M51==8)
$joueur8=$nom51;
elseif($M52==8)
$joueur8=$nom52;
elseif($M53==8)
$joueur8=$nom53;
elseif($M54==8)
$joueur8=$nom54;
elseif($M55==8)
$joueur8=$nom55;
elseif($M56==8)
$joueur8=$nom56;
elseif($M57==8)
$joueur8=$nom57;
elseif($M58==8)
$joueur8=$nom58;
elseif($M59==8)
$joueur8=$nom59;
elseif($M60==8)
$joueur8=$nom60;

elseif($M61==8)
$joueur8=$nom61;
elseif($M62==8)
$joueur8=$nom62;
elseif($M63==8)
$joueur8=$nom63;
elseif($M64==8)
$joueur8=$nom64;
elseif($M65==8)
$joueur8=$nom65;
elseif($M66==8)
$joueur8=$nom66;
elseif($M67==8)
$joueur8=$nom67;
elseif($M68==8)
$joueur8=$nom68;
elseif($M69==8)
$joueur8=$nom69;
elseif($M70==8)
$joueur8=$nom70;
elseif($M71==8)
$joueur8=$nom71;
elseif($M72==8)
$joueur8=$nom72;
elseif($M73==8)
$joueur8=$nom73;
elseif($M74==8)
$joueur8=$nom74;
elseif($M75==8)
$joueur8=$nom75;
elseif($M76==8)
$joueur8=$nom76;
elseif($M77==8)
$joueur8=$nom77;
elseif($M78==8)
$joueur8=$nom78;
elseif($M79==8)
$joueur8=$nom79;
elseif($M80==8)
$joueur8=$nom80;
elseif($M81==8)
$joueur8=$nom81;
elseif($M82==8)
$joueur8=$nom82;
elseif($M83==8)
$joueur8=$nom83;
elseif($M84==8)
$joueur8=$nom84;
elseif($M85==8)
$joueur8=$nom85;
elseif($M86==8)
$joueur8=$nom86;
elseif($M87==8)
$joueur8=$nom87;
elseif($M88==8)
$joueur8=$nom88;
elseif($M89==8)
$joueur8=$nom89;
elseif($M90==8)
$joueur8=$nom90;
elseif($M91==8)
$joueur8=$nom91;
elseif($M92==8)
$joueur8=$nom92;
elseif($M93==8)
$joueur8=$nom93;
elseif($M94==8)
$joueur8=$nom94;
elseif($M95==8)
$joueur8=$nom95;
elseif($M96==8)
$joueur8=$nom96;
elseif($M97==8)
$joueur8=$nom97;
elseif($M98==8)
$joueur8=$nom98;
elseif($M99==8)
$joueur8=$nom99;

else
$joueur8="";
//echo $joueur8;
$joueur=$joueur8;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" height="20" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">8</font></div>
      </td>
      <td width="122" height="20" valign="top"> 
        <div align="center"> <font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="20" valign="top"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="20" valign="top"> 
        <div align="center"> 
          <?php couleurO8($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="20" valign="top"> 
        <div align="center"> 
          <?php couleurBJ8($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" height="20" valign="top"> 
        <div align="center"> 
          <?php couleurB8($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="20" valign="top"> 
        <div align="center"> 
          <?php couleurT8($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="20" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" height="20" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">8</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" height="20" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" height="20" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" height="20" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" height="20" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" height="20" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" height="20" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="1" width="18" bordercolor="#000000"> 
        <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"> 
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==9)
$joueur9=$nom1;
elseif($M2==9)
$joueur9=$nom2;
elseif($M3==9)
$joueur9=$nom3;
elseif($M4==9)
$joueur9=$nom4;
elseif($M5==9)
$joueur9=$nom5;
elseif($M6==9)
$joueur9=$nom6;
elseif($M7==9)
$joueur9=$nom7;
elseif($M8==9)
$joueur9=$nom8;
elseif($M9==9)
$joueur9=$nom9;
elseif($M10==9)
$joueur9=$nom10;
elseif($M11==9)
$joueur9=$nom11;
elseif($M12==9)
$joueur9=$nom12;
elseif($M13==9)
$joueur9=$nom13;
elseif($M14==9)
$joueur9=$nom14;
elseif($M15==9)
$joueur9=$nom15;
 elseif($M16==9)
$joueur9=$nom16;
 elseif($M17==9)
$joueur9=$nom17;
elseif($M18==9)
$joueur9=$nom18;
elseif($M19==9)
$joueur9=$nom19;
elseif($M20==9)
$joueur9=$nom20;
 elseif($M21==9)
$joueur9=$nom21;
elseif($M22==9)
$joueur9=$nom22;
elseif($M23==9)
$joueur9=$nom23;
elseif($M24==9)
$joueur9=$nom24;
elseif($M25==9)
$joueur9=$nom25;
elseif($M26==9)
$joueur9=$nom26;
elseif($M27==9)
$joueur9=$nom27;
elseif($M28==9)
$joueur9=$nom28;
elseif($M29==9)
$joueur9=$nom29;
elseif($M30==9)
$joueur9=$nom30;
elseif($M31==9)
$joueur9=$nom31;
elseif($M32==9)
$joueur9=$nom32;
elseif($M33==9)
$joueur9=$nom33;
elseif($M34==9)
$joueur9=$nom34;
elseif($M35==9)
$joueur9=$nom35;
elseif($M36==9)
$joueur9=$nom36;
elseif($M37==9)
$joueur9=$nom37;
elseif($M38==9)
$joueur9=$nom38;
elseif($M39==9)
$joueur9=$nom39;
elseif($M40==9)
$joueur9=$nom40;


elseif($M41==9)
$joueur9=$nom41;
elseif($M42==9)
$joueur9=$nom42;
elseif($M43==9)
$joueur9=$nom43;
elseif($M44==9)
$joueur9=$nom44;
elseif($M45==9)
$joueur9=$nom45;
elseif($M46==9)
$joueur9=$nom46;
elseif($M47==9)
$joueur9=$nom47;
elseif($M48==9)
$joueur9=$nom48;
elseif($M49==9)
$joueur9=$nom49;
elseif($M50==9)
$joueur9=$nom50;
elseif($M51==9)
$joueur9=$nom51;
elseif($M52==9)
$joueur9=$nom52;
elseif($M53==9)
$joueur9=$nom53;
elseif($M54==9)
$joueur9=$nom54;
elseif($M55==9)
$joueur9=$nom55;
elseif($M56==9)
$joueur9=$nom56;
elseif($M57==9)
$joueur9=$nom57;
elseif($M58==9)
$joueur9=$nom58;
elseif($M59==9)
$joueur9=$nom59;
elseif($M60==9)
$joueur9=$nom60;

elseif($M61==9)
$joueur9=$nom61;
elseif($M62==9)
$joueur9=$nom62;
elseif($M63==9)
$joueur9=$nom63;
elseif($M64==9)
$joueur9=$nom64;
elseif($M65==9)
$joueur9=$nom65;
elseif($M66==9)
$joueur9=$nom66;
elseif($M67==9)
$joueur9=$nom67;
elseif($M68==9)
$joueur9=$nom68;
elseif($M69==9)
$joueur9=$nom69;
elseif($M70==9)
$joueur9=$nom70;
elseif($M71==9)
$joueur9=$nom71;
elseif($M72==9)
$joueur9=$nom72;
elseif($M73==9)
$joueur9=$nom73;
elseif($M74==9)
$joueur9=$nom74;
elseif($M75==9)
$joueur9=$nom75;
elseif($M76==9)
$joueur9=$nom76;
elseif($M77==9)
$joueur9=$nom77;
elseif($M78==9)
$joueur9=$nom78;
elseif($M79==9)
$joueur9=$nom79;
elseif($M80==9)
$joueur9=$nom80;
elseif($M81==9)
$joueur9=$nom81;
elseif($M82==9)
$joueur9=$nom82;
elseif($M83==9)
$joueur9=$nom83;
elseif($M84==9)
$joueur9=$nom84;
elseif($M85==9)
$joueur9=$nom85;
elseif($M86==9)
$joueur9=$nom86;
elseif($M87==9)
$joueur9=$nom87;
elseif($M88==9)
$joueur9=$nom88;
elseif($M89==9)
$joueur9=$nom89;
elseif($M90==9)
$joueur9=$nom90;
elseif($M91==9)
$joueur9=$nom91;
elseif($M92==9)
$joueur9=$nom92;
elseif($M93==9)
$joueur9=$nom93;
elseif($M94==9)
$joueur9=$nom94;
elseif($M95==9)
$joueur9=$nom95;
elseif($M96==9)
$joueur9=$nom96;
elseif($M97==9)
$joueur9=$nom97;
elseif($M98==9)
$joueur9=$nom98;
elseif($M99==9)
$joueur9=$nom99;


else
$joueur9="";
//echo $joueur9;
$joueur=$joueur9;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" valign="middle" height="15"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">9</font></div>
      </td>
      <td width="122" valign="top" height="15"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" valign="top" height="15"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="15"> 
        <div align="center"> 
          <?php couleurO9($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" valign="top" height="15"> 
        <div align="center"> 
          <?php couleurBJ9($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" valign="top" height="15"> 
        <div align="center"> 
          <?php couleurB9($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="15"> 
        <div align="center"> 
          <?php couleurT9($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="15" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" valign="middle" height="15"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">9</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" valign="middle" height="15"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="9" width="18" bordercolor="#000000"> 
        <div align="center"><font size="1" face="Arial, Helvetica, sans-serif"> 
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==10)
$joueur10=$nom1;
elseif($M2==10)
$joueur10=$nom2;
elseif($M3==10)
$joueur10=$nom3;
elseif($M4==10)
$joueur10=$nom4;
elseif($M5==10)
$joueur10=$nom5;
elseif($M6==10)
$joueur10=$nom6;
elseif($M7==10)
$joueur10=$nom7;
elseif($M8==10)
$joueur10=$nom8;
elseif($M9==10)
$joueur10=$nom9;
elseif($M10==10)
$joueur10=$nom10;
elseif($M11==10)
$joueur10=$nom11;
elseif($M12==10)
$joueur10=$nom12;
elseif($M13==10)
$joueur10=$nom13;
elseif($M14==10)
$joueur10=$nom14;
elseif($M15==10)
$joueur10=$nom15;
 elseif($M16==10)
$joueur10=$nom16;
 elseif($M17==10)
$joueur10=$nom17;
elseif($M18==10)
$joueur10=$nom18;
elseif($M19==10)
$joueur10=$nom19;
elseif($M20==10)
$joueur10=$nom20;
 elseif($M21==10)
$joueur10=$nom21;
elseif($M22==10)
$joueur10=$nom22;
elseif($M23==10)
$joueur10=$nom23;
elseif($M24==10)
$joueur10=$nom24;
elseif($M25==10)
$joueur10=$nom25;
elseif($M26==10)
$joueur10=$nom26;
elseif($M27==10)
$joueur10=$nom27;
elseif($M28==10)
$joueur10=$nom28;
elseif($M29==10)
$joueur10=$nom29;
elseif($M30==10)
$joueur10=$nom30;
elseif($M31==10)
$joueur10=$nom31;
elseif($M32==10)
$joueur10=$nom32;
elseif($M33==10)
$joueur10=$nom33;
elseif($M34==10)
$joueur10=$nom34;
elseif($M35==10)
$joueur10=$nom35;
elseif($M36==10)
$joueur10=$nom36;
elseif($M37==10)
$joueur10=$nom37;
elseif($M38==10)
$joueur10=$nom38;
elseif($M39==10)
$joueur10=$nom39;
elseif($M40==10)
$joueur10=$nom40;


elseif($M41==10)
$joueur10=$nom41;
elseif($M42==10)
$joueur10=$nom42;
elseif($M43==10)
$joueur10=$nom43;
elseif($M44==10)
$joueur10=$nom44;
elseif($M45==10)
$joueur10=$nom45;
elseif($M46==10)
$joueur10=$nom46;
elseif($M47==10)
$joueur10=$nom47;
elseif($M48==10)
$joueur10=$nom48;
elseif($M49==10)
$joueur10=$nom49;
elseif($M50==10)
$joueur10=$nom50;
elseif($M51==10)
$joueur10=$nom51;
elseif($M52==10)
$joueur10=$nom52;
elseif($M53==10)
$joueur10=$nom53;
elseif($M54==10)
$joueur10=$nom54;
elseif($M55==10)
$joueur10=$nom55;
elseif($M56==10)
$joueur10=$nom56;
elseif($M57==10)
$joueur10=$nom57;
elseif($M58==10)
$joueur10=$nom58;
elseif($M59==10)
$joueur10=$nom59;
elseif($M60==10)
$joueur10=$nom60;

elseif($M61==10)
$joueur10=$nom61;
elseif($M62==10)
$joueur10=$nom62;
elseif($M63==10)
$joueur10=$nom63;
elseif($M64==10)
$joueur10=$nom64;
elseif($M65==10)
$joueur10=$nom65;
elseif($M66==10)
$joueur10=$nom66;
elseif($M67==10)
$joueur10=$nom67;
elseif($M68==10)
$joueur10=$nom68;
elseif($M69==10)
$joueur10=$nom69;
elseif($M70==10)
$joueur10=$nom70;
elseif($M71==10)
$joueur10=$nom71;
elseif($M72==10)
$joueur10=$nom72;
elseif($M73==10)
$joueur10=$nom73;
elseif($M74==10)
$joueur10=$nom74;
elseif($M75==10)
$joueur10=$nom75;
elseif($M76==10)
$joueur10=$nom76;
elseif($M77==10)
$joueur10=$nom77;
elseif($M78==10)
$joueur10=$nom78;
elseif($M79==10)
$joueur10=$nom79;
elseif($M80==10)
$joueur10=$nom80;
elseif($M81==10)
$joueur10=$nom81;
elseif($M82==10)
$joueur10=$nom82;
elseif($M83==10)
$joueur10=$nom83;
elseif($M84==10)
$joueur10=$nom84;
elseif($M85==10)
$joueur10=$nom85;
elseif($M86==10)
$joueur10=$nom86;
elseif($M87==10)
$joueur10=$nom87;
elseif($M88==10)
$joueur10=$nom88;
elseif($M89==10)
$joueur10=$nom89;
elseif($M90==10)
$joueur10=$nom90;
elseif($M91==10)
$joueur10=$nom91;
elseif($M92==10)
$joueur10=$nom92;
elseif($M93==10)
$joueur10=$nom93;
elseif($M94==10)
$joueur10=$nom94;
elseif($M95==10)
$joueur10=$nom95;
elseif($M96==10)
$joueur10=$nom96;
elseif($M97==10)
$joueur10=$nom97;
elseif($M98==10)
$joueur10=$nom98;
elseif($M99==10)
$joueur10=$nom99;

else
$joueur10="";
//echo $joueur10;
$joueur=$joueur10;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" valign="middle" height="9"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">10</font></div>
      </td>
      <td width="122" valign="top" height="9"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" valign="top" height="9"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="9"> 
        <div align="center"> 
          <?php couleurO10($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" valign="top" height="9"> 
        <div align="center"> 
          <?php couleurBJ10($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" valign="top" height="9"> 
        <div align="center"> 
          <?php couleurB10($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="9"> 
        <div align="center"> 
          <?php couleurT10($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="9" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" valign="middle" height="9"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">10</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="6" width="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==11)
$joueur11=$nom1;
elseif($M2==11)
$joueur11=$nom2;
elseif($M3==11)
$joueur11=$nom3;
elseif($M4==11)
$joueur11=$nom4;
elseif($M5==11)
$joueur11=$nom5;
elseif($M6==11)
$joueur11=$nom6;
elseif($M7==11)
$joueur11=$nom7;
elseif($M8==11)
$joueur11=$nom8;
elseif($M9==11)
$joueur11=$nom9;
elseif($M10==11)
$joueur11=$nom10;
elseif($M11==11)
$joueur11=$nom11;
elseif($M12==11)
$joueur11=$nom12;
elseif($M13==11)
$joueur11=$nom13;
elseif($M14==11)
$joueur11=$nom14;
elseif($M15==11)
$joueur11=$nom15;
 elseif($M16==11)
$joueur11=$nom16;
 elseif($M17==11)
$joueur11=$nom17;
elseif($M18==11)
$joueur11=$nom18;
elseif($M19==11)
$joueur11=$nom19;
elseif($M20==11)
$joueur11=$nom20;
 elseif($M21==11)
$joueur11=$nom21;
elseif($M22==11)
$joueur11=$nom22;
elseif($M23==11)
$joueur11=$nom23;
elseif($M24==11)
$joueur11=$nom24;
elseif($M25==11)
$joueur11=$nom25;
elseif($M26==11)
$joueur11=$nom26;
elseif($M27==11)
$joueur11=$nom27;
elseif($M28==11)
$joueur11=$nom28;
elseif($M29==11)
$joueur11=$nom29;
elseif($M30==11)
$joueur11=$nom30;
elseif($M31==11)
$joueur11=$nom31;
elseif($M32==11)
$joueur11=$nom32;
elseif($M33==11)
$joueur11=$nom33;
elseif($M34==11)
$joueur11=$nom34;
elseif($M35==11)
$joueur11=$nom35;
elseif($M36==11)
$joueur11=$nom36;
elseif($M37==11)
$joueur11=$nom37;
elseif($M38==11)
$joueur11=$nom38;
elseif($M39==11)
$joueur11=$nom39;
elseif($M40==11)
$joueur11=$nom40;



elseif($M41==11)
$joueur11=$nom41;
elseif($M42==11)
$joueur11=$nom42;
elseif($M43==11)
$joueur11=$nom43;
elseif($M44==11)
$joueur11=$nom44;
elseif($M45==11)
$joueur11=$nom45;
elseif($M46==11)
$joueur11=$nom46;
elseif($M47==11)
$joueur11=$nom47;
elseif($M48==11)
$joueur11=$nom48;
elseif($M49==11)
$joueur11=$nom49;
elseif($M50==11)
$joueur11=$nom50;
elseif($M51==11)
$joueur11=$nom51;
elseif($M52==11)
$joueur11=$nom52;
elseif($M53==11)
$joueur11=$nom53;
elseif($M54==11)
$joueur11=$nom54;
elseif($M55==11)
$joueur11=$nom55;
elseif($M56==11)
$joueur11=$nom56;
elseif($M57==11)
$joueur11=$nom57;
elseif($M58==11)
$joueur11=$nom58;
elseif($M59==11)
$joueur11=$nom59;
elseif($M60==11)
$joueur11=$nom60;


elseif($M61==11)
$joueur11=$nom61;
elseif($M62==11)
$joueur11=$nom62;
elseif($M63==11)
$joueur11=$nom63;
elseif($M64==11)
$joueur11=$nom64;
elseif($M65==11)
$joueur11=$nom65;
elseif($M66==11)
$joueur11=$nom66;
elseif($M67==11)
$joueur11=$nom67;
elseif($M68==11)
$joueur11=$nom68;
elseif($M69==11)
$joueur11=$nom69;
elseif($M70==11)
$joueur11=$nom70;
elseif($M71==11)
$joueur11=$nom71;
elseif($M72==11)
$joueur11=$nom72;
elseif($M73==11)
$joueur11=$nom73;
elseif($M74==11)
$joueur11=$nom74;
elseif($M75==11)
$joueur11=$nom75;
elseif($M76==11)
$joueur11=$nom76;
elseif($M77==11)
$joueur11=$nom77;
elseif($M78==11)
$joueur11=$nom78;
elseif($M79==11)
$joueur11=$nom79;
elseif($M80==11)
$joueur11=$nom80;
elseif($M81==11)
$joueur11=$nom81;
elseif($M82==11)
$joueur11=$nom82;
elseif($M83==11)
$joueur11=$nom83;
elseif($M84==11)
$joueur11=$nom84;
elseif($M85==11)
$joueur11=$nom85;
elseif($M86==11)
$joueur11=$nom86;
elseif($M87==11)
$joueur11=$nom87;
elseif($M88==11)
$joueur11=$nom88;
elseif($M89==11)
$joueur11=$nom89;
elseif($M90==11)
$joueur11=$nom90;
elseif($M91==11)
$joueur11=$nom91;
elseif($M92==11)
$joueur11=$nom92;
elseif($M93==11)
$joueur11=$nom93;
elseif($M94==11)
$joueur11=$nom94;
elseif($M95==11)
$joueur11=$nom95;
elseif($M96==11)
$joueur11=$nom96;
elseif($M97==11)
$joueur11=$nom97;
elseif($M98==11)
$joueur11=$nom98;
elseif($M99==11)
$joueur11=$nom99;

else
$joueur11="";
//echo $joueur11;
$joueur=$joueur11;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" height="13" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">11</font></div>
      </td>
      <td width="122" height="13" valign="top"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="13" valign="top"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="13" valign="top"> 
        <div align="center"> 
          <?php couleurO11($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="13" valign="top"> 
        <div align="center"> 
          <?php couleurBJ11($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" height="13" valign="top"> 
        <div align="center"> 
          <?php couleurB11($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="13" valign="top"> 
        <div align="center"> 
          <?php couleurT11($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="13" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" height="13" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">11</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="16" width="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==12)
$joueur12=$nom1;
elseif($M2==12)
$joueur12=$nom2;
elseif($M3==12)
$joueur12=$nom3;
elseif($M4==12)
$joueur12=$nom4;
elseif($M5==12)
$joueur12=$nom5;
elseif($M6==12)
$joueur12=$nom6;
elseif($M7==12)
$joueur12=$nom7;
elseif($M8==12)
$joueur12=$nom8;
elseif($M9==12)
$joueur12=$nom9;
elseif($M10==12)
$joueur12=$nom10;
elseif($M11==12)
$joueur12=$nom11;
elseif($M12==12)
$joueur12=$nom12;
elseif($M13==12)
$joueur12=$nom13;
elseif($M14==12)
$joueur12=$nom14;
elseif($M15==12)
$joueur12=$nom15;
 elseif($M16==12)
$joueur12=$nom16;
 elseif($M17==12)
$joueur12=$nom17;
elseif($M18==12)
$joueur12=$nom18;
elseif($M19==12)
$joueur12=$nom19;
elseif($M20==12)
$joueur12=$nom20;
 elseif($M21==12)
$joueur12=$nom21;
elseif($M22==12)
$joueur12=$nom22;
elseif($M23==12)
$joueur12=$nom23;
elseif($M24==12)
$joueur12=$nom24;
elseif($M25==12)
$joueur12=$nom25;
elseif($M26==12)
$joueur12=$nom26;
elseif($M27==12)
$joueur12=$nom27;
elseif($M28==12)
$joueur12=$nom28;
elseif($M29==12)
$joueur12=$nom29;
elseif($M30==12)
$joueur12=$nom30;
elseif($M31==12)
$joueur12=$nom31;
elseif($M32==12)
$joueur12=$nom32;
elseif($M33==12)
$joueur12=$nom33;
elseif($M34==12)
$joueur12=$nom34;
elseif($M35==12)
$joueur12=$nom35;
elseif($M36==12)
$joueur12=$nom36;
elseif($M37==12)
$joueur12=$nom37;
elseif($M38==12)
$joueur12=$nom38;
elseif($M39==12)
$joueur12=$nom39;
elseif($M40==12)
$joueur12=$nom40;


elseif($M41==12)
$joueur12=$nom41;
elseif($M42==12)
$joueur12=$nom42;
elseif($M43==12)
$joueur12=$nom43;
elseif($M44==12)
$joueur12=$nom44;
elseif($M45==12)
$joueur12=$nom45;
elseif($M46==12)
$joueur12=$nom46;
elseif($M47==12)
$joueur12=$nom47;
elseif($M48==12)
$joueur12=$nom48;
elseif($M49==12)
$joueur12=$nom49;
elseif($M50==12)
$joueur12=$nom50;
elseif($M51==12)
$joueur12=$nom51;
elseif($M52==12)
$joueur12=$nom52;
elseif($M53==12)
$joueur12=$nom53;
elseif($M54==12)
$joueur12=$nom54;
elseif($M55==12)
$joueur12=$nom55;
elseif($M56==12)
$joueur12=$nom56;
elseif($M57==12)
$joueur12=$nom57;
elseif($M58==12)
$joueur12=$nom58;
elseif($M59==12)
$joueur12=$nom59;
elseif($M60==12)
$joueur12=$nom60;

elseif($M61==12)
$joueur12=$nom61;
elseif($M62==12)
$joueur12=$nom62;
elseif($M63==12)
$joueur12=$nom63;
elseif($M64==12)
$joueur12=$nom64;
elseif($M65==12)
$joueur12=$nom65;
elseif($M66==12)
$joueur12=$nom66;
elseif($M67==12)
$joueur12=$nom67;
elseif($M68==12)
$joueur12=$nom68;
elseif($M69==12)
$joueur12=$nom69;
elseif($M70==12)
$joueur12=$nom70;
elseif($M71==12)
$joueur12=$nom71;
elseif($M72==12)
$joueur12=$nom72;
elseif($M73==12)
$joueur12=$nom73;
elseif($M74==12)
$joueur12=$nom74;
elseif($M75==12)
$joueur12=$nom75;
elseif($M76==12)
$joueur12=$nom76;
elseif($M77==12)
$joueur12=$nom77;
elseif($M78==12)
$joueur12=$nom78;
elseif($M79==12)
$joueur12=$nom79;
elseif($M80==12)
$joueur12=$nom80;
elseif($M81==12)
$joueur12=$nom81;
elseif($M82==12)
$joueur12=$nom82;
elseif($M83==12)
$joueur12=$nom83;
elseif($M84==12)
$joueur12=$nom84;
elseif($M85==12)
$joueur12=$nom85;
elseif($M86==12)
$joueur12=$nom86;
elseif($M87==12)
$joueur12=$nom87;
elseif($M88==12)
$joueur12=$nom88;
elseif($M89==12)
$joueur12=$nom89;
elseif($M90==12)
$joueur12=$nom90;
elseif($M91==12)
$joueur12=$nom91;
elseif($M92==12)
$joueur12=$nom92;
elseif($M93==12)
$joueur12=$nom93;
elseif($M94==12)
$joueur12=$nom94;
elseif($M95==12)
$joueur12=$nom95;
elseif($M96==12)
$joueur12=$nom96;
elseif($M97==12)
$joueur12=$nom97;
elseif($M98==12)
$joueur12=$nom98;
elseif($M99==12)
$joueur12=$nom99;

else
$joueur12="";
//echo $joueur12;
$joueur=$joueur12;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" height="16" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">12</font></div>
      </td>
      <td width="122" height="16" valign="top"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="16" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="16" valign="top"> 
        <div align="center"> 
          <?php couleurO12($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="16" valign="top"> 
        <div align="center"> 
          <?php couleurBJ12($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" height="16" valign="top"> 
        <div align="center"> 
          <?php couleurB12($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="16" valign="top"> 
        <div align="center"> 
          <?php couleurT12($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="16" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" height="16" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">12</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" height="16" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" height="16" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" height="16" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" height="16" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" height="16" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" height="16" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="21" width="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==13)
$joueur13=$nom1;
elseif($M2==13)
$joueur13=$nom2;
elseif($M3==13)
$joueur13=$nom3;
elseif($M4==13)
$joueur13=$nom4;
elseif($M5==13)
$joueur13=$nom5;
elseif($M6==13)
$joueur13=$nom6;
elseif($M7==13)
$joueur13=$nom7;
elseif($M8==13)
$joueur13=$nom8;
elseif($M9==13)
$joueur13=$nom9;
elseif($M10==13)
$joueur13=$nom10;
elseif($M11==13)
$joueur13=$nom11;
elseif($M12==13)
$joueur13=$nom12;
elseif($M13==13)
$joueur13=$nom13;
elseif($M14==13)
$joueur13=$nom14;
elseif($M15==13)
$joueur13=$nom15;
 elseif($M16==13)
$joueur13=$nom16;
 elseif($M17==13)
$joueur13=$nom17;
elseif($M18==13)
$joueur13=$nom18;
elseif($M19==13)
$joueur13=$nom19;
elseif($M20==13)
$joueur13=$nom20;
 elseif($M21==13)
$joueur13=$nom21;
elseif($M22==13)
$joueur13=$nom22;
elseif($M23==13)
$joueur13=$nom23;
elseif($M24==13)
$joueur13=$nom24;
elseif($M25==13)
$joueur13=$nom25;
elseif($M26==13)
$joueur13=$nom26;
elseif($M27==13)
$joueur13=$nom27;
elseif($M28==13)
$joueur13=$nom28;
elseif($M29==13)
$joueur13=$nom29;
elseif($M30==13)
$joueur13=$nom30;
elseif($M31==13)
$joueur13=$nom31;
elseif($M32==13)
$joueur13=$nom32;
elseif($M33==13)
$joueur13=$nom33;
elseif($M34==13)
$joueur13=$nom34;
elseif($M35==13)
$joueur13=$nom35;
elseif($M36==13)
$joueur13=$nom36;
elseif($M37==13)
$joueur13=$nom37;
elseif($M38==13)
$joueur13=$nom38;
elseif($M39==13)
$joueur13=$nom39;
elseif($M40==13)
$joueur13=$nom40;

elseif($M41==13)
$joueur13=$nom41;
elseif($M42==13)
$joueur13=$nom42;
elseif($M43==13)
$joueur13=$nom43;
elseif($M44==13)
$joueur13=$nom44;
elseif($M45==13)
$joueur13=$nom45;
elseif($M46==13)
$joueur13=$nom46;
elseif($M47==13)
$joueur13=$nom47;
elseif($M48==13)
$joueur13=$nom48;
elseif($M49==13)
$joueur13=$nom49;
elseif($M50==13)
$joueur13=$nom50;
elseif($M51==13)
$joueur13=$nom51;
elseif($M52==13)
$joueur13=$nom52;
elseif($M53==13)
$joueur13=$nom53;
elseif($M54==13)
$joueur13=$nom54;
elseif($M55==13)
$joueur13=$nom55;
elseif($M56==13)
$joueur13=$nom56;
elseif($M57==13)
$joueur13=$nom57;
elseif($M58==13)
$joueur13=$nom58;
elseif($M59==13)
$joueur13=$nom59;
elseif($M60==13)
$joueur13=$nom60;


elseif($M61==13)
$joueur13=$nom61;
elseif($M62==13)
$joueur13=$nom62;
elseif($M63==13)
$joueur13=$nom63;
elseif($M64==13)
$joueur13=$nom64;
elseif($M65==13)
$joueur13=$nom65;
elseif($M66==13)
$joueur13=$nom66;
elseif($M67==13)
$joueur13=$nom67;
elseif($M68==13)
$joueur13=$nom68;
elseif($M69==13)
$joueur13=$nom69;
elseif($M70==13)
$joueur13=$nom70;
elseif($M71==13)
$joueur13=$nom71;
elseif($M72==13)
$joueur13=$nom72;
elseif($M73==13)
$joueur13=$nom73;
elseif($M74==13)
$joueur13=$nom74;
elseif($M75==13)
$joueur13=$nom75;
elseif($M76==13)
$joueur13=$nom76;
elseif($M77==13)
$joueur13=$nom77;
elseif($M78==13)
$joueur13=$nom78;
elseif($M79==13)
$joueur13=$nom79;
elseif($M80==13)
$joueur13=$nom80;
elseif($M81==13)
$joueur13=$nom81;
elseif($M82==13)
$joueur13=$nom82;
elseif($M83==13)
$joueur13=$nom83;
elseif($M84==13)
$joueur13=$nom84;
elseif($M85==13)
$joueur13=$nom85;
elseif($M86==13)
$joueur13=$nom86;
elseif($M87==13)
$joueur13=$nom87;
elseif($M88==13)
$joueur13=$nom88;
elseif($M89==13)
$joueur13=$nom89;
elseif($M90==13)
$joueur13=$nom90;
elseif($M91==13)
$joueur13=$nom91;
elseif($M92==13)
$joueur13=$nom92;
elseif($M93==13)
$joueur13=$nom93;
elseif($M94==13)
$joueur13=$nom94;
elseif($M95==13)
$joueur13=$nom95;
elseif($M96==13)
$joueur13=$nom96;
elseif($M97==13)
$joueur13=$nom97;
elseif($M98==13)
$joueur13=$nom98;
elseif($M99==13)
$joueur13=$nom99;


else
$joueur13="";
//echo $joueur13;
$joueur=$joueur13;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          </font></div>
      </td>
      <td width="14" valign="middle" height="21"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">13</font></div>
      </td>
      <td width="122" valign="top" height="21"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" valign="top" height="21"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="21"> 
        <div align="center"> 
          <?php couleurO13($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" valign="top" height="21"> 
        <div align="center"> 
          <?php couleurBJ13($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" valign="top" height="21"> 
        <div align="center"> 
          <?php couleurB13($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="21"> 
        <div align="center"> 
          <?php couleurT13($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="21" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" valign="middle" height="21"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">13</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" valign="middle" height="21"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" valign="middle" height="21"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" valign="middle" height="21"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" valign="middle" height="21"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" valign="middle" height="21"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" valign="middle" height="21"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="2" width="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==14)
$joueur14=$nom1;
elseif($M2==14)
$joueur14=$nom2;
elseif($M3==14)
$joueur14=$nom3;
elseif($M4==14)
$joueur14=$nom4;
elseif($M5==14)
$joueur14=$nom5;
elseif($M6==14)
$joueur14=$nom6;
elseif($M7==14)
$joueur14=$nom7;
elseif($M8==14)
$joueur14=$nom8;
elseif($M9==14)
$joueur14=$nom9;
elseif($M10==14)
$joueur14=$nom10;
elseif($M11==14)
$joueur14=$nom11;
elseif($M12==14)
$joueur14=$nom12;
elseif($M13==14)
$joueur14=$nom13;
elseif($M14==14)
$joueur14=$nom14;
elseif($M15==14)
$joueur14=$nom15;
 elseif($M16==14)
$joueur14=$nom16;
 elseif($M17==14)
$joueur14=$nom17;
elseif($M18==14)
$joueur14=$nom18;
elseif($M19==14)
$joueur14=$nom19;
elseif($M20==14)
$joueur14=$nom20;
 elseif($M21==14)
$joueur14=$nom21;
elseif($M22==14)
$joueur14=$nom22;
elseif($M23==14)
$joueur14=$nom23;
elseif($M24==14)
$joueur14=$nom24;
elseif($M25==14)
$joueur14=$nom25;
elseif($M26==14)
$joueur14=$nom26;
elseif($M27==14)
$joueur14=$nom27;
elseif($M28==14)
$joueur14=$nom28;
elseif($M29==14)
$joueur14=$nom29;
elseif($M30==14)
$joueur14=$nom30;
elseif($M31==14)
$joueur14=$nom31;
elseif($M32==14)
$joueur14=$nom32;
elseif($M33==14)
$joueur14=$nom33;
elseif($M34==14)
$joueur14=$nom34;
elseif($M35==14)
$joueur14=$nom35;
elseif($M36==14)
$joueur14=$nom36;
elseif($M37==14)
$joueur14=$nom37;
elseif($M38==14)
$joueur14=$nom38;
elseif($M39==14)
$joueur14=$nom39;
elseif($M40==14)
$joueur14=$nom40;

elseif($M41==14)
$joueur14=$nom41;
elseif($M42==14)
$joueur14=$nom42;
elseif($M43==14)
$joueur14=$nom43;
elseif($M44==14)
$joueur14=$nom44;
elseif($M45==14)
$joueur14=$nom45;
elseif($M46==14)
$joueur14=$nom46;
elseif($M47==14)
$joueur14=$nom47;
elseif($M48==14)
$joueur14=$nom48;
elseif($M49==14)
$joueur14=$nom49;
elseif($M50==14)
$joueur14=$nom50;
elseif($M51==14)
$joueur14=$nom51;
elseif($M52==14)
$joueur14=$nom52;
elseif($M53==14)
$joueur14=$nom53;
elseif($M54==14)
$joueur14=$nom54;
elseif($M55==14)
$joueur14=$nom55;
elseif($M56==14)
$joueur14=$nom56;
elseif($M57==14)
$joueur14=$nom57;
elseif($M58==14)
$joueur14=$nom58;
elseif($M59==14)
$joueur14=$nom59;
elseif($M60==14)
$joueur14=$nom60;


elseif($M61==14)
$joueur14=$nom61;
elseif($M62==14)
$joueur14=$nom62;
elseif($M63==14)
$joueur14=$nom63;
elseif($M64==14)
$joueur14=$nom64;
elseif($M65==14)
$joueur14=$nom65;
elseif($M66==14)
$joueur14=$nom66;
elseif($M67==14)
$joueur14=$nom67;
elseif($M68==14)
$joueur14=$nom68;
elseif($M69==14)
$joueur14=$nom69;
elseif($M70==14)
$joueur14=$nom70;
elseif($M71==14)
$joueur14=$nom71;
elseif($M72==14)
$joueur14=$nom72;
elseif($M73==14)
$joueur14=$nom73;
elseif($M74==14)
$joueur14=$nom74;
elseif($M75==14)
$joueur14=$nom75;
elseif($M76==14)
$joueur14=$nom76;
elseif($M77==14)
$joueur14=$nom77;
elseif($M78==14)
$joueur14=$nom78;
elseif($M79==14)
$joueur14=$nom79;
elseif($M80==14)
$joueur14=$nom80;
elseif($M81==14)
$joueur14=$nom81;
elseif($M82==14)
$joueur14=$nom82;
elseif($M83==14)
$joueur14=$nom83;
elseif($M84==14)
$joueur14=$nom84;
elseif($M85==14)
$joueur14=$nom85;
elseif($M86==14)
$joueur14=$nom86;
elseif($M87==14)
$joueur14=$nom87;
elseif($M88==14)
$joueur14=$nom88;
elseif($M89==14)
$joueur14=$nom89;
elseif($M90==14)
$joueur14=$nom90;
elseif($M91==14)
$joueur14=$nom91;
elseif($M92==14)
$joueur14=$nom92;
elseif($M93==14)
$joueur14=$nom93;
elseif($M94==14)
$joueur14=$nom94;
elseif($M95==14)
$joueur14=$nom95;
elseif($M96==14)
$joueur14=$nom96;
elseif($M97==14)
$joueur14=$nom97;
elseif($M98==14)
$joueur14=$nom98;
elseif($M99==14)
$joueur14=$nom99;

else
$joueur14="";
//echo $joueur14;
$joueur=$joueur14;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          </font></div>
      </td>
      <td width="14" height="2" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">14</font></div>
      </td>
      <td width="122" height="2" valign="top"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="2" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" height="2" bgcolor="#CCCCCC" valign="top"> 
        <div align="center"> 
          <?php couleurO14($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" height="2" bgcolor="#CCCCCC" valign="top"> 
        <div align="center"> 
          <?php couleurBJ14($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" height="2" bgcolor="#CCCCCC" valign="top"> 
        <div align="center"> 
          <?php couleurB14($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" height="2" bgcolor="#CCCCCC" valign="top"> 
        <div align="center"> 
          <?php couleurT14($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="2" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" height="2" bgcolor="#FFFFFF" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">14</font></div>
      </td>
      <td width="141" height="2" bgcolor="#FFFFFF" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" height="2" bgcolor="#FFFFFF" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" height="2" bgcolor="#CCCCCC" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" height="2" bgcolor="#CCCCCC" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" height="2" bgcolor="#CCCCCC" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" height="2" bgcolor="#CCCCCC" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="13" width="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==15)
$joueur15=$nom1;
elseif($M2==15)
$joueur15=$nom2;
elseif($M3==15)
$joueur15=$nom3;
elseif($M4==15)
$joueur15=$nom4;
elseif($M5==15)
$joueur15=$nom5;
elseif($M6==15)
$joueur15=$nom6;
elseif($M7==15)
$joueur15=$nom7;
elseif($M8==15)
$joueur15=$nom8;
elseif($M9==15)
$joueur15=$nom9;
elseif($M10==15)
$joueur15=$nom10;
elseif($M11==15)
$joueur15=$nom11;
elseif($M12==15)
$joueur15=$nom12;
elseif($M13==15)
$joueur15=$nom13;
elseif($M14==15)
$joueur15=$nom14;
elseif($M15==15)
$joueur15=$nom15;
elseif($M16==15)
$joueur15=$nom16;
elseif($M17==15)
$joueur15=$nom17;
elseif($M18==15)
$joueur15=$nom18;
elseif($M19==15)
$joueur15=$nom19;
elseif($M20==15)
$joueur15=$nom20;
 elseif($M21==15)
$joueur15=$nom21;
elseif($M22==15)
$joueur15=$nom22;
elseif($M23==15)
$joueur15=$nom23;
elseif($M24==15)
$joueur15=$nom24;
elseif($M25==15)
$joueur15=$nom25;
elseif($M26==15)
$joueur15=$nom26;
elseif($M27==15)
$joueur15=$nom27;
elseif($M28==15)
$joueur15=$nom28;
elseif($M29==15)
$joueur15=$nom29;
elseif($M30==15)
$joueur15=$nom30;
elseif($M31==15)
$joueur15=$nom31;
elseif($M32==15)
$joueur15=$nom32;
elseif($M33==15)
$joueur15=$nom33;
elseif($M34==15)
$joueur15=$nom34;
elseif($M35==15)
$joueur15=$nom35;
elseif($M36==15)
$joueur15=$nom36;
elseif($M37==15)
$joueur15=$nom37;
elseif($M38==15)
$joueur15=$nom38;
elseif($M39==15)
$joueur15=$nom39;
elseif($M40==15)
$joueur15=$nom40;

elseif($M41==15)
$joueur15=$nom41;
elseif($M42==15)
$joueur15=$nom42;
elseif($M43==15)
$joueur15=$nom43;
elseif($M44==15)
$joueur15=$nom44;
elseif($M45==15)
$joueur15=$nom45;
elseif($M46==15)
$joueur15=$nom46;
elseif($M47==15)
$joueur15=$nom47;
elseif($M48==15)
$joueur15=$nom48;
elseif($M49==15)
$joueur15=$nom49;
elseif($M50==15)
$joueur15=$nom50;
elseif($M51==15)
$joueur15=$nom51;
elseif($M52==15)
$joueur15=$nom52;
elseif($M53==15)
$joueur15=$nom53;
elseif($M54==15)
$joueur15=$nom54;
elseif($M55==15)
$joueur15=$nom55;
elseif($M56==15)
$joueur15=$nom56;
elseif($M57==15)
$joueur15=$nom57;
elseif($M58==15)
$joueur15=$nom58;
elseif($M59==15)
$joueur15=$nom59;
elseif($M60==15)
$joueur15=$nom60;


elseif($M61==15)
$joueur15=$nom61;
elseif($M62==15)
$joueur15=$nom62;
elseif($M63==15)
$joueur15=$nom63;
elseif($M64==15)
$joueur15=$nom64;
elseif($M65==15)
$joueur15=$nom65;
elseif($M66==15)
$joueur15=$nom66;
elseif($M67==15)
$joueur15=$nom67;
elseif($M68==15)
$joueur15=$nom68;
elseif($M69==15)
$joueur15=$nom69;
elseif($M70==15)
$joueur15=$nom70;
elseif($M71==15)
$joueur15=$nom71;
elseif($M72==15)
$joueur15=$nom72;
elseif($M73==15)
$joueur15=$nom73;
elseif($M74==15)
$joueur15=$nom74;
elseif($M75==15)
$joueur15=$nom75;
elseif($M76==15)
$joueur15=$nom76;
elseif($M77==15)
$joueur15=$nom77;
elseif($M78==15)
$joueur15=$nom78;
elseif($M79==15)
$joueur15=$nom79;
elseif($M80==15)
$joueur15=$nom80;
elseif($M81==15)
$joueur15=$nom81;
elseif($M82==15)
$joueur15=$nom82;
elseif($M83==15)
$joueur15=$nom83;
elseif($M84==15)
$joueur15=$nom84;
elseif($M85==15)
$joueur15=$nom85;
elseif($M86==15)
$joueur15=$nom86;
elseif($M87==15)
$joueur15=$nom87;
elseif($M88==15)
$joueur15=$nom88;
elseif($M89==15)
$joueur15=$nom89;
elseif($M90==15)
$joueur15=$nom90;
elseif($M91==15)
$joueur15=$nom91;
elseif($M92==15)
$joueur15=$nom92;
elseif($M93==15)
$joueur15=$nom93;
elseif($M94==15)
$joueur15=$nom94;
elseif($M95==15)
$joueur15=$nom95;
elseif($M96==15)
$joueur15=$nom96;
elseif($M97==15)
$joueur15=$nom97;
elseif($M98==15)
$joueur15=$nom98;
elseif($M99==15)
$joueur15=$nom99;

else
	
$joueur15="";
//echo $joueur15;
$joueur=$joueur15;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          </font></div>
      </td>
      <td width="14" height="13" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">15</font></div>
      </td>
      <td width="122" height="13" valign="top"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="13" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="13" valign="top"> 
        <div align="center"> 
          <?php couleurO15($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="13" valign="top"> 
        <div align="center"> 
          <?php couleurBJ15($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" height="13" valign="top"> 
        <div align="center"> 
          <?php couleurB15($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="13" valign="top"> 
        <div align="center"> 
          <?php couleurT15($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td height="13" bgcolor="#FFFFFF" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" height="13" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">15</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" height="13" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td valign="middle" align="center" width="18" bordercolor="#000000" height="18"> 
        <div align="center"><font size="1"><font size="1"><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==16)
$joueur16=$nom1;
elseif($M2==16)
$joueur16=$nom2;
elseif($M3==16)
$joueur16=$nom3;
elseif($M4==16)
$joueur16=$nom4;
elseif($M5==16)
$joueur16=$nom5;
elseif($M6==16)
$joueur16=$nom6;
elseif($M7==16)
$joueur16=$nom7;
elseif($M8==16)
$joueur16=$nom8;
elseif($M9==16)
$joueur16=$nom9;
elseif($M10==16)
$joueur16=$nom10;
elseif($M11==16)
$joueur16=$nom11;
elseif($M12==16)
$joueur16=$nom12;
elseif($M13==16)
$joueur16=$nom13;
elseif($M14==16)
$joueur16=$nom14;
elseif($M15==16)
$joueur16=$nom15;
 elseif($M16==16)
$joueur16=$nom16;
 elseif($M17==16)
$joueur16=$nom17;
elseif($M18==16)
$joueur16=$nom18;
elseif($M19==16)
$joueur16=$nom19;
elseif($M20==16)
$joueur16=$nom20;
 elseif($M21==16)
$joueur16=$nom21;
elseif($M22==16)
$joueur16=$nom22;
elseif($M23==16)
$joueur16=$nom23;
elseif($M24==16)
$joueur16=$nom24;
elseif($M25==16)
$joueur16=$nom25;
elseif($M26==16)
$joueur16=$nom26;
elseif($M27==16)
$joueur16=$nom27;
elseif($M28==16)
$joueur16=$nom28;
elseif($M29==16)
$joueur16=$nom29;
elseif($M30==16)
$joueur16=$nom30;
elseif($M31==16)
$joueur16=$nom31;
elseif($M32==16)
$joueur16=$nom32;
elseif($M33==16)
$joueur16=$nom33;
elseif($M34==16)
$joueur16=$nom34;
elseif($M35==16)
$joueur16=$nom35;
elseif($M36==16)
$joueur16=$nom36;
elseif($M37==16)
$joueur16=$nom37;
elseif($M38==16)
$joueur16=$nom38;
elseif($M39==16)
$joueur16=$nom39;
elseif($M40==16)
$joueur16=$nom40;

elseif($M41==16)
$joueur16=$nom41;
elseif($M42==16)
$joueur16=$nom42;
elseif($M43==16)
$joueur16=$nom43;
elseif($M44==16)
$joueur16=$nom44;
elseif($M45==16)
$joueur16=$nom45;
elseif($M46==16)
$joueur16=$nom46;
elseif($M47==16)
$joueur16=$nom47;
elseif($M48==16)
$joueur16=$nom48;
elseif($M49==16)
$joueur16=$nom49;
elseif($M50==16)
$joueur16=$nom50;
elseif($M51==16)
$joueur16=$nom51;
elseif($M52==16)
$joueur16=$nom52;
elseif($M53==16)
$joueur16=$nom53;
elseif($M54==16)
$joueur16=$nom54;
elseif($M55==16)
$joueur16=$nom55;
elseif($M56==16)
$joueur16=$nom56;



elseif($M57==16)
$joueur16=$nom57;
elseif($M58==16)
$joueur16=$nom58;
elseif($M59==16)
$joueur16=$nom59;
elseif($M60==16)
$joueur16=$nom60;


elseif($M61==16)
$joueur16=$nom61;
elseif($M62==16)
$joueur16=$nom62;
elseif($M63==16)
$joueur16=$nom63;
elseif($M64==16)
$joueur16=$nom64;
elseif($M65==16)
$joueur16=$nom65;
elseif($M66==16)
$joueur16=$nom66;
elseif($M67==16)
$joueur16=$nom67;
elseif($M68==16)
$joueur16=$nom68;
elseif($M69==16)
$joueur16=$nom69;
elseif($M70==16)
$joueur16=$nom70;
elseif($M71==16)
$joueur16=$nom71;
elseif($M72==16)
$joueur16=$nom72;
elseif($M73==16)
$joueur16=$nom73;
elseif($M74==16)
$joueur16=$nom74;
elseif($M75==16)
$joueur16=$nom75;
elseif($M76==16)
$joueur16=$nom76;
elseif($M77==16)
$joueur16=$nom77;
elseif($M78==16)
$joueur16=$nom78;
elseif($M79==16)
$joueur16=$nom79;
elseif($M80==16)
$joueur16=$nom80;
elseif($M81==16)
$joueur16=$nom81;
elseif($M82==16)
$joueur16=$nom82;
elseif($M83==16)
$joueur16=$nom83;
elseif($M84==16)
$joueur16=$nom84;
elseif($M85==16)
$joueur16=$nom85;
elseif($M86==16)
$joueur16=$nom86;
elseif($M87==16)
$joueur16=$nom87;
elseif($M88==16)
$joueur16=$nom88;
elseif($M89==16)
$joueur16=$nom89;
elseif($M90==16)
$joueur16=$nom90;
elseif($M91==16)
$joueur16=$nom91;
elseif($M92==16)
$joueur16=$nom92;
elseif($M93==16)
$joueur16=$nom93;
elseif($M94==16)
$joueur16=$nom94;
elseif($M95==16)
$joueur16=$nom95;
elseif($M96==16)
$joueur16=$nom96;
elseif($M97==16)
$joueur16=$nom97;
elseif($M98==16)
$joueur16=$nom98;
elseif($M99==16)
$joueur16=$nom99;

else
$joueur16="";
//echo $joueur16;
$joueur=$joueur16;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font></font></font></div>
      </td>
      <td width="14" valign="middle" height="18" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">16</font></div>
      </td>
      <td width="122" valign="top" height="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" valign="top" height="18" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="18" bordercolor="#000000"> 
        <div align="center"> 
          <?php couleurO16($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" valign="top" height="18" bordercolor="#000000"> 
        <div align="center"> 
          <?php couleurBJ16($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" valign="top" height="18" bordercolor="#000000"> 
        <div align="center"> 
          <?php couleurB16($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="18" bordercolor="#000000"> 
        <div align="center"> 
          <?php couleurT16($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td rowspan="8" bgcolor="#FFFFFF" valign="middle" height="111" bordercolor="#000000" width="19">&nbsp;</td>
      <td width="17" bgcolor="#FFFFFF" valign="middle" height="18" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">16</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" valign="middle" height="18" bordercolor="#000000"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" valign="middle" height="18" bordercolor="#000000"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" valign="middle" height="18" bordercolor="#000000"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" valign="middle" height="18" bordercolor="#000000"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" valign="middle" height="18" bordercolor="#000000"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" valign="middle" height="18" bordercolor="#000000"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td valign="middle" align="center" width="18" bordercolor="#000000" height="9"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==17)
$joueur17=$nom1;
elseif($M2==17)
$joueur17=$nom2;
elseif($M3==17)
$joueur17=$nom3;
elseif($M4==17)
$joueur17=$nom4;
elseif($M5==17)
$joueur17=$nom5;
elseif($M6==17)
$joueur17=$nom6;
elseif($M7==17)
$joueur17=$nom7;
elseif($M8==17)
$joueur17=$nom8;
elseif($M9==17)
$joueur17=$nom9;
elseif($M10==17)
$joueur17=$nom10;
elseif($M11==17)
$joueur17=$nom11;
elseif($M12==17)
$joueur17=$nom12;
elseif($M13==17)
$joueur17=$nom13;
elseif($M14==17)
$joueur17=$nom14;
elseif($M15==17)
$joueur17=$nom15;
 elseif($M16==17)
$joueur17=$nom16;
 elseif($M17==17)
$joueur17=$nom17;
elseif($M18==17)
$joueur17=$nom18;
elseif($M19==17)
$joueur17=$nom19;
elseif($M20==17)
$joueur17=$nom20;
 elseif($M21==17)
$joueur17=$nom21;
elseif($M22==17)
$joueur17=$nom22;
elseif($M23==17)
$joueur17=$nom23;
elseif($M24==17)
$joueur17=$nom24;
elseif($M25==17)
$joueur17=$nom25;
elseif($M26==17)
$joueur17=$nom26;
elseif($M27==17)
$joueur17=$nom27;
elseif($M28==17)
$joueur17=$nom28;
elseif($M29==17)
$joueur17=$nom29;
elseif($M30==17)
$joueur17=$nom30;
elseif($M31==17)
$joueur17=$nom31;
elseif($M32==17)
$joueur17=$nom32;
elseif($M33==17)
$joueur17=$nom33;
elseif($M34==17)
$joueur17=$nom34;
elseif($M35==17)
$joueur17=$nom35;
elseif($M36==17)
$joueur17=$nom36;
elseif($M37==17)
$joueur17=$nom37;
elseif($M38==17)
$joueur17=$nom38;
elseif($M39==17)
$joueur17=$nom39;
elseif($M40==17)
$joueur17=$nom40;

elseif($M41==17)
$joueur17=$nom41;
elseif($M42==17)
$joueur17=$nom42;
elseif($M43==17)
$joueur17=$nom43;
elseif($M44==17)
$joueur17=$nom44;
elseif($M45==17)
$joueur17=$nom45;
elseif($M46==17)
$joueur17=$nom46;
elseif($M47==17)
$joueur17=$nom47;
elseif($M48==17)
$joueur17=$nom48;
elseif($M49==17)
$joueur17=$nom49;
elseif($M50==17)
$joueur17=$nom50;
elseif($M51==17)
$joueur17=$nom51;
elseif($M52==17)
$joueur17=$nom52;
elseif($M53==17)
$joueur17=$nom53;
elseif($M54==17)
$joueur17=$nom54;
elseif($M55==17)
$joueur17=$nom55;
elseif($M56==17)
$joueur17=$nom56;
elseif($M57==17)
$joueur17=$nom57;
elseif($M58==17)
$joueur17=$nom58;
elseif($M59==17)
$joueur17=$nom59;
elseif($M60==17)
$joueur17=$nom60;


elseif($M61==17)
$joueur17=$nom61;
elseif($M62==17)
$joueur17=$nom62;
elseif($M63==17)
$joueur17=$nom63;
elseif($M64==17)
$joueur17=$nom64;
elseif($M65==17)
$joueur17=$nom65;
elseif($M66==17)
$joueur17=$nom66;
elseif($M67==17)
$joueur17=$nom67;
elseif($M68==17)
$joueur17=$nom68;
elseif($M69==17)
$joueur17=$nom69;
elseif($M70==17)
$joueur17=$nom70;
elseif($M71==17)
$joueur17=$nom71;
elseif($M72==17)
$joueur17=$nom72;
elseif($M73==17)
$joueur17=$nom73;
elseif($M74==17)
$joueur17=$nom74;
elseif($M75==17)
$joueur17=$nom75;
elseif($M76==17)
$joueur17=$nom76;
elseif($M77==17)
$joueur17=$nom77;
elseif($M78==17)
$joueur17=$nom78;
elseif($M79==17)
$joueur17=$nom79;
elseif($M80==17)
$joueur17=$nom80;
elseif($M81==17)
$joueur17=$nom81;
elseif($M82==17)
$joueur17=$nom82;
elseif($M83==17)
$joueur17=$nom83;
elseif($M84==17)
$joueur17=$nom84;
elseif($M85==17)
$joueur17=$nom85;
elseif($M86==17)
$joueur17=$nom86;
elseif($M87==17)
$joueur17=$nom87;
elseif($M88==17)
$joueur17=$nom88;
elseif($M89==17)
$joueur17=$nom89;
elseif($M90==17)
$joueur17=$nom90;
elseif($M91==17)
$joueur17=$nom91;
elseif($M92==17)
$joueur17=$nom92;
elseif($M93==17)
$joueur17=$nom93;
elseif($M94==17)
$joueur17=$nom94;
elseif($M95==17)
$joueur17=$nom95;
elseif($M96==17)
$joueur17=$nom96;
elseif($M97==17)
$joueur17=$nom97;
elseif($M98==17)
$joueur17=$nom98;
elseif($M99==17)
$joueur17=$nom99;

else
$joueur17="";
//echo $joueur17;
$joueur=$joueur17;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" valign="middle" height="9"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">17</font></div>
      </td>
      <td width="122" valign="top" height="9"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" valign="top" height="9"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="9"> 
        <div align="center"> 
          <?php couleurO17($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" valign="top" height="9"> 
        <div align="center"> 
          <?php couleurBJ17($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" valign="top" height="9"> 
        <div align="center"> 
          <?php couleurB17($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="9"> 
        <div align="center"> 
          <?php couleurT17($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="17" bgcolor="#FFFFFF" valign="middle" height="9"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">17</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" valign="middle" height="9"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td valign="middle" align="center" width="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==18)
$joueur18=$nom1;
elseif($M2==18)
$joueur18=$nom2;
elseif($M3==18)
$joueur18=$nom3;
elseif($M4==18)
$joueur18=$nom4;
elseif($M5==18)
$joueur18=$nom5;
elseif($M6==18)
$joueur18=$nom6;
elseif($M7==18)
$joueur18=$nom7;
elseif($M8==18)
$joueur18=$nom8;
elseif($M9==18)
$joueur18=$nom9;
elseif($M10==18)
$joueur18=$nom10;
elseif($M11==18)
$joueur18=$nom11;
elseif($M12==18)
$joueur18=$nom12;
elseif($M13==18)
$joueur18=$nom13;
elseif($M14==18)
$joueur18=$nom14;
elseif($M15==18)
$joueur18=$nom15;
 elseif($M16==18)
$joueur18=$nom16;
 elseif($M17==18)
$joueur18=$nom17;
elseif($M18==18)
$joueur18=$nom18;
elseif($M19==18)
$joueur18=$nom19;
elseif($M20==18)
$joueur18=$nom20;
 elseif($M21==18)
$joueur18=$nom21;
elseif($M22==18)
$joueur18=$nom22;
elseif($M23==18)
$joueur18=$nom23;
elseif($M24==18)
$joueur18=$nom24;
elseif($M25==18)
$joueur18=$nom25;
elseif($M26==18)
$joueur18=$nom26;
elseif($M27==18)
$joueur18=$nom27;
elseif($M28==18)
$joueur18=$nom28;
elseif($M29==18)
$joueur18=$nom29;
elseif($M30==18)
$joueur18=$nom30;
elseif($M31==18)
$joueur18=$nom31;
elseif($M32==18)
$joueur18=$nom32;
elseif($M33==18)
$joueur18=$nom33;
elseif($M34==18)
$joueur18=$nom34;
elseif($M35==18)
$joueur18=$nom35;
elseif($M36==18)
$joueur18=$nom36;
elseif($M37==18)
$joueur18=$nom37;
elseif($M38==18)
$joueur18=$nom38;
elseif($M39==18)
$joueur18=$nom39;
elseif($M40==18)
$joueur18=$nom40;


elseif($M41==18)
$joueur18=$nom41;
elseif($M42==18)
$joueur18=$nom42;
elseif($M43==18)
$joueur18=$nom43;
elseif($M44==18)
$joueur18=$nom44;
elseif($M45==18)
$joueur18=$nom45;
elseif($M46==18)
$joueur18=$nom46;
elseif($M47==18)
$joueur18=$nom47;
elseif($M48==18)
$joueur18=$nom48;
elseif($M49==18)
$joueur18=$nom49;
elseif($M50==18)
$joueur18=$nom50;
elseif($M51==18)
$joueur18=$nom51;
elseif($M52==18)
$joueur18=$nom52;
elseif($M53==18)
$joueur18=$nom53;
elseif($M54==18)
$joueur18=$nom54;
elseif($M55==18)
$joueur18=$nom55;
elseif($M56==18)
$joueur18=$nom56;
elseif($M57==18)
$joueur18=$nom57;
elseif($M58==18)
$joueur18=$nom58;
elseif($M59==18)
$joueur18=$nom59;
elseif($M60==18)
$joueur18=$nom60;


elseif($M61==18)
$joueur18=$nom61;
elseif($M62==18)
$joueur18=$nom62;
elseif($M63==18)
$joueur18=$nom63;
elseif($M64==18)
$joueur18=$nom64;
elseif($M65==18)
$joueur18=$nom65;
elseif($M66==18)
$joueur18=$nom66;
elseif($M67==18)
$joueur18=$nom67;
elseif($M68==18)
$joueur18=$nom68;
elseif($M69==18)
$joueur18=$nom69;
elseif($M70==18)
$joueur18=$nom70;
elseif($M71==18)
$joueur18=$nom71;
elseif($M72==18)
$joueur18=$nom72;
elseif($M73==18)
$joueur18=$nom73;
elseif($M74==18)
$joueur18=$nom74;
elseif($M75==18)
$joueur18=$nom75;
elseif($M76==18)
$joueur18=$nom76;
elseif($M77==18)
$joueur18=$nom77;
elseif($M78==18)
$joueur18=$nom78;
elseif($M79==18)
$joueur18=$nom79;
elseif($M80==18)
$joueur18=$nom80;
elseif($M81==18)
$joueur18=$nom81;
elseif($M82==18)
$joueur18=$nom82;
elseif($M83==18)
$joueur18=$nom83;
elseif($M84==18)
$joueur18=$nom84;
elseif($M85==18)
$joueur18=$nom85;
elseif($M86==18)
$joueur18=$nom86;
elseif($M87==18)
$joueur18=$nom87;
elseif($M88==18)
$joueur18=$nom88;
elseif($M89==18)
$joueur18=$nom89;
elseif($M90==18)
$joueur18=$nom90;
elseif($M91==18)
$joueur18=$nom91;
elseif($M92==18)
$joueur18=$nom92;
elseif($M93==18)
$joueur18=$nom93;
elseif($M94==18)
$joueur18=$nom94;
elseif($M95==18)
$joueur18=$nom95;
elseif($M96==18)
$joueur18=$nom96;
elseif($M97==18)
$joueur18=$nom97;
elseif($M98==18)
$joueur18=$nom98;
elseif($M99==18)
$joueur18=$nom99;

else
$joueur18="";
//echo $joueur18;
$joueur=$joueur18;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" valign="middle" height="2"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">18</font></div>
      </td>
      <td width="122" valign="top" height="2"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" valign="top" height="2"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="2"> 
        <div align="center"> 
          <?php couleurO18($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" valign="top" height="2"> 
        <div align="center"> 
          <?php couleurBJ18($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" valign="top" height="2"> 
        <div align="center"> 
          <?php couleurB18($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" valign="top" height="2"> 
        <div align="center"> 
          <?php couleurT18($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="17" bgcolor="#FFFFFF" valign="middle" height="2"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">18</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" valign="middle" height="2"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" valign="middle" height="2"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" valign="middle" height="2"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" valign="middle" height="2"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" valign="middle" height="2"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" valign="middle" height="2"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td valign="middle" align="center" width="18" bordercolor="#000000" height="23"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==19)
$joueur19=$nom1;
elseif($M2==19)
$joueur19=$nom2;
elseif($M3==19)
$joueur19=$nom3;
elseif($M4==19)
$joueur19=$nom4;
elseif($M5==19)
$joueur19=$nom5;
elseif($M6==19)
$joueur19=$nom6;
elseif($M7==19)
$joueur19=$nom7;
elseif($M8==19)
$joueur19=$nom8;
elseif($M9==19)
$joueur19=$nom9;
elseif($M10==19)
$joueur19=$nom10;
elseif($M11==19)
$joueur19=$nom11;
elseif($M12==19)
$joueur19=$nom12;
elseif($M13==19)
$joueur19=$nom13;
elseif($M14==19)
$joueur19=$nom14;
elseif($M15==19)
$joueur19=$nom15;
 elseif($M16==19)
$joueur19=$nom16;
 elseif($M17==19)
$joueur19=$nom17;
elseif($M18==19)
$joueur19=$nom18;
elseif($M19==19)
$joueur19=$nom19;
elseif($M20==19)
$joueur19=$nom20;
 elseif($M21==19)
$joueur19=$nom21;
elseif($M22==19)
$joueur19=$nom22;
elseif($M23==19)
$joueur19=$nom23;
elseif($M24==19)
$joueur19=$nom24;
elseif($M25==19)
$joueur19=$nom25;
elseif($M26==19)
$joueur19=$nom26;
elseif($M27==19)
$joueur19=$nom27;
elseif($M28==19)
$joueur19=$nom28;
elseif($M29==19)
$joueur19=$nom29;
elseif($M30==19)
$joueur19=$nom30;
elseif($M31==19)
$joueur19=$nom31;
elseif($M32==19)
$joueur19=$nom32;
elseif($M33==19)
$joueur19=$nom33;
elseif($M34==19)
$joueur19=$nom34;
elseif($M35==19)
$joueur19=$nom35;
elseif($M36==19)
$joueur19=$nom36;
elseif($M37==19)
$joueur19=$nom37;
elseif($M38==19)
$joueur19=$nom38;
elseif($M39==19)
$joueur19=$nom39;
elseif($M40==19)
$joueur19=$nom40;


elseif($M41==19)
$joueur19=$nom41;
elseif($M42==19)
$joueur19=$nom42;
elseif($M43==19)
$joueur19=$nom43;
elseif($M44==19)
$joueur19=$nom44;
elseif($M45==19)
$joueur19=$nom45;
elseif($M46==19)
$joueur19=$nom46;
elseif($M47==19)
$joueur19=$nom47;
elseif($M48==19)
$joueur19=$nom48;
elseif($M49==19)
$joueur19=$nom49;
elseif($M50==19)
$joueur19=$nom50;
elseif($M51==19)
$joueur19=$nom51;
elseif($M52==19)
$joueur19=$nom52;
elseif($M53==19)
$joueur19=$nom53;
elseif($M54==19)
$joueur19=$nom54;
elseif($M55==19)
$joueur19=$nom55;
elseif($M56==19)
$joueur19=$nom56;
elseif($M57==19)
$joueur19=$nom57;
elseif($M58==19)
$joueur19=$nom58;
elseif($M59==19)
$joueur19=$nom59;
elseif($M60==19)
$joueur19=$nom60;


elseif($M61==19)
$joueur19=$nom61;
elseif($M62==19)
$joueur19=$nom62;
elseif($M63==19)
$joueur19=$nom63;
elseif($M64==19)
$joueur19=$nom64;
elseif($M65==19)
$joueur19=$nom65;
elseif($M66==19)
$joueur19=$nom66;
elseif($M67==19)
$joueur19=$nom67;
elseif($M68==19)
$joueur19=$nom68;
elseif($M69==19)
$joueur19=$nom69;
elseif($M70==19)
$joueur19=$nom70;
elseif($M71==19)
$joueur19=$nom71;
elseif($M72==19)
$joueur19=$nom72;
elseif($M73==19)
$joueur19=$nom73;
elseif($M74==19)
$joueur19=$nom74;
elseif($M75==19)
$joueur19=$nom75;
elseif($M76==19)
$joueur19=$nom76;
elseif($M77==19)
$joueur19=$nom77;
elseif($M78==19)
$joueur19=$nom78;
elseif($M79==19)
$joueur19=$nom79;
elseif($M80==19)
$joueur19=$nom80;
elseif($M81==19)
$joueur19=$nom81;
elseif($M82==19)
$joueur19=$nom82;
elseif($M83==19)
$joueur19=$nom83;
elseif($M84==19)
$joueur19=$nom84;
elseif($M85==19)
$joueur19=$nom85;
elseif($M86==19)
$joueur19=$nom86;
elseif($M87==19)
$joueur19=$nom87;
elseif($M88==19)
$joueur19=$nom88;
elseif($M89==19)
$joueur19=$nom89;
elseif($M90==19)
$joueur19=$nom90;
elseif($M91==19)
$joueur19=$nom91;
elseif($M92==19)
$joueur19=$nom92;
elseif($M93==19)
$joueur19=$nom93;
elseif($M94==19)
$joueur19=$nom94;
elseif($M95==19)
$joueur19=$nom95;
elseif($M96==19)
$joueur19=$nom96;
elseif($M97==19)
$joueur19=$nom97;
elseif($M98==19)
$joueur19=$nom98;
elseif($M99==19)
$joueur19=$nom99;
else
$joueur19="";
//echo $joueur19;
$joueur=$joueur19;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" height="23" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">19</font></div>
      </td>
      <td width="122" height="23" valign="top"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="23" valign="top"> 
        <div align="center"> <font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="23" valign="top"> 
        <div align="center"> 
          <?php couleurO19($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="23" valign="top"> 
        <div align="center"> 
          <?php couleurBJ19($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" height="23" valign="top"> 
        <div align="center"> 
          <?php couleurB19($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="23" valign="top"> 
        <div align="center"> 
          <?php couleurT19($joueur, $bdcomite, $equipe)?>
        </div>
      </td>
      <td width="17" bgcolor="#FFFFFF" height="23" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">19</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" height="23" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" height="23" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" height="23" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" height="23" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" height="23" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" height="23" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td valign="middle" align="center" width="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
		  
if ($M1==20)
$joueur20=$nom1;
elseif($M2==20)
$joueur20=$nom2;
elseif($M3==20)
$joueur20=$nom3;
elseif($M4==20)
$joueur20=$nom4;
elseif($M5==20)
$joueur20=$nom5;
elseif($M6==20)
$joueur20=$nom6;
elseif($M7==20)
$joueur20=$nom7;
elseif($M8==20)
$joueur20=$nom8;
elseif($M9==20)
$joueur20=$nom9;
elseif($M10==20)
$joueur20=$nom10;
elseif($M11==20)
$joueur20=$nom11;
elseif($M12==20)
$joueur20=$nom12;
elseif($M13==20)
$joueur20=$nom13;
elseif($M14==20)
$joueur20=$nom14;
elseif($M15==20)
$joueur20=$nom15;
 elseif($M16==20)
$joueur20=$nom16;
 elseif($M17==20)
$joueur20=$nom17;
elseif($M18==20)
$joueur20=$nom18;
elseif($M19==20)
$joueur20=$nom19;
elseif($M20==20)
$joueur20=$nom20;
 elseif($M21==20)
$joueur20=$nom21;
elseif($M22==20)
$joueur20=$nom22;
elseif($M23==20)
$joueur20=$nom23;
elseif($M24==20)
$joueur20=$nom24;
elseif($M25==20)
$joueur20=$nom25;
elseif($M26==20)
$joueur20=$nom26;
elseif($M27==20)
$joueur20=$nom27;
elseif($M28==20)
$joueur20=$nom28;
elseif($M29==20)
$joueur20=$nom29;
elseif($M30==20)
$joueur20=$nom30;
elseif($M31==20)
$joueur20=$nom31;
elseif($M32==20)
$joueur20=$nom32;
elseif($M33==20)
$joueur20=$nom33;
elseif($M34==20)
$joueur20=$nom34;
elseif($M35==20)
$joueur20=$nom35;
elseif($M36==20)
$joueur20=$nom36;
elseif($M37==20)
$joueur20=$nom37;
elseif($M38==20)
$joueur20=$nom38;
elseif($M39==20)
$joueur20=$nom39;
elseif($M40==20)
$joueur20=$nom40;

elseif($M41==20)
$joueur20=$nom41;
elseif($M42==20)
$joueur20=$nom42;
elseif($M43==20)
$joueur20=$nom43;
elseif($M44==20)
$joueur20=$nom44;
elseif($M45==20)
$joueur20=$nom45;
elseif($M46==20)
$joueur20=$nom46;
elseif($M47==20)
$joueur20=$nom47;
elseif($M48==20)
$joueur20=$nom48;
elseif($M49==20)
$joueur20=$nom49;
elseif($M50==20)
$joueur20=$nom50;
elseif($M51==20)
$joueur20=$nom51;
elseif($M52==20)
$joueur20=$nom52;
elseif($M53==20)
$joueur20=$nom53;
elseif($M54==20)
$joueur20=$nom54;
elseif($M55==20)
$joueur20=$nom55;
elseif($M56==20)
$joueur20=$nom56;
elseif($M57==20)
$joueur20=$nom57;
elseif($M58==20)
$joueur20=$nom58;
elseif($M59==20)
$joueur20=$nom59;
elseif($M60==20)
$joueur20=$nom60;


elseif($M61==20)
$joueur20=$nom61;
elseif($M62==20)
$joueur20=$nom62;
elseif($M63==20)
$joueur20=$nom63;
elseif($M64==20)
$joueur20=$nom64;
elseif($M65==20)
$joueur20=$nom65;
elseif($M66==20)
$joueur20=$nom66;
elseif($M67==20)
$joueur20=$nom67;
elseif($M68==20)
$joueur20=$nom68;
elseif($M69==20)
$joueur20=$nom69;
elseif($M70==20)
$joueur20=$nom70;
elseif($M71==20)
$joueur20=$nom71;
elseif($M72==20)
$joueur20=$nom72;
elseif($M73==20)
$joueur20=$nom73;
elseif($M74==20)
$joueur20=$nom74;
elseif($M75==20)
$joueur20=$nom75;
elseif($M76==20)
$joueur20=$nom76;
elseif($M77==20)
$joueur20=$nom77;
elseif($M78==20)
$joueur20=$nom78;
elseif($M79==20)
$joueur20=$nom79;
elseif($M80==20)
$joueur20=$nom80;
elseif($M81==20)
$joueur20=$nom81;
elseif($M82==20)
$joueur20=$nom82;
elseif($M83==20)
$joueur20=$nom83;
elseif($M84==20)
$joueur20=$nom84;
elseif($M85==20)
$joueur20=$nom85;
elseif($M86==20)
$joueur20=$nom86;
elseif($M87==20)
$joueur20=$nom87;
elseif($M88==20)
$joueur20=$nom88;
elseif($M89==20)
$joueur20=$nom89;
elseif($M90==20)
$joueur20=$nom90;
elseif($M91==20)
$joueur20=$nom91;
elseif($M92==20)
$joueur20=$nom92;
elseif($M93==20)
$joueur20=$nom93;
elseif($M94==20)
$joueur20=$nom94;
elseif($M95==20)
$joueur20=$nom95;
elseif($M96==20)
$joueur20=$nom96;
elseif($M97==20)
$joueur20=$nom97;
elseif($M98==20)
$joueur20=$nom98;
elseif($M99==20)
$joueur20=$nom99;

else
$joueur20="";
//echo $joueur20;
$joueur=$joueur20;		  
		  

?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" height="17" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">20</font></div>
      </td>
      <td width="122" height="17" valign="top"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="17" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="17" valign="top"> 
        <div align="center"> 
          <?php couleurO20($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="17" valign="top"> 
        <div align="center"> 
          <?php couleurBJ20($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" height="17" valign="top"> 
        <div align="center"> 
          <?php couleurB20($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="17" valign="top"> 
        <div align="center"> 
          <?php couleurT20($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="17" bgcolor="#FFFFFF" height="17" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">20</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" height="17" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" height="17" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" height="17" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" height="17" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" height="17" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" height="17" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td valign="middle" align="center" width="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
		  
if ($M1==21)
$joueur21=$nom1;
elseif($M2==21)
$joueur21=$nom2;
elseif($M3==21)
$joueur21=$nom3;
elseif($M4==21)
$joueur21=$nom4;
elseif($M5==21)
$joueur21=$nom5;
elseif($M6==21)
$joueur21=$nom6;
elseif($M7==21)
$joueur21=$nom7;
elseif($M8==21)
$joueur21=$nom8;
elseif($M9==21)
$joueur21=$nom9;
elseif($M10==21)
$joueur21=$nom10;
elseif($M11==21)
$joueur21=$nom11;
elseif($M12==21)
$joueur21=$nom12;
elseif($M13==21)
$joueur21=$nom13;
elseif($M14==21)
$joueur21=$nom14;
elseif($M15==21)
$joueur21=$nom15;
 elseif($M16==21)
$joueur21=$nom16;
 elseif($M17==21)
$joueur21=$nom17;
elseif($M18==21)
$joueur21=$nom18;
elseif($M19==21)
$joueur21=$nom19;
elseif($M20==21)
$joueur21=$nom20;
 elseif($M21==21)
$joueur21=$nom21;
elseif($M22==21)
$joueur21=$nom22;
elseif($M23==21)
$joueur21=$nom23;
elseif($M24==21)
$joueur21=$nom24;
elseif($M25==21)
$joueur21=$nom25;
elseif($M26==21)
$joueur21=$nom26;
elseif($M27==21)
$joueur21=$nom27;
elseif($M28==21)
$joueur21=$nom28;
elseif($M29==21)
$joueur21=$nom29;
elseif($M30==21)
$joueur21=$nom30;
elseif($M31==21)
$joueur21=$nom31;
elseif($M32==21)
$joueur21=$nom32;
elseif($M33==21)
$joueur21=$nom33;
elseif($M34==21)
$joueur21=$nom34;
elseif($M35==21)
$joueur21=$nom35;
elseif($M36==21)
$joueur21=$nom36;
elseif($M37==21)
$joueur21=$nom37;
elseif($M38==21)
$joueur21=$nom38;
elseif($M39==21)
$joueur21=$nom39;
elseif($M40==21)
$joueur21=$nom40;
elseif($M41==21)
$joueur21=$nom41;
elseif($M42==21)
$joueur21=$nom42;
elseif($M43==21)
$joueur21=$nom43;
elseif($M44==21)
$joueur21=$nom44;
elseif($M45==21)
$joueur21=$nom45;
elseif($M46==21)
$joueur21=$nom46;
elseif($M47==21)
$joueur21=$nom47;
elseif($M48==21)
$joueur21=$nom48;
elseif($M49==21)
$joueur21=$nom49;
elseif($M50==21)
$joueur21=$nom50;
elseif($M51==21)
$joueur21=$nom51;
elseif($M52==21)
$joueur21=$nom52;
elseif($M53==21)
$joueur21=$nom53;
elseif($M54==21)
$joueur21=$nom54;
elseif($M55==21)
$joueur21=$nom55;
elseif($M56==21)
$joueur21=$nom56;
elseif($M57==21)
$joueur21=$nom57;
elseif($M58==21)
$joueur21=$nom58;
elseif($M59==21)
$joueur21=$nom59;
elseif($M60==21)
$joueur21=$nom60;

elseif($M61==21)
$joueur21=$nom61;
elseif($M62==21)
$joueur21=$nom62;
elseif($M63==21)
$joueur21=$nom63;
elseif($M64==21)
$joueur21=$nom64;
elseif($M65==21)
$joueur21=$nom65;
elseif($M66==21)
$joueur21=$nom66;
elseif($M67==21)
$joueur21=$nom67;
elseif($M68==21)
$joueur21=$nom68;
elseif($M69==21)
$joueur21=$nom69;
elseif($M70==21)
$joueur21=$nom70;
elseif($M71==21)
$joueur21=$nom71;
elseif($M72==21)
$joueur21=$nom72;
elseif($M73==21)
$joueur21=$nom73;
elseif($M74==21)
$joueur21=$nom74;
elseif($M75==21)
$joueur21=$nom75;
elseif($M76==21)
$joueur21=$nom76;
elseif($M77==21)
$joueur21=$nom77;
elseif($M78==21)
$joueur21=$nom78;
elseif($M79==21)
$joueur21=$nom79;
elseif($M80==21)
$joueur21=$nom80;
elseif($M81==21)
$joueur21=$nom81;
elseif($M82==21)
$joueur21=$nom82;
elseif($M83==21)
$joueur21=$nom83;
elseif($M84==21)
$joueur21=$nom84;
elseif($M85==21)
$joueur21=$nom85;
elseif($M86==21)
$joueur21=$nom86;
elseif($M87==21)
$joueur21=$nom87;
elseif($M88==21)
$joueur21=$nom88;
elseif($M89==21)
$joueur21=$nom89;
elseif($M90==21)
$joueur21=$nom90;
elseif($M91==21)
$joueur21=$nom91;
elseif($M92==21)
$joueur21=$nom92;
elseif($M93==21)
$joueur21=$nom93;
elseif($M94==21)
$joueur21=$nom94;
elseif($M95==21)
$joueur21=$nom95;
elseif($M96==21)
$joueur21=$nom96;
elseif($M97==21)
$joueur21=$nom97;
elseif($M98==21)
$joueur21=$nom98;
elseif($M99==21)
$joueur21=$nom99;

else
$joueur21="";
//echo $joueur21;
$joueur=$joueur21;		  
		  
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" height="2" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">21</font></div>
      </td>
      <td width="122" height="2" valign="top"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="2" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="2" valign="top"> 
        <div align="center"> 
          <?php couleurO21($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="2" valign="top"> 
        <div align="center"> 
          <?php couleurBJ21($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" height="2" valign="top"> 
        <div align="center"> 
          <?php couleurB21($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="2" valign="top"> 
        <div align="center"> 
          <?php couleurT21($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="17" bgcolor="#FFFFFF" height="2" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">21</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" height="2" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" height="2" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" height="2" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" height="2" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" height="2" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" height="2" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td valign="middle" align="center" width="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==22)
$joueur22=$nom1;
elseif($M2==22)
$joueur22=$nom2;
elseif($M3==22)
$joueur22=$nom3;
elseif($M4==22)
$joueur22=$nom4;
elseif($M5==22)
$joueur22=$nom5;
elseif($M6==22)
$joueur22=$nom6;
elseif($M7==22)
$joueur22=$nom7;
elseif($M8==22)
$joueur22=$nom8;
elseif($M9==22)
$joueur22=$nom9;
elseif($M10==22)
$joueur22=$nom10;
elseif($M11==22)
$joueur22=$nom11;
elseif($M12==22)
$joueur22=$nom12;
elseif($M13==22)
$joueur22=$nom13;
elseif($M14==22)
$joueur22=$nom14;
elseif($M15==22)
$joueur22=$nom15;
 elseif($M16==22)
$joueur22=$nom16;
 elseif($M17==22)
$joueur22=$nom17;
elseif($M18==22)
$joueur22=$nom18;
elseif($M19==22)
$joueur22=$nom19;
elseif($M20==22)
$joueur22=$nom20;
 elseif($M21==22)
$joueur22=$nom21;
elseif($M22==22)
$joueur22=$nom22;
elseif($M23==22)
$joueur22=$nom23;
elseif($M24==22)
$joueur22=$nom24;
elseif($M25==22)
$joueur22=$nom25;
elseif($M26==22)
$joueur22=$nom26;
elseif($M27==22)
$joueur22=$nom27;
elseif($M28==22)
$joueur22=$nom28;
elseif($M29==22)
$joueur22=$nom29;
elseif($M30==22)
$joueur22=$nom30;
elseif($M31==22)
$joueur22=$nom31;
elseif($M32==22)
$joueur22=$nom32;
elseif($M33==22)
$joueur22=$nom33;
elseif($M34==22)
$joueur22=$nom34;
elseif($M35==22)
$joueur22=$nom35;
elseif($M36==22)
$joueur22=$nom36;
elseif($M37==22)
$joueur22=$nom37;
elseif($M38==22)
$joueur22=$nom38;
elseif($M39==22)
$joueur22=$nom39;
elseif($M40==22)
$joueur22=$nom40;

elseif($M41==22)
$joueur22=$nom41;
elseif($M42==22)
$joueur22=$nom42;
elseif($M43==22)
$joueur22=$nom43;
elseif($M44==22)
$joueur22=$nom44;
elseif($M45==22)
$joueur22=$nom45;
elseif($M46==22)
$joueur22=$nom46;
elseif($M47==22)
$joueur22=$nom47;
elseif($M48==22)
$joueur22=$nom48;
elseif($M49==22)
$joueur22=$nom49;
elseif($M50==22)
$joueur22=$nom50;
elseif($M51==22)
$joueur22=$nom51;
elseif($M52==22)
$joueur22=$nom52;
elseif($M53==22)
$joueur22=$nom53;
elseif($M54==22)
$joueur22=$nom54;
elseif($M55==22)
$joueur22=$nom55;
elseif($M56==22)
$joueur22=$nom56;
elseif($M57==22)
$joueur22=$nom57;
elseif($M58==22)
$joueur22=$nom58;
elseif($M59==22)
$joueur22=$nom59;
elseif($M60==22)
$joueur22=$nom60;

elseif($M61==22)
$joueur22=$nom61;
elseif($M62==22)
$joueur22=$nom62;
elseif($M63==22)
$joueur22=$nom63;
elseif($M64==22)
$joueur22=$nom64;
elseif($M65==22)
$joueur22=$nom65;
elseif($M66==22)
$joueur22=$nom66;
elseif($M67==22)
$joueur22=$nom67;
elseif($M68==22)
$joueur22=$nom68;
elseif($M69==22)
$joueur22=$nom69;
elseif($M70==22)
$joueur22=$nom70;
elseif($M71==22)
$joueur22=$nom71;
elseif($M72==22)
$joueur22=$nom72;
elseif($M73==22)
$joueur22=$nom73;
elseif($M74==22)
$joueur22=$nom74;
elseif($M75==22)
$joueur22=$nom75;
elseif($M76==22)
$joueur22=$nom76;
elseif($M77==22)
$joueur22=$nom77;
elseif($M78==22)
$joueur22=$nom78;
elseif($M79==22)
$joueur22=$nom79;
elseif($M80==22)
$joueur22=$nom80;
elseif($M81==22)
$joueur22=$nom81;
elseif($M82==22)
$joueur22=$nom82;
elseif($M83==22)
$joueur22=$nom83;
elseif($M84==22)
$joueur22=$nom84;
elseif($M85==22)
$joueur22=$nom85;
elseif($M86==22)
$joueur22=$nom86;
elseif($M87==22)
$joueur22=$nom87;
elseif($M88==22)
$joueur22=$nom88;
elseif($M89==22)
$joueur22=$nom89;
elseif($M90==22)
$joueur22=$nom90;
elseif($M91==22)
$joueur22=$nom91;
elseif($M92==22)
$joueur22=$nom92;
elseif($M93==22)
$joueur22=$nom93;
elseif($M94==22)
$joueur22=$nom94;
elseif($M95==22)
$joueur22=$nom95;
elseif($M96==22)
$joueur22=$nom96;
elseif($M97==22)
$joueur22=$nom97;
elseif($M98==22)
$joueur22=$nom98;
elseif($M99==22)
$joueur22=$nom99;

else
$joueur22="";
//echo $joueur22;
$joueur=$joueur22;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" height="14" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">22</font></div>
      </td>
      <td width="122" height="14" valign="top"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="14" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="14" valign="top"> 
        <div align="center"> 
          <?php couleurO22($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="14" valign="top"> 
        <div align="center"> 
          <?php couleurBJ22($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="32" bgcolor="#CCCCCC" height="14" valign="top"> 
        <div align="center"> 
          <?php couleurB22($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="14" valign="top"> 
        <div align="center"> 
          <?php couleurT22($joueur, $bdcomite, $equipe)

?>
        </div>
      </td>
      <td width="17" bgcolor="#FFFFFF" height="14" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">22</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" height="14" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" height="14" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" height="14" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" height="14" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" height="14" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" height="14" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td valign="middle" align="center" width="18" bordercolor="#000000"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php
if ($M1==23)
$joueur23=$nom1;
elseif($M2==23)
$joueur23=$nom2;
elseif($M3==23)
$joueur23=$nom3;
elseif($M4==23)
$joueur23=$nom4;
elseif($M5==23)
$joueur23=$nom5;
elseif($M6==23)
$joueur23=$nom6;
elseif($M7==23)
$joueur23=$nom7;
elseif($M8==23)
$joueur23=$nom8;
elseif($M9==23)
$joueur23=$nom9;
elseif($M10==23)
$joueur23=$nom10;
elseif($M11==23)
$joueur23=$nom11;
elseif($M12==23)
$joueur23=$nom12;
elseif($M13==23)
$joueur23=$nom13;
elseif($M14==23)
$joueur23=$nom14;
elseif($M15==23)
$joueur23=$nom15;
 elseif($M16==23)
$joueur23=$nom16;
 elseif($M17==23)
$joueur23=$nom17;
elseif($M18==23)
$joueur23=$nom18;
elseif($M19==23)
$joueur23=$nom19;
elseif($M20==23)
$joueur23=$nom20;
 elseif($M21==23)
$joueur23=$nom21;
elseif($M22==23)
$joueur23=$nom22;
elseif($M23==23)
$joueur23=$nom23;
elseif($M24==23)
$joueur23=$nom24;
elseif($M25==23)
$joueur23=$nom25;
elseif($M26==23)
$joueur23=$nom26;
elseif($M27==23)
$joueur23=$nom27;
elseif($M28==23)
$joueur23=$nom28;
elseif($M29==23)
$joueur23=$nom29;
elseif($M30==23)
$joueur23=$nom30;
elseif($M31==23)
$joueur23=$nom31;
elseif($M32==23)
$joueur23=$nom32;
elseif($M33==23)
$joueur23=$nom33;
elseif($M34==23)
$joueur23=$nom34;
elseif($M35==23)
$joueur23=$nom35;
elseif($M36==23)
$joueur23=$nom36;
elseif($M37==23)
$joueur23=$nom37;
elseif($M38==23)
$joueur23=$nom38;
elseif($M39==23)
$joueur23=$nom39;
elseif($M40==23)
$joueur23=$nom40;

elseif($M41==23)
$joueur23=$nom41;
elseif($M42==23)
$joueur23=$nom42;
elseif($M43==23)
$joueur23=$nom43;
elseif($M44==23)
$joueur23=$nom44;
elseif($M45==23)
$joueur23=$nom45;
elseif($M46==23)
$joueur23=$nom46;
elseif($M47==23)
$joueur23=$nom47;
elseif($M48==23)
$joueur23=$nom48;
elseif($M49==23)
$joueur23=$nom49;
elseif($M50==23)
$joueur23=$nom50;
elseif($M51==23)
$joueur23=$nom51;
elseif($M52==23)
$joueur23=$nom52;
elseif($M53==23)
$joueur23=$nom53;
elseif($M54==23)
$joueur23=$nom54;
elseif($M55==23)
$joueur23=$nom55;
elseif($M56==23)
$joueur23=$nom56;
elseif($M57==23)
$joueur23=$nom57;
elseif($M58==23)
$joueur23=$nom58;
elseif($M59==23)
$joueur23=$nom59;
elseif($M60==23)
$joueur23=$nom60;

elseif($M61==23)
$joueur23=$nom61;
elseif($M62==23)
$joueur23=$nom62;
elseif($M63==23)
$joueur23=$nom63;
elseif($M64==23)
$joueur23=$nom64;
elseif($M65==23)
$joueur23=$nom65;
elseif($M66==23)
$joueur23=$nom66;
elseif($M67==23)
$joueur23=$nom67;
elseif($M68==23)
$joueur23=$nom68;
elseif($M69==23)
$joueur23=$nom69;
elseif($M70==23)
$joueur23=$nom70;
elseif($M71==23)
$joueur23=$nom71;
elseif($M72==23)
$joueur23=$nom72;
elseif($M73==23)
$joueur23=$nom73;
elseif($M74==23)
$joueur23=$nom74;
elseif($M75==23)
$joueur23=$nom75;
elseif($M76==23)
$joueur23=$nom76;
elseif($M77==23)
$joueur23=$nom77;
elseif($M78==23)
$joueur23=$nom78;
elseif($M79==23)
$joueur23=$nom79;
elseif($M80==23)
$joueur23=$nom80;
elseif($M81==23)
$joueur23=$nom81;
elseif($M82==23)
$joueur23=$nom82;
elseif($M83==23)
$joueur23=$nom83;
elseif($M84==23)
$joueur23=$nom84;
elseif($M85==23)
$joueur23=$nom85;
elseif($M86==23)
$joueur23=$nom86;
elseif($M87==23)
$joueur23=$nom87;
elseif($M88==23)
$joueur23=$nom88;
elseif($M89==23)
$joueur23=$nom89;
elseif($M90==23)
$joueur23=$nom90;
elseif($M91==23)
$joueur23=$nom91;
elseif($M92==23)
$joueur23=$nom92;
elseif($M93==23)
$joueur23=$nom93;
elseif($M94==23)
$joueur23=$nom94;
elseif($M95==23)
$joueur23=$nom95;
elseif($M96==23)
$joueur23=$nom96;
elseif($M97==23)
$joueur23=$nom97;
elseif($M98==23)
$joueur23=$nom98;
elseif($M99==23)
$joueur23=$nom99;

else
$joueur23="";
//echo $joueur23;
$joueur=$joueur23;
?>
          </b></font><font size="1" face="Arial, Helvetica, sans-serif"> 
          <?php premiereligne($joueur, $bdcomite, $equipe) ?>
          </font><font size="2" face="Arial, Helvetica, sans-serif"><b> </b></font><font face="Arial, Helvetica, sans-serif" size="1"> 
          </font></div>
      </td>
      <td width="14" height="6" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">23</font></div>
      </td>
      <td width="122" height="6" valign="top"> 
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><b> 
          <?php echo $joueur;

?>
          </b></font></div>
      </td>
      <td width="113" height="6" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          <?php licence($joueur, $bdcomite, $equipe)?>
          </font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="6" valign="top"> 
        <?php couleurO23($joueur, $bdcomite, $equipe)

?>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="6" valign="top"> 
        <?php couleurBJ23($joueur, $bdcomite, $equipe)

?>
      </td>
      <td width="32" bgcolor="#CCCCCC" height="6" valign="top"> 
        <?php couleurB23($joueur, $bdcomite, $equipe)

?>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="6" valign="top"> 
        <?php couleurT23($joueur, $bdcomite, $equipe)

?>
      </td>
      <td width="17" bgcolor="#FFFFFF" height="6" valign="middle"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" color="#000000" size="2">23</font></div>
      </td>
      <td width="141" bgcolor="#FFFFFF" height="6" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="92" bgcolor="#FFFFFF" height="6" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="20" bgcolor="#CCCCCC" height="6" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="22" bgcolor="#CCCCCC" height="6" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="23" bgcolor="#CCCCCC" height="6" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
      <td width="28" bgcolor="#CCCCCC" height="6" valign="middle"><font face="Arial, Helvetica, sans-serif"></font></td>
    </tr>
    <tr> 
      <td colspan="2" height="21" bordercolor="#000000">&nbsp;</td>
      <td colspan="2" height="21" bordercolor="#000000" valign="middle" align="center"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
          Capitaine :<b> 
          <?php $nomcapitaine=("N".''.$capitaine) ;?>
          <?php
	//require ("../../$connect.php")	
	  
		  
mysql_connect("sql.franceserv.fr", "onepip-france", "lavelan09"); // Connexion à MySQL
mysql_select_db("onepip-france-db1"); // Sélection de la base onepip
?>
          <?php
$requete = "SELECT $nomcapitaine FROM Phpmpy_feuilleA WHERE id=$code_match";
$result = mysql_query($requete) or die(mysql_error());
         while($row = mysql_fetch_array($result))
         {    
		 $nom ="$row[0]";
          echo $nom; 
		 }

?>
          </b> N&deg; <b> 
          <?php echo $capitaine; ?>
          </b></font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="21" bordercolor="#000000" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif"><b> 
          <?php $sommeO=($orange1+$orange2+$orange3+$orange4+$orange5+$orange6+$orange7+$orange8+$orange9+$orange10+$orange11+$orange12+$orange13+$orange14+$orange15+$orange16+$orange17+$orange18+$orange19+$orange20+$orange21+$orange22+$orange23); echo $sommeO;?>
          </b></font></div>
      </td>
      <td width="26" bgcolor="#CCCCCC" height="21" bordercolor="#000000" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif"><b> 
          <?php $sommeBJ=($blajaune1+$blajaune2+$blajaune3+$blajaune4+$blajaune5+$blajaune6+$blajaune7+$blajaune8+$blajaune9+$blajaune10+$blajaune11+$blajaune12+$blajaune13+$blajaune14+$blajaune15+$blajaune16+$blajaune17+$blajaune18+$blajaune19+$blajaune20+$blajaune21+$blajaune22+$blajaune23); echo $sommeBJ;?>
          </b></font></div>
      </td>
      <td width="32" bgcolor="#CCCCCC" height="21" bordercolor="#000000" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif"><b> 
          <?php $sommeB=($blanche1+$blanche2+$blanche3+$blanche4+$blanche5+$blanche6+$blanche7+$blanche8+$blanche9+$blanche10+$blanche11+$blanche12+$blanche13+$blanche14+$blanche15+$blanche16+$blanche17+$blanche18+$blanche19+$blanche20+$blanche21+$blanche22+$blanche23); echo $sommeB;?>
          </b></font></div>
      </td>
      <td width="27" bgcolor="#CCCCCC" height="21" bordercolor="#000000" valign="top"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif"><b> 
          <?php $sommeT=($tutorat1+$tutorat2+$tutorat3+$tutorat4+$tutorat5+$tutorat6+$tutorat7+$tutorat8+$tutorat9+$tutorat10+$tutorat11+$tutorat12+$tutorat13+$tutorat14+$tutorat15+$tutorat16+$tutorat17+$tutorat18+$tutorat19+$tutorat20+$tutorat21+$tutorat22+$tutorat23); echo $sommeT;?>
          </b></font></div>
      </td>
      <td colspan="2" bgcolor="#FFFFFF" height="21" bordercolor="#000000">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF" height="21" bordercolor="#000000"> 
        <div align="center"><font face="Arial, Helvetica, sans-serif" size="2">Capitaine 
          : N&deg;</font></div>
      </td>
      <td width="20" bgcolor="#CCCCCC" height="21" bordercolor="#000000">&nbsp;</td>
      <td width="22" bgcolor="#CCCCCC" height="21" bordercolor="#000000">&nbsp;</td>
      <td width="23" bgcolor="#CCCCCC" height="21" bordercolor="#000000">&nbsp;</td>
      <td width="28" bgcolor="#CCCCCC" height="21" bordercolor="#000000">&nbsp;</td>
    </tr>
  </table>
</div>
</form>

<?php $feuilleA=("php".''.$comite.''."_feuilleA");?>
<?php //echo $feuilleA ; ?>
<?php //echo $id ; ?>
<?php

 $sql = "UPDATE $feuilleA
            SET  equipe_dom='$equipe_dom',equipe_ext='$equipeB',N1='$joueur1',N2='$joueur2',N3='$joueur3',N4='$joueur4',N5='$joueur5',N6='$joueur6',N7='$joueur7',N8='$joueur8',N9='$joueur9',N10='$joueur10',
		  		 N11='$joueur11',N12='$joueur12',N13='$joueur13',N14='$joueur14',N15='$joueur15',N16='$joueur16',N17='$joueur17',N18='$joueur18',N19='$joueur19',N20='$joueur20',
				 N21='$joueur21',N22='$joueur22',N23='$joueur23',
				 capitaine='$capitaine'
		  WHERE id = $code_match " ;
 
    $requete = mysql_query( $sql )   ;
 
?>  
  </body>
</html>
