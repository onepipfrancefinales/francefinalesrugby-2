<?php
$champ=$_GET['champ'];
$bddComite=$_GET['bddComite'];
$phpComite="php".''.$bddComite;
require "../Phpleague/php".$bddComite."/consult/fonctions_matchs.php";
require "../Phpleague/php".$bddComite."/lang/lang_fr.php";
?>
<html>
  <head>
    <title>Calendrier</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link type="text/css" rel="stylesheet" href="calendrier.css"/>
    <link type="text/css" rel="stylesheet" href="../Phpleague/<?php echo "php".$bddComite; ?>/league.css"/>
    <meta name=viewport content="width=device-width, initial-scale=1">
  </head>
  
  <body bgcolor="#FFFFFF" text="#000000" align="center">
	<script type="text/javascript" language="javascript">
		 function twFermer() {
		 window.close();
		 }
    </script>     
    <table class="tab4" width="352" align="center" >
      <tr> 
        <td class="tab3" width="344"> 
            <input type="button" onClick="twFermer()" value="Fermer la fen&ecirc;tre" name="button2">
        </td>
      </tr>
    </table> 
		<?php 
		
		require ("../connect/connexion6.php");
		//$comite = $bddChamp;
		calendrier($champ,true, $bdd);?>  
    <br>
    <table class="tab4" width="352" align="center" >
      <tr> 
        <td class="tab3" width="344"> 
          <input type="button" onClick="twFermer()" value="Fermer la fen&ecirc;tre" name="button22">
        </td>
      </tr>
    </table>
  </body>
</html>