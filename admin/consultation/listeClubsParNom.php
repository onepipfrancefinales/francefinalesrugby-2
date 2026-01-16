 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php
if (isset($_GET['value'])) $value = $_GET['value']; else $value ="siglecomite";

?>
<script language="JavaScript">

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>


<p> 
   
  <select name="select2" onChange="MM_jumpMenu('parent',this,0)" size="7">
    <option selected>Trier par</option>
    <option value="/admin/consultation/listeClubsParNom.php?value=id"><b>//Id</b></option>
    <option value="/admin/consultation/listeClubsParNom.php?value=nom_1"><b>//Nom</b></option>
    <option value="/admin/consultation/listeClubsParNom.php?value=siglecomite"></b>Comité</option>
    <option value="/admin/consultation/listeClubsParNom.php?value=ligue"><b>Ligue</b></option>
    <option value="/admin/consultation/listeClubsParNom.php?value=type"><b>M/ F</b></option>
    <option value="/admin/consultation/listeClubsParNom.php?value=idffr"><b>//Id FFR</b></option>
  </select>
</p>
	  
		
 
<?php
echo "<br/>";


echo "classement sur : ".$value;
echo "<br/>";
echo "<br/>";
require ("../../connect/connexion1.php");

if (isset($tabComite)) ; else $tabComite =array('(AP)', '(AL)', '(AB)', '(AU)', '(BE)', '(BG)', '(BR)', '(CE)', '(C)', '(CBL)', '(CA)', '(CAZ)', '(DA)', '(FL)', '(FC)', '(IDF)', '(LD)', '(LM)', '(LY)', '(MPY)', '(N)', '(PL)', '(PA)', '(PCH)', '(PR)', '(PC)');;


if ($value == "siglecomite") {
    $colonne = "siglecomite";
    $tabComite = array('(AP)', '(AL)', '(AB)', '(AU)', '(BE)', '(BG)', '(BR)', '(CE)', '(C)', '(CBL)', '(CA)', '(CAZ)', '(DA)', '(FL)', '(FC)', '(IDF)', '(LD)', '(LM)', '(LY)', '(MPY)', '(N)', '(PL)', '(PA)', '(PCH)', '(PR)', '(PC)');
}
elseif ($value == "ligue"){
    $colonne = "ligue";
    $tabComite = array ('10','11','12','13','14','15','16','17','18','19','20','21','22');

}
elseif ($value == "type"){
    $colonne = "type";
    $tabComite = array ('F','','M');
}





foreach ($tabComite as $valeurComite)
{
$reponse = $bdd->query("SELECT id, nom_1, idffr, ligue, siglecomite, type
						FROM bdclubs 
						WHERE $colonne ='$valeurComite' ORDER BY $value "); 
echo "<br/>";
echo $valeurComite;
echo "<br/>";

while ($row = $reponse->fetch())
		{ 
			$id = $row[0];
			$nom = $row[1];
			$idffr = $row[2];
      $ligue =  $row[3];
      $siglecomite =  $row[4];
			$type = $row[5];
		 


?>
  </font></b> </div>
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="3">
  
  </font></b></font> </div>
<table width="800" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="138"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $id; ?>
        </font></font></div>
    </td>
    <td width="280"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
      <?php echo $nom;  ?>
      </font></font></td>
    <td width="139"> 
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $idffr; ?>
        </font></font></div>
    </td>
     <td width="100">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $ligue; ?>
        </font></font></div>
    </td>
     <td width="100">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $siglecomite; ?>
        </font></font></div>
    </td>
    
    <td width="50">
      <div align="center"><font face="Arial, Helvetica, sans-serif"><font size="3"> 
        <?php echo $type; ?>
        </font></font></div>
    </td>
  </tr>
</table>
<?php
}
echo "<br />";

}


require '../majScores/bas.php';
?>