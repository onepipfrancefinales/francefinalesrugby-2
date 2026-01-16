<?php
//tableau de toutes les ligues

$tabEquipeDom =array();
$tabIdDom =array();
$tabEquipeExt =array();
$tabIdExt =array();
$tabButsExt =array();
$tabButsDom =array();

//$tabLigue = array('ab','au','bg','pr','f1','fed2','fed3GS','fem');
//$tabLigue = array('au','ab','pro','fed3NE','ca','pl','idf');
$tabLigue = array('fed3NE');
foreach ($tabLigue as $ligue)
{
 echo '<br />'; 
 echo "---------------  ligue : ".$ligue." ----------";	echo '<br />';
 $ligue = 'php'.$ligue;	
 $tableMatch =  $ligue.'_matchs';
 $tableClub =  $ligue.'_clubs';

$date = date("Y-m-d");
//$date = strtotime(date("Y-m-d", strtotime($date)) . " +1 day");   
//echo $today;
echo $date;	echo '<br />';

//connexion


require '../../connect/connexion6.php';

$requete=$bdd->query("
		SELECT $tableClub.nom, $tableMatch.id_equipe_dom, $tableMatch.id_equipe_ext, $tableMatch.buts_dom , $tableMatch.buts_ext
		FROM $tableMatch 
		INNER JOIN $tableClub ON $tableMatch.id_equipe_dom = $tableClub.id	
		WHERE $tableMatch.date_reelle  between ADDDATE(NOW(),-5) and 	ADDDATE(NOW(),5)
		");
		
	while($row = $requete->fetch())
	 {
	  $tabEquipeDom[] = $row[0];
	  $tabIdDom[] = $row[1];
	  $tabIdExt[] = $row[2];
	  $tabButsDom[] = $row[3];
	  $tabButsExt[] = $row[4];
	
	$requete1=$bdd->query("
		SELECT nom
		FROM $tableClub
		WHERE id = $row[2];
		");
		
		while($row = $requete1->fetch())
				{
				$tabEquipeExt[] = $row[0];		
				}
	 }
	
	for ($i=0;$i<90;$i++)
	{
		if(isset($tabButsDom[$i])) $tabButsDom[$i]=$tabButsDom[$i];else $tabButsDom[$i]=0;
		if(isset($tabButsExt[$i])) $tabButsExt[$i]=$tabButsExt[$i];else $tabButsExt[$i]=0;
		
		if (($tabButsDom[$i] - $tabButsExt[$i] < 25  ) 
		 and ($tabButsDom[$i] - $tabButsExt[$i] > 5) and $tabButsDom[$i]> 15)
		{
		 echo $tabButsDom[$i] - $tabButsExt[$i]." - ";
		 echo "<b>".$tabEquipeDom[$i]."</b>".'('.$tabIdDom[$i].')'.' - '.$tabEquipeExt[$i].'('.$tabIdExt[$i].')'.' : '.$tabButsDom[$i].' - '.$tabButsExt[$i] ;
		 echo '<br />';
		}
	
	    if (($tabButsExt[$i] - $tabButsDom[$i] < 25  ) 
		 and ($tabButsExt[$i] - $tabButsDom[$i] > 5) and $tabButsExt[$i]> 15)
		{
		 echo $tabButsExt[$i] - $tabButsDom[$i]." - ";
		 echo $tabEquipeDom[$i].'('.$tabIdDom[$i].')'.' - '."<b>".$tabEquipeExt[$i]."</b>".'('.$tabIdExt[$i].')'.' : '.$tabButsDom[$i].' - '.$tabButsExt[$i] ;
		 echo '<br />';
		}
		$tabEquipeDom[$i]=null;
		
	}
		

unset ($tabEquipeDom);
unset ($tabEquipeExt);
unset ($tabIdDom);
unset ($tabIdExt);
unset ($tabButsDom);
unset ($tabButsExt);
}



?>