<?php $table = $_POST['table']; 

echo $table;
?>


<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">



<?php echo "Les modifications porteront sur la table : ".''.$table; ?>


  
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<form name="form1" method="POST" action="accueil.php#1">
  <p>&nbsp;</p>
  <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">Choix 
    d'un Comit&eacute; :</font> </b></font> 
    <select name="comite"  size="1">
      	<option selected>Par comit&eacute;</option>
		<option value="phpf1"><b>Fédérale 1</b></option>
      	<option value="phpfed2"><b>Fédérale 2</b></option>
	  	<option value="phpfed3NE"><b>Fédérale 3NE</b></option>
		<option value="phpfed3GS"><b>Fédérale 3GS</b></option>
	    <option value="phpfem"><b>Compétitions féminines</b></option>
       	<option value="phpau"><b>Auvergne Rhone Alpes</b></option>
      	<option value="phpbg"><b>Bourgogne Franche Comté</b></option>
	  	<option value="phpbe"><b>Bretagne</b></option>
	    <option value="phpce"><b>Centre Val de Loire</b></option>
	  	<option value="phpal"><b>Grand Est</b></option> 
	  	<option value="phpfl"><b>Hauts de France</b></option>
     	<option value="phpidf"><b>Ile de France</b></option>
	   	<option value="phpn"><b>Normandie</b></option>
      	<option value="phpca"><b>Nouvelle Aquitaine</b></option>
      	<option value="phpab"><b>Occitanie </b></option>
      	<option value="phppl"><b>Pays de la Loire</b></option> 
		<option value="phpcbl"><b>test (CBL)</b></option>
		<option value="phppr"><b>Provence Cotes d'Azur</b></option>
    </select>
  </p>
  <p>
    <input type="submit" name="Submit" value="valider">
  </p>
  </form>
<p align="center"><a name="1"></a></p>




</body>
</html>
