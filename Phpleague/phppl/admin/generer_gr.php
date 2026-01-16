<?php
//***********************************************************************/
// phppleague : gestionnaire de championnat                           */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phppleague.univert.org                                      */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phppleague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
echo "action -> impacte uniquement la table phppl_clmnt_pronos";echo "<br />";
echo "<br />";
?>
<table class=phppl width="80%">
  <tr>
    <td class=phppl2 align="center" colspan="3">
	  <?php echo ADMIN_GRAPH_TITRE." DDD"; affich_gr_champ ($gr_champ, $idconnect); ?>
	</td>
  </tr>
  <tr>
    <td align="center">
	  <?php
		include ("tps1.php3");

		mysqli_query($idconnect,("DELETE FROM phppl_clmnt_pronos 
						  WHERE id_champ='$gr_champ'"));

	

//**************** Général ****************** */
//echo "gr_champ : ".$gr_champ; echo "<br>";

$result=$idconnect->query(" 
				SELECT id_membre, pseudo, 
				SUM(points) as total, 
				SUM(participation) as participations 
				FROM phppl_membres, phppl_pronostics
				WHERE id_champ='$gr_champ' 
				AND id_membre=phppl_membres.id
				GROUP by pseudo
				ORDER by total, participations");

		while ($row=mysqli_fetch_array($result))
		{
			
			//echo  $row[0]; echo "<br>";
		//	echo  $row[1]; echo "<br>";
		//	echo  $row[2]; echo "<br>";
		////	echo  $row[3]; echo "<br>";
			echo "*************"; echo "<br>";
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phppl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
				  VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'general')"));
		
	
	}


//**************** mensuel_en_cours ****************** */

		$result=$idconnect->query("
				SELECT id_membre, pseudo, SUM(points) as total, SUM(participation) as participations
				FROM phppl_membres, phppl_pronostics, phppl_matchs
				WHERE id_champ='$gr_champ'
				AND id_membre=phppl_membres.id
				AND phppl_matchs.id=id_match
				AND MONTH (date_reelle) = MONTH (NOW())
				AND YEAR (date_reelle) = YEAR (NOW())
				GROUP by pseudo
				ORDER by total, participations");


		while ($row=mysqli_fetch_array($result))
		{
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phppl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
								VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_en_cours')") );
		}


//**************** mensuel_30_jours ****************** */

		$result = $idconnect->query("
					SELECT id_membre, pseudo, SUM(points) as total, SUM(participation) as participations
					FROM phppl_membres, phppl_pronostics, phppl_matchs
					WHERE id_champ='$gr_champ'
					AND id_membre=phppl_membres.id
					AND phppl_matchs.id=id_match
					AND DATE_ADD(date_reelle, INTERVAL 30 DAY) >= NOW()
					GROUP by pseudo
					ORDER by total, participations");


		while ($row=mysqli_fetch_array($result))
		{
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phppl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
								VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'mensuel_30_jours')"));
		}

		
	
	//**************** hebdo ****************** */	
	
		$result = $idconnect->query("
				SELECT id_membre, pseudo, SUM(points) as total, SUM(participation) as participations
				FROM phppl_membres, phppl_pronostics, phppl_matchs
				WHERE id_champ='$gr_champ'
				AND id_membre=phppl_membres.id
				AND phppl_matchs.id=id_match
				AND DATE_ADD(date_reelle, INTERVAL 7 DAY) >= NOW()
				GROUP by pseudo
				ORDER by total, participations");


		while ($row=mysqli_fetch_array($result))
		{
		 $row[1]=addslashes($row[1]);
		 mysqli_query($idconnect, ("INSERT INTO phppl_clmnt_pronos (id_champ, id_membre, pseudo, points, participation, type) 
							VALUES ('$gr_champ', '$row[0]', '$row[1]', '$row[2]', '$row[3]', 'hebdo')"));
		}

		echo ADMIN_GRAPH_PRONO; include ("tps2.php3");
		?>
    </td>
  </tr>
</table>
