<script >

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//--> //0new2
</script>

<?php
if ($mode == "smart")
  $adresse = "/smart/smartPage.php?mode=smart&page=chansons&chanson=51j";
else
  $adresse = "/dossiers/chansons/page_chansons.php?page=chansons";

?>
<a name="0"></a>
<p class="center size7 styleArial bold colorRed">
  <i>Chansons paillardes</i>
</p>
<br><br>
<p class="center styleArial size5">
  Voici un petit florilège de chansons pour agrémenter<br>
  vos troisièmes mi-temps.
</p>
<br>
<br>

<p>
  <select class="inputG" name="select" onChange="MM_jumpMenu('parent',this,0)" size="20">
    <option selected>------------</option>
    <option value=<?php echo $adresse; ?>>51 je t'aime</option>
    <option value=<?php echo $adresse . "&chanson=bal"; ?>>Bali Balo</option>
    <option value=<?php echo $adresse . "&chanson=cdl"; ?>>Chevaliers de la table ronde</option>
    <option value=<?php echo $adresse . "&chanson=fan"; ?>>Fanchon</option>
    <option value=<?php echo $adresse . "&chanson=ieu"; ?>>Il est un coin de France</option>
    <option value=<?php echo $adresse . "&chanson=ldd"; ?>>La digue du cul</option>
    <option value=<?php echo $adresse . "&chanson=lar"; ?>>Larirette</option>
    <option value=<?php echo $adresse . "&chanson=lsa"; ?>>La salope</option>
    <option value=<?php echo $adresse . "&chanson=lco"; ?>>----------</option>
    <option value=<?php echo $adresse . "&chanson=lco"; ?>>Les copains d'abord</option>
    <option value=<?php echo $adresse . "&chanson=lch"; ?>>Le chasseur</option>
    <option value=<?php echo $adresse . "&chanson=fdm"; ?>>Les fêtes de Mauléon</option>
    <option value=<?php echo $adresse . "&chanson=iws"; ?>>I will survive</option>
    <option value=<?php echo $adresse . "&chanson=lld"; ?>>Les lacs du Connemara</option>
  </select>
</p>