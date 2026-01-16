<?php $annee=$_GET['annee'];?>
<html>
<head>
<title>Barrages Territoriaux <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">

 <?php	 
 
 
 	include("hautindex.php");
 	include("bandeau_barrages.php");
	include("barragesTerr.php");
	echo "<hr />";
	$division=170;
	include ("bas.php");

    ?>
	
	
</body>
</html>