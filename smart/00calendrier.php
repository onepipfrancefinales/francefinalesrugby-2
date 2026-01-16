<?php
$champ=$_GET['champ'];
$comite=$_GET['comite'];
$phpcomite="php".''.$comite;
require "../Phpleague/php".$comite."/consult/fonctions_matchs.php";
require "../Phpleague/php".$comite."/lang/lang_fr.php";
?>
<html>
  <head>
    <title>Calendrier</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link type="text/css" rel="stylesheet" href="calendrier.css"/>
    <link type="text/css" rel="stylesheet" href="../Phpleague/<?php echo "php".$comite; ?>/league.css"/>
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
		if ($comite=="fem" OR  $comite=="pro" OR  $comite=="f1" OR $comite=="fed2"  OR $comite=="fed3NE"  OR $comite=="fed3GS"  )
				require ("../connect/connexion3.php");	
		else
				require ("../connect/connexion2.php");
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