<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php

$code_div = $_GET['code_div']; 
$poule=substr($code_div,2,1);

$datecomplete = $_GET['date']; 
  $date= substr($datecomplete,0,10);
  
?>
<body bgcolor="#FFFFFF" text="#000000">
<table width="900" border="1" height="101" bordercolor="#000000" cellspacing="0">
  <tr> 
    <td width="342" rowspan="3"> <div align="center"><img src="../images/entetegauchet.bmp" width="339" height="100" align="top"></div> </td>
    <td width="103" height="32" valign="top"><div align="center"><font face="Arial, Helvetica, sans-serif">Date de la<br> rencontre </font></div></td>
    <td width="137" height="32"><div align="center"><font face="Arial, Helvetica, sans-serif">Club organisanteur</font></div></td>
    <td width="119" height="32" valign="middle"> <div align="center"><font face="Arial, Helvetica, sans-serif">Comp&eacute;tition</font></div></td>
    <td width="52" height="32"><div align="center"><font face="Arial, Helvetica, sans-serif">Poule</font></div></td>
  </tr>
  <tr> 
    <td rowspan="2" height="76" width="103"><div align="center"><b><font face="Arial, Helvetica, sans-serif" size="3"> <?php// echo $date;?></td>
    <td width="137" height="38"><b><font face="Arial, Helvetica, sans-serif" size="4"> </font></b></td>
    <td rowspan="2" height="76" width="119"> <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="4">
        <?php
		  if ($code_div>27000)
		  {
		//  echo "R&eacute;serve";  
		  }
		   	 
		 elseif($code_div>26000)
		  {
		//  echo "Excellence B"; 
		  }
		  elseif($code_div>25000)
		  {
		 // echo "F&eacute;d&eacute;rale B";
		  }
		  elseif ($code_div>24000)
		  {
		//  echo "Nationale B";
		  }
		   elseif($code_div>22000)
		  {
		//  echo "4me S&eacute;rie"; 
		  }
		  elseif($code_div>21000)
		  {
		//  echo "3me S&eacute;rie"; 
		  }
		    elseif($code_div>20000)
		  {
		//  echo "2me S&eacute;rie"; 
		  }
		   elseif($code_div>19000)
		  {
		//  echo "1re S&eacute;rie"; 
		  }
		 
		  elseif($code_div>18000)
		  {
		//  echo "Promotion Honneur"; 
		  }
		 elseif($code_div>17000)
		  {
		//  echo " Honneur"; 
		  }
		  else
		  echo " "; 
		  ?>
        </font></b></div></td>
    <td rowspan="2" height="76" width="52"><div align="center"><b><font face="Arial, Helvetica, sans-serif" size="3"> <?php// echo $poule;?></font><font face="Arial, Helvetica, sans-serif" size="4"> </font></b></div> </td>
  </tr>
  <tr> 
    <td width="137" height="2">T&eacute;l :</td>
  </tr>
</table>
<img src="../images/entetedessous.bmp" width="900" height="62"> 
</body>
</html>
