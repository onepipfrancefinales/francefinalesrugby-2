 <?php $annee=$_GET['annee'];?>
 
 <?php $division=$_GET['division'];?>
 <html>
<head>
<title>Championnat de France 2me Série <?php echo $annee;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../2.css">
</head>

<body bgcolor="#EAECEB" text="#000000">




 
 
 
 
 
 
 
 <?php
  require ("fonctionsChampFrance2019.php");  
  	nomDivision($division);
	trenteDeuxieme2019 ($division, $annee);







	 include("hautindex.php");
	
	
	require 'bandeauNavigation.php';
	
	if (substr($type,0,3)==932 or substr($type,0,3) ==964)
		{
		if (substr($type,0,3) == 964)
			require '3216meAR.php';
		else
			require '32me.php';
		}
//seizième
	elseif(substr($type,3,2)== 16 or substr($type,3,2)== 32)
		{
		if (substr($type,3,2)== 32)
			require '1608meAR.php';
		else
			require '16me.php';
		}
	elseif(substr($type,5,2)== 8 or substr($type,5,2)== 16)
		{
		require '8me.php';
		}
	elseif(substr($type,7,2)== 4 or substr($type,7,2)== 8)
		{
		require 'quarts.php';
		}
	elseif(substr($type,3,2)== 2 or substr($type,3,2)== 4)
		{
		require 'demi.php';
		}
	
	
	require 'bas.php';
	
	?>
	
</body>
</html>