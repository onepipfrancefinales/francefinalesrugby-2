<script >

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//--> //0new2
</script>
 


<!-- Ecran de connexion -->

<table>
  <tr > 
    <td  > <br>
    <?php 
/*
	if (isset($_SESSION['login']))
	{
		echo "<br>";
		?>
		<fieldset class="fieldsetG"> 
		 <legend class="legendG"> Mon Compte </legend> 
		
		<?php echo "<br>";
		echo $_SESSION['login'];echo "<br>";echo "<br>";?>
		<a href="/personnalisation/admin/logout.php"><font color="#FFFFFF">D&eacute;connection</font></a>
		
	</fieldset >
	<?php
	}
     else
	 {
		require ("personnalisation/saisieIdentifiantDroite.php") ;
	 }
*/	 
?>



<!-- Menu déroulant Championnat de France -->

	<br>
    <br>
    <form action="/palmares/palmNational/pageannee.php" method="POST">
     
	  <fieldset class="fieldsetG"> 
	    <legend class="legendG"> 
	  	  Palmarès par Année
	    </legend> 
      <br>
	  <input class="inputG" type="text" name="saison" maxlength="4" size="8" title="Recherche par année" required="required">
      <br>
	  <input class="inputG" type="submit" value="par annee" name="submit33" >
      </fieldset > 
	   
    </form>
     <br>
      <br>
      

	  <fieldset class="fieldsetG"> 
	    <legend class="legendG"> 
		Palmarès par divisions
		</legend> 
		<br>
        <select class="inputG" name="select4" onChange="MM_jumpMenu('parent',this,0)" size="14"  title="Recherche par divisions">
          <option selected>------------</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=110">TOP 14</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=120">Pro D2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=130">Nationale </option>
          <option value="/palmares/palmNational/pagePalmares.php?division=135">Nationale 2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=140">Fédérale 1</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=150">Fédérale 2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=160">Fédérale 3</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=170">Régionale 1</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=170">Honneur</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=180">Régionale 2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=180">Promotion </option>
          <option value="/palmares/palmNational/pagePalmares.php?division=190">Régionale 3</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=190">1re Série</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=200">2me Série</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=210">3me Série</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=220">4me Série</option>
          <option value="/palmares/palmNational/pageentreprise.php">-------------------</option>
          <option> EQUIPES II </option>
          <option value="/palmares/palmNational/pageentreprise.php">-------------------</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=225">Espoirs Elites</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=232">Espoirs Nationaux</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=245">Espoirs Fédéraux</option>
          <option> -------- </option>
          <option value="/palmares/palmNational/pagePalmares.php?division=230">Réserve 1re div</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=240">Nationale B</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=250">Fédérale B</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=260">Excellence B</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=270">Réserve</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=270">--------------------</option>
          <option>FEMININES</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=280">----------------------</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=280">Elite 1 TOP 10</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=285">Elite 2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=290">Fédérale 1</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=295">Fédérale 2</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=300">Fédérale 3</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=300">-------</option>
          <option>REICHELS</option>
          <option>JUNIORS</option>
          <option value="/palmares/palmNational/pagereichelA.php">----------------------</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=310">Reichel A</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=320">Belascain(Ex Reichel B)</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=325">Crabos</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=330">U18 (Ex Balandrade)</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=340">Phliponeau</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=350">Danet</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=350">----------------</option>
          <option>CADETS</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=360">-------------------</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=360">Alamercery</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=365">Gaudermen</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=370">U16 (Ex Teulière)</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=375">Challenge de France</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=370">------------------</option>
          <option>CHALLENGES</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=380">----------------</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=380">Du Manoir</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=400">Esperance</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=405">Amitie</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=420">Essor</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=440">Espoir</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=390">Coupe de France</option>
          <option value="/palmares/palmNational/pagePalmares.php?division=500">Entreprise</option>
        </select>
        </fieldset > <br>
     
     
      
     <br>
      
      
	  <fieldset class="fieldsetG"> <legend class="legendG"> Palmarès 
        Européens</legend> <br>
        <select class="inputG" name="select" onChange="MM_jumpMenu('parent',this,0)" size="4" title="Coupes d'Europe">
            <option selected>--------------------------------</option>
            <option value="/palmares/palmNational/pagehcup.php">Champions Cup 
            </option>
            <option value="/palmares/palmNational/pageamlincup.php">Challenge 
            Cup</option>
            <option>--------------------------------</option>
          </select>
        </fieldset > 
		
	
     </form>
        <br>
        <br>
         <?php // include("pub/pub10.php");?>
        <br>
        <br>
        ------- <br>
        <br>
         <?php // include("pub/pub6.php"); ?>
        <br>
    </td >
  </tr>
</table>


