<?php
 // ********  Sommaire féminines  *******
if ($cmt == "fem")
{
 ?>
<table class="sommaire">
  <tr>
    <td class="tab3" colspan="2"><a href="page_elite1.php#1">Elite 1</a></td>
    <td class="tab3" colspan="2"><a href="page_elite1.php#2">Elite 2 </a></td>
    <td class="tab3" colspan="2"><a href="page_federale.php">Fédérale 1 </a></td>
  </tr>
  <tr>
    <td class="tab3" colspan="6"><a href="../../index.php">Compétitions masculines</a></td>
   
  </tr>
  
</table>
<?php
}
 // ********  Sommaire Pro  *******
elseif ($cmt == "pro")
{
 ?>
<table class="sommaire">
  <tr>
    <td class="tab3"><a href="#1">Top 14 </a></td>
    <td class="tab3"><a href="#2">Pro D2 </a></td>
	  <td class="tab3"><a href="#3">Nationale 1</a></td>
    <td class="tab3"><a href="#3">Nationale 2</a></td>
  </tr>
</table>
<?php
}
 // ********  Sommaire Fédérale 1  *******
elseif ($cmt == "f1")
{
 ?>
<table class="sommaire">
  <tr>
    <td class="tab3" colspan="2"><a href="#1">Poule 1 </a></td>
    <td class="tab3" colspan="2"><a href="#2">Poule 2 </a></td>
    <td class="tab3" colspan="2"><a href="#3">Poule 3 </a></td>
    <td class="tab3" colspan="2"><a href="#4">Poule 4 </a></td>
  </tr>
</table>
<?php
}
 //   ********  Sommaire Fédérale 2  ********
elseif ($cmt =="fed2")
{
 ?>
<table class="sommaire">
  <tr> 
    <td class="tab3"><a href="#1">Poule 1</a></td>
    <td class="tab3"><a href="#2">Poule 2</a></td>
    <td class="tab3"><a href="#3">Poule 3</a></td>
    <td class="tab3"><a href="#4">Poule 4</a></td>
  </tr>
  <tr> 
    <td class="tab3"><a href="#5">Poule 5</a></td>
    <td class="tab3"><a href="#6">Poule 6</a></td>
    <td class="tab3"><a href="#7">Poule 7</a></td>
    <td class="tab3"><a href="#8">Poule 8</a></td>
  </tr>
</table>

<?php
}

 //  ******  Sommaire Fédérale 3  ********
elseif ($cmt =="fed3NE" or $cmt =="fed3GS")
{
 ?>
<table class="sommaireFed3"  >
  <tr> 
    <td class="tab3"><a href="page_fed3.php?code=NE#1" alt="text" title="Poule 1">Poule 1 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=NE#2" alt="text" title="Poule 2">Poule 2 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=NE#3" alt="text" title="Poule 3">Poule 3 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=NE#4" alt="text" title="Poule 4">Poule 4 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=NE#5" alt="text" title="Poule 5">Poule 5 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=NE#6" alt="text" title="Poule 6">Poule 6 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=NE#7" alt="text" title="Poule 7">Poule 7 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=NE#8" alt="text" title="Poule 8">Poule 8 </a></td>
  </tr>
  <tr> 
    <td class="tab3"><a href="page_fed3.php?code=GS#1" alt="text" title="Poule 9">Poule 9 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=GS#2" alt="text" title="Poule 10">Poule 10 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=GS#3" alt="text" title="Poule 11">Poule 11 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=GS#4" alt="text" title="Poule 12">Poule 12 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=GS#5" alt="text" title="Poule 13">Poule 13 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=GS#6" alt="text" title="Poule 14">Poule 14 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=GS#7" alt="text" title="Poule 15">Poule 15 </a></td>
    <td class="tab3"><a href="page_fed3.php?code=GS#8" alt="text" title="Poule 16">Poule 16 </a></td>
  </tr>
  </table>

<?php
}
 // **** Sommaire ligues Nouvelle AQuitaine et Auvergne Rhône Alpes  *****
//elseif ($cmt =="au" OR $cmt =="ca" )
elseif ( $cmt =="ab" or $cmt == "ca")
{
 if ($cmt == "ab")  $cmt2 = "occ";
 elseif ($cmt == "ca")  $cmt2 = "naq";
 ?>
  <table class="sommaire">
    <tr> 
      <td class="tab3"><a href="page_<?php echo $cmt2;?>_reg1.php?lien=17">Régionale 1</a></td>
      <td class="tab3"><a href="page_<?php echo $cmt2;?>_reg1.php?lien=18">Régionale 2</a></td>
      <td class="tab3"><a href="page_<?php echo $cmt2;?>_reg1.php?lien=19">Régionale 3</a></td>
    </tr>
    <tr> 
      <td class="tab3" colspan="3"><a href="../feminine/index_fem.php">Compétitions féminines</a> </td>
    </tr>
  </table>
  <?php
}
elseif ( $cmt =="au" )
{
 if ($cmt == "au" ) $cmt2 = "ara"; 
 
 ?>
  <table class="sommaire">
    <tr> 
      <td class="tab3"><a href="page_<?php echo $cmt2;?>_reg1.php?lien=17">Régionale 1</a></td>
      <td class="tab3"><a href="page_<?php echo $cmt2;?>_reg1.php?lien=18">Régionale 2</a></td>
      <td class="tab3"><a href="page_<?php echo $cmt2;?>_reg1.php?lien=19">Régionale 3</a></td>
    </tr>
    <tr> 
      <td class="tab3" colspan="3"><a href="../feminine/index_fem.php">Compétitions féminines</a> </td>
    </tr>
  </table>
  <?php
}
/*
elseif ($cmt == "ab")
{
 ?>
  <table class="sommaire" align="center" width="519" height="49">
    <tr> 
      <td class="tab3" ><a href="page_occ_H.php#H">Honneur</a></td>
      <td class="tab3" ><a href="page_occ_PH.php#PH">Promotion</a> </td>
      <td class="tab3" ><a href="page_occ_S1.php#S1">1re Série</a></td>
	  <td class="tab3" ><a href="page_occ_S2.php#S2">2me Série</a></td>
    </tr>
    <tr> 
      <td  class="tab3" colspan="2"><a href="page_occ_S3S4.php">3me/ 4me Série </a></td>
      <td  class="tab3" colspan="2"><a href="../feminine/index_fem.php">Compétitions féminines</a> </td>
    </tr>
  </table>
  <?php
}
elseif ($cmt == "au")
{
  ?>
  <table class="sommaire" align="center"width="519" height="49">
    <tr> 
      <td class="tab3"><a href="page_ara_H.php">Honneur</a> </td>
   	  <td class="tab3"><a href="page_ara_PH.php">Promotion</a></td>
      <td class="tab3"><a href="page_ara_S1.php">1re Série</a></td>
      <td class="tab3"><a href="page_ara_S2.php">2me Série</a></td>
    </tr>
    <tr> 
      <td  class="tab3"  ><a href="page_ara_S3.php">3me Série</a></td>
      <td  class="tab3"  ><a href="page_ara_S4.php">4me Série </a></td>
      <td  class="tab3" colspan="2" > <a href="../feminine/index_fem.php">Compétitions féminines</a> </td>
    </tr>
  </table>
  <?php
}
*/
//   *******  Autres sommaires ********
else
{
  ?>
  <table class="sommaire">
    <tr> 
	    <td class="tab3"><a href="#R1">Régionale 1</a> </td>
   	  <td class="tab3"><a href="#R2">Régionale 2</a></td>
      <td class="tab3"><a href="#R3">Régionale 3</a></td>
    </tr>
    <tr> 
     <td class="tab3" colspan="3" > <a href="../feminine/index_fem.php">Compétitions féminines</a> </td>
    </tr>
  </table>
  <?php
}
if ($champLigue > 9 and  $champLigue < 23) {
require '../pronos/lienPronos.php';
}
?>