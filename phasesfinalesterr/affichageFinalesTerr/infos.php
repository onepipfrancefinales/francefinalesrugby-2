<br> <font color="#000000" size="5">Nous de disposons pas des phases finales ant&egrave;rieure 
&agrave; la saison 2010, en revanche vous pouvez consulter les diff&eacute;rents 
champions du comit&eacute; 
<?php echo $comiteNom;

$sigle = "(".strtoupper($comite).")";
//echo $sigle;

require '../../connect/connexion1.php';


nomComite ($sigle, 0, $bdd);
//echo $idComite;
?>
</font>.<br>
<a href="../../palmares/palmTerritorial/tableauPalmTerr.php?paramIdComite=<?php echo $idComite; ?>"><br>
<font size="5" face="Arial, Helvetica, sans-serif"><b><font color="#FF0000">Palmar&egrave;s 
du comit&eacute;</font></b></font></a><br>
<br>

<br>
<br>
<br>
<hr />

<p>
	<?php require("../../pub/pub1.php"); ?>
</p>

