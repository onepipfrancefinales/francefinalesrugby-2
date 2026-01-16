<?php
//***********************************************************************/
// phpabeague : gestionnaire de championnat                              */
// ============================================                         */
//                                                                      */
// Version : 0.82                                                       */
// Copyright (c) 2004    Alexis MANGIN                                  */
// http://phpabeague.univert.org                                         */
//                                                                      */
// This program is free software. You can redistribute it and/or modify */
// it under the terms of the GNU General Public License as published by */
// the Free Software Foundation; either version 2 of the License.       */
//                                                                      */
//***********************************************************************/
// Support technique : http://phpabeague.univert.org/forum               */
//                                                                      */
//***********************************************************************/
?>
<table class=phpab width="80%">
            <tr>
              <td class=phpab2 align="center" colspan="3"><?php echo ADMIN_GRAPH_TITRE." "; affich_champ ($champ, $idconnect); ?></td>
            </tr>
            <tr>
            <td align="center">
<?php
  


	include ("tps1.php3"); 
//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $result1=$idconnect->query("	SELECT id 
								FROM phpab_equipes 
								WHERE id_champ='$champ'");
//$result1=mysql_query ($query1);
while ($row1=mysqli_fetch_array($result1))
{ 
$query="DELETE FROM phpab_clmnt_graph 
		WHERE phpab_clmnt_graph.id_equipe='$row1[0]'" ;
        mysqli_query($idconnect, $query) or die (mysqli_error($idconnect));
}
$debut=0;
$fin=1;

//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $result=$idconnect->query("SELECT accession, barrage, relegation 
							 FROM phpab_parametres 
							 WHERE id_champ='$champ'");
								while ($row=mysqli_fetch_array($result))
								  {
									$accession = $row['accession'];
									$barrage = $row['barrage'] + $accession;
									$relegation = nb_equipes($champ, $idconnect)- $row['relegation'];
								  }
$legende=CONSULT_CLMNT_MSG4.$debut.CONSULT_CLMNT_MSG5.$fin;


//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $result=$idconnect->query("SELECT max(phpab_journees.numero) 
							 FROM phpab_journees, phpab_matchs 
							 WHERE phpab_journees.id=phpab_matchs.id_journee AND buts_dom is not NULL and phpab_journees.id_champ='$champ'");
//$result=mysql_query ($query);
$row=mysqli_fetch_array($result);
$max=$row[0];
//echo "max :".$max;   
//echo "fin :".$fin; 
//echo "-------";
//echo "champ :".$champ; echo "<br/>";
//echo "debut : ".$debut;  echo "<br/>";
//echo "fin :".$fin; echo "<br/>";
while ($fin<=$max)
{                 
@db_clmnt($champ, $debut, $fin, 0, $idconnect);

            
//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $result=$idconnect->query("SELECT * 
							 FROM phpab_clmnt 
							 ORDER BY POINTS DESC, DIFF DESC, BUTSPOUR DESC, BUTSCONTRE ASC, NOM");
//$result=mysql_query($query) or die (mysql_error());
$pl=1;

      while ($row=mysqli_fetch_array($result))
		{   
        $x=0;
        $id_equipe=$row["ID_EQUIPE"];

        $query="INSERT INTO phpab_clmnt_graph (id_equipe, fin, classement) VALUES ('$id_equipe','$fin', '$pl')" ;
        mysqli_query($idconnect, $query);
        $pl++;                    
		//echo $pl;
		//echo "id_equipe : ".$id_equipe;
		}
$fin++;
}     

//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $result=$idconnect->query("SELECT phpab_clmnt_graph.id_equipe 
							 FROM phpab_clmnt_graph, phpab_equipes 
							 WHERE phpab_equipes.id=phpab_clmnt_graph.id_equipe
                                                 and phpab_equipes.id_champ=$champ");
//$result=mysql_query($query);
$nb_saving=mysqli_num_rows($result);
//echo "eeeee".$nb_saving;

//$idconnect=@mysqli_connect('127.0.0.1','root','','onepip-france-db3');	
  
  $result=$idconnect->query("SELECT * 
							 FROM phpab_equipes 
							 WHERE id_champ=$champ");
//$result=mysql_query($query);
$nb_equipes=mysqli_num_rows($result);
             
@db_clmnt($champ, $debut, $fin, 1, $idconnect);


if ($nb_saving=$max*$nb_equipes){
echo "<br/>";
echo "division : ".$champ. " - ";
echo ADMIN_GRAPH; include ("tps2.php3");

}
else {
echo "division : ".$champ. " - ";	
echo ADMIN_GRAPH_4;
echo "<br/>";
}


?>
</td></tr></table>
