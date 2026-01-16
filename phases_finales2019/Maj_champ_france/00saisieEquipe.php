<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../maj.css">
</head>
<?php
$page="equipes";

if (isset ($_GET['type'])) $type = $_GET['type']; else $type='-';
if (isset ($_GET['division'])) $division = $_GET['division']; else $division='-'; 
if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee='-'; 
if (isset ($_GET['prefixe'])) $prefixe = $_GET['prefixe']; else $prefixe='-'; 


$bdpfannee =  "bdpf".$annee;
require '../../../connect/connexion1.php';
$requete = "SELECT type
			FROM $bdpfannee
			WHERE 	id=$division 		";
					$result = mysql_query($requete) ;
					while ($row = mysql_fetch_array($result) )
						{ 
						$type = $row[0];
						}

echo "division : ".$division; echo "<br>";
echo "type (saisieEquipe.php): ".$type;  echo "<br>";



require ("../../../phases_finales2019/fonctionsChampFrance2019.php"); 
trenteDeuxieme2019 ($division, $annee);


?>
<body bgcolor="#FFFFFF" text="#000000">
<table width="352">
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2"><div align="center"><b><font size="5" face="Arial, Helvetica, sans-serif">Maj Champ de France <?php echo $annee;?></font></b></div></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td colspan="2"><div align="center"><font face="Arial, Helvetica, sans-serif" color="#FF0000"><b><font size="4">Saisie des &eacute;quipes</font></b></font></div></td>
  </tr>
  <tr> 
    <td width="37" bgcolor="#000000"><div align="center"><font size="6"><b><font color="#FFFFFF" face="Arial, Helvetica, sans-serif">3</font></b></font></div></td>
    <td width="303" bgcolor="#006699"><?php include ("../choixDivision.php");?></td>
  </tr>
</table>
<table width="354" border="0" height="188">
  <tr bgcolor="#006699"> 
    <td colspan="2" valign="top" height="11">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" height="22" width="26%"><div align="center"> </div></td>
    <td width="74%" valign="top" height="-4" bgcolor="#0099FF"><div align="left"> </div></td>
  </tr>
  <tr> 
    <td valign="top" height="17" width="26%"><div align="center">Base</div></td>
    <td width="74%" valign="top" height="17" bgcolor="#0099FF"><div align="center"> </div></td>
  </tr>
  <tr> 
    <td valign="top" height="23" width="26%"><div align="center">Ann&eacute;e</div></td>
    <td width="74%" valign="top" height="23" bgcolor="#000000"><div align="center"><b><font size="5" color="#FFFFFF"><?php echo $annee; ?></font></b></div></td>
  </tr>
  <tr> 
    <td valign="top" height="13" width="26%"><div align="center">Division2</div></td>
    <td width="74%" valign="top" height="13" bgcolor="#0099FF"><div align="center"><?php echo $division;?></div></td>
  </tr>
  <tr>
    <td valign="top" height="22" width="26%"><div align="center">Type</div></td>
    <td width="74%" valign="top" height="22" bgcolor="#0099FF"><div align="center"><?php echo $type; ?></div></td>
  </tr>
  <tr> 
    <td valign="top" height="40" width="26%"><div align="center"></div></td>
    <td width="74%" valign="top" height="40" bgcolor="#0099FF"><div align="center"><br>
        <form name="form1" method="post" action="saisieEquipe.php?division=<?php echo $division; ?>&type=<?php echo $type; ?>&annee=<?php echo $annee; ?>">
          <input type="submit" name="Submit" value="Valider">
        </form>
      </div>
    </td>
  </tr>
</table>


<br>
					 
					 
					  
					  
<!-- ************  Finale   ************ -->				  
<?php
if ($type == 90000000001 or $type == 90000000011)
			{
			
			
			?>
			<form name="insertion" action="saisieEquipe2.php?type=<?php echo $type ; ?>&division=<?php echo $division ; ?>&annee=<?php echo $annee ; ?>" method="POST">
				  

				  
				  <?php
				  require '../../../connect/connection1.php';
				 $bdpfannee = "bdpf".$annee;			
				 $requete = mysql_query( "	SELECT E01, E02
											FROM   $bdpfannee
											WHERE  id = $division " ) ;
				
				  if( $result = mysql_fetch_object( $requete ) )
				 	 {
				 	 
				 	}
				mysql_close(); 
				?>
				 
	<input type="hidden" name="division" value="<?php echo($division) ;?>">
				  
	<header><h1><?php echo "Division ( ".''.$division.''." )Ann&eacute;e ".''.$annee; ?> </h1></header>
  
    <p class="texte">Finale </p>
	  
	  	<h3>1</h3>
         <h2><?php	echo $clubA1001; ?></h2>
         <h2><?php	echo $clubA1002; ?></h2>
        <h4></h4>
		<input type="text" name="clubA1001" value="<?php echo($result->E01) ;?>" size="3">
		<input type="text" name="clubA1002" value="<?php echo($result->E02) ;?>" size="3">
		
		
      
	   
	   <footer>
        <input type="submit" value="modifier" name="submit">
		</footer>
		<br/>
		<br/>
      <a href="../accueilMAJ.php" target="_top">Retour    </a> 
				</form>			
		<br/>
		<br/>
		<br/>			
			
<!-- ************  Demi Finale   ************ -->			
			
			
			<?php	
			}
elseif ($type == 90000000002  or $type == 90000000004)
			{
			
			
			?>
			<form name="insertion" action="saisieEquipe2.php?type=<?php echo $type ; ?>&division=<?php echo $division ; ?>&comite=<?php echo $comite ; ?>&annee=<?php echo $annee ; ?>" method="POST">
				  

				  
				  <?php
				  require '../../../connect/connection1.php';
				 $bdpfannee = "bdpf".$annee;			
				 $requete = mysql_query( "	SELECT E01, E02, E03, E04
											FROM   $bdpfannee
											WHERE  id = $division " ) ;
				
				  if( $result = mysql_fetch_object( $requete ) )
				 	 {
				 	 
				 	}
				mysql_close(); 
				?>
				 
				  <input type="hidden" name="division" value="<?php echo($division) ;?>">
				  
		 <header>
  <h1><?php echo "Division ( ".''.$division.''." )Ann&eacute;e ".''.$annee; ?> </h1>
  </header>
  
       <p class="texte">
	 Demi finale
	   </p>
	  
	  	<h3>1</h3>
         <h2><?php	echo $clubA2001; ?></h2>
         <h2><?php	echo $clubA2002; ?></h2>
        <h4></h4>
		<input type="text" name="clubA2001" value="<?php echo($result->E01) ;?>" size="3">
		<input type="text" name="clubA2002" value="<?php echo($result->E02) ;?>" size="3">
		
		<h3>2</h3>
         <h2><?php	echo $clubA2003; ?></h2>
         <h2> <?php	echo $clubA2004; ?></h2> 
		 <h4></h4>
          <input type="text" name="clubA2003" value="<?php echo($result->E03) ;?>" size="3">
          <input type="text" name="clubA2004" value="<?php echo($result->E04) ;?>" size="3">
      
	   
	   <footer>
        <input type="submit" value="modifier" name="submit">
		</footer>
		
      <a href="../accueilMAJ.php" target="_top">Retour    </a> 
				</form>


				
<!-- ************  Quarts de finale   ************ -->
<?php
		}
elseif ($type==90000000402 or  $type == 90000000804)
	{
		?>
				<form name="insertion" action="saisieEquipe2.php?type=<?php echo $type ; ?>&division=<?php echo $division ; ?>&comite=<?php echo $comite ; ?>&annee=<?php echo $annee ; ?>" method="POST">
						  <b><font size="4"> 
  
						  <?php
						 require '../../../connect/connexion1.php';
						  $bdpfannee = "bdpf".$annee;
						  $requete = mysql_query( "	SELECT id ,E01, E02, E03, E04, E05, E06 , E07, E08
													FROM   $bdpfannee
													WHERE  id = $division " ) ;
						
						  if( $result = mysql_fetch_object( $requete ) )
						  		{
						 
						 		}
							mysql_close(); 
						?>
						  </font></b> 
						  <input type="hidden" name="division" value="<?php echo($division) ;?>">
		
	<header><h1> <?php echo  "Division (".''.$division.''." ) Ann&eacute;e ".''.$annee; ?></h1></header>		  
	<p class="texte"> Quarts de finale  </p>
			 
	<h3>1</h3>
	<h2><?php echo $clubA4001; ?></h2>
    <h2><?php echo $clubA4002; ?></h2>
	<h3></h3>
	<input type="text" name="clubA4001" value="<?php echo($result->E01) ;?>" size="3">
	<input type="text" name="clubA4002" value="<?php echo($result->E02) ;?>" size="3">
	<h3>2</h3>
	<h2><?php echo $clubA4003; ?></h2>
    <h2><?php echo $clubA4004; ?></h2>
	<h3></h3>
	<input type="text" name="clubA4003" value="<?php echo($result->E03) ;?>" size="3">
	<input type="text" name="clubA4004" value="<?php echo($result->E04) ;?>" size="3">		
	<h3>3</h3>
    <h2> <?php echo $clubA4005; ?></h2>
    <h2> <?php echo $clubA4006; ?></h2>
	<h3></h3>
	<input type="text" name="clubA4005" value="<?php echo($result->E05) ;?>" size="3">
	<input type="text" name="clubA4006" value="<?php echo($result->E06) ;?>" size="3">			
	<h3>4</h3>
    <h2><?php echo $clubA4007; ?></h2>
    <h2><?php echo $clubA4008; ?></h2>
	<h3></h3>
	<input type="text" name="clubA4007" value="<?php echo($result->E07) ;?>" size="3">
	<input type="text" name="clubA4008" value="<?php echo($result->E08) ;?>" size="3">
			
	<footer><input type="submit" value="modifier" name="submit"></footer>
				
	<a href="../accueilMAJ.php" target="_top">Retour </a> 
</form>
										
<!-- ************ Barrages(8 équipes) Quarts (4 équipes)   ************-->
						
<?php		
	}
elseif ($type==13)
	{
		//quartsPlusBarrages2019 ($bdcomiteClub, $division, $annee);
		?>
			<form name="insertion" action="saisieEquipe2.php?type=<?php echo $type ; ?>&division=<?php echo $division ; ?>&comite=<?php echo $comite ; ?>&annee=<?php echo $annee ; ?>" method="POST">
						  
<?php
	require '../../../connect/connexion1.php';
						    $bdpfannee = "bdpf".$annee;
						   $requete = mysql_query( "	SELECT id ,	E01, E02, E03, E04, E05, E06 , E07, E08,
						   											E01, E02, E03, E04, E05, E06 , E07, E08
													FROM   $bdpfannee
													WHERE  id = $division  " ) ;
						
						  if( $result = mysql_fetch_object( $requete ) )
						  		{
						 
						 		}
							
						  
	
						?>
						   
						  <input type="hidden" name="division" value="<?php echo($division) ;?>">
						  
  
	<header><h1> Division (<?php echo $division; ?>) Ann&eacute;e  <?php echo $annee; ?> </h1></header>  
	  
	<p class="texte"> Barrages  </p>
	      
    <h3>1</h3>
	<h2><?php	echo $E01; ?></h2>
    <h2><?php	echo $E02; ?></h2>
	<h4></h4>
    <input type="text" name="E01" value="<?php echo($result->E01) ;?>" size="3">
    <input type="text" name="E02" value="<?php echo($result->E02) ;?>" size="3">
    <h3>2</h3>
    <h2> <?php	echo $E03; ?></h2>
    <h2><?php	echo $E04; ?></h2>
    <h4></h4>
	<input type="text" name="E03" value="<?php echo($result->E03) ;?>" size="3">
    <input type="text" name="E04" value="<?php echo($result->E04) ;?>" size="3">
    <h3>3</h3>
    <h2><?php	echo $E05; ?></h2>
    <h2> <?php	echo $E06; ?></h2>
    <h4></h4>
		<input type="text" name="E05" value="<?php echo($result->E05) ;?>" size="3">
        <input type="text" name="E06" value="<?php echo($result->E06) ;?>" size="3">
       <h3>4</h3>
        <h2><?php	echo $E07; ?></h2>
       <h2> <?php	echo $E08; ?></h2>
      		<h4></h4>
	    <input type="text" name="E07" value="<?php echo($result->E07) ;?>" size="3">
        <input type="text" name="E08" value="<?php echo($result->E08) ;?>" size="3">
      
   
   
   <p class="texte"> Quarts de finale </p>
   
   
   
    <h3>1</h3>
    <h2><?php	echo $E01; ?></h2>
    <h2><?php	echo $E02; ?></h2>
    <h4></h4>
    <input type="text" name="E01" value="<?php echo($result->E01) ;?>" size="3">
    <input type="text" name="E02" value="<?php echo($result->E02) ;?>" size="3">
    <h3>2</h3>
    <h2><?php	echo $E03; ?></h2>
    <h2> <?php	echo $E04; ?></h2>
  	<h4></h4>
	<input type="text" name="E03" value="<?php echo($result->E03) ;?>" size="3">
    <input type="text" name="E04" value="<?php echo($result->E04) ;?>" size="3">
        
    <h3>3</h3>
    <h2><?php	echo $E05; ?></h2>
    <h2> <?php	echo $E06; ?></h2>
    <h4></h4>
	    <input type="text" name="E05" value="<?php echo($result->E05) ;?>" size="3">
        <input type="text" name="E06" value="<?php echo($result->E06) ;?>" size="3">
          <h3>7</h3>
		
        <h2><?php	echo $E07; ?></h2>
        <h2><?php	echo $E08; ?></h2>
				<h4></h4>
		<input type="text" name="E07" value="<?php echo($result->E07) ;?>" size="3">
        <input type="text" name="E08" value="<?php echo($result->E08) ;?>" size="3">
		

    <footer> 
      <input type="submit" value="modifier" name="submit">
	</footer>
		
   <a href="../accueilMAJ.php" target="_top">Retour</a> 
 </form>
							
<?php
}
		
elseif ($type== '90000080402' or  $type== '90000160402')
		{
		require ('saisieEquipe8me.php');
		}
elseif($type=='90016080402' or  $type == '90032160402')
		{
		require ('saisieEquipe16me.php');
		}
elseif ($type== '93216080402' or substr($type,0,3)== '964')
		{
		require ('saisieEquipe32me.php');
		}		
else
		{
		echo "Il faut choisir une phase finale";
		}
?>
