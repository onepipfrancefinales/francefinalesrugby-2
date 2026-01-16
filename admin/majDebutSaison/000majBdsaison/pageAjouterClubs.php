 <?php
  if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee = "2022";
  if (isset ($_GET['division'])) $division = $_GET['division']; else $division = "aucune division s&eacute;lectionn&eacute;e";
  if (isset ($_GET['colonne'])) $colonne = $_GET['colonne']; else $colonne = "aucune colonnne s&eacute;lectionn&eacute;e";
  
  
  
   $bdd->exec("UPDATE $tableMatch
				SET en_cours = Null ");
  
  
  
  
  
  
  
  echo "Colonne sélectionnée  : ".$colonne;
  echo "</br>";
  echo "Division sélectionnée  : " . $division;


?>

<h1 align="center">Mise à jour de la table bdSaison
<br/> 
colonne : <b><?php echo $colonne.$annee.'('.$division.')';?></b>
</h1><br/>
<p>Sélection de la colonne en_cours ne nécessite pas la saisie d'une année.
</p>

<p>Sélection de la colonne Terr_ pour les champs de France des équipes I du Top 14 à la fédérale 3 
  pour les champs régionales des équipes régionales 
</p>
<p>Sélection de la colonne france_ pour les champs de France des équipes Régionales I, II et III
  pour les équipes II de fédérales 
</p>
<hr />
  <form name="form1" method="GET" action="pageAjouterClubs.php?division=<?php echo $division;?>&colonne=<?php echo $colonne;?>&annee=<?php echo $annee;?>">
  

   <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">Saisir une année 
     </font> </b></font>
  <input  type="text" name="annee" maxlength="4" size="8" >
      <br />
	  
   
  <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">S&eacute;lection 
      une colonne</font> </b></font> 
      <select name="colonne"  size="1">
        <option selected>Colonne</option>
        <option value="en_cours"><b>en_cours</b></option>
        <option value="terr_"><b>terr_</b></option>
        <option value="france_"><b>france-</b></option>
      </select>

    <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">S&eacute;lection 
      une division</font> </b></font> 
      <select name="division"  size="1">
        <option selected>Division</option>
        <option value="Top 14"><b>Top 14</b></option>
        <option value="Pro D2"><b>Pro D2</b></option>
        <option value="Nationale 1"><b>Nationale 1</b></option>
        <option value="Nationale 2"><b>Nationale 2</b></option>
        <option value="Aucune sélection"><b>-----------</b></option>
        <option value="Fédérale 1"><b>F&eacute;d&eacute;rale 1</b></option>
        <option value="Fédérale 2"><b>F&eacute;d&eacute;rale 2</b></option>
        <option value="Fédérale 3"><b>F&eacute;d&eacute;rale 3</b></option>
        <option value="Aucune sélection"><b>-----------</b></option>
        <option value="Régionale 1"><b>F&eacute;d&eacute;rale 1</b></option>
        <option value="Régionale 2"><b>F&eacute;d&eacute;rale 2</b></option>
        <option value="Régionale 3"><b>F&eacute;d&eacute;rale 3</b></option>
      </select>
      <br>
      <br>
      <input type="submit" name="Submit" value="valider">
  </form>

<hr/>



<?php require 'boutonAjouterClubs2.php';?>


<a href="/admin/majDebutSaison/majBdsaison/majTableBdsaison.php">Retour accueil Maj Bdsaison</a>
