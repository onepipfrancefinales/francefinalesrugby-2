<!DOCTYPE html PUBLIC>       
<html lang="fr">
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link type="text/css" rel="stylesheet" href="../../ligne1.css">

</head>

<body>
<p class="size5 bold">Insertion d'un nouveau club dans les tables</p>
<p class="size4 styleArial">bdclubs (Identifiants du club)<br>
  infosClub (infos sur le clubs)<br>
  bdsaisons (historique des saisons précédentes)</p>
  <hr />
<form name="form1" method="POST" action="retour.php">
  <p></p>
  <p class="size4 styleArial">Nom Usuel : 
    <input type="text" name="nom">
    </p>
    <p class="size4 styleArial">Nom complet : 
    <input type="text" name="nomComplet">
    </p>
    <p class="size4 styleArial">Saison : 
    <input type="text" name="saison">
    </p>
    <p class="size4 styleArial">Pour saisir l'id consulter 
    la liste des clubs par Id (<a href="../consultation/listeClubsParNom.php" target="_blank">liste 
    par ID</a>)</p>
    <p class="size4 styleArial">Id 2029076: 
    <input type="text" name="id">
    </p>
    <p class="size4 styleArial">IdFFR (1234M): 
    <input type="text" name="idffr">
    </p>
    <p class="size4 styleArial">type d'équipe : 
    <select name="type" size="1" required>
      <option selected>Type d'équipe</option>
      <option value="F">Equipe féminine</option>
      <option value="M">Equipe Masculine</option>
    </select>
    </p>
    <p class="size4 styleArial">Comité : 
    <select name="comite" size="1" required>
      <option selected>Comité</option>
      <option value="(AP)">Alpes</option>
      <option value="(AL)">Alsace Lorraine</option>
      <option value="(AB)">Armagnac Bigorre</option>
      <option value="(AU)">Auvergne</option>
      <option value="(BE)">Béarn</option>
      <option value="(BG)">Bourgogne</option>
      <option value="(BR)">Bretagne</option>
      <option value="(CE)">Centre</option>
      <option value="(C)">Corse</option>
      <option value="(CBL)">Côte Basque Landes</option>
      <option value="(CA)">Côte d'Argent</option>
      <option value="(CAZ)">Côte d'Azur</option>
      <option value="(DA)">Drôme Ardèche</option>
      <option value="(FL)">Flandres</option>
      <option value="(FC)">Franche Comt&eacute;</option>
      <option value="(IDF)">Ile de France</option>
      <option value="(LD)">Languedoc</option>
      <option value="(LM)">Limousin</option>
      <option value="(LY)">Lyonnais</option>
      <option value="(MPY)">Midi Pyr&eacute;n&eacute;es</option>
      <option value="(N)">Normandie</option>
      <option value="(PL)">Pays de Loire</option>
      <option value="(PA)">Périgord Agenais</option>
      <option value="(PCH)">Poitou Charente</option>
      <option value="(PR)">Provence</option>
      <option value="(PC)">Pays Catalan</option>
    </select>
    </p>
    <p class="size4 styleArial">Ligue : 
    <select name="ligue"  size="1" required>
      <option selected>Ligue</option>
      <option value="10">Auvergne Rhone Alpes</option>
      <option value="11">Bourgogne Franche Comte</option>
      <option value="12">Bretagne</option>
      <option value="13">Centre Val de Loire</option>
      <option value="14">Corse</option>
      <option value="15">Grand Est</option>
      <option value="16">Hauts de France</option>
      <option value="17">Ile de France</option>
      <option value="18">Normandie</option>
      <option value="19">Nouvelle Aquitaine</option>
      <option value="20">Occitanie</option>
      <option value="21">Pays de la Loire</option>
      <option value="22">Provence Alpes Cote d'Azur</option>
    </select>
    </p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="Submit" value="Valider">
  </p>
</form>
</body>
</html>
