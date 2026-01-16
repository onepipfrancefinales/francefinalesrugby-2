<?php 
if ($division == 140)
{
$equipe1 = "Fédérale 1";
$equipe2 = "Espoir";
}
elseif ($division == 150)
{
$equipe1 = "Fédérale 2";
$equipe2 = "Fédérale B";
}
elseif ($division == 160)
{
$equipe1 = "Fédérale 3";
$equipe2 = "Excellence B";
}
?>
<table width="650" border="3" cellspacing="0" border color="#000000" align="center" cellpadding="0">
  <tr border color="#009966"> 
    <td height="23" valign="middle" bgcolor="#006699" align="center" rowspan="2" bordercolor="#006699"> 
      <h4><a
 href="/phases_finales2019/affichagePhasesFinales/pagePhaseFinale.php?division=<?php echo $division; ?>&annee=<?php echo $saison;?>"
 target="_top"><font color="#FFFFFF">Phase finale du<br>
        championnat de France</font></a></h4>
    </td>
    <td class="bleuClair"> <a href="../palmares/palmNational/pagePalmares.php?division=<?php echo $division; ?>">Palmarès 
      <?php echo $equipe1;?>
      </a> </td>
  </tr>
  <tr bordercolor="#009966"> 
    <td class="bleuClair"> <a href="../palmares/palmNational/pagePalmares.php?division=<?php echo $division+100; ?>">Palmarès <?php echo $equipe2; ?></a> </td>
  </tr>
</table>

