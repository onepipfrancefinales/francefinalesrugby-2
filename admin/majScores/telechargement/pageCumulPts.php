<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p><font color="#FF0000" size="4" face="Arial, Helvetica, sans-serif"><b>Cumul 
  des points </b></font> 
 
 <?php global $dateDuJour;
 $dateDuJour = date('Y-m-d');
 
 ?>
  <?php 

require 'fonctionCalculMatch.php';

$page = "traitement";

require 'cumulPtsPerso.php'; 

require 'cumulPtsFFR.php';

echo "</br>";

/*
echo "Fédérale B";echo "</br>";
echo "Excellence B 3-1";echo "</br>";
echo "Excellence B 3-2";echo "</br>";
echo "Auvergne Rhone Alpes";echo "</br>";
echo "Bourgogne Franche Comté";echo "</br>";
echo "Bretagne";echo "</br>";
echo "Centre Val de Loire";echo "</br>";
echo "Grand Est";echo "</br>";
echo "Hauts de France";echo "</br>";
echo "Ile de France";echo "</br>";
echo "Normandie";echo "</br>";
echo "Nouvelle Aquitaine";echo "</br>";
echo "Occitanie";echo "</br>";
echo "Pays de la Loire";echo "</br>";
echo "Provence Alpes Côte d'Azur";echo "</br>";

*/

require '../bas.php'; 


?>
</p>
<table width="800" border="1">
  <tr> 
    <td width="26" height="26">&nbsp;</td>
    <td width="50" height="26">&nbsp;</td>
    <td width="17" height="26">ffr</td>
    <td width="21" height="26">site</td>
    <td width="15" height="26">&nbsp;</td>
    <td width="24" height="26">&nbsp;</td>
    <td width="55" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="15" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="9" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="16" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="29" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="68" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="74" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="37" height="26" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td colspan="5"> 
      <h3 align="center">F&eacute;d&eacute;rale 1 
        <?php $comite ="f1";?>
      </h3>
    </td>
    <td width="24" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="55" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="29" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="68" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="74" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="37" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr> 
    <td width="26">1</td>
    <td width="50">Poule 1</td>
    <td width="17"> 
      <div align="center"> 
        <?php echo $fedffr1;?>
      </div>
    </td>
    <td width="21"> 
      <?php echo $persofed141;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr1-$persofed141;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
				?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center"><a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 141; matchsNonSaisis($comite, $division) ;?>
        </a> </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="68" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="74" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="37" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="37" bgcolor="#FFFFFF" >&nbsp;</td>
  </tr>
  <tr> 
    <td width="26">2</td>
    <td width="50">Poule 2</td>
    <td width="17"> 
      <?php echo $fedffr2;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofed142;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr2-$persofed142;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
			?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center"> 
        <?php $division = 142; matchsNonSaisis($comite, $division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="68" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="74" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="37" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="37" bgcolor="#FFFFFF" >&nbsp;</td>
  </tr>
  <tr> 
    <td width="26">3</td>
    <td width="50" height="22">Poule 3</td>
    <td width="17" height="22"> 
      <?php echo $fedffr3;?>
      <div align="center"></div>
    </td>
    <td width="21" height="22"> 
      <?php echo $persofed143;
      
   		$aa = $fedffr3-$persofed143;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
      <div align="center"></div>
    <td width="15" bgcolor="#00ff33" height="22"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" height="22" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" height="22" > 
      <div align="center"> 
        <?php $division = 143; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" height="22" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
    <td width="29" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
    <td width="68" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
    <td width="74" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
    <td width="37" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
    <td width="37" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
  <tr> 
    <td width="26">4</td>
    <td width="50" height="26">Poule 4</td>
    <td width="17" height="26"> 
      <?php echo $fedffr4;?>
      <div align="center"></div>
    </td>
    <td width="21" height="26"> 
      <?php echo $persofed144;
       
   		$aa = $fedffr4-$persofed144;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
      <div align="center"></div>
    <td width="15" bgcolor="#00ff33" height="26"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" height="26" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" height="26" > 
      <div align="center"> 
        <?php $division = 144; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" height="26" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
    <td width="29" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
    <td width="68" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
    <td width="74" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
    <td width="37" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
    <td width="37" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td colspan="5"> 
      <h3 align="center">F&eacute;d&eacute;rale 2 
        <?php $comite ="fed2";?>
      </h3>
    </td>
    <td width="24" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="55" bgcolor="#FFFFFF"> 
      <div align="center"></div>
    </td>
    <td width="14" bgcolor="#FFFFFF"> 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="29" bgcolor="#FFFF00">&nbsp;</td>
    <td width="68" bgcolor="#FFFF00">F&eacute;drale B </td>
    <td width="74" bgcolor="#FFFF00">&nbsp;</td>
    <td width="37" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="26">5</td>
    <td width="50">Poule 1</td>
    <td width="17"> 
      <?php echo $fedffr5;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofed151;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr5-$persofed151;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center"><a href="../../../resultats/TEST/1.php#fed2" target="_blank"> 
        </a><a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 151; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <td width="14" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">27</td>
    <td width="68">Poule 1</td>
    <td width="74"> 
      <?php echo $fedffr27;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofed251;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr27-$persofed251;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">6</td>
    <td width="50">Poule 2</td>
    <td width="17"> 
      <?php echo $fedffr6;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofed152;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr6-$persofed152;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center"> 
        <?php $division = 152; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">28</td>
    <td width="68">Poule 2</td>
    <td width="74"> 
      <?php echo $fedffr28;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofed252;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr5-$persofed151;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">7</td>
    <td width="50">Poule 3</td>
    <td width="17"> 
      <?php echo $fedffr7;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofed153;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr7-$persofed153;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center"> 
        <?php $division = 153; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">29</td>
    <td width="68">Poule 3</td>
    <td width="74"> 
      <?php echo $fedffr29;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofed253;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr29-$persofed253;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">8</td>
    <td width="50">Poule 4</td>
    <td width="17"> 
      <?php echo $fedffr8;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofed154;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr8-$persofed154;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center"> 
        <?php $division = 154; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">30</td>
    <td width="68">Poule 4</td>
    <td width="74"> 
      <?php echo $fedffr30;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofed254;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr30-$persofed254;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26" height="42">9</td>
    <td width="50" height="42">Poule 5</td>
    <td width="17" height="42"> 
      <?php echo $fedffr9;?>
      <div align="center"></div>
    </td>
    <td width="21" height="42"> 
      <?php echo $persofed155;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr9-$persofed155;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33" height="42"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" height="42" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" height="42" > 
      <div align="center"> 
        <?php $division = 155; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" height="42" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" height="42" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" height="42" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" height="42" >&nbsp;</td>
    <td width="29" height="42">31</td>
    <td width="68" height="42">Poule 5</td>
    <td width="74" height="42"> 
      <?php echo $fedffr31;?>
      <div align="center"></div>
    </td>
    <td width="37" height="42"> 
      <?php echo $persofed255;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr31-$persofed255;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33" height="42"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" height="42" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">10</td>
    <td width="50">Poule 6</td>
    <td width="17"> 
      <?php echo $fedffr10;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofed156;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr10-$persofed156;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center"> 
        <?php $division = 156; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">32</td>
    <td width="68">Poule 6</td>
    <td width="74"> 
      <?php echo $fedffr32;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofed256;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr32-$persofed256;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">11</td>
    <td width="50">Poule 7</td>
    <td width="17"> 
      <?php echo $fedffr11;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofed157;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr11-$persofed157;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center"> 
        <?php $division = 157; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">33</td>
    <td width="68">Poule 7</td>
    <td width="74"> 
      <?php echo $fedffr33;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofed257;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr33-$persofed257;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">12</td>
    <td width="50">Poule 8</td>
    <td width="17"> 
      <?php echo $fedffr12;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofed158;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr12-$persofed158;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <p align="center">&nbsp;</p>
      <p align="center"> 
        <?php $division = 158; matchsNonSaisis($comite,$division) ;?>
      </p>
    </td>
    <td width="14" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">34</td>
    <td width="68">Poule 8</td>
    <td width="74"> 
      <?php echo $fedffr34;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofed258;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr34-$persofed258;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td colspan="5"> 
      <h3 align="center">F&eacute;d&eacute;rale 3 
        <?php $comite ="fed3NE";?>
      </h3>
    </td>
    <td width="24" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="55" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="29" bgcolor="#FFFF00">&nbsp;</td>
    <td width="68" bgcolor="#FFFF00">Excellence B </td>
    <td width="74" bgcolor="#FFFF00">&nbsp;</td>
    <td width="37" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> </tr>
  <tr> 
    <td width="26">13</td>
    <td width="50">Poule 1</td>
    <td width="17"> 
      <?php echo $fedffr13;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedNE161;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr13-$persofedNE161;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center"><a href="../../../resultats/TEST/1.php#fed3NE" target="_blank"> 
        <?php $division = 161; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">35</td>
    <td width="68">Poule 1</td>
    <td width="74"> 
      <?php echo $fedffr35;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedNE261;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr35-$persofedNE261;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="26">14</td>
    <td width="50">Poule 2</td>
    <td width="17"> 
      <?php echo $fedffr14;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedNE162;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr14-$persofedNE162;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php $division = 162; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">36</td>
    <td width="68">Poule 2</td>
    <td width="74"> 
      <?php echo $fedffr36;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedNE262;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr36-$persofedNE262;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="26">15</td>
    <td width="50">Poule 3</td>
    <td width="17"> 
      <?php echo $fedffr15;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedNE163;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr15-$persofedNE163;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php $division = 163; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">37</td>
    <td width="68">Poule 3</td>
    <td width="74"> 
      <?php echo $fedffr37;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedNE263;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr37-$persofedNE263;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="26" height="40">16</td>
    <td width="50" height="40">Poule 4</td>
    <td width="17" height="40"> 
      <?php echo $fedffr16;?>
      <div align="center"></div>
    </td>
    <td width="21" height="40"> 
      <?php echo $persofedNE164;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr16-$persofedNE164;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33" height="40"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" height="40" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" height="40" > 
      <div align="center">
        <?php $division = 164; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" height="40" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" height="40" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" height="40" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" height="40" >&nbsp;</td>
    <td width="29" height="40">38</td>
    <td width="68" height="40">Poule 4</td>
    <td width="74" height="40"> 
      <?php echo $fedffr38;?>
      <div align="center"></div>
    </td>
    <td width="37" height="40"> 
      <?php echo $persofedNE264;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr38-$persofedNE264;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33" height="40"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" height="40" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="26">17</td>
    <td width="50">Poule 5</td>
    <td width="17"> 
      <?php echo $fedffr17;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedNE165;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr17-$persofedNE165;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php $division = 165; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">39</td>
    <td width="68">Poule 5</td>
    <td width="74"> 
      <?php echo $fedffr39;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedNE265;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr39-$persofedNE265;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
		?>
  </tr>
  <tr> 
    <td width="26">18</td>
    <td width="50">Poule 6</td>
    <td width="17"> 
      <?php echo $fedffr18;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedNE166;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr18-$persofedNE166;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php $division = 166; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">40</td>
    <td width="68">Poule 6</td>
    <td width="74"> 
      <?php echo $fedffr40;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedNE266;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr40-$persofedNE266;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="26">19</td>
    <td width="50">Poule 7</td>
    <td width="17"> 
      <?php echo $fedffr19;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedNE167;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr19-$persofedNE167;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php $division = 167; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">41</td>
    <td width="68">Poule 7</td>
    <td width="74"> 
      <?php echo $fedffr41;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedNE267;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr41-$persofedNE267;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">20 
      <?php $comite ="fed3GS";?>
    </td>
    <td width="50">Poule 8</td>
    <td width="17"> 
      <?php echo $fedffr20;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedGS161;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr20-$persofedGS161;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center"><a href="../../../resultats/TEST/1.php#fed3GS" target="_blank"> 
        <?php $division = 161; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29">42</td>
    <td width="68">Poule 8</td>
    <td width="74"> 
      <?php echo $fedffr42;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedGS261;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr42-$persofedGS261;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="37" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="110" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">21</td>
    <td width="50">Poule 9</td>
    <td width="17"> 
      <?php echo $fedffr21;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedGS162;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr21-$persofedGS162;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php $division = 162; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="68">43</td>
    <td width="74">Poule 9</td>
    <td width="37"> 
      <?php echo $fedffr43;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedGS262;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr43-$persofedGS262;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="110" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="71" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">22</td>
    <td width="50">Poule 10</td>
    <td width="17"> 
      <?php echo $fedffr22;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedGS163;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr22-$persofedGS163;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php $division = 163; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="68" height="26"> 
      <p>44</p>
    </td>
    <td width="74" height="26">Poule 10</td>
    <td width="37" height="26"> 
      <?php echo $fedffr44;?>
      <div align="center"></div>
    </td>
    <td width="37" height="26"> 
      <?php echo $persofedGS263;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr44-$persofedGS263;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="110" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="71" bgcolor="#ff0000" height="26" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">23</td>
    <td width="50">Poule 11</td>
    <td width="17"> 
      <?php echo $fedffr23;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedGS164;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr23-$persofedGS164;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php $division = 164; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="68">45</td>
    <td width="74">Poule 11</td>
    <td width="37"> 
      <?php echo $fedffr45;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedGS264;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr45-$persofedGS264;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="110" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="71" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">24</td>
    <td width="50">Poule 12</td>
    <td width="17"> 
      <?php echo $fedffr24;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedGS165;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr24-$persofedGS165;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php $division = 165; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="68">46</td>
    <td width="74">Poule 12</td>
    <td width="37"> 
      <?php echo $fedffr46;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedGS265;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr46-$persofedGS265;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="110" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="71" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">25</td>
    <td width="50">Poule 13</td>
    <td width="17"> 
      <?php echo $fedffr25;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedGS166;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr25-$persofedGS166;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php $division = 166; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="68">47</td>
    <td width="74">Poule 13</td>
    <td width="37"> 
      <?php echo $fedffr47;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedGS266;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr47-$persofedGS266;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="110" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="71" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="26">26</td>
    <td width="50">Poule 14</td>
    <td width="17"> 
      <?php echo $fedffr26;?>
      <div align="center"></div>
    </td>
    <td width="21"> 
      <?php echo $persofedGS167;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr26-$persofedGS167;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="15" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="24" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="55" bgcolor="#FFFFFF" > 
      <div align="center">
        <?php $division = 167; matchsNonSaisis($comite,$division) ;?>
      </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="15" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="16" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="29" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="68">48</td>
    <td width="74">Poule 14</td>
    <td width="37"> 
      <?php echo $fedffr48;?>
      <div align="center"></div>
    </td>
    <td width="37"> 
      <?php echo $persofedGS267;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr48-$persofedGS267;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="110" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="71" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
</table>
<p>&nbsp;</p>
<table width="800" border="1">
  <tr> 
    <td height="55"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="6">Ligue 
      Occitanie</font></b></td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
  
  </tr>
  <tr> 
    <td height="55"> 
      <div align="center">20</div>
    </td>
    <td height="55">&nbsp;</td>
    <td width="57" height="26">ffr</td>
    <td width="63" height="26">site</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="79">&nbsp;</td>
    <td width="79">Honneur 
      <?php $comite ="ab";?>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="63"> 
      <div align="center"></div>
    </td>
    <td width="53">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79">&nbsp;</td>
    <td width="79">R&eacute;serve H</td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="18">167</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr167;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr167-$persoab171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"><a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 171; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">190</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr190;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr190-$persoab271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">168</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr168;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab172;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr168-$persoab172;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 172; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">191</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr191;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab272;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr191-$persoab272;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">169</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr169;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab173;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr169-$persoab173;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 173; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">192</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr192;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab273;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr192-$persoab273;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">170</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr170;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab174;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr170-$persoab174;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 174; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">193</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr193;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab274;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr193-$persoab274;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="79" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">promotion</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="63" bgcolor="#FFFF00">&nbsp;</td>
    <td width="53" bgcolor="#FFFF00"></td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFF00" >&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">R&eacute;serve PH</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="18">171</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr171;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr171-$persoab181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 181; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">194</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr194 ;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab9181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr194-$persoab9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">172</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr172;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab182;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr172-$persoab182;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 182; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">195</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr195;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab9182;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr195-$persoab9182;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">173</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr173;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab183;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr173-$persoab183;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 183; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">196</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr196;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab9183;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr196-$persoab9183;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">174</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr174;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab184;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr174-$persoab184;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 184; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">197</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr197;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab9184;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr197-$persoab9184;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="79">&nbsp;</td>
    <td width="79">1er serie</td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="63"> 
      <div align="center"></div>
    </td>
    <td width="53">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79">&nbsp;</td>
    <td width="79">R&eacute;serve S1</td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="18">175</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr175;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr175-$persoab191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"><a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 191; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">198</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr198;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab9191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr198-$persoab9191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="18">176</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr176;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab192;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr176-$persoab192;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 192; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">199</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr36;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab9192;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr36-$persoab9192;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="18">177</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr177;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab193;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr177-$persoab193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 193; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
	  	}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">200</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr37;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab9193;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr37-$persoab9193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="18">178</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr178;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab194;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr178-$persoab194;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 194; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">201</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr201;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab9194;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr201-$persoab9194;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="79" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">2me serie</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="63" bgcolor="#FFFF00">&nbsp;</td>
    <td width="53" bgcolor="#FFFF00"></td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFF00" >&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">3/4me serie</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="18">179</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr179;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab201;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr179-$persoab201;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division =201; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >183</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr183;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr183-$persoab211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
		?>
  </tr>
  <tr> 
    <td width="18">180</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr180;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab202;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr180-$persoab202;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 202; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >184</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr184;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab212;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr184-$persoab212;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="18">181</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr181;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab203;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr181-$persoab203;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 203; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >185</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr185;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab213;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr185-$persoab213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">182</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr182;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab204;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr182-$persoab204;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 204; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
   
    <td width="20" bgcolor="#FFFFFF" >186</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr186;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab214;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr186-$persoab214;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="79">&nbsp;</td>
    <td width="79">&nbsp;</td>
    <td width="57">&nbsp;</td>
    <td width="63">&nbsp;</td>
    <?php 
   		$aa = $fedffr21-$persofedGS162;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
   
    <td width="20" bgcolor="#FFFFFF" >187</td>
    <td width="79">Poule 5</td>
    <td width="57"> 
      <?php echo $fedffr187;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab215;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr187-$persoab215;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="79">&nbsp;</td>
    <td width="79">&nbsp;</td>
    <td width="57">&nbsp;</td>
    <td width="63">&nbsp;</td>
    <?php 
   		$aa = $fedffr22-$persofedGS163;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
   
    <td width="20" bgcolor="#FFFFFF" height="24" >188</td>
    <td width="79" height="26">Poule 6</td>
    <td width="57" height="26"> 
      <?php echo $fedffr188;?>
      <div align="center"></div>
    </td>
    <td width="63" height="26"> 
      <?php echo $persoab216;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr188-$persoab216;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" height="26" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="79">&nbsp;</td>
    <td width="79">&nbsp;</td>
    <td width="57">&nbsp;</td>
    <td width="63">&nbsp;</td>
    <?php 
   		$aa = $fedffr23-$persofedGS164;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
   
    <td width="20" bgcolor="#FFFFFF" >189</td>
    <td width="79">Poule 7</td>
    <td width="57"> 
      <?php echo $fedffr189;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoab217;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr189-$persoab217;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
</table>
<p>&nbsp;</p>
<table width="800" border="1">
  <tr> 
    <td height="55"><b><font size="6" face="Verdana, Arial, Helvetica, sans-serif">Ligue 
      Nouvelle Aquitaine</font></b></td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    
    
  </tr>
  <tr> 
    <td height="55"> 
      <div align="center">19</div>
    </td>
    <td height="55">&nbsp;</td>
    <td width="57" height="26">ffr</td>
    <td width="63" height="26">site</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    <td height="55">&nbsp;</td>
    
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="79">&nbsp;</td>
    <td width="79">Honneur 
      <?php $comite ="ca";?>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="63"> 
      <div align="center"></div>
    </td>
    <td width="53">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79">&nbsp;</td>
    <td width="79">R&eacute;serve H</td>
    <td width="57"> 
      <div align="center"></div>
    </td>
   
  </tr>
  <tr> 
    <td width="18">130</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr130;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr130-$persoca171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"><a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 171; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">151</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr151;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr151-$persoca271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">131</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr131;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca172;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr131-$persoca172;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 172; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">152</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr152;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca272;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr152-$persoca272;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">132</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr132;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca173;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr132-$persoca173;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 173; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">153</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr153;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca273;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr153-$persoca273;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">133</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr133;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca174;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr133-$persoca174;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 174; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">154</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr154;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca274;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr154-$persoca274;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="79" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">promotion</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="63" bgcolor="#FFFF00">&nbsp;</td>
    <td width="53" bgcolor="#FFFF00"></td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">R&eacute;serve PH</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    
  </tr>
  <tr> 
    <td width="18">134</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr134;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr134-$persoca181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 181; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">155</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr155;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca9181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr155-$persoca9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">135</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr135;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca182;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr135-$persoca182;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 182; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">156</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr156;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca9182;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr156-$persoca9182;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">136</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr136;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca183;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr136-$persoca183;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 183; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">157</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr157;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca9183;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr157-$persoca9183;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">137</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr137;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca184;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr137-$persoca184;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 184; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">158</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr158;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca9184;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr158-$persoca9184;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="79">&nbsp;</td>
    <td width="79">1er serie</td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="63"> 
      <div align="center"></div>
    </td>
    <td width="53">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="53" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79">&nbsp;</td>
    <td width="79">R&eacute;serve S1</td>
    <td width="57"> 
      <div align="center"></div>
    </td>
   
  </tr>
  <tr> 
    <td width="18">138</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr138;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr138-$persoca191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"><a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 191; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">159</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr159;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca9191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr159-$persoca9191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="18">139</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr139;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca192;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr139-$persoca192;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 192; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">160</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr160;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca9192;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr160-$persoca9192;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="18">140</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr140;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca193;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr140-$persoca193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 193; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
	  	}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">161</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr161;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca9193;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr161-$persoca9193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="18">141</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr141;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca194;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr141-$persoca194;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 194; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">162</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr162;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca9184;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr162-$persoca9184;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="79" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">2me serie</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="63" bgcolor="#FFFF00">&nbsp;</td>
    <td width="53" bgcolor="#FFFF00"></td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFF00" >&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">&nbsp;</td>
    <td width="79" bgcolor="#FFFF00">3/4me serie</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    
  </tr>
  <tr> 
    <td width="18">142</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr142;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca201;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr142-$persoca201;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division =201; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >146</td>
    <td width="79">Poule 1</td>
    <td width="57"> 
      <?php echo $fedffr146;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr146-$persoca211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
		?>
  </tr>
  <tr> 
    <td width="18">143</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr143;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca202;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr143-$persoca202;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 202; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >147</td>
    <td width="79">Poule 2</td>
    <td width="57"> 
      <?php echo $fedffr147;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca212;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr147-$persoca212;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="18">144</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr144;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca203;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr144-$persoca203;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 203; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >148</td>
    <td width="79">Poule 3</td>
    <td width="57"> 
      <?php echo $fedffr148;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca213;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr148-$persoca213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="18">145</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr145;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca204;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr145-$persoca204;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="38" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 204; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >149</td>
    <td width="79">Poule 4</td>
    <td width="57"> 
      <?php echo $fedffr149;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca214;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr149-$persoca214;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="79">&nbsp;</td>
    <td width="79">&nbsp;</td>
    <td width="57">&nbsp;</td>
    <td width="63">&nbsp;</td>
    <?php 
   		$aa = $fedffr21-$persofedGS162;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
		}
	  	?>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >150</td>
    <td width="79">Poule 5</td>
    <td width="57"> 
      <?php echo $fedffr150;?>
      <div align="center"></div>
    </td>
    <td width="63"> 
      <?php echo $persoca215;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr150-$persoca215;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="53" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="94" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
</table>
<p>&nbsp;</p>
<table width="800" border="1">
  <tr> 
    <td height="55" width="294"><b><font color="#000000" size="6" face="Verdana, Arial, Helvetica, sans-serif">Ligue 
      Auvergne Rh&ocirc;ne Alpes</font></b></td>
    <td height="55" width="62">&nbsp;</td>
    <td height="55" width="26">&nbsp;</td>
    <td height="55" width="30">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="18">&nbsp;</td>
    <td height="55" width="24">&nbsp;</td>
    <td height="55" width="25">&nbsp;</td>
    <td height="55" width="3">&nbsp;</td>
    <td height="55" width="8">&nbsp;</td>
    <td height="55" width="17">&nbsp;</td>
    <td height="55" width="66">&nbsp;</td>
    <td height="55" width="26">&nbsp;</td>
   
  
  </tr>
  <tr> 
    <td height="55" width="294"> 
      <div align="center">10</div>
    </td>
    <td height="55" width="62">&nbsp;</td>
    <td width="26" height="26">ffr</td>
    <td width="30" height="26">site</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="18">&nbsp;</td>
    <td height="55" width="24">&nbsp;</td>
    <td height="55" width="25">&nbsp;</td>
    <td height="55" width="3">&nbsp;</td>
    <td height="55" width="8">&nbsp;</td>
    <td height="55" width="17">&nbsp;</td>
    <td height="55" width="66">&nbsp;</td>
    <td height="55" width="26">&nbsp;</td>
   
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="294">&nbsp;</td>
    <td width="62">Honneur 
      <?php $comite ="au";?>
    </td>
    <td width="26"> 
      <div align="center"></div>
    </td>
    <td width="30"> 
      <div align="center"></div>
    </td>
    <td width="14">&nbsp;</td>
    <td width="18" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="24" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="25" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="8" bgcolor="#FFFF00">&nbsp;</td>
    <td width="17">&nbsp;</td>
    <td width="66">R&eacute;serve H</td>
    <td width="26"> 
      <div align="center"></div>
    </td>
   
  </tr>
  <tr> 
    <td width="294">49</td>
    <td width="62">Poule 1</td>
    <td width="26"> 
      <?php echo $fedffr49;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr49-$persoau171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"><a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 171; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">67</td>
    <td width="66">Poule 1</td>
    <td width="26"> 
      <?php echo $fedffr67;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr67-$persoau271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="294">50</td>
    <td width="62">Poule 2</td>
    <td width="26"> 
      <?php echo $fedffr50;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau172;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr50-$persoau172;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 172; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">68</td>
    <td width="66">Poule 2</td>
    <td width="26"> 
      <?php echo $fedffr68;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau272;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr68-$persoau272;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="294">51</td>
    <td width="62">Poule 3</td>
    <td width="26"> 
      <?php echo $fedffr51;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau173;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr51-$persoau173;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 173; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">69</td>
    <td width="66">Poule 3</td>
    <td width="26"> 
      <?php echo $fedffr69;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau273;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr69-$persoau273;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="294">52</td>
    <td width="62">Poule 4</td>
    <td width="26"> 
      <?php echo $fedffr52;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau174;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr52-$persoau174;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 174; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">70</td>
    <td width="66">Poule 4</td>
    <td width="26"> 
      <?php echo $fedffr70;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau274;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr70-$persoau274;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="294" bgcolor="#FFFF00">&nbsp;</td>
    <td width="62" bgcolor="#FFFF00">promotion</td>
    <td width="26" bgcolor="#FFFF00">&nbsp;</td>
    <td width="30" bgcolor="#FFFF00">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00"></td>
    <td width="18" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"></div>
    </td>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17" bgcolor="#FFFF00">&nbsp;</td>
    <td width="66" bgcolor="#FFFF00">R&eacute;serve PH</td>
    <td width="26" bgcolor="#FFFF00">&nbsp;</td>
    
  </tr>
  <tr> 
    <td width="294">53</td>
    <td width="62">Poule 1</td>
    <td width="26"> 
      <?php echo $fedffr53;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr53-$persoau181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 181; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">71</td>
    <td width="66">Poule 1</td>
    <td width="26"> 
      <?php echo $fedffr71;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau9181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr71-$persoau9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="294">54</td>
    <td width="62">Poule 2</td>
    <td width="26"> 
      <?php echo $fedffr54;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau182;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr54-$persoau182;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 182; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">72</td>
    <td width="66">Poule 2</td>
    <td width="26"> 
      <?php echo $fedffr72;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau9182;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr72-$persoau9182;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="294">55</td>
    <td width="62">Poule 3</td>
    <td width="26"> 
      <?php echo $fedffr55;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau183;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr55-$persoau183;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 183; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">73</td>
    <td width="66">Poule 3</td>
    <td width="26"> 
      <?php echo $fedffr73;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau9183;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr73-$persoau9183;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="294">56</td>
    <td width="62">Poule 4</td>
    <td width="26"> 
      <?php echo $fedffr56;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau184;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr56-$persoau184;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 184; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">74</td>
    <td width="66">Poule 4</td>
    <td width="26"> 
      <?php echo $fedffr74;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau9184;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr74-$persoau9184;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="294">&nbsp;</td>
    <td width="62">1er serie</td>
    <td width="26"> 
      <div align="center"></div>
    </td>
    <td width="30"> 
      <div align="center"></div>
    </td>
    <td width="14">&nbsp;</td>
    <td width="18" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="24" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="25" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="8" bgcolor="#FFFF00">&nbsp;</td>
    <td width="17">&nbsp;</td>
    <td width="66">3ME/4ME</td>
    <td width="26"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="294">57</td>
    <td width="62">Poule 1</td>
    <td width="26"> 
      <?php echo $fedffr57;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr57-$persoau191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"><a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 191; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">62</td>
    <td width="66">Poule 1</td>
    <td width="26"> 
      <?php echo $fedffr62;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr62-$persoau211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="294">58</td>
    <td width="62">Poule 2</td>
    <td width="26"> 
      <?php echo $fedffr58;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau192;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr58-$persoau192;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 192; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">63</td>
    <td width="66">Poule 2</td>
    <td width="26"> 
      <?php echo $fedffr63;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau212;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr63-$persoau212;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="294">59</td>
    <td width="62">Poule 3</td>
    <td width="26"> 
      <?php echo $fedffr59;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau193;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr59-$persoau193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 193; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
	  	}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">64</td>
    <td width="66">Poule 3</td>
    <td width="26"> 
      <?php echo $fedffr63;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau213;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr63-$persoau213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="294">60</td>
    <td width="62">Poule 4</td>
    <td width="26"> 
      <?php echo $fedffr60;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau194;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr60-$persoau194;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"> <a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 194; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <?php
		}
	  	?>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="17">65</td>
    <td width="66">Poule 4</td>
    <td width="26"> 
      <?php echo $fedffr65;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau214;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr65-$persoau214;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="294">61</td>
    <td width="62">Poule 5</td>
    <td width="26"> 
      <?php echo $fedffr61;?>
      <div align="center"></div>
    </td>
    <td width="30"> 
      <?php echo $persoau195;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr61-$persoau195;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="14" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="18" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="24" bgcolor="#FFFFFF" > 
      <div align="center"><a href="../../../resultats/TEST/1.php#<?php echo $comite; ?>" target="_blank"> 
        <?php $division = 194; matchsNonSaisis($comite, $division) ;?>
        </a></div>
    </td>
    <td width="25" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="3" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="8" bgcolor="#FFFFFF" >66</td>
   
    <td width="66">Poule 5</td>
    <td width="26"> 
      <?php echo $fedffr66;?>
      <div align="center"></div>
    </td>
    <td width="28"> 
      <?php echo $persoau215;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr66-$persoau215;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="13" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="46" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
		?>
  </tr>
</table>
<p>&nbsp;</p>
<table width="800" border="1">
  <tr> 
    <td colspan="16" height="55"><b><font color="#000000" size="6" face="Verdana, Arial, Helvetica, sans-serif">Ligue 
      Ile de France</font></b></td>
  </tr>
  <tr> 
    <td height="55" width="35"> 
      <div align="center">17</div>
    </td>
    <td height="55" width="69">&nbsp;</td>
    <td width="51" height="26">ffr</td>
    <td width="57" height="26">site</td>
    <td height="55" width="47">&nbsp;</td>
    <td height="55" width="27">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="42">&nbsp;</td>
    <td height="55" width="73">&nbsp;</td>
    <td height="55" width="51">&nbsp;</td>
    <td height="55" width="57">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">Honneur</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">R&eacute;serve H</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">109</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr109;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr109-$persoidf171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">118</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr118;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr118-$persoidf271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="35">110</td>
    <td width="69">Poule 2</td>
    <td width="51"> 
      <?php echo $fedffr110;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf172;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr110-$persoidf172;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">119</td>
    <td width="73">Poule 2</td>
    <td width="51"> 
      <?php echo $fedffr119;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf272;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr119-$persoidf272;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">promotion</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="47" bgcolor="#FFFF00"></td>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFF00">&nbsp;</td>
    <td width="73" bgcolor="#FFFF00">R&eacute;serve PH</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="35">111</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr111;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr111-$persoidf181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">120</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr120;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoau9181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr120-$persoau9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="35">112</td>
    <td width="69">Poule 2</td>
    <td width="51"> 
      <?php echo $fedffr112;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf182;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr112-$persoidf182;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">121</td>
    <td width="73">Poule 2</td>
    <td width="51"> 
      <?php echo $fedffr121;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf9182;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr121-$persoidf9182;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">1er serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">3ME/4ME</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">113</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr113;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr113-$persoidf191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">117</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr117;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr117-$persoidf211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35">114</td>
    <td width="69">Poule 2</td>
    <td width="51"> 
      <?php echo $fedffr114;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf192;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr114-$persoidf192;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr63-$persoau212;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">2me serie</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <?php 
   		$aa = $fedffr59-$persoau193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#FFFF00"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
	  	}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr63-$persoau213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35">115</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr115;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf201;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr115-$persoidf201;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr65-$persoau214;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35">116</td>
    <td width="69">Poule 2</td>
    <td width="51"> 
      <?php echo $fedffr116;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoidf202;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr116-$persoidf202;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr66-$persoau215;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
		?>
  </tr>
</table>
<p>&nbsp;</p>
<table width="800" border="1">
  <tr> 
    <td colspan="16" height="55"><b><font color="#000000" size="6" face="Verdana, Arial, Helvetica, sans-serif">Ligue 
      Bourgogne Franche Comt&eacute;</font></b></td>
  </tr>
  <tr> 
    <td height="55" width="35">
      <div align="center">11</div>
    </td>
    <td height="55" width="69">&nbsp;</td>
    <td width="51" height="26">ffr</td>
    <td width="57" height="26">site</td>
    <td height="55" width="47">&nbsp;</td>
    <td height="55" width="27">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="42">&nbsp;</td>
    <td height="55" width="73">&nbsp;</td>
    <td height="55" width="51">&nbsp;</td>
    <td height="55" width="57">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">Honneur</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">R&eacute;serve H</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">75</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr75;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php  echo $persobg171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr75-$persobg171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">80</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr80;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persobg271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr80-$persobg271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">promotion</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="47" bgcolor="#FFFF00"></td>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFF00">&nbsp;</td>
    <td width="73" bgcolor="#FFFF00">R&eacute;serve PH</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="35">76</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr76;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persobg181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr76-$persobg181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">81</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr81;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persobg9181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr81-$persobg9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">1er serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">2me serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">77</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr77;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persobg191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr77-$persobg191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">78</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr78;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persobg201;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr78-$persobg201;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">3/4me serie</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <?php 
   		$aa = $fedffr59-$persoau193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#FFFF00"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
	  	}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr63-$persoau213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35">79</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr79;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persobg211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr79-$persobg211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr65-$persoau214;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
</table>
<p>&nbsp;</p>
<table width="800" border="1">
  <tr> 
    <td colspan="16" height="55"><b><font color="#000000" size="6" face="Verdana, Arial, Helvetica, sans-serif">Ligue 
      Bretagne</font></b></td>
  </tr>
  <tr> 
    <td height="56" width="35"> 
      <div align="center">12</div>
    </td>
    <td height="56" width="69">&nbsp;</td>
    <td width="51" height="56">ffr</td>
    <td width="57" height="56">site</td>
    <td height="56" width="47">&nbsp;</td>
    <td height="56" width="27">&nbsp;</td>
    <td height="56" width="14">&nbsp;</td>
    <td height="56" width="14">&nbsp;</td>
    <td height="56" width="14">&nbsp;</td>
    <td height="56" width="14">&nbsp;</td>
    <td height="56" width="42">&nbsp;</td>
    <td height="56" width="73">&nbsp;</td>
    <td height="56" width="51">&nbsp;</td>
    <td height="56" width="57">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">Honneur</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">R&eacute;serve H</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">82</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr82;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php  echo $persobr171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr82-$persobr171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">87</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr87;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persobr271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr87-$persobr271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">promotion</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="47" bgcolor="#FFFF00"></td>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFF00">&nbsp;</td>
    <td width="73" bgcolor="#FFFF00">&nbsp;</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="35">83</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr83;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persobr181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr83-$persobr181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">&nbsp;</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr71-$persoau9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">1er serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">2me serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">84</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr84;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persobr191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr84-$persobr191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">&nbsp;</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr62-$persoau211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">3/4me serie</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <?php 
   		$aa = $fedffr59-$persoau193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#FFFF00"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
	  	}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr63-$persoau213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35">86</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr86;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persobr211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr86-$persobr211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr65-$persoau214;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
</table>
<table width="800" border="1">
  <tr> 
    <td colspan="16" height="55"><b><font color="#000000" size="6" face="Verdana, Arial, Helvetica, sans-serif">Ligue 
      Centre Val de Loire</font></b></td>
  </tr>
  <tr> 
    <td height="55" width="35"> 
      <div align="center">13</div>
    </td>
    <td height="55" width="69">&nbsp;</td>
    <td width="51" height="26">ffr</td>
    <td width="57" height="26">site</td>
    <td height="55" width="47">&nbsp;</td>
    <td height="55" width="27">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="48">&nbsp;</td>
    <td height="55" width="67">&nbsp;</td>
    <td height="55" width="51">&nbsp;</td>
    <td height="55" width="57">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">Honneur</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="48">&nbsp;</td>
    <td width="67">R&eacute;serve H</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">88</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr88;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php  echo $persoce171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr88-$persoce171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48">93</td>
    <td width="67">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr93;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoce271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr93-$persoce271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00" height="41">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00" height="41">promotion</td>
    <td width="51" bgcolor="#FFFF00" height="41">1er serie</td>
    <td width="57" bgcolor="#FFFF00" height="41">&nbsp;</td>
    <td width="47" bgcolor="#FFFF00" height="41"></td>
    <td width="27" bgcolor="#FFFFFF" height="41" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" height="41" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" height="41" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" height="41" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" height="41" >&nbsp;</td>
    <td width="48" bgcolor="#FFFF00" height="41">&nbsp;</td>
    <td width="67" bgcolor="#FFFF00" height="41">&nbsp;</td>
    <td width="51" bgcolor="#FFFF00" height="41">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00" height="41">&nbsp;</td>
  </tr>
  <tr> 
    <td width="35">89</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr89;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoce191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr89-$persoce191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48">&nbsp;</td>
    <td width="67">&nbsp;</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr71-$persoau9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">2me serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="48">&nbsp;</td>
    <td width="67">&nbsp;</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">90</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr90;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoce211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr90-$persoce211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48">&nbsp;</td>
    <td width="67">&nbsp;</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr62-$persoau211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">4me serie</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <?php 
   		$aa = $fedffr59-$persoau193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#FFFF00"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
	  	}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="67" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr63-$persoau213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35">91</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr91;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoce221;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr91-$persoce221;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="67" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr65-$persoau214;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
</table>
<table width="800" border="1">
  <tr> 
    <td colspan="16" height="55"><b><font color="#000000" size="6" face="Verdana, Arial, Helvetica, sans-serif">Ligue 
      Grand Est</font></b></td>
  </tr>
  <tr> 
    <td height="55" width="35"> 
      <div align="center">15</div>
    </td>
    <td height="55" width="69">&nbsp;</td>
    <td width="51" height="26">ffr</td>
    <td width="57" height="26">site</td>
    <td height="55" width="47">&nbsp;</td>
    <td height="55" width="27">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="42">&nbsp;</td>
    <td height="55" width="73">&nbsp;</td>
    <td height="55" width="51">&nbsp;</td>
    <td height="55" width="57">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">Honneur</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">R&eacute;serve H</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">75</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr232;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php  echo $persoau171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr232-$persoau171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">79</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr67;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoau271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr67-$persoau271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">promotion</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="47" bgcolor="#FFFF00"></td>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFF00">&nbsp;</td>
    <td width="73" bgcolor="#FFFF00">R&eacute;serve PH</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="35">76</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr53;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoau181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr53-$persoau181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">80</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr71;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoau9181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr71-$persoau9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">1er serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">2me serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">77</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr57;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoau191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr57-$persoau191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">62</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr62;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoau211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr62-$persoau211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">3/4me serie</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <?php 
   		$aa = $fedffr59-$persoau193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#FFFF00"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
	  	}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr63-$persoau213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35">78</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr60;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persoau194;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr60-$persoau194;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr65-$persoau214;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
</table>
<p>&nbsp;</p>
<table width="800" border="1">
  <tr> 
    <td colspan="16" height="55"><b><font color="#000000" size="6" face="Verdana, Arial, Helvetica, sans-serif">Ligue 
      Hauts de France</font></b></td>
  </tr>
  <tr> 
    <td height="55" width="35"> 
      <div align="center">16</div>
    </td>
    <td height="55" width="69">&nbsp;</td>
    <td width="51" height="26">ffr</td>
    <td width="57" height="26">site</td>
    <td height="55" width="47">&nbsp;</td>
    <td height="55" width="27">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="42">&nbsp;</td>
    <td height="55" width="73">&nbsp;</td>
    <td height="55" width="51">&nbsp;</td>
    <td height="55" width="57">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">Honneur</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">R&eacute;serve H</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">102</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr102;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php  echo $persofl171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr102-$persofl171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">106</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr106;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persofl271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr106-$persofl271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">promotion</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="47" bgcolor="#FFFF00"></td>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFF00">&nbsp;</td>
    <td width="73" bgcolor="#FFFF00">R&eacute;serve PH</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="35">103</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr103;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persofl181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr103-$persofl181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">107</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr107;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persofl9181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr107-$persofl9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">1er serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">&nbsp;</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">104</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr104;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persofl191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr104-$persofl191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">&nbsp;</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr62-$persoau211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">3/4me serie</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <?php 
   		$aa = $fedffr59-$persoau193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#FFFF00"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
	  	}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr63-$persoau213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35">105</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr105;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persofl211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr105-$persofl211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr65-$persoau214;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
</table>
<p>&nbsp;</p>
<table width="800" border="1">
  <tr> 
    <td colspan="16" height="55"><b><font color="#000000" size="6" face="Verdana, Arial, Helvetica, sans-serif">Ligue 
      Normandie</font></b></td>
  </tr>
  <tr> 
    <td height="55" width="35"> 
      <div align="center">18</div>
    </td>
    <td height="55" width="69">&nbsp;</td>
    <td width="51" height="26">ffr</td>
    <td width="57" height="26">site</td>
    <td height="55" width="47">&nbsp;</td>
    <td height="55" width="27">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="42">&nbsp;</td>
    <td height="55" width="73">&nbsp;</td>
    <td height="55" width="51">&nbsp;</td>
    <td height="55" width="57">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">Honneur</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">R&eacute;serve H</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">122</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr122;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php  echo $person171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr122-$person171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">128</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr128;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $person271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr128-$person271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">promotion</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="47" bgcolor="#FFFF00"></td>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFF00">&nbsp;</td>
    <td width="73" bgcolor="#FFFF00">R&eacute;serve PH</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="35">123</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr123;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $person181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr123-$person181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">129</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr129;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $person9181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr129-$person9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">1er serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">&nbsp;</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">124</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr124;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $person211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr124-$person211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">&nbsp;</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr62-$persoau211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">3/4me serie</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <?php 
   		$aa = $fedffr59-$persoau193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#FFFF00"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
	  	}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr63-$persoau213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35">125</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr125;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $person212;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr125-$person212;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr65-$persoau214;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
</table>
<p>&nbsp;</p>
<table width="800" border="1">
  <tr> 
    <td colspan="16" height="55"><b><font color="#000000" size="6" face="Verdana, Arial, Helvetica, sans-serif">Ligue 
      Pays de la Loire</font></b></td>
  </tr>
  <tr> 
    <td height="55" width="35"> 
      <div align="center">21</div>
    </td>
    <td height="55" width="69">&nbsp;</td>
    <td width="51" height="26">ffr</td>
    <td width="57" height="26">site</td>
    <td height="55" width="47">&nbsp;</td>
    <td height="55" width="27">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="42">&nbsp;</td>
    <td height="55" width="73">&nbsp;</td>
    <td height="55" width="51">&nbsp;</td>
    <td height="55" width="57">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">Honneur</td>
    <td width="51"> 
      <div align="center">promotion</div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">R&eacute;serve H</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">206</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr206;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php  echo $persopl171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr206-$persopl171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">211</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr211;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persopl271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr211-$persopl271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">1er serie</td>
    <td width="51" bgcolor="#FFFF00">2me</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="47" bgcolor="#FFFF00"></td>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFF00">&nbsp;</td>
    <td width="73" bgcolor="#FFFF00">&nbsp;</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="35">207</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr207;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persopl191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr207-$persopl191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">&nbsp;</td>
    <td width="51">&nbsp;</td>
    <td width="57">&nbsp;</td>
    <?php 
   		$aa = $fedffr71-$persoau9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">3/4me serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">&nbsp;</td>
    <td width="51">&nbsp;</td>
    <td width="57">&nbsp;</td>
  </tr>
  <tr> 
    <td width="35">208</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr208;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persopl211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr208-$persopl211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">&nbsp;</td>
    <td width="51">&nbsp;</td>
    <td width="57">&nbsp;</td>
    <?php 
   		$aa = $fedffr62-$persoau211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">3/4me serie</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <?php 
   		$aa = $fedffr59-$persoau193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#FFFF00"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
	  	}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr63-$persoau213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35">209</td>
    <td width="69">Poule 2</td>
    <td width="51"> 
      <?php echo $fedffr209;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persopl221;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr209-$persopl221;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="73" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="57" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr65-$persoau214;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
</table>
<p>&nbsp;</p>
<table width="800" border="1">
  <tr> 
    <td colspan="16" height="55"><b><font color="#000000" size="6" face="Verdana, Arial, Helvetica, sans-serif">Ligue 
      Provence Alpes Cote d'Azur</font></b></td>
  </tr>
  <tr> 
    <td height="55" width="35"> 
      <div align="center">22</div>
    </td>
    <td height="55" width="69">&nbsp;</td>
    <td width="51" height="26">ffr</td>
    <td width="57" height="26">site</td>
    <td height="55" width="47">&nbsp;</td>
    <td height="55" width="27">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="14">&nbsp;</td>
    <td height="55" width="42">&nbsp;</td>
    <td height="55" width="73">&nbsp;</td>
    <td height="55" width="51">&nbsp;</td>
    <td height="55" width="57">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">Honneur</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">R&eacute;serve H</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">212</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr212;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php  echo $persopr171;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr212-$persopr171;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">218</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr218;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persopr271;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr218-$persopr271;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">promotion</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <td width="47" bgcolor="#FFFF00"></td>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFF00">&nbsp;</td>
    <td width="73" bgcolor="#FFFF00">R&eacute;serve PH</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="35">213</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr213;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persopr181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr213-$persopr181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">219</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr219;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persopr9181;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr219-$persopr9181;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="35">&nbsp;</td>
    <td width="69">1er serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
    <td width="47">&nbsp;</td>
    <td width="27" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="14" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="73">2me serie</td>
    <td width="51"> 
      <div align="center"></div>
    </td>
    <td width="57"> 
      <div align="center"></div>
    </td>
  </tr>
  <tr> 
    <td width="35">214</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr214;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persopr191;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr214-$persopr191;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42">215</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr215;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persopr201;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr215-$persopr201;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35" bgcolor="#FFFF00">&nbsp;</td>
    <td width="69" bgcolor="#FFFF00">3me serie</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <?php 
   		$aa = $fedffr59-$persoau193;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#FFFF00"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
	  	}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFF00" >&nbsp;</td>
    <td width="42" bgcolor="#FFFF00">&nbsp;</td>
    <td width="73" bgcolor="#FFFF00">4me serie</td>
    <td width="51" bgcolor="#FFFF00">&nbsp;</td>
    <td width="57" bgcolor="#FFFF00">&nbsp;</td>
    <?php 
   		$aa = $fedffr63-$persoau213;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <td width="47" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	 else 
	 	{
			?>
    <td width="88" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php 
	 	}
			?>
  </tr>
  <tr> 
    <td width="35">216</td>
    <td width="69">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr216;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persopr211;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr216-$persopr211;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="47" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="27" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
		}
	  	?>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="14" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF">217</td>
    <td width="73">Poule 1</td>
    <td width="51"> 
      <?php echo $fedffr217;?>
      <div align="center"></div>
    </td>
    <td width="57"> 
      <?php echo $persopr221;?>
      <div align="center"></div>
    </td>
    <td width="47" bgcolor="#00ff33"> </td>
    <td width="88" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php 
   		$aa = $fedffr217-$persopr221;
	  	//echo $aa;
    if ($aa == 0) 
   		{
			?>
    <?php 
	 	}
	 else 
	 	{
			?>
    <?php 
	 	}
			?>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
