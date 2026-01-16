<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
  
<?php $id=$_POST['id']; ?>

<?php $annee=$_GET['annee']; ?>
<?php $annee=$annee; ?>
<?php $annee2=($annee.''."_2"); ?> 


<?php echo $id; ?>
-
<?php echo $annee; ?>

  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  <?php
  //r�cup�ration des valeurs des champs:
  
$E01 = $_POST['E01'];
$E02 = $_POST['E02'];
$E03 = $_POST['E03'];
$E04 = $_POST['E04'];
$E05 = $_POST['E05'];  
$E06 = $_POST['E06'];
$E07 = $_POST['E07'];
$E08 = $_POST['E08'];
$E09 = $_POST['E09'];  
$E10 = $_POST['E10'];
$E11 = $_POST['E11'];
$E12 = $_POST['E12'];
$E13 = $_POST['E13'];  
$E14 = $_POST['E14'];
$E15 = $_POST['E15'];
$E16 = $_POST['E16'];
$E17 = $_POST['E17'];  
$E18 = $_POST['E18'];
$E19 = $_POST['E19'];
$E20 = $_POST['E20'];
$E21 = $_POST['E21'];  
$E22 = $_POST['E22'];
$E23 = $_POST['E23'];
$E24 = $_POST['E24'];
$E25 = $_POST['E25'];  
$E26 = $_POST['E26'];
$E27 = $_POST['E27'];
$E28 = $_POST['E28'];
$E29 = $_POST['E29'];  
$E30 = $_POST['E30'];
$E31 = $_POST['E31'];
$E32 = $_POST['E32'];
$E33 = $_POST['E33'];
$E34 = $_POST['E34'];
$E35 = $_POST['E35'];
$E36 = $_POST['E36'];
$E37 = $_POST['E37'];  
$E38 = $_POST['E38'];
$E39 = $_POST['E39'];
$E40 = $_POST['E40'];
$E41 = $_POST['E41'];  
$E42 = $_POST['E42'];
$E43 = $_POST['E43'];
$E44 = $_POST['E44'];
$E45 = $_POST['E45'];
$E46 = $_POST['E46'];
$E47 = $_POST['E47'];  
$E48 = $_POST['E48'];
$E49 = $_POST['E49'];
$E50 = $_POST['E50'];
$E51 = $_POST['E51'];  
$E52 = $_POST['E52'];
$E53 = $_POST['E53'];
$E54 = $_POST['E54'];
$E55 = $_POST['E55'];  
$E56 = $_POST['E56'];
$E57 = $_POST['E57'];
$E58 = $_POST['E58'];
$E59 = $_POST['E59'];  
$E60 = $_POST['E60'];
$E61 = $_POST['E61'];
$E62 = $_POST['E62'];
$E63 = $_POST['E63'];
$E64 = $_POST['E64'];
?>
  <font size="4"><b> 
  <?php
  //r�cup�ration de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpf$annee
            SET  E01='$E01', E02='$E02', E03='$E03', E04='$E04', E05='$E05', E06='$E06', E07='$E07', E08='$E08', E09='$E09', E10='$E10', E11='$E11', E12='$E12', E13='$E13', E14='$E14', E15='$E15', E16='$E16',
			     E17='$E17', E18='$E18', E19='$E19', E20='$E20', E21='$E21', E22='$E22', E23='$E23', E24='$E24', E25='$E25', E26='$E26', E27='$E27', E28='$E28', E29='$E29', E30='$E30', E31='$E31', E32='$E32',
		         E33='$E33', E34='$E34', E35='$E35', E36='$E36', E37='$E37', E38='$E38', E39='$E39', E40='$E40', E41='$E41', E42='$E42', E43='$E43', E44='$E44', E45='$E45', E46='$E46', E47='$E47', E48='$E48', 
				 E49='$E49', E50='$E50', E51='$E51' ,E52='$E52', E53='$E53', E54='$E54', E55='$E55', E56='$E56', E57='$E57', E58='$E58', E59='$E59', E60='$E60', E61='$E61', E62='$E62', E63='$E63', E64='$E64' WHERE id = '$id' " ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r&eacute;sultats, pour savoir si la modification a march&eacute;:
  if($requete)
  {
 
    echo("La modification a &eacute;t&eacute; correctement effectu&eacute;");
 
  }
  else
  {
  
    echo("La modification � �chou&eacute;") ;
  }
  
//***********************************************************************
//*************************** nouvelle base ***************************  
//cr�ation de la requ�te SQL:
  
  $sqlnx = "UPDATE bdpfClubs
            SET  E101='$E01', E102='$E02', E103='$E03', E104='$E04', E105='$E05', E106='$E06', E107='$E07', E108='$E08', E109='$E09', E110='$E10', E111='$E11', E112='$E12', E113='$E13', E114='$E14', E115='$E15', E116='$E16',
			     E117='$E17', E118='$E18', E119='$E19', E120='$E20', E121='$E21', E122='$E22', E123='$E23', E124='$E24', E125='$E25', E126='$E26', E127='$E27', E128='$E28', E129='$E29', E130='$E30', E131='$E31', E132='$E32',
		         E133='$E33', E134='$E34', E135='$E35', E136='$E36', E137='$E37', E138='$E38', E139='$E39', E140='$E40', E141='$E41', E142='$E42', E143='$E43', E144='$E44', E145='$E45', E146='$E46', E147='$E47', E148='$E48', 
				 E149='$E49', E150='$E50', E151='$E51' ,E152='$E52', E153='$E53', E154='$E54', E155='$E55', E156='$E56', E157='$E57', E158='$E58', E159='$E59', E160='$E60', E161='$E61', E162='$E62', E163='$E63', E164='$E64' 			
			
			
			WHERE id = '$id' " ;
 
  //ex�cution de la requ�te SQL:
  $requetenx = mysql_query( $sqlnx )   ;
 
 
  //affichage des r&eacute;sultats, pour savoir si la modification a march&eacute;:
  if($requetenx)
  {
	 echo "<br />";
    echo("La modification a &eacute;t&eacute; correctement effectu&eacute;");
 
  }
  else
  {
   echo "<br />";
    echo("La modification � �chou&eacute;") ;
  } 
  
  
  
  
?>
  </b></font> 
  <?php

mysql_close(); // D�connexion de MySQL
?>
  </p>
<p> 
  <?php
echo "<a href=http://francefinalesrugby.franceserv.com/admin/sadmin2.php> Retour </a>";
 ?>
<p>&nbsp;

