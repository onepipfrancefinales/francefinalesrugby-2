<?php 
if (isset($_GET['table']))$table = $_GET['table']; else $table ="";

echo "<br/>";
?>



<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<hr />
<p align="left"> 
  <?php echo "Les modifications porteront sur la table : ".''.$table; ?>
</p>

<form name="form1" method="POST" action="accueil.php?table=<?php echo $table; ?>">
  <p>&nbsp;</p>
  <p align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">Choix 
    d'un Comit&eacute; :</font> </b></font> 
    <select name="comite"  size="1">
      <option selected>Par comit&eacute;</option>
      <option value="phpf1"><b>F&eacute;d&eacute;rale 1</b></option>
      <option value="phpfed2"><b>F&eacute;d&eacute;rale 2</b></option>
      <option value="phpfed3NE"><b>F&eacute;d&eacute;rale 3NE</b></option>
      <option value="phpfed3GS"><b>F&eacute;d&eacute;rale 3GS</b></option>
      <option value="phpfem"><b>Comp&eacute;titions f&eacute;minines</b></option>
      <option value="phpau"><b>Auvergne Rhone Alpes</b></option>
      <option value="phpbg"><b>Bourgogne Franche Comt&eacute;</b></option>
      <option value="phpbr"><b>Bretagne</b></option>
      <option value="phpce"><b>Centre Val de Loire</b></option>
      <option value="phpal"><b>Grand Est</b></option>
      <option value="phpfl"><b>Hauts de France</b></option>
      <option value="phpidf"><b>Ile de France</b></option>
      <option value="phpn"><b>Normandie</b></option>
      <option value="phpca"><b>Nouvelle Aquitaine</b></option>
      <option value="phpab"><b>Occitanie </b></option>
      <option value="phppl"><b>Pays de la Loire</b></option>
      <option value="phppr"><b>Provence Cotes d'Azur</b></option>
    </select>
  </p>
  <p align="center"> 
    <input type="submit" name="Submit" value="valider">
  </p>
  </form>
<p align="center"><a name="1"></a></p>
<hr />
</body>
</html>
