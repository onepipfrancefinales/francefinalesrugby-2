<h1 align="center">Mise à jour de la table bdSaison</h1>
<div align="center">Insertion de données dans la colonne 'En_cours' <br>
les fichiers sont a récupèrer dans ligues 20xx-20xx/maj des rencontres A RECUPERER</div><br/>
 <?php
 // if (isset ($_GET['annee'])) $annee = $_GET['annee']; else $annee = "Saisir la saison dans l'url (Exemple : &annee=2022)";
 if (isset ($_GET['info'])) $info = $_GET['info']; else $info = "aucune division s&eacute;lectionn&eacute;e";


 //echo "Année : " . $annee."<br/>";
 echo "Division choisie  : ".$info."<br/>";

?>
  <form name="form1" method="GET" action="pageAjouterClubs.php?comite=<?php echo $info;?>">
  <p>&nbsp;</p>
    <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b><font size="3" color="#000000">S&eacute;lection 
      de ligue</font> </b></font> 
      <select name="info"  size="1">
        <option selected>division</option>
        <option value="110"><b>Top 14</b></option>
        <option value="120"><b>Pro D2</b></option>
        <option value="130"><b>Nationale 1</b></option>
        <option value="135"><b>Nationale 2</b></option>
        <option value="Aucune sélection"><b>-----------</b></option>
        <option value="140"><b>Fédérale 1</b></option>
        <option value="150"><b>Fédérale 2</b></option>
        <option value="160"><b>Fédérale 3</b></option>
       <option value="Aucune sélection"><b>-----------</b></option>
        <option value="170"><b>Régionale 1</b></option>
        <option value="180"><b>Régionale 2</b></option>
        <option value="190"><b>Régionale 3</b></option>
        <option value="Aucune sélection"><b>-----------</b></option>
        <option value="280"><b>Elite 1</b></option>
        <option value="285"><b>Elite 2</b></option>
        <option value="290"><b>Fédérale 1</b></option>
        <option value="295"><b>Fédérale 2</b></option>
        <option value="300"><b>Régionale X</b></option>
        <option value="Autres     "><b>-----------</b></option>
        <option value="980"><b>En sommeil</b></option>
        <option value="990"><b>Inactif</b></option> 

      </select>
      <br>
      <br>
      <input type="submit" name="Submit" value="valider">
  </form>

<hr/>

<?php require 'boutonAjouterClubs2.php';

echo "<hr/>";
echo "<br>";
 echo "Mettre le champ en_cours à Null dans la table bdsaisons.";
 echo "<br>";
echo "<br>";

require 'boutonMettreEn_coursNull.php';

 
?>
<br>
<a href="/admin/majDebutSaison/pageAjouterJournee.php">retour Accueil<br></a>
<br>
