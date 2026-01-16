<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../../maj.css">
</head>
<?php

$page="equipe";

//if (isset ($_GET['comite'])) $comite = $_GET['comite']; else $comite='-';
//if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-'; 
//if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
//if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 

$bdcomiteClub = $comite.''."_clubs";
$bdcomite_pfterr_e=$comite.''."_pfterr_e";

$bdcomite_pfterr_e="php".''.$bdcomite_pfterr_e;

seizieme2019 ($comite, $division, $annee, $bdd)

?>
<body bgcolor="#FFFFFF" text="#000000">
<!-- ************  Quarts de finale   ************ -->
<form name="insertion" action="saisieEquipe2.php?type=<?php echo $type ; ?>&division=<?php echo $division ; ?>&comite=<?php echo $comite ; ?>&annee=<?php echo $annee ; ?>" method="POST">
						  
	<input type="hidden" name="division" value="<?php echo($division) ;?>">
	<header>		
		<h1> Division(<?php echo $division; ?>) Ann&eacute;e  <?php echo $annee; ?></h1>
    </header>   
     
	<p class="texte"> 16me de finale  </p>
		
	<h3>1</h3>
       	<h2><?php echo $clubA1601; ?></h2>
       	<h2><?php echo $clubA1602; ?></h2>
    <h4></h4>
	    <input type="text" name="clubA1601" value="<?php echo $id1601 ;?>" size="3">
        <input type="text" name="clubA1602" value="<?php echo $id1602 ;?>" size="3">
       
	<h3>2</h3>  
      	<h2><?php echo $clubA1603; ?></h2>
      	<h2><?php echo $clubA1604; ?></h2>
    <h4></h4>
	    <input type="text" name="clubA1603" value="<?php echo $id1603 ;?>" size="3">
        <input type="text" name="clubA1604" value="<?php echo $id1604 ;?>" size="3">
      
	<h3>3</h3>
      	<h2><?php echo $clubA1605; ?></h2>
      	<h2><?php echo $clubA1606; ?></h2>
    <h4></h4>
	    <input type="text" name="clubA1605" value="<?php echo $id1605 ;?>" size="3">
        <input type="text" name="clubA1606" value="<?php echo $id1606 ;?>" size="3">
       
	<h3>4</h3>
     	<h2><?php echo $clubA1607; ?></h2>
     	<h2><?php echo $clubA1608; ?></h2>
    <h4></h4>
	   	<input type="text" name="clubA1607" value="<?php echo $id1607 ;?>" size="3">
        <input type="text" name="clubA1608" value="<?php echo $id1608 ;?>" size="3">
      
	<h3>5</h3>
      	<h2><?php echo $clubA1609; ?></h2>
      	<h2><?php echo $clubA1610; ?></h2>
    <h4></h4>
		<input type="text" name="clubA1609" value="<?php echo $id1609 ;?>" size="3">
        <input type="text" name="clubA1610" value="<?php echo $id1610 ;?>" size="3">
       
	<h3>6</h3>
      	<h2><?php echo $clubA1611; ?></h2>
     	<h2><?php echo $clubA1612; ?></h2>
    <h4></h4>
	    <input type="text" name="clubA1611" value="<?php echo $id1611 ;?>" size="3">
		<input type="text" name="clubA1612" value="<?php echo $id1612 ;?>" size="3">
        
	<h3>7</h3>
		<h2><?php echo $clubA1613; ?></h2>
		<h2><?php echo $clubA1614; ?></h2>
    <h4></h4>
		<input type="text" name="clubA1613" value="<?php echo $id1613 ;?>" size="3">
        <input type="text" name="clubA1614" value="<?php echo $id1614 ;?>" size="3">
       
	<h3>8</h3>
		<h2><?php echo $clubA1615; ?></h2>
		<h2><?php echo $clubA1616; ?></h2>
    <h4></h4>
		<input type="text" name="clubA1615" value="<?php echo $id1615 ;?>" size="3">
        <input type="text" name="clubA1616" value="<?php echo $id1616 ;?>" size="3">
       
	<h3>9</h3>
		<h2><?php echo $clubA1617; ?></h2>
		<h2><?php echo $clubA1618; ?></h2>
    <h4></h4>
		<input type="text" name="clubA1617" value="<?php echo $id1617 ;?>" size="3">
        <input type="text" name="clubA1618" value="<?php echo $id1618 ;?>" size="3">
       
	<h3>10</h3>
		<h2><?php echo $clubA1619; ?></h2>
		<h2><?php echo $clubA1620; ?></h2>
    <h4></h4>
	    <input type="text" name="clubA1619" value="<?php echo $id1619 ;?>" size="3">
        <input type="text" name="clubA1620" value="<?php echo $id1620 ;?>" size="3">
       
	<h3>11</h3>
		<h2><?php echo $clubA1621; ?></h2>
		<h2><?php echo $clubA1622; ?></h2>
    <h4></h4>
		<input type="text" name="clubA1621" value="<?php echo $id1621 ;?>" size="3">
        <input type="text" name="clubA1622" value="<?php echo $id1622 ;?>" size="3">
       
	<h3>12</h3>
        <h2><?php echo $clubA1623; ?></h2>
        <h2><?php echo $clubA1624; ?></h2>
    <h4></h4>
	    <input type="text" name="clubA1623" value="<?php echo $id1623 ;?>" size="3">
        <input type="text" name="clubA1624" value="<?php echo $id1624 ;?>" size="3">
      
	<h3>13</h3>
       <h2><?php echo $clubA1625; ?></h2>
       <h2><?php echo $clubA1626; ?></h2>
    <h4></h4>
	    <input type="text" name="clubA1625" value="<?php echo $id1625;?>" size="3">
        <input type="text" name="clubA1626" value="<?php echo $id1626 ;?>" size="3">
        
	<h3>14</h3>
        <h2><?php echo $clubA1627; ?></h2>
        <h2><?php echo $clubA1628; ?></h2>
    <h4></h4>
        <input type="text" name="clubA1627" value="<?php echo $id1627 ;?>" size="3">
        <input type="text" name="clubA1628" value="<?php echo $id1628 ;?>" size="3">
       
	<h3>15</h3>
        <h2><?php echo $clubA1629; ?></h2>
        <h2><?php echo $clubA1630; ?></h2>
    <h4></h4>
		<input type="text" name="clubA1629" value="<?php echo $id1629 ;?>" size="3">
        <input type="text" name="clubA1630" value="<?php echo $id1630 ;?>" size="3">
       
	<h3>16</h3>
        <h2><?php echo $clubA1631; ?></h2>
        <h2><?php echo $clubA1632; ?></h2>
    <h4></h4>
		<input type="text" name="clubA1631" value="<?php echo $id1631 ;?>" size="3">
        <input type="text" name="clubA1632" value="<?php echo $id1632 ;?>" size="3">
     
	<footer><input type="submit" value="modifier" name="submit"></footer>
		
		 <p class="lien">
      <a href="../../accueilMAJ.php" target="_top">Retour</a> 
	   </p>
						
	</form>	