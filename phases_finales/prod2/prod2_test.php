<?php $annee=$_GET['variable_1'];?>
<?php require ("../fonctionspf.php");?>
<?php require ("../../connection.php") ; ?>


<link rel="stylesheet" type="text/css" href="../2.css">


<body link="#FFFFFF">
<div id="Layer2" style="position:absolute; width:1600px; height:20px; z-index:4; left: 1px; top: 698px; background-color: #FFCC66; layer-background-color: #FFCC66; border: 1px none #000000"> 
  <p align="center"><a href="http://francefinalesrugby.franceserv.com/divisions/page1serie.php"></a> 
    <?php
    // On inclut le haut de la page
   include("bas.php");
    ?>
  </p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="1490" border="0">
  <tr> 
    <td colspan="12" bgcolor="#FFCC66"> 
      <div align="center"><i><b>Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro 
        D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro 
        D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro D2 Pro 
        D2 Pro D2 </b></i></div>
    </td>
  </tr>
  <tr> 
    <td width="121">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td width="158">&nbsp;</td>
    <td width="167">&nbsp;</td>
    <td width="284">
      <?php $id='120';
			 champ ($bdcomite, $id, $annee)?>
    </td>
    <td colspan="4">&nbsp;</td>
    <td width="35">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4" bgcolor="#000000" height="17"> 
      <div align="center"><font face="Lucida Handwriting" size="4" color="#FFFFFF"><b>SAISON 
        REGULIERE 
        <?php $annee=$_GET['variable_1'];?>
        <?php echo $annee;?>
        </b></font></div>
    </td>
    <td width="167" height="17">&nbsp;</td>
    <td colspan="4" height="17"> 
      <div align="center"><b><font size="4" face="Arial, Helvetica, sans-serif">Champion 
        de france Pro D2</font></b></div>
    </td>
    <td rowspan="5"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="6"> 
        </font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b><font color="#FF0000" size="5"> 
        <?php 
	echo "<img src=\"$logochamp\">";
  ?>
        </font></b></font></b></font></b></font></div>
    </td>
    <td height="17">&nbsp;</td>
    <td width="59" height="17">&nbsp;</td>
  </tr>
  <tr> 
    <td width="121">&nbsp;</td>
    <td width="131">&nbsp;</td>
    <td width="131">&nbsp;</td>
    <td width="158">&nbsp;</td>
    <td width="167">&nbsp;</td>
    <td> 
      <div align="center"></div>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td width="121">&nbsp;</td>
    <td width="131">&nbsp;</td>
    <td width="131">&nbsp;</td>
    <td width="158">&nbsp;</td>
    <td width="167">&nbsp;</td>
    <td rowspan="2" colspan="4" bgcolor="#FFFF00"> 
      <div align="center"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="4"><b><font color="#FF0000" size="6">
        <?php 

		
	echo $clubA1001;
	
  ?>
        </font></b></font></b></div>
    </td>
    <td width="35">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="4" rowspan="18" valign="top"> 
      <div align="center">
        <?php 

{print("<img src=\"http://francefinalesrugby.franceserv.com/phases_finales/prod2/classement/pro_$annee.jpg\" border=\"0\">");}
?>
      </div>
      <div align="center"></div>
    </td>
    <td width="167">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167">&nbsp;</td>
    <td width="284">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="66">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="35">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167">&nbsp;</td>
    <td width="284"> </td>
    <td width="33"> </td>
    <td width="66">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="231">&nbsp; </td>
    <td width="35"> </td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167">&nbsp;</td>
    <td colspan="6" bgcolor="#000000"> 
      <div align="center"><font face="Lucida Handwriting" size="4"><b><font color="#FFFFFF">P</font></b></font><font face="Lucida Handwriting" size="4" color="#FFFFFF"><b>hase 
        finale pour l'accession au Top 14</b></font></div>
    </td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167">&nbsp;</td>
    <td width="284">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="66">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="231">&nbsp;</td>
    <td width="35">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167">&nbsp;</td>
    <td width="284"> 
      <?php $id='120';
			 demiFinaleA ($bdcomite, $id, $annee)?>
      <?php  demiFinaleB ($bdcomite, $id, $annee) ?>
      <?php  demiFinaleC ($bdcomite, $id, $annee) ?>
      <?php  demiFinaleD ($bdcomite, $id, $annee) ?>
    </td>
    <td width="33">&nbsp;</td>
    <td width="66">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="231"> 
      <?php 
if ($scoreA+$scoreB>0)
{	
	
	if ($scoreA>$scoreB)
		{
		$finaliste1=$clubA;
		}
	else
		{
		$finaliste1=$clubD;
		}
}
else
		{
		echo "";	
		}	
	
	
  ?>
      <?php 
  if ($scoreA>$scoreB)
		{
		$logof1=$logoA;
		}
	else
		{
		$logof1=$logoD;
		}
	 ?>
      <?php 
if ($scoreC+$scoreD>0)
{	
	
	if ($scoreC>$scoreD)
		{
		$finaliste2=$clubB;
		}
	else
		{
		$finaliste2=$clubC;
		}
}
else
	{
	echo "";	
	}	
	
	
  ?>
      <?php 
  if ($scoreC>$scoreD)
		{
		$logof2=$logoC;
		}
	else
		{
		$logof2=$logoD;
		}
?>
      <?php
$reponse = mysql_query("SELECT A1001, A1002 FROM bdpf$annee WHERE id=$id");
while ($donnees = mysql_fetch_array($reponse) )
{ 
        $A1001= $donnees['A1001'];
        $A1002= $donnees['A1002'];
}		
		?>
    </td>
    <td width="35">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167">&nbsp;</td>
    <td colspan="2"> 
      <div id="coin5" >Demi finale</div>
    </td>
    <td width="66">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td colspan="2"> 
      <div id="coin5" >Finale</div>
    </td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167">&nbsp;</td>
    <td width="284">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="66">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="231">&nbsp;</td>
    <td width="35">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167" height="2">&nbsp;</td>
    <td width="284" height="2"> 
      <div id="coin4" > 
        <?php echo $clubA ?>
      </div>
    </td>
    <td width="33" height="2"> 
      <div id="coin4" > 
        <?php echo $scoreA ?>
      </div>
    </td>
    <td rowspan="6" width="66"><img src="../../images/accolade.png" width="8" height="120"></td>
    <td width="24" height="2">&nbsp;</td>
    <td width="231" height="2">&nbsp;</td>
    <td width="35" height="2">&nbsp;</td>
    <td width="59" height="2">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167" height="2">&nbsp;</td>
    <td width="284" height="2"> 
      <div id="coin4" > 
        <?php echo $clubD ?>
      </div>
    </td>
    <td width="33" height="2"> 
      <div id="coin4" > 
        <?php echo $scoreB ?>
      </div>
    </td>
    <td width="24" height="2">&nbsp;</td>
    <td width="231" height="2"> 
      <div id="coin4" > 
        <?php 

	echo $finaliste1;
  ?>
      </div>
    </td>
    <td width="35" height="2"> 
      <div id="coin4" > 
        <?php

        echo $A1001;
		
	
		?>
      </div>
    </td>
    <td width="59" height="2">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167" height="10">&nbsp;</td>
    <td width="284" height="10">&nbsp;</td>
    <td width="33" height="10">&nbsp;</td>
    <td width="24" height="10">&nbsp;</td>
    <td width="231" height="10"> 
      <div id="coin4" > 
        <?php 

	echo $finaliste2;
  ?>
      </div>
    </td>
    <td width="35" height="10"> 
      <div id="coin4" > 
        <?php

        echo $A1002;
	
		?>
      </div>
    </td>
    <td width="59" height="10">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167" height="5">&nbsp;</td>
    <td width="284" height="5">&nbsp;</td>
    <td width="33" height="5">&nbsp;</td>
    <td width="24" height="5">&nbsp;</td>
    <td width="231" height="5">&nbsp;</td>
    <td width="35" height="5">&nbsp;</td>
    <td width="59" height="5">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167" height="12">&nbsp;</td>
    <td width="284" height="12"> 
      <div id="coin4" > 
        <?php echo $clubB ?>
      </div>
    </td>
    <td width="33" height="12"> 
      <div id="coin4" > 
        <?php echo $scoreC ?>
      </div>
    </td>
    <td width="24" height="12">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFF00" height="12"> 
      <div align="center"><font color="#000000" face="Geneva, Arial, Helvetica, san-serif" size="2"><b><strong><i>Accession 
        au top 14</i></strong></b></font><font color="#000000" face="Geneva, Arial, Helvetica, san-serif" size="2"><b><strong> 
        </strong></b></font></div>
    </td>
    <td width="59" height="12">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167" height="2">&nbsp;</td>
    <td width="284" height="2"> 
      <div id="coin4" > 
        <?php echo $clubC ?>
      </div>
    </td>
    <td width="33" height="2"> 
      <div id="coin4" > 
        <?php echo $scoreD ?>
      </div>
    </td>
    <td width="24" height="2">&nbsp;</td>
    <td colspan="2" height="2"> 
      <div align="center"></div>
    </td>
    <td width="59" height="2">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167">&nbsp;</td>
    <td width="284">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="66">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td colspan="2" rowspan="2"> 
      <div align="center"><b><font color="#000000" face="Geneva, Arial, Helvetica, san-serif"size="3"><b><font size="5" face="Arial, Helvetica, sans-serif">
        <?php 
if ($A1001+$A1002>0)
{	
	
	if ($A1001> $A1002)
		{
		$champion=$finaliste1;
		}
	else
		{
		$champion=$finaliste2;
		}
}
else
{
echo "";	
}	
		
	echo $champion;
	
  ?>
        </font></b></font></b></div>
    </td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167">&nbsp;</td>
    <td width="284">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="66">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167">&nbsp;</td>
    <td width="284">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="66">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="231">&nbsp;</td>
    <td width="35">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="167">&nbsp;</td>
    <td width="284">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="66">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="231">&nbsp;</td>
    <td width="35">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr> 
    <td width="121">&nbsp;</td>
    <td width="131">&nbsp;</td>
    <td width="131">&nbsp;</td>
    <td width="158">&nbsp;</td>
    <td width="167">&nbsp;</td>
    <td width="284">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="66">&nbsp;</td>
    <td width="24">&nbsp;</td>
    <td width="231">&nbsp;</td>
    <td width="35">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
</table>
