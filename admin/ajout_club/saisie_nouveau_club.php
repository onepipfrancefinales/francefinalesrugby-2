<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>




<body bgcolor="#FFFFFF" text="#000000">
<p><b><font size="4" face="Arial, Helvetica, sans-serif">Ajout d'un nouveau club 
  dans les diff&eacute;rentes tables</font></b></p>
<form name="envoi id" method="post" action="http://francefinalesrugby.franceserv.com/admin/ajout_club/ajout_club.php">
  <p>Nom du club : 
    <input type="text" name="club"   value="<?php echo($result->club);?>"size="50">
  </p>
  <p> Id : 
    <input type="text" name="id"   value="<?php echo($result->id);?>"size="10">
  <p>Nom complet : 
    <input type="text" name="nom_complet"value="   <?php echo($result->nom_complet);?>"size="50">
  <p>Type : 
    <select name="type"  value="<?php echo($result->type);?> "size="1">
      <option>--Type--</option>
      <option>masc</option>
      <option>fem</option>
      <option>corpo</option>
    </select>
  <p>Comit&eacute; : 
    <select name="comite"  value="<?php echo($result->comite);?> "size="1">
      <option>--Comite--</option>
      <option>Alsace Lorraine</option>
      <option>Alpes</option>
      <option>Armagnac Bigorre</option>
      <option>Auvergne</option>
      <option>Bearn</option>
      <option>Bourgogne </option>
      <option>Bretagne</option>
      <option>Centre</option>
      <option>Corse</option>
      <option>Cote Basque Landes</option>
      <option>Cote d Argent</option>
      <option>Cote d Azur</option>
      <option>Drome Ardeche</option>
      <option>Flandres</option>
      <option>Franche Comte</option>
      <option>Ile de France</option>
      <option>Languedoc</option>
      <option>Limousin</option>
      <option>Lyonnais</option>
      <option>Pyrenees</option>
      <option>Normandie</option>
      <option>Pays de Loire</option>
      <option>Perigord Agenais</option>
      <option>Poitou Charente</option>
      <option>Provence</option>
      <option>Pays Catalan</option>
    </select>
  <p>Saison : 
    <select name="saison"  value="<?php echo($result->saison);?> "size="1">
      <option>3me 4me Serie</option>
      <option>1re 2me Serie</option>
      <option>Promotion Honneur</option>
      <option>Honneur</option>
      <option>Federale 3</option>
    </select>
  <p> 
    <input type="submit" value="Insertion" name="submit">
  <p>&nbsp;
</form>



</body>
</html>
