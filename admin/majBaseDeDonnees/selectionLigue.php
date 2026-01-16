<?php
$annee =  $_GET['annee'];


?>
<br/>
<h1 align="center">Mise à jour des tables bdSaison : Année <?php echo $annee;?></h1>
<br/>

<form action = "nouvelleColonne.php?saison=&nomColonne=" method ="POST">
<fieldset>
    <legend>Génération d'une nouvelle colonne dans la table bdsaisons :</legend>

<label for="name">saison :</label>

<input type="text" id="saison" name="saison" required
       minlength="4" maxlength="8" size="5">

    <div>
     <input type="radio" id="terr_" name="nomColonne" value="terr_"
              checked>
      <label for="terr_">terr_</label>
    </div>

    

    <div>
      <input type="radio" id="france_" name="nomColonne" value="france_">
      <label for="france_">france_</label>
    </div>
<br/>
<div>
 <input type="submit" value="Créer la colonne" name="selection">

</div>
</fieldset>


</form>

<hr/>
<h3> Equipes Une</h3>
<form action="participantschampionsRegionaux.php?annee=<?php echo $annee;?>" method="POST">
  <fieldset>
  <legend>Choisir les ligues à mettre à jour (Equipe I):</legend>
  <table>
  <tr>
    <td>
  <div>
    <input type="checkbox"  name=tabLigue[] value="ARA">
    <label for="ARA">ARA</label>
  </div>
 </td>
  <td>
  <div>
    <input type="checkbox"  name=tabLigue[] value="BFC">
    <label for="BFC">BFC</label>
  </div>
</td>
<td>
    <div>
    <input type="checkbox"  name=tabLigue[] value="BRE">
    <label for="BRE">BRE</label>
  </div>
</td>
<td>
 <div>
    <input type="checkbox"  name=tabLigue[] value="CVL">
    <label for="CVL">CVL</label>
  </div>
</td>
<td>
<div>
    <input type="checkbox"  name=tabLigue[] value="GES">
    <label for="GES">GES</label>
  </div>
</td>
</tr>
<tr>
    <td>
 <div>
    <input type="checkbox"  name=tabLigue[] value="HDF">
    <label for="HDF">HDF</label>
  </div>
 <div>
</td>

    <td>

    <input type="checkbox"  name=tabLigue[] value="IDF">
    <label for="IDF">IDF</label>
  </div>
</td>
<td>
   <div>
    <input type="checkbox"  name=tabLigue[] value="NOR">
    <label for="NOR">NOR</label>
  </div>
  
</td>
  <td>
  <div>
    <input type="checkbox"  name=tabLigue[] value="NAQ">
    <label for="NAQ">NAQ</label>
  </div>
</td> 
  <td>
  <div>
    <input type="checkbox"  name=tabLigue[] value="OCC">
    <label for="OCC">OCC</label>
  </div>
</td>
<tr>
<td>
   <div>
    <input type="checkbox"  name=tabLigue[] value="PDL">
    <label for="PDL">PDL</label>
  </div>
</td>
<td> 
  <div>
    <input type="checkbox"  name=tabLigue[] value="PCA">
    <label for="PCA">PCA</label>
  </div>
  
</td>
</tr>
  <tr>
    <td>
  <div>
        <input type="submit" value="Envoyer" name="selection">
        
  </div>
</td>
</tr>
</table>
</fieldset>
</form>


<hr/>
<h3> Equipes II</h3>
<form action="participantschampionsRegionauxEquipe2.php?annee=<?php echo $annee;?>" method="POST">
  <fieldset>
  <legend>Choisir les ligues à mettre à jour (Equipe II):</legend>
  <table>
  <tr>
    <td>
  <div>
    <input type="checkbox"  name=tabLigue[] value="ARA">
    <label for="ARA">ARA</label>
  </div>
 </td>
  <td>
  <div>
    <input type="checkbox"  name=tabLigue[] value="BFC">
    <label for="BFC">BFC</label>
  </div>
</td>
<td>
    <div>
    <input type="checkbox"  name=tabLigue[] value="BRE">
    <label for="BRE">BRE</label>
  </div>
</td>
<td>
 <div>
    <input type="checkbox"  name=tabLigue[] value="CVL">
    <label for="CVL">CVL</label>
  </div>
</td>
<td>
<div>
    <input type="checkbox"  name=tabLigue[] value="GES">
    <label for="GES">GES</label>
  </div>
</td>
</tr>
<tr>
    <td>
 <div>
    <input type="checkbox"  name=tabLigue[] value="HDF">
    <label for="HDF">HDF</label>
  </div>
 <div>
</td>

    <td>

    <input type="checkbox"  name=tabLigue[] value="IDF">
    <label for="IDF">IDF</label>
  </div>
</td>
<td>
   <div>
    <input type="checkbox"  name=tabLigue[] value="NOR">
    <label for="NOR">NOR</label>
  </div>
  
</td>
  <td>
  <div>
    <input type="checkbox"  name=tabLigue[] value="NAQ">
    <label for="NAQ">NAQ</label>
  </div>
</td> 
  <td>
  <div>
    <input type="checkbox"  name=tabLigue[] value="OCC">
    <label for="OCC">OCC</label>
  </div>
</td>
<tr>
<td>
   <div>
    <input type="checkbox"  name=tabLigue[] value="PDL">
    <label for="PDL">PDL</label>
  </div>
</td>
<td> 
  <div>
    <input type="checkbox"  name=tabLigue[] value="PCA">
    <label for="PCA">PCA</label>
  </div>
  
</td>
</tr>
  <tr>
    <td>
  <div>
        <input type="submit" value="Envoyer" name="selection">
        
  </div>
</td>
</tr>
</table>
</fieldset>
</form>






