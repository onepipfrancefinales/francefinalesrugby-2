  
  <H2 class="bold styleArial" >V - Compétitions Séniors II</H2>
 

  <!-- Division 1 1894 - 1896-->

  <table class="styleArial mb-10 marginAuto width95PC">
    <tr>
      <td colspan="2" class="bordure" style ="background-color:#f2f2f2">
        <span class="colorRed bold">Création d'un premier niveau de compétition </span>
        <br> Arrivée de la division : 1re Série équipe seconde
      </td>
    </tr>

    <?php for ($i = 1894; $i <= 1896; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold width35"> <?php echo $i; ?> </td>
        <td class="bgFF0000">1re Série équipe seconde</td>
      </tr>
    <?php }
    ?>
  </table>

<!-- Division 2  1897-1905   -->

  <table class="styleArial mb-10 marginAuto width95PC">
    <tr>
      <td colspan="3" class="bordure" style ="background-color:#f2f2f2">
        <span class="colorRed bold">Création d'un niveau (2 niveaux de compétitions)</span>
        <br> Création de la division : 1ère série équipe 3me
      </td>
    </tr>

    <?php for ($i = 1897; $i <= 1905; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold width35"> <?php echo $i; ?> </td>
        <td class="bgFF0000">1re Série équipe seconde</td>
        <td class="bgFF6666">1er Série équipe 3me</td>
      </tr>
    <?php }
    ?>
  </table>

<!-- Division 2  1906-1931   -->

<table class="styleArial mb-10 marginAuto width95PC">
    <tr>
      <td colspan="4" class="bordure" style ="background-color:#f2f2f2">
        <span class="colorRed bold">Création d'un niveau (3 niveaux de compétitions) </span>
        <br>Création de la division : 1ère série équipe 4me
      </td>
    </tr>

    <?php
    
    $tabPeriode = ["1906", "1907","...","1930","1931"];

    foreach ($tabPeriode as $i)
    
   // for ($i = 1906; $i <= 1931; $i++) 
   { ?>
      <tr>
        <td class="bgCCCCCC bold width35"> <?php echo $i; ?> </td>
        <td class="bgFF0000">1re Série équipe seconde</td>
        <td class="bgFF6666">1er Série équipe 3me</td>
        <td class="bgFF9999">1er Série équipe 4me</td>
      </tr>
    <?php }
    ?>
  </table>



  <!-- Division 2  1932-1975   -->

  <table class="styleArial mb-10 marginAuto width95PC">
    <tr>
      <td colspan="2" class="bordure" style ="background-color:#f2f2f2">
        <span class="colorRed bold"> Changement de nom</span>
        <br>Les divisions de 1ère serie sont fusionnées <br>
        dans une nouvelle compétition nommée<br>
         Réserve de 1re division
      </td>
    </tr>

    <?php 
$tabPeriode = ["1932", "1933","...","1971","1972"];

    foreach ($tabPeriode as $i)
    
   // for ($i = 1932; $i <= 1972; $i++)
     { ?>
      <tr>
        <td class="bgCCCCCC bold width35"> <?php echo $i; ?></td>
        <td class="bgFF0000">Réserve 1re division</td>
      </tr>
    <?php }
    ?>

  </table>

  <!-- Division 3  1973-1975  -->

  <table class="styleArial mb-10 marginAuto width95PC">
    <tr>
      <td colspan="4" class="bgCCCCCC">
        <span class="colorRed bold "> Création de 2 niveaux (3 niveaux de compétitions)</span>
        <br> Création de la nationale B1 et Nationale B2.
      </td>
    </tr>
    <?php for ($i = 1973; $i <= 1975; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold width35"> <?php echo $i; ?></td>
        <td class="bgFF0000 ">Réserve 1re division</td>
        <td class="bgFF9966">Nationale B1  </td>
        <td style="background-color : #ebcfa4">Nationale B2  </td>
      </tr>
    <?php }
    ?>
  </table>

  <!-- Division 3  1976-1982   -->

  <table class="styleArial mb-10 marginAuto width95PC">
    <tr>
      <td colspan="5" class="bordure" style ="background-color:#f2f2f2">
        <span class="colorRed bold "> Création de niveau (4 niveaux de compétitions)</span>
        <br> Création de la compétition Fédérale B (Equipe II de la division Féderale 2).
      </td>
    </tr>
    <?php for ($i = 1976; $i <= 1982; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold width35"> <?php echo $i; ?></td>
        <td class="bgFF0000 size2">Réserve 1re division</td>
        <td class="bgFF9966 size2">Nationale B1  </td>
        <td class=" size2" style="background-color : #ebcfa4">Nationale B2  </td>
        <td class="bgFF9900 size2">Fédérale B  </td>
      </tr>
    <?php }
    ?>
  </table>


 <!-- Division 3 1983-1994   -->

 <table class="styleArial mb-10 marginAuto width95PC">
    <tr>
      <td colspan="6" class="bordure" style ="background-color:#f2f2f2">
        <span class="colorRed bold "> Création de niveau (5 niveaux de compétitions)</span>
        <br> Création de la compétition Excellence B (Equipe II de la division Fédérale 3).
      </td>
    </tr>
    <?php for ($i = 1983; $i <= 1994; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold width35"> <?php echo $i; ?></td>
        <td class="bgFF0000 size2">Réserve 1re division</td>
        <td class="bgFF9966 size2">Nationale B1  </td>
        <td class="size2" style="background-color : #ebcfa4">Nationale B2  </td>
        <td class="bgFF9900 size2">Fédérale B  </td>
        <td class="bge3640c size2">Excellence B  </td>
      </tr>
    <?php }
    ?>
  </table>

<!-- Division 3  1996-2001   -->

<table class="styleArial mb-10 marginAuto width95PC">
    <tr>
      <td colspan="7" class="bordure" style ="background-color:#f2f2f2">
        <span class="colorRed bold "> Création de compétitions (6 niveaux de compétitions)</span>
        <br> Création de la Division Réserve, équipe 2 des clubs évoluant en division Honneur.<br>
        Scission de la Réserve de 1re divsion en Championnats d'Elite 1 et d'Elite 2 .<br>
        <span class="colorRed bold "> Fusion de compétitions </span>
        <br>Les compétitions de Nationale B1 et de Nationale B2 fusionnent
        sous la dénominiation de de Nationale B1.
        
        

      </td>
    </tr>
    <?php for ($i = 1995; $i <= 2001; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold width35"> <?php echo $i; ?></td>
        <td class="bgFF0000 size2">Elite B1</td>
        <td class="bgFF6666 size2">Elite B2  </td>
        <td class="size2" style="background-color : #ebcfa4">Nationale B1  </td>
        <td class="bgFF9900 size2">Fédérale B  </td>
        <td class="bge3640c size2">Excellence B  </td>
        <td class="bgFFFF00 size2">Réserve  </td>
      </tr>
    <?php }
    ?>
  </table>


 <!-- Division 3  2002- 2017   -->

 <table class="styleArial mb-10 marginAuto width95PC">
    <tr>
      <td colspan="6" class="bordure" style ="background-color:#f2f2f2">
        <span class="colorRed bold "> Suppression de compétitions </span>
        <br> Suppression des championnats Elite B1 et Elite B2 ,<br> remplacées par la catégorie Espoirs Elites 
         ( voir compétitions Espoirs ).<br>
         <span class="colorRed bold "> Renommage</span>
        <br> La compétitions Nationale B1 devient la championnat Nationale B.
      </td>
    </tr>
    <?php for ($i = 2002; $i <= 2017; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold width35"> <?php echo $i; ?></td>
        <td class="bgFF0000 width150">-</td>
        <td class="bgFF9966">Nationale B  </td>
        <td class="bgFF9900">Fédérale B  </td>
        <td class="bge3640c">Excellence B  </td>
        <td class="bgFFFF00">Réserve  </td>
      </tr>
    <?php }
    ?>
  </table>
 
  <!-- Division 3  2018- encours   -->

 <table class="styleArial mb-10 marginAuto width95PC">
    <tr>
    <td colspan="6"class="bordure" style ="background-color:#f2f2f2">
        <span class="colorRed bold "> Suppression d'une division (3 niveaux de compétitions)</span>
        <br> Suppression des équipes réserves de Nationale B,<br> remplacées par la catégorie Espoirs Fédéraux
        ( voir compétitions Espoirs ). 
      </td>
    </tr>
    <?php for ($i = 2018; $i <= $annee; $i++) { ?>
      <tr>
        <td class="bgCCCCCC bold width35"> <?php echo $i; ?></td>
        <td class="bgFF0000 width150"> -</td>
        <td class="bgFF9966 width150"> - </td>
        <td class="bgFF9900">Fédérale B  </td>
        <td class="bge3640c">Excellence B  </td>
        <td class="bgFFFF00">Réserve  </td>
      </tr>
    <?php }
    ?>
  </table>

 