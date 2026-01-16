

<?php
/*
function journeeSuivante($comite, $champ)
{
<object data="/Phpleague/<?php echo $comite; ?>/consult/classement_journeesupp.php?champ=<?php echo $champ; ?>
			frameborder="no" height="220" width="95%" type="text/html" align="top">
        
  </object>  		
}


function connectionBdd1()
{
 //global $bdd;
 //  $bdd = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db1;charset=utf8', 'root', ''); 
 //$bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france-db1;charset=utf8', 'onepip-france', 'Lavelan1969&');	
}

function connectionBdd2()
{
 //global $bdd;
   $bdd23 = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db2;charset=utf8', 'root', ''); 
 //$bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france-db2;charset=utf8', 'onepip-france', 'Lavelan1969&');	
}
function connectionBdd3()
{
 //global $bdd;
 //  $bdd23 = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db3;charset=utf8', 'root', ''); 
 //$bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france-db3;charset=utf8', 'onepip-france', 'Lavelan1969&');	
}

function connection($comite)
{
echo $comite;	
 
	//global $bdd;
 if ($comite=="phppro" or $comite =="phpf1" or $comite =="phpfed2" or $comite=="phpfed3NE" or $comite=="phpfed3GS" or $comite=="phpfem")
	{ 
	//connectionBdd3();
	 $bdd = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db3;charset=utf8', 'root', '');
	//$bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france-db3;charset=utf8', 'onepip-france', 'Lavelan1969&');
	}
 else
	{
	//connectionBdd2();	
	   $bdd = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db2;charset=utf8', 'root', '');
	// $bdd =new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france-db2;charset=utf8', 'onepip-france', 'Lavelan1969&');
	}	
}
*/
function affichage($champ, $champ2, $comite, $bdd)
{
	

 if ($champ2 > 0)
  {
  echo "<table width=\"750\">";
	AffichageLogos($champ, $comite, false, $bdd);
    echo "<tr valign=\"top\"> ";
      echo "<td> ";
         if ($champ > '990000') echo "<h3 align=\"center\">Equipe I </h3>";
		 aff_journee($champ, $bdd);
		 clmnt($champ, false, $bdd);
		 aff_journeeSupp($champ,  $bdd);
	  echo "</td>";
            
	  echo "<td>"; 
           if ($champ > '990000') echo "<h3 align=\"center\">Equipe II</h3>";
		  aff_journee($champ2, $bdd);
		  clmnt($champ2, false, $bdd);
		  aff_journeeSupp($champ2,  $bdd);  
      echo "</td>";
    echo "</tr>";
  echo "</table>";
  //messages déroulant
	//echo "<p class=\"ressource\">". messages ($champ);  </."</p>";
    
  }
else
  {
	
	AffichageLogos($champ, $comite, false, $bdd);
	aff_journee($champ, $bdd);
	clmnt($champ, false, $bdd);
	aff_journeeSupp($champ,  $bdd);
	//echo "<p class=\"ressource\">". messages ($champ);  </."</p>";
    // journeesReportees($comite, $champ, $bdd); 
  }
}



function messages($champ)
{

//phppro
$messagePro_110="";
$messagePro_120="";
$messagePro_130="";

$messageFed1_141="";
$messageFed1_142="";
$messageFed1_143="";
$messageFed1_144="";

$messageFed2_151="";
$messageFed2_152="";
$messageFed2_153="";
$messageFed2_154="";
$messageFed2_155="";
$messageFed2_156="";
$messageFed2_157="";
$messageFed2_158="";

$messageFem_280="";
$messageFem_285="";
$messageFem_143="";
$messageFem_144="";

//phpfed3NE

$messageFed3_1161="";
$messageFed3_1162="";
$messageFed3_1163="";
$messageFed3_1164="";
$messageFed3_1165="";
$messageFed3_1166="";
$messageFed3_1167="";
$messageFed3_1168="";

$messageFed3_2161="";
$messageFed3_2162="";
$messageFed3_2163="";
$messageFed3_2164="";
$messageFed3_2165="";
$messageFed3_2166="";
$messageFed3_2167="";
$messageFed3_2168="";

//phpab


 if ($champ==200171)
	 echo "azerty";
 
$messageAb_172="";
$messageAb_173="";
$messageAb_174="";

$messageAb_181="";
$messageAb_182="";
$messageAb_183="";
$messageAb_184="";

$messageAb_191="";
$messageAb_192="";
$messageAb_193="";
$messageAb_194="";


//phpau

$messageAu_171="";
$messageAu_172="";
$messageAu_173="";
$messageAu_174="";

$messageAu_181="";
$messageAu_182="";
$messageAu_183="";
$messageAu_184="";

$messageAu_191="";
$messageAu_192="";
$messageAu_193="";
$messageAu_194="";

//phpca

$messageCa_171="";
$messageCa_172="";
$messageCa_173="";
$messageCa_174="";

$messageCa_181="";
$messageCa_182="";
$messageCa_183="";
$messageCa_184="";

$messageCa_191="";
$messageCa_192="";
$messageCa_193="";
$messageCa_194="";


//phpidf
$messageIdf_171="";
$messageIdf_172="";
$messageIdf_181="";
$messageIdf_182="";
$messageIdf_191="";
$messageIdf_192="";
$messageIdf_201="";
$messageIdf_202="";
$messageIdf_211="";
$messageIdf_212="";
$messageIdf_213="";




//phppl

$messagePr_171="";
$messagePr_181="";
$messagePr_191="";
$messagePr_201="";
}




function evolutionResultats ($equipe, $comite, $champ, $bdd)
{
$php_matchs = $comite."_matchs";
$php_journees = $comite."_journees";

$requete = $bdd->query("SELECT MAX(numero)
						FROM $php_journees		
						WHERE id_champ = '$champ'");

$row = $requete->fetch();
$maxJournee = $row[0];		

$premiereJournee = $champ*100 + 1;
$derniereJournee = $champ.$maxJournee;

$tabEquipeDom = array();
$tabEquipeExt = array();
$tabButs_dom = array();
$tabButs_ext = array();

 for ($id_journee=$premiereJournee ; $id_journee<=$derniereJournee; $id_journee++)
 {
 $requete = $bdd->query("SELECT id_equipe_dom, id_equipe_ext, buts_dom, buts_ext
						FROM $php_matchs
						WHERE id_journee = '$id_journee'
						AND (id_equipe_dom = '$equipe' OR id_equipe_ext = '$equipe')
						ORDER BY id ASC
						");

  while ($row = $requete->fetch())
		{
		$tabEquipeDom[] = $row[0];
		$tabEquipeExt[] = $row[1];
		$tabButs_dom[] = $row[2];
		$tabButs_ext[] = $row[3];
		}				
  }
echo "<table width=\"100%\"
>";	
 echo "<tr>";
  for ($i=0; $i<$maxJournee; $i++)
  {
	  
echo "<td>";
echo "J";
echo $i+1;


	if (isset($tabButs_dom[$i]))  $tabButs_dom[$i]=$tabButs_dom[$i];else $tabButs_dom[$i] =0;
	if (isset($tabButs_ext[$i]))  $tabButs_ext[$i]=$tabButs_ext[$i];else $tabButs_ext[$i]=0;
	if (isset($tabEquipeDom[$i]))  $tabEquipeDom[$i]=$tabEquipeDom[$i];else $tabEquipeDom[$i]="";
	if (isset($tabEquipeExt[$i]))  $tabEquipeExt[$i]=$tabEquipeExt[$i];else $tabEquipeExt[$i]="";
	    
	  is_numeric($tabButs_dom[$i]);
	  is_numeric($tabButs_ext[$i]);
	  is_string($tabEquipeDom[$i]);
	  is_string($tabEquipeExt[$i]);
	//echo $i+1;  
	if ($tabButs_dom[$i]+$tabButs_ext[$i] > 0)
	{
	  $resultat= $tabButs_dom[$i] - $tabButs_ext[$i];
	 
	  if ("$tabEquipeDom[$i]" === "$equipe" AND $tabButs_dom[$i] > $tabButs_ext[$i])
		{print("<img src=\"/resultats/bilan/gagnedream.jpg\"  height=\"25\" width=\"25\">");}
		
	  if ( "$tabEquipeDom[$i]" === "$equipe" AND $tabButs_dom[$i] < $tabButs_ext[$i])
			{print("<img src=\"/resultats/bilan/perdudream.jpg\"  height=\"25\" width=\"25\">");}
			
	  if ("$tabEquipeExt[$i]" === "$equipe" AND $tabButs_dom[$i] < $tabButs_ext[$i])
			{echo("<img src=\"/resultats/bilan/gagnedream.jpg\"  height=\"25\" width=\"25\">");}
			
	  if ("$tabEquipeExt[$i]" === "$equipe"	AND $tabButs_dom[$i] > $tabButs_ext[$i])
			{echo("<img src=\"/resultats/bilan/perdudream.jpg\"  height=\"25\" width=\"25\">");}
			
	  if ($resultat == 0)
		 {echo("<img src=\"/resultats/bilan/nulldream.jpg\"  height=\"25\" width=\"25\">");}	 
	}
	else
	 {echo("<img src=\"/resultats/bilan/rien.jpg\"  height=\"25\" width=\"25\">");}
	
   echo "</td>";
  }
 echo "</tr>";  
 echo "</table>";
}

function evolutionResultatsSmart ($equipe, $comite, $champ, $bdd)
{
	//echo "test";
$php_matchs = $comite."_matchs";
$php_journees = $comite."_journees";

$requete = $bdd->query("SELECT MAX(numero)
						FROM $php_journees		
						WHERE id_champ = '$champ'");

$row = $requete->fetch();
$maxJournee = $row[0];		

$premiereJournee = $champ*100 + 1;
$derniereJournee = $champ.$maxJournee;

$tabEquipeDom = array();
$tabEquipeExt = array();
$tabButs_dom = array();
$tabButs_ext = array();

 for ($id_journee=$premiereJournee ; $id_journee<=$derniereJournee; $id_journee++)
 {
 $requete = $bdd->query("SELECT id_equipe_dom, id_equipe_ext, buts_dom, buts_ext
						FROM $php_matchs
						WHERE id_journee = '$id_journee'
						AND (id_equipe_dom = '$equipe' OR id_equipe_ext = '$equipe')
						ORDER BY id ASC
						");

  while ($row = $requete->fetch())
		{
		$tabEquipeDom[] = $row[0];
		$tabEquipeExt[] = $row[1];
		$tabButs_dom[] = $row[2];
		$tabButs_ext[] = $row[3];
		}				
  }
 // echo "maxjournée : ".$maxJournee;
  $demiMaxJournee=$maxJournee/2;
 // echo $demiMaxJournee;

echo "<table width=\"90%\" align=\"center\">";	

//******phase Aller******

 echo "<tr>";
  echo "<td colspan=\"9\" align=\"center\">";echo "phase aller"; echo "</td>";
 echo "</tr>";
 echo "<tr>";
  for ($i=0; $i<$demiMaxJournee; $i++)
  {
 echo "<td align=\"center\">";
  echo "J";echo $i+1;
 echo "</td>";
  }
 echo "</tr>";
 echo "<tr>";
  for ($i=0; $i<$demiMaxJournee; $i++)
  {
	  
echo "<td align=\"center\">";
//echo "J";
//echo $i+1;


	if (isset($tabButs_dom[$i]))  $tabButs_dom[$i]=$tabButs_dom[$i];else $tabButs_dom[$i] =0;
	if (isset($tabButs_ext[$i]))  $tabButs_ext[$i]=$tabButs_ext[$i];else $tabButs_ext[$i]=0;
	if (isset($tabEquipeDom[$i]))  $tabEquipeDom[$i]=$tabEquipeDom[$i];else $tabEquipeDom[$i]="";
	if (isset($tabEquipeExt[$i]))  $tabEquipeExt[$i]=$tabEquipeExt[$i];else $tabEquipeExt[$i]="";
	    
	  is_numeric($tabButs_dom[$i]);
	  is_numeric($tabButs_ext[$i]);
	  is_string($tabEquipeDom[$i]);
	  is_string($tabEquipeExt[$i]);
	//echo $i+1;  
	if ($tabButs_dom[$i]+$tabButs_ext[$i] > 0)
	{
	  $resultat= $tabButs_dom[$i] - $tabButs_ext[$i];
	 
	  if ("$tabEquipeDom[$i]" === "$equipe" AND $tabButs_dom[$i] > $tabButs_ext[$i])
		{print("<img src=\"/resultats/bilan/gagnedream.jpg\"  height=\"25\" width=\"25\">");}
		
	  if ( "$tabEquipeDom[$i]" === "$equipe" AND $tabButs_dom[$i] < $tabButs_ext[$i])
			{print("<img src=\"/resultats/bilan/perdudream.jpg\"  height=\"25\" width=\"25\">");}
			
	  if ("$tabEquipeExt[$i]" === "$equipe" AND $tabButs_dom[$i] < $tabButs_ext[$i])
			{echo("<img src=\"/resultats/bilan/gagnedream.jpg\"  height=\"25\" width=\"25\">");}
			
	  if ("$tabEquipeExt[$i]" === "$equipe"	AND $tabButs_dom[$i] > $tabButs_ext[$i])
			{echo("<img src=\"/resultats/bilan/perdudream.jpg\"  height=\"25\" width=\"25\">");}
			
	  if ($resultat == 0)
		 {echo("<img src=\"/resultats/bilan/nulldream.jpg\"  height=\"25\" width=\"25\">");}	 
	}
	else
	 {echo("<img src=\"/resultats/bilan/rien.jpg\"  height=\"25\" width=\"25\">");}
	
   echo "</td>";
  }
 echo "</tr>";  
 echo "<tr>";
 echo "<td height=\"2\"></td>";
  echo "</tr>"; 
 echo "<tr>";
 /******  phase Retour******/
 echo "<td colspan=\"9\"align=\"center\">";echo "phase retour"; echo "</td>";
 echo "</tr>";
 echo "<tr>";
  for ($i=$demiMaxJournee; $i<$maxJournee; $i++)
  {
 echo "<td align=\"center\">";
  echo "J";echo $i+1;
 echo "</td>";
  }
 echo "</tr>";
 echo "<tr>";
  for ($i=$demiMaxJournee; $i<$maxJournee; $i++)
  {
	  
echo "<td align=\"center\">";
//echo "J";
//echo $i+1;


	if (isset($tabButs_dom[$i]))  $tabButs_dom[$i]=$tabButs_dom[$i];else $tabButs_dom[$i] =0;
	if (isset($tabButs_ext[$i]))  $tabButs_ext[$i]=$tabButs_ext[$i];else $tabButs_ext[$i]=0;
	if (isset($tabEquipeDom[$i]))  $tabEquipeDom[$i]=$tabEquipeDom[$i];else $tabEquipeDom[$i]="";
	if (isset($tabEquipeExt[$i]))  $tabEquipeExt[$i]=$tabEquipeExt[$i];else $tabEquipeExt[$i]="";
	    
	  is_numeric($tabButs_dom[$i]);
	  is_numeric($tabButs_ext[$i]);
	  is_string($tabEquipeDom[$i]);
	  is_string($tabEquipeExt[$i]);
	//echo $i+1;  
	if ($tabButs_dom[$i]+$tabButs_ext[$i] > 0)
	{
	  $resultat= $tabButs_dom[$i] - $tabButs_ext[$i];
	 
	  if ("$tabEquipeDom[$i]" === "$equipe" AND $tabButs_dom[$i] > $tabButs_ext[$i])
		{print("<img src=\"/resultats/bilan/gagnedream.jpg\"  height=\"25\" width=\"25\">");}
		
	  if ( "$tabEquipeDom[$i]" === "$equipe" AND $tabButs_dom[$i] < $tabButs_ext[$i])
			{print("<img src=\"/resultats/bilan/perdudream.jpg\"  height=\"25\" width=\"25\">");}
			
	  if ("$tabEquipeExt[$i]" === "$equipe" AND $tabButs_dom[$i] < $tabButs_ext[$i])
			{echo("<img src=\"/resultats/bilan/gagnedream.jpg\"  height=\"25\" width=\"25\">");}
			
	  if ("$tabEquipeExt[$i]" === "$equipe"	AND $tabButs_dom[$i] > $tabButs_ext[$i])
			{echo("<img src=\"/resultats/bilan/perdudream.jpg\"  height=\"25\" width=\"25\">");}
			
	  if ($resultat == 0)
		 {echo("<img src=\"/resultats/bilan/nulldream.jpg\"  height=\"25\" width=\"25\">");}	 
	}
	else
	 {echo("<img src=\"/resultats/bilan/rien.jpg\"  height=\"25\" width=\"25\">");}
	
   echo "</td>";
  }
 echo "</tr>";



 echo "</table>";
}

function journeesReportees($comite, $champ, $bdd)
{
 $tabEquipeDom = array();
 $tabEquipeExt = array();
 $tabButsDom = array();
 $tabButsExt = array();
 $tabDateReelle = array();
 $datePrevue = array();
 $tabJournee = array();
 $tabId_journee = array();
 $dateDuJour1 = date('D d M Y ');
 $dateDuJour = date('Y-m-d H:i:s');
 $php_clubs = $comite."_clubs";
 $php_matchs = $comite."_matchs";
 $php_journees = $comite."_journees";
//echo $dateDuJour;
//**************   traitement  *************************	
	//test sur la présence de rencontres en retard
	
	$premiereJournee = $champ * 100;
	
	$requete = $bdd->query("SELECT numero, id
							FROM $php_journees
							WHERE date_prevue < '$dateDuJour'
							AND id_champ = '$champ'
							ORDER BY numero asc");
							
	while ($row = $requete->fetch())
		{
		 $numeroJournee=$row[0];
		 $derniereJournee = $row[1];
		}
	
	$nbreMatchsReportes = array();
	$requete = $bdd->query("SELECT COUNT(*)
							FROM $php_matchs
							WHERE  id_journee between '$premiereJournee' and '$derniereJournee'
							AND date_reelle > '$dateDuJour'
							AND buts_dom IS NULL
							AND buts_ext IS NULL");
	
	$nbreMatchsReportes=$requete->fetch();
	
	if ($nbreMatchsReportes[0]> 0 )
	{
	?>
	<table align = "center"   width= "90%" cellspacing="1" cellpadding="1" border color="#3B487F"">
	  <tr bgcolor = "#000000">
		  <td style="background-color: #3B487F">  <font color = "#FFFF00" size="3pt" face="arial , Helvetica, sans-serif">
			<b> <?php  echo "Journée(s) reportée(s) au ".substr($dateDuJour,0,10);	?>
			</b></font> 
		  </td>
	    </tr>	
	  <tr bgcolor = "#CCCCCC">
	</table>		
	
	<?php
	}
	
	$idJourneeMin =$champ*100+1;
	$idJourneeMax =$champ*100+22;
   for ($i = 0, $id_journee = $idJourneeMin; $i <23, $id_journee< $idJourneeMax ;  $i++, $id_journee++)
   {
	$id_champ = substr($id_journee,0,3);
	
	// récuperation des dates prévues
	$requete = $bdd->query("SELECT date_prevue
							FROM $php_journees
							WHERE id_champ = $id_champ
							ORDER BY numero ASC");

	while ($row = $requete->fetch())
		{
		$datePrevue[] = substr($row[0],0,10);
		}
	 //echo $datePrevue[$i];				
	 // récupération de l'equipe qui reçoit et de la date de report
	$requete = $bdd->query("SELECT $php_clubs.nom, $php_matchs.date_reelle, $php_matchs.buts_dom, $php_matchs.buts_ext 
							FROM $php_matchs
							INNER JOIN $php_clubs ON $php_clubs.id = $php_matchs.id_equipe_dom
							WHERE $php_matchs.id_journee = '$id_journee'
							AND $php_matchs.buts_dom IS NULL
							AND $php_matchs.buts_ext IS NULL
							ORDER BY id_journee ASC
							");

	while ($row = $requete->fetch())
							{
							${"tabEquipeDom".$id_journee}[] = $row[0];
							${"tabDateReelle".$id_journee}[] = substr($row[1],0,10);
							${"tabButsDom".$id_journee}[] = $row[2];
							${"tabButsExt".$id_journee}[] = $row[3];
							}
	
	// récupération de l'equipe qui se déplace
	$requete = $bdd->query("SELECT $php_clubs.nom
						FROM $php_matchs
						INNER JOIN $php_clubs ON $php_clubs.id = $php_matchs.id_equipe_ext
						WHERE $php_matchs.id_journee = '$id_journee'
						AND $php_matchs.buts_dom IS NULL
						AND $php_matchs.buts_ext IS NULL
						ORDER BY id_journee ASC
						");

	while ($row = $requete->fetch())
		{
		 ${"tabEquipeExt".$id_journee}[] = $row[0];
		}	
echo $datePrevue;
	if ($datePrevue[$i]< $dateDuJour )
	{	
		$cpte = 0;
		for ($x = 0; $x < 6; $x++)
		 {			
		  if (isset(${"tabEquipeDom".$id_journee}[$x])) ${"tabEquipeDom".$id_journee}[$x]=${"tabEquipeDom".$id_journee}[$x];else ${"tabEquipeDom".$id_journee}[$x]= NULL;	
		
		  if (${"tabEquipeDom".$id_journee}[$x] == NULL)
		   {
			$cpte = $cpte + 1;	
		   }	
	     }
	  if ($cpte < 6 )
	  {
		?>
	   <table align = "center"   width= "90%" cellspacing="1" cellpadding="1" bordercolor="#3B487F">		
		 <tr bgcolor = "#CCCCCC">
		   <th> 
			 <font color = "#000000" size="2pt" face="arial , Helvetica, sans-serif">
				<?php
				//echo "II : ".$i;echo "<br />";
				$j = $i+1;				
				//echo "JJ : ".$j;
				echo "journée n° ".$j." prévue le ".$datePrevue[$i];
				?>
			  </font>
			</th>
		  </tr>
		
		  <tr bgcolor = "#FFFFFF"> 
			<td> 
			  <font color = "#000000" size="2pt" face="arial , Helvetica, sans-serif">
				<?php
				for ($k = 0; $k < 6; $k++)
				{			
				 if (isset(${"tabEquipeDom".$id_journee}[$k])) ${"tabEquipeDom".$id_journee}[$k]=${"tabEquipeDom".$id_journee}[$k];else ${"tabEquipeDom".$id_journee}[$k]= NULL;	
				 if (isset(${"tabEquipeExt".$id_journee}[$k])) ${"tabEquipeExt".$id_journee}[$k]=${"tabEquipeExt".$id_journee}[$k];else ${"tabEquipeExt".$id_journee}[$k]= NULL;
				 if (isset(${"tabButsDom".$id_journee}[$k])) ${"tabButsDom".$id_journee}[$k]=${"tabButsDom".$id_journee}[$k];else ${"tabButsDom".$id_journee}[$k]= NULL;	
				 if (isset(${"tabButsExt".$id_journee}[$k])) ${"tabButsExt".$id_journee}[$k]=${"tabButsExt".$id_journee}[$k];else ${"tabButsExt".$id_journee}[$k]= NULL;
				 if (isset(${"tabDateReelle".$id_journee}[$k])) ${"tabDateReelle".$id_journee}[$k]=${"tabDateReelle".$id_journee}[$k];else ${"tabDateReelle".$id_journee}[$k]= '';
						
				   if (${"tabEquipeDom".$id_journee}[$k] != NULL)
				   {
					echo ${"tabEquipeDom".$id_journee}[$k]." - ".${"tabEquipeExt".$id_journee}[$k]." reportée au ".${"tabDateReelle".$id_journee}[$k];
					echo "<br />";
				   }
				}					
				?>
			 </font>
		   </td>
	     </tr>
	   </table>
<?php
	  }
	}
  }
}
?>

<?php
function journeesReporteesCovid($comite, $champ, $bdd)
{
 //echo $comite;
 $tabEquipeDom = array();
 $tabEquipeExt = array();
 $tabButsDom = array();
 $tabButsExt = array();
 $tabDateReelle = array();
 $datePrevue = array();
 $tabJournee = array();
 $tabId_journee = array();
 $dateDuJour1 = date('D d M Y ');
 //$dateDuJour = date('Y-m-d H:i:s');
 $dateDuJour = "2020-11-01 15:00:00";
 $php_clubs = $comite."_clubs";
 $php_matchs = $comite."_matchs";
 $php_journees = $comite."_journees";
	
//**************   traitement  *************************	
	//test sur la présence de rencontres en retard
	//echo "***********************";echo "<br />";
	//echo  "tests presence matchs en retard";echo "<br />";
	//echo  $dateDuJour;echo "<br />";
	//echo "$champ";echo "<br />";
	$premiereJournee = $champ * 100;
	//echo "première journée : ".$premiereJournee;echo "<br />";
	$requete = $bdd->query("SELECT numero, id
							FROM $php_journees
							WHERE date_prevue < '$dateDuJour'
							AND id_champ = '$champ'
							ORDER BY numero asc");
							
			while ($row = $requete->fetch())
					{
					$numeroJournee=$row[0];
					$derniereJournee = $row[1];
					}
	//echo "numéro journee : ".$numeroJournee; echo "<br />";	
	//echo "derniere journee : ".$derniereJournee; echo "<br />";
	$nbreMatchsReportes = array();
	$requete = $bdd->query("SELECT COUNT(*)
							FROM $php_matchs
							WHERE  id_journee between '$premiereJournee' and '$derniereJournee'
							AND date_reelle > '$dateDuJour'
							AND buts_dom IS NULL
							AND buts_ext IS NULL");
	
	$nbreMatchsReportes=$requete->fetch();
	//echo "nombre de matchs reportés : ".$nbreMatchsReportes[0]; echo "<br />";
    //echo "***********************";
	//echo "-----------------------";echo "<br />";
	if ($nbreMatchsReportes[0]> 0 )
	{
	?>
	<table align = "center"   width= "80%" cellspacing="1" cellpadding="1" bordercolor="#3B487F"">
	  <tr bgcolor = "#000000">
		
		<td style="background-color: #3B487F">  <font color = "#FFFF00" size="3pt" face="arial , Helvetica, sans-serif">
			<b> <?php  echo "Journée(s) reportée(s) au ".substr($dateDuJour,0,10);	?>
			</b></font> 
		</td>
	  </tr>	
	  <tr bgcolor = "#CCCCCC">
	</table>		
	
	<?php
	}
	
	//echo "date du jour : ".substr ($dateDuJour,0,10);echo "<br />";
	//echo "date du jour1 : ".$dateDuJour1;echo "<br />";
	//echo "recup paramatre : ".$champ;echo "<br />";
	//echo $champ;
	$idJourneeMin =$champ*100+1;
	$idJourneeMax =$champ*100+22;
	for ($i = 0, $id_journee = $idJourneeMin; $i <23, $id_journee< $idJourneeMax ;  $i++, $id_journee++)
	{
	//echo $i;echo "<br />";
	$id_champ = substr($id_journee,0,3);
	//echo "<br />";
	//echo "-------------------";echo "<br />";
	//echo "id_champ : ".$id_champ;echo "<br />";
	// récuperation des dates prévues
	 $requete = $bdd->query("SELECT date_prevue
							FROM $php_journees
							WHERE id_champ = $id_champ
							ORDER BY numero ASC");

			while ($row = $requete->fetch())
							{
							$datePrevue[] = substr($row[0],0,10);
							}
	 //echo $datePrevue[$i];				
	 // récupération de l'equipe qui reçoit et de la date de report
	 $requete = $bdd->query("SELECT $php_clubs.nom, $php_matchs.date_reelle, $php_matchs.buts_dom, $php_matchs.buts_ext 
							FROM $php_matchs
							INNER JOIN $php_clubs ON $php_clubs.id = $php_matchs.id_equipe_dom
							WHERE $php_matchs.id_journee = '$id_journee'
							AND $php_matchs.buts_dom IS NULL
							AND $php_matchs.buts_ext IS NULL
							AND $php_clubs.nom != 'Exempt'
							ORDER BY id_journee ASC
							");

			while ($row = $requete->fetch())
							{
							${"tabEquipeDom".$id_journee}[] = $row[0];
							${"tabDateReelle".$id_journee}[] = substr($row[1],0,10);
							${"tabButsDom".$id_journee}[] = $row[2];
							${"tabButsExt".$id_journee}[] = $row[3];
							}
	
	 // récupération de l'equipe qui se déplace
	 $requete = $bdd->query("SELECT $php_clubs.nom
						FROM $php_matchs
						INNER JOIN $php_clubs ON $php_clubs.id = $php_matchs.id_equipe_ext
						WHERE $php_matchs.id_journee = '$id_journee'
						AND $php_matchs.buts_dom IS NULL
						AND $php_matchs.buts_ext IS NULL
						AND $php_clubs.nom != 'Exempt'
						ORDER BY id_journee ASC
						");

			while ($row = $requete->fetch())
							{
							${"tabEquipeExt".$id_journee}[] = $row[0];
							}	

	if ($datePrevue[$i]< $dateDuJour )
	{	

			$cpte = 0;
			for ($x = 0; $x < 6; $x++)
			{			
			 if (isset(${"tabEquipeDom".$id_journee}[$x])) ${"tabEquipeDom".$id_journee}[$x]=${"tabEquipeDom".$id_journee}[$x];else ${"tabEquipeDom".$id_journee}[$x]= NULL;	
		
			 if (${"tabEquipeDom".$id_journee}[$x] == NULL)
				{
				$cpte = $cpte + 1;	
				}	
			}
			if ($cpte < 6 )
			{
			 ?>
	 <table align = "center"   width= "85%" cellspacing="1" cellpadding="1" bordercolor="#3B487F">		
		
		<tr bgcolor = "#CCCCCC">
			<th> 
				<font color = "#000000" size="2pt" face="arial , Helvetica, sans-serif">
				<?php
				//echo "II : ".$i;echo "<br />";
				$j = $i+1;				
				//echo "JJ : ".$j;
				echo "journée n° ".$j." prévue le ".$datePrevue[$i];
				?>
				</font>
			</th>
		</tr>
		
		<tr bgcolor = "#FFFFFF"> 
			<td class="NG"> 
				<font color = "#000000" size="2pt" face="arial , Helvetica, sans-serif">
				<?php
	 for ($k = 0; $k < 6; $k++)
		{			
		  if (isset(${"tabEquipeDom".$id_journee}[$k])) ${"tabEquipeDom".$id_journee}[$k]=${"tabEquipeDom".$id_journee}[$k];else ${"tabEquipeDom".$id_journee}[$k]= NULL;	
		  if (isset(${"tabEquipeExt".$id_journee}[$k])) ${"tabEquipeExt".$id_journee}[$k]=${"tabEquipeExt".$id_journee}[$k];else ${"tabEquipeExt".$id_journee}[$k]= NULL;
		  if (isset(${"tabButsDom".$id_journee}[$k])) ${"tabButsDom".$id_journee}[$k]=${"tabButsDom".$id_journee}[$k];else ${"tabButsDom".$id_journee}[$k]= NULL;	
		  if (isset(${"tabButsExt".$id_journee}[$k])) ${"tabButsExt".$id_journee}[$k]=${"tabButsExt".$id_journee}[$k];else ${"tabButsExt".$id_journee}[$k]= NULL;
		  if (isset(${"tabDateReelle".$id_journee}[$k])) ${"tabDateReelle".$id_journee}[$k]=${"tabDateReelle".$id_journee}[$k];else ${"tabDateReelle".$id_journee}[$k]= '';
						
		  if (${"tabEquipeDom".$id_journee}[$k] != NULL)
		  {
			echo ${"tabEquipeDom".$id_journee}[$k]." - ".${"tabEquipeExt".$id_journee}[$k]." reportée au ".${"tabDateReelle".$id_journee}[$k];
			echo "<br />";
		  }
	    }					
		?>
				</font>
			</td>
		</tr>
	   </table>
		<?php
	   }
	}
  }
echo "<br />";
}
?>


<?php
// affichage des logos
function AffichageLogos($champ, $comite, $smart, $bdd)
{ 
 /*
 $tabNbreEquipe = array();
 $nombreEquipe = array();
 $php_equipes = $comite."_equipes";
 
 $requete = $bdd->query("
			SELECT COUNT(id_champ) as nb
			FROM $php_equipes
			WHERE id_champ =$champ");

 $nombre = $requete->fetch();					
 $nombreEquipe=$nombre['nb'];

 $requete = $bdd->query("
			SELECT id_club
			FROM $php_equipes
			WHERE id_champ =$champ");

 while ($row = $requete->fetch())
	{
	 $tabNbreEquipe[] = $row[0];
	}
	$requete->closeCursor();

echo $tabNbreEquipe[];
*/	
/* 
 //Recheche des noms des clubs						
 for ($i=0; $i<$nombreEquipe; $i++)
	{
	 $tabSigleEquipe = array();
	 
	require ("../connect/connexion1.php"); 
	//AModidier
	//$bdd = new PDO('mysql:host=127.0.0.1;dbname=onepip-france-db1;charset=utf8', 'root', ''); 
	//$bdd = new PDO('mysql:host=sql.franceserv.fr;dbname=onepip-france-db1;charset=utf8', 'onepip-france', 'Lavelan1969&');
	
	 $requete = $bdd->query("
				SELECT sigle
				FROM bdclubs
				WHERE id =$tabNbreEquipe[$i]");
				
     while ($row = $requete->fetch())
		{
		 ${"sigleEquipe".($i)} = $row[0];
		}
	$requete->closeCursor();	
	 //echo ${"sigleEquipe".($i)};
	}			
	
 for ($j=0; $j<$nombreEquipe; $j++)
	{
	 $tabNbreEquipe[$j]=substr($tabNbreEquipe[$j],-5);	
	 
	 
	//echo substr($tabNbreEquipe[$j],2,1);
		if (substr($tabNbreEquipe[$j],2,1)!=5)
		{
			if ($smart == true)
			  {$dim = 38;
			   $lien ="/smart/ficheClubs/pageFicheClubs.php?champion=";}
			else 
			  {$dim =68;
			   $lien ="../consultation/pageclub00.php?champion=";}

		?>
	 
		<a href="<?php echo $lien.$tabNbreEquipe[$j];?>" style="text-decoration:none">
		<img src="../images/blasons200_200/<?php echo $tabNbreEquipe[$j];?>.gif" 
			 height="<?php echo $dim; ?>" 
			 width="<?php echo $dim; ?>" 
			 alt="texte"  
			 title="<?php echo ${"sigleEquipe".($j)};?>"/>	
		</a>
		
		<?php
		}
		
	}
*/	
	echo "</br>";	
}

//affichage des logos smart 
/*
function AffichageLogosSmart($id, $comite)
{
 $tabNbreEquipe = array();
 $nombreEquipe = array();
 $php_equipes = $comite."_equipes";
 if ($comite=="phpfem" or $comite=="phppro" or $comite =="phpf1" or $comite =="phpfed2" or $comite=="phpfed3NE" or $comite=="phpfed3GS")
  require ("../connect1/connection3.php");
 else
  require ("../connect1/connection2.php");

 $requete = $bdd->query("SELECT COUNT(id_champ) as nb
						 FROM $php_equipes
						 WHERE id_champ =$id");

			$nombre = $requete->fetch();
							
 $nombreEquipe=$nombre['nb'];

 $requete = $bdd->query("SELECT id_club
						FROM $php_equipes
						WHERE id_champ =$id");

			while ($row = $requete->fetch())
							{
							$tabNbreEquipe[] = $row[0];
							}
							
	//Recheche des noms des clubs						
	for ($i=0; $i<$nombreEquipe; $i++)
	{
	 $tabSigleEquipe = array();
	 require ("../connect1/connection1.php");
	 $requete = $bdd->query("SELECT sigle
							 FROM bdclubs
							 WHERE id =$tabNbreEquipe[$i]");
				while ($row = $requete->fetch())
							{
							${"sigleEquipe".($i)} = $row[0];
							}													
	 //echo ${"sigleEquipe".($i)};
	
	}			
	
 for ($j=0; $j<$nombreEquipe; $j++)
	{
	 $tabNbreEquipe[$j]=substr($tabNbreEquipe[$j],-5);	
	 ?>
	 
	 <a href="/smart/ficheClubs/pageFicheClubs.php?champion=<?php echo $tabNbreEquipe[$j];?>">
		<img src="../images/blasons200_200/<?php echo $tabNbreEquipe[$j];?>.gif" 
			 height="38" 
			 width="38" 
			 alt="texte"  
			 title="<?php echo ${"sigleEquipe".($j)};?>"/>	
	 </a>
	 
	 <?php	
	}
}
*/
?>

<?php

// Affichage de l'equipe et moyenne de la Meilleure attaque
function meilleureAttaque ($phpComite, $champ, $bdd)
{
Global $nomMeilleureAttaque, $moyenneMeilleureAttaque;
$bd_clmnt_cache = $phpComite."_clmnt_cache";


$reponse = $bdd->query("
		 SELECT NOM, JOUES, BUTSPOUR
		 FROM $bd_clmnt_cache 
		 WHERE ID_champ=$champ
		 ORDER BY BUTSPOUR ASC");
						
	While ($row = $reponse->fetch() )
		{ 
		 $nomMeilleureAttaque = $row[0];
		 $jouesMeilleureAttaque= $row[1];
		 $pointsMeilleureAttaque = $row[2];
		}

	$moyenneMeilleureAttaque = $pointsMeilleureAttaque/$jouesMeilleureAttaque;		 
}	

// Affichage de l'equipe et moyenne de la meilleure défense	
function meilleureDefense ($phpComite, $champ, $bdd)
{
Global $nomMeilleureDefense, $moyenneMeilleureDefense;

$bd_clmnt_cache = $phpComite."_clmnt_cache";
$reponse = $bdd->query("
		 SELECT NOM, JOUES, BUTSCONTRE
		 FROM $bd_clmnt_cache 
		 WHERE ID_champ=$champ
		 AND NOM != 'Exempt'
		 ORDER BY BUTSCONTRE DESC");
						
	While ($row = $reponse->fetch() )
		{ 
		 $nomMeilleureDefense = $row[0];
		 $jouesMeilleureDefense= $row[1];
		 $pointsMeilleureDefense = $row[2];
		}
	if ($jouesMeilleureDefense>0)
	$moyenneMeilleureDefense = $pointsMeilleureDefense/$jouesMeilleureDefense;
	else
	$moyenneMeilleureDefense=0;
}

//  nom de la division
function nomDivision($phpComite, $champ, $bdd)
{
 Global $division;
 $bd_divisions = $phpComite."_divisions";
 $reponse = $bdd->query("
		SELECT nom
		FROM $bd_divisions
		WHERE id='$champ'"); 
							
	 While ($donnees = $reponse->fetch() )
		{ 
		 $division= $donnees['nom'];
		}	
}

//   Recherche du nombre de clubs dans la poule pour un compétition données
function nombreEquipe($phpComite, $champ, $bdd)
{
global $heightClassement, $heightCalendrier;

$bd_equipes = $phpComite."_equipes";

$reponse = $bdd->query("	SELECT count(id) 
							FROM $bd_equipes
							WHERE id_champ='$champ'"); 
							$nbreEquipes=$reponse->fetch();							
							
 $nbreEquipes=$nbreEquipes[0]; 
 
 $heightClassement=($nbreEquipes*20)+25;
 $heightCalendrier=((($nbreEquipes*25)/2)+25)*((($nbreEquipes*2)-2)/2);
}

//   Affichage du nom du club
function nomClub($equipe, $bdd)
{
global $nom;

$reponse = $bdd->query("SELECT sigle
						FROM bdclubs 
						WHERE id=$equipe OR id=$equipe - 90000000"); 
							While ($donnees = $reponse->fetch() )
							{ 
							 $nom= $donnees['sigle'];
							}
}


//  Affichage du nom de la ligue
function nomLigue($equipe, $bdd)
{
 global $nomLigue;
	
 $numLigue =substr($equipe,0,2);	
 
 $reponse = $bdd->query("
		    SELECT nom
		    FROM bdligue 
		    WHERE id='$numLigue'"); 
	While ($donnees =$reponse->fetch() )
	{ 
	 $nomLigue = $donnees['nom'];
	}		
}

//   Affichage des 5 dernières saison (régional + France)
function affichage5Saisons($saison, $equipe,$champ,$phpComite, $bdd)
{
	
 global $terrMoins1, $terrMoins2, $terrMoins3, $terrMoins4, $terrMoins5,
	   $franceMoins1, $franceMoins2, $franceMoins3, $franceMoins4, $franceMoins5,
	   $logoEquipe;
	   	   
 $saisonMoins1= $saison-1;
 $saisonMoins2= $saison-2;
 $saisonMoins3= $saison-3;
 $saisonMoins4= $saison-4;
 $saisonMoins5= $saison-5;

 $comite=substr($phpComite, 3);

 if ($equipe > 90000000)
	{
	 $logoEquipe=$equipe - 90000000;
	}
 else
	{
	 $logoEquipe=$equipe;	
	}
	
 $equipeComite= substr($equipe,-5);
 $reponse = $bdd->query( "
			SELECT id, terr_$saisonMoins1, terr_$saisonMoins2, terr_$saisonMoins3, terr_$saisonMoins4, terr_$saisonMoins5,
					france_$saisonMoins1, france_$saisonMoins2, france_$saisonMoins3, france_$saisonMoins4, france_$saisonMoins5
			FROM bdsaisons 
			WHERE id=$equipeComite"); 
				
	while($row = $reponse->fetch())
	{                 
	 $terrMoins1= $row[1];
	 $terrMoins2=  $row[2];
	 $terrMoins3=  $row[3];
	 $terrMoins4=  $row[4]; 
	 $terrMoins5=  $row[5];
	 $franceMoins1 =  $row[6];
	 $franceMoins2 =  $row[7];
	 $franceMoins3 =  $row[8];
	 $franceMoins4 =  $row[9];
	 $franceMoins5 =  $row[10];
	}	
}

// Traitement des scores (nbre de victoires , meilleure défense, meilleure attaque etc..)
function traitementDesScores($equipe, $phpComite, $bdd)
{
global  $pointsMarques, $pointsPris, $joues ,					 
		$pointsMarquesDomicile , $pointsMarquesExterieur , $pointsPrisDomicile, $pointsPrisExterieur,					
		$matchDomicile,	$victoireDomicile,	$defaiteDomicile, $nulDomicile,					
		$matchExterieur ,$victoireExterieur,$defaiteExterieur,$nulExterieur;

$bd_clmnt_cache = $phpComite.''."_clmnt_cache";

$reponse = $bdd->query("SELECT *
						FROM $bd_clmnt_cache 
						WHERE ID_EQUIPE='$equipe'"); 
							While ($donnees = $reponse->fetch() )
							{ 
							 $pointsMarques= $donnees['BUTSPOUR'];
							 $pointsPris= $donnees['BUTSCONTRE'];
							 $joues = $donnees['JOUES'];
							 
							 $pointsMarquesDomicile = $donnees['DOMBUTSPOUR'];
							 $pointsMarquesExterieur = $donnees['EXTBUTSPOUR'];
							 $pointsPrisDomicile = $donnees['DOMBUTSCONTRE'];
							 $pointsPrisExterieur = $donnees['EXTBUTSCONTRE'];
							
							$matchDomicile = $donnees['DOMJOUES'];
							$victoireDomicile  = $donnees['DOMG'];
							$defaiteDomicile  = $donnees['DOMP'];
							$nulDomicile  = $donnees['DOMN'];
							
							$matchExterieur = $donnees['EXTJOUES'];
							$victoireExterieur  = $donnees['EXTG'];
							$defaiteExterieur  = $donnees['EXTP'];
							$nulExterieur = $donnees['EXTN'];
							}	
}
?>	