<?php $annee=$_GET['variable_1'];?>
<html>
<head>
<title>Championnat de France Nationale B <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">
</body>
</html>
 <?php
    // On inclut le haut de la page
if ($annee>=2015)
	{
    include("hautindex2015.php");
    } 
else
	 include("hautindex.php");
	?>
	 <?php
    // On inclut le haut de la page
 include("bandeau_barrages.php");
    ?>
	<?php
	if ($annee>=2016)
	
	{
	include("barragesHPH1.php");
	include("barrages234.php");
	}else
	include("barrages_terrclub.php");
	
   
    
   
    ?>