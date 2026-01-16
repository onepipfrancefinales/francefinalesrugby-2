<html>
  <head>
<title>32me</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="Mef.css"/>
</head>
<body>

<?php 

$annee=$_GET['annee'];
$champ=$_GET['champ']; 
$id=$champ;

echo $annee; 
echo $id; 
 
//require ("../../../phases_finales/fonctionListeEquipes.php");	
//require ("../../../phases_finales/fonctionScores.php");

require ("../../../phasesFinales/fonctionListeEquipes.php");	
require ("../../../phasesFinales/fonctionScores.php");
 
?>
<?php

if ($AR==1)
	{
?>
		<form name="insertion" action="transfertScores.php?annee=<?php echo $annee;?>&champ=<?php echo $champ; ?>&type=32&AR=<?php echo $AR; ?>" method="POST">
		  <b><font size="4"> 
		<?php	mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
				mysql_select_db("onepip-france-db1"); 
		?>
		  </font></b> <b><font size="4"> 
		<?php
		
			$requete = mysql_query( "SELECT id ,A3201, A3202, A3203, A3204 ,A3205, A3206, A3207, A3208, A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
											A3217, A3218, A3219, A3220 ,A3221, A3222, A3223, A3224, A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232, 
											A3233, A3234, A3235, A3236 ,A3237, A3238, A3239, A3240, A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248, 
											A3249, A3250, A3251, A3252 ,A3253, A3254, A3255, A3256, A3257, A3258, A3259, A3260, A3261, A3262, A3263, A3264 
								FROM bdpfScoresA
								WHERE  division = $id AND annee = $annee ") ;
		 
		
		  if( $result = mysql_fetch_object( $requete ))
				  {
				  }
			mysql_close(); 
		?>
		  </font></b> 
		  <input type="hidden" name="id" value="<?php echo($id) ;?>">
		  <table border="0" cellspacing="0" cellpadding="10" width="100%">
			<tr align="center"> 
			  <td colspan="4"> </td>
			</tr>
			<tr align="center"> 
			  <td colspan="4" height="32" bgcolor="#FF0000"><b><font size="4" face="Arial, Helvetica, sans-serif">32me 
				de Finale 
				<?php echo $division; ?>
				( 
				<?php echo $id; ?>
				) 
				<?php echo $annee; ?>
				</font></b> </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td rowspan="2">1</td>
			  <td width="200">
				<?php	echo $clubA3201; ?>
				 </td>
			  <td width="25">-</td>
			  <td width="192"> 
				<?php	echo $clubA3202; ?>
				</td>
			</tr>
			<tr align="center"> 
			  <td width="200" bgcolor="#CCCCCC"> 
				<input type="text" name="A3201" value="<?php echo($result->A3201) ;?>" size="3">
				</td>
			  <td width="25" bgcolor="#CCCCCC"></td>
			  <td width="192" bgcolor="#CCCCCC">
				<input type="text" name="A3202" value="<?php echo($result->A3202) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  <td width="24"></td>
			  <td width="200"> 
				<?php	echo $clubA3203; ?>
				</td>
			  <td width="25">-</td>
			  <td width="192"> 
				<?php	echo $clubA3204; ?>
				</td>
			</tr>
			<tr align="center"> 
			  <td width="24"></td>
			  <td width="200">
				<input type="text" name="A3203" value="<?php echo($result->A3203) ;?>" size="3">
				</td>
			  <td width="25"></td>
			  <td width="192"> 
				<input type="text" name="A3204" value="<?php echo($result->A3204) ;?>" size="3">
				</td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">3</td>
			  <td width="200"> 
				<?php	echo $clubA3205; ?>
				</td>
			  <td width="25">-</td>
			  <td width="192"> 
				<?php	echo $clubA3206; ?>
				</td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3205" value="<?php echo($result->A3205) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3206" value="<?php echo($result->A3206) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">4</td>
      <td width="200"> 
        <?php	echo $clubA3207; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3208; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3207" value="<?php echo($result->A3207) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3208" value="<?php echo($result->A3208) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">5</td>
      <td width="200"> 
        <?php	echo $clubA3209; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3210; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3209" value="<?php echo($result->A3209) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3210" value="<?php echo($result->A3210) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">6</td>
			  
      <td width="200"> 
        <?php	echo $clubA3211; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3212; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3211" value="<?php echo($result->A3211) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3212" value="<?php echo($result->A3212) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">7</td>
      <td width="200"> 
        <?php	echo $clubA3213; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3214; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3213" value="<?php echo($result->A3213) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3214" value="<?php echo($result->A3214) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">8</td>
      <td width="200"> 
        <?php	echo $clubA3215; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3216; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3215" value="<?php echo($result->A3215) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3216" value="<?php echo($result->A3216) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">9</td>
      <td width="200"> 
        <?php	echo $clubA3217; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3218; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3217" value="<?php echo($result->A3217) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3218" value="<?php echo($result->A3218) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">10</td>
      <td width="200"> 
        <?php	echo $clubA3219; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3220; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3219" value="<?php echo($result->A3219) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3220" value="<?php echo($result->A3220) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">11</td>
			  
      <td width="200"> 
        <?php	echo $clubA3221; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3222; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3221" value="<?php echo($result->A3221) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3222" value="<?php echo($result->A3222) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">12</td>
			  
      <td width="200"> 
        <?php	echo $clubA3223; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3224; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3223" value="<?php echo($result->A3223) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3224" value="<?php echo($result->A3224) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">13</td>
			  
      <td width="200"> 
        <?php	echo $clubA3225; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3226; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3225" value="<?php echo($result->A3225) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3226" value="<?php echo($result->A3226) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">14</td>
			  
      <td width="200"> 
        <?php	echo $clubA3227; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3228; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3227" value="<?php echo($result->A3227) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3228" value="<?php echo($result->A3228) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">15</td>
      <td width="200"> 
        <?php	echo $clubA3229; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3230; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3229" value="<?php echo($result->A3229) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3230" value="<?php echo($result->A3230) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">16</td>
      <td width="200"> 
        <?php	echo $clubA3231; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3232; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3231" value="<?php echo($result->A3231) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3232" value="<?php echo($result->A3232) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">17</td>
      <td width="200"> 
        <?php	echo $clubA3233; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3234; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3233" value="<?php echo($result->A3233) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3234" value="<?php echo($result->A3234) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">18</td>
      <td width="200"> 
        <?php	echo $clubA3235; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3236; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3235" value="<?php echo($result->A3235) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3236" value="<?php echo($result->A3236) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">19</td>
      <td width="200"> 
        <?php	echo $clubA3237; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3238; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3237" value="<?php echo($result->A3237) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3238" value="<?php echo($result->A3238) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">20</td>
      <td width="200"> 
        <?php	echo $clubA3239; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3240; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3239" value="<?php echo($result->A3239) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3240" value="<?php echo($result->A3240) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">21</td>
      <td width="200"> 
        <?php	echo $clubA3241; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3242; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3241" value="<?php echo($result->A3241) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3242" value="<?php echo($result->A3242) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">22</td>
      <td width="200"> 
        <?php	echo $clubA3243; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3244; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3243" value="<?php echo($result->A3243) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3244" value="<?php echo($result->A3244) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">23</td>
      <td width="200"> 
        <?php	echo $clubA3245; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3246; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3245" value="<?php echo($result->A3245) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3246" value="<?php echo($result->A3246) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">24</td>
      <td width="200"> 
        <?php	echo $clubA3247; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3248; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3247" value="<?php echo($result->A3247) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3248" value="<?php echo($result->A3248) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">25</td>
			  
      <td width="200"> 
        <?php	echo $clubA3249; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3250; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3249" value="<?php echo($result->A3249) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3250" value="<?php echo($result->A3250) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">26</td>
			  
      <td width="200"> 
        <?php	echo $clubA3251; ?>
      </td>
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3252; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3251" value="<?php echo($result->A3251) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3252" value="<?php echo($result->A3252) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">27</td>
      <td width="200"> 
        <?php	echo $clubA3253; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3254; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3253" value="<?php echo($result->A3253) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3254" value="<?php echo($result->A3254) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">28</td>
      <td width="200"> 
        <?php	echo $clubA3255; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3256; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3255" value="<?php echo($result->A3255) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3256" value="<?php echo($result->A3256) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">29</td>
      <td width="200"> 
        <?php	echo $clubA3257; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3258; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3257" value="<?php echo($result->A3257) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3258" value="<?php echo($result->A3258) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">30</td>
			  
      <td width="200"> 
        <?php	echo $clubA3259; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3260; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3259" value="<?php echo($result->A3259) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3260" value="<?php echo($result->A3260) ;?>" size="3">
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  
      <td rowspan="2">31</td>
			  
      <td width="200"> 
        <?php	echo $clubA3261; ?>
      </td>
			  
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3262; ?>
      </td>
			</tr>
			<tr align="center" bgcolor="#CCCCCC"> 
			  <td width="200">  
				<input type="text" name="A3261" value="<?php echo($result->A3261) ;?>" size="3">
      </td>
			  
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3262" value="<?php echo($result->A3262) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">32</td>
			  
      <td width="200"> 
        <?php	echo $clubA3263; ?>
      </td>
      <td width="25">-</td>
			  
      <td width="192"> 
        <?php	echo $clubA3264; ?>
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  <td width="200">  
				<input type="text" name="A3263" value="<?php echo($result->A3263) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
			  <td width="192">  
				<input type="text" name="A3264" value="<?php echo($result->A3264) ;?>" size="3">
      </td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
			  
      <td width="200">&nbsp;</td>
      <td width="25">&nbsp;</td>
			  
      <td width="192">&nbsp;</td>
			</tr>
			<tr align="center"> 
			  
      <td width="24">&nbsp;</td>
      <td width="200">&nbsp;</td>
      <td width="25">&nbsp;</td>
			  
      <td width="192">&nbsp;</td>
			</tr>
			<tr align="center" valign="top"> 
			  <td colspan="4" bgcolor="#FF0000"> 
				<input type="submit" value="modifier" name="submit">
			  </td>
			</tr>
			<tr align="center" valign="top" bgcolor="#00FFFF"> 
			  
      <td colspan="4"><a href="accueilsaisiescore.php" target="_top"><b>Retour 
        &agrave; l'accueil</b></a></td>
			</tr>
		  </table>  
		</form>
	
<?php
	}
else
	{
	?>
<form name="insertion" action="transfertScores.php?annee=<?php echo $annee;?>&champ=<?php echo $champ; ?>&type=32&AR=<?php echo $AR; ?>" method="POST">
		  <b><font size="4"> 
		  <?php
		mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
		mysql_select_db("onepip-france-db1"); 
		?>
		  </font></b> <b><font size="4"> 
 <?php
		  
	// ***********  R�cup�ration des scores des matchs ALLER  ***************************	 
	
	$requeteAGA = mysql_query( "	SELECT id ,A3201, A3202, A3203, A3204 ,A3205, A3206, A3207, A3208, A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
											A3217, A3218, A3219, A3220 ,A3221, A3222, A3223, A3224, A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232, 
											A3233, A3234, A3235, A3236 ,A3237, A3238, A3239, A3240, A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248, 
											A3249, A3250, A3251, A3252 ,A3253, A3254, A3255, A3256, A3257, A3258, A3259, A3260, A3261, A3262, A3263, A3264 
										FROM bdpfScoresA 
										WHERE  division = $champ AND annee=$annee ") ;
		 
		
		  if( $resultAGA = mysql_fetch_object( $requeteAGA ) )
		  	{
				
		  	}
		  
// *************************************************************************************  
// ***********   R�cup�ration des scores des matchs RETOUR   ***************************	 
	
	$requeteRGA = mysql_query( "	SELECT id ,R3201, R3202, R3203, R3204 ,R3205, R3206, R3207, R3208, R3209, R3210, R3211, R3212, R3213, R3214, R3215, R3216,
											R3217, R3218, R3219, R3220 ,R3221, R3222, R3223, R3224, R3225, R3226, R3227, R3228, R3229, R3230, R3231, R3232, 
											R3233, R3234, R3235, R3236 ,R3237, R3238, R3239, R3240, R3241, R3242, R3243, R3244, R3245, R3246, R3247, R3248, 
											R3249, R3250, R3251, R3252 ,R3253, R3254, R3255, R3256, R3257, R3258, R3259, R3260, R3261, R3262, R3263, R3264 
										FROM bdpfScoresR 
										WHERE  division = $champ AND annee = $annee ") ;
		 
		
		  if( $resultRGA = mysql_fetch_object( $requeteRGA ) )
		  	{
				
		  	}
		  
		  
	// R�cup�ration des points terrain des matchs ALLER
		  $PtsA = $champ + 500;
		  $requetePTSA = mysql_query( "SELECT id ,A3201, A3202, A3203, A3204 ,A3205, A3206, A3207, A3208, A3209, A3210, A3211, A3212, A3213, A3214, A3215, A3216,
											   A3217, A3218, A3219, A3220 ,A3221, A3222, A3223, A3224, A3225, A3226, A3227, A3228, A3229, A3230, A3231, A3232, 
											   A3233, A3234, A3235, A3236 ,A3237, A3238, A3239, A3240, A3241, A3242, A3243, A3244, A3245, A3246, A3247, A3248, 
											   A3249, A3250, A3251, A3252 ,A3253, A3254, A3255, A3256, A3257, A3258, A3259, A3260, A3261, A3262, A3263, A3264 
									FROM bdpfScoresA 
									WHERE  division = $PtsA and annee=$annee " ) ;
		 
		
		  if( $resultPTSA = mysql_fetch_object( $requetePTSA ) )
		 	 	{
		 		}
				
			 
		  
	// R�cup�ration des points terrain des matchs RETOUR
		  $PtsR = $champ + 500;
		  $requetePTSR = mysql_query( "SELECT id ,R3201, R3202, R3203, R3204 ,R3205, R3206, R3207, R3208, R3209, R3210, R3211, R3212, R3213, R3214, R3215, R3216,
											   R3217, R3218, R3219, R3220 ,R3221, R3222, R3223, R3224, R3225, R3226, R3227, R3228, R3229, R3230, R3231, R3232, 
											   R3233, R3234, R3235, R3236 ,R3237, R3238, R3239, R3240, R3241, R3242, R3243, R3244, R3245, R3246, R3247, R3248, 
											   R3249, R3250, R3251, R3252 ,R3253, R3254, R3255, R3256, R3257, R3258, R3259, R3260, R3261, R3262, R3263, R3264 
									FROM bdpfScoresR 
									WHERE  division = $PtsR and annee=$annee " ) ;
		 
		
		  if( $resultPTSR = mysql_fetch_object( $requetePTSR ) )
		 	 	{
		 		}	
				
				
		mysql_close(); // D�connexion de MySQL
		?>
		  </font></b> 
		   
  <table border="0" cellspacing="0" cellpadding="10" width="100%">
    <tr align="center"> 
      <td colspan="4"> </td>
    </tr>
    <tr align="center"> 
      <td colspan="4" height="32" bgcolor="#FF0000"><b><font size="4" face="Arial, Helvetica, sans-serif">32me 
        de Finale 
        <?php echo $division; ?>
        ( 
        <?php echo $id; ?>
        ) </font></b> </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">1</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3201; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3202; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> GA 
        <input type="text" name="A3201" value="<?php echo($resultAGA->A3201) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> GA 
        <input type="text" name="A3202" value="<?php echo($resultAGA->A3202) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSA3201" value="<?php echo($resultPTSA->A3201) ;?>" size="2">
        <br>
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSA3202" value="<?php echo($resultPTSA->A3202) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3202; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3201; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R3202" value="<?php echo($resultRGA->R3202) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> GA 
        <input type="text" name="R3201" value="<?php echo($resultRGA->R3201) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSR3202" value="<?php echo($resultPTSR->R3202) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC"></td>
      <td width="200" bgcolor="#CCCCCC"> Pts 
        <input type="text" name="PTSR3201" value="<?php echo($resultPTSR->R3201) ;?>" size="2">
        <br>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">2</td>
      <td width="200"> 
        <?php	echo $clubA3203; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3204; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200"> GA 
        <input type="text" name="A3203" value="<?php echo($resultAGA->A3203) ;?>" size="3">
      </td>
      <td width="25"></td>
      <td width="192"> GA 
        <input type="text" name="A3204" value="<?php echo($resultAGA->A3204) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200">Pts 
        <input type="text" name="PTSA3203" value="<?php echo($resultPTSA->A3203) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSA3204" value="<?php echo($resultPTSA->A3204) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> 
        <?php	echo $clubA3204; ?>
      </td>
      <td width="25"></td>
      <td width="200"> 
        <?php	echo $clubA3203; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> GA 
        <input type="text" name="R3204" value="<?php echo($resultRGA->R3204) ;?>" size="3">
        - </td>
      <td width="25"></td>
      <td width="200"> GA 
        <input type="text" name="R3203" value="<?php echo($resultRGA->R3203) ;?>" size="3">
        - </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSR3204" value="<?php echo($resultPTSR->R3204) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="200">Pts 
        <input type="text" name="PTSR3203" value="<?php echo($resultPTSR->R3203) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">3</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3205; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3206; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200" height="51"> GA 
        <input type="text" name="A3205" value="<?php echo($resultAGA->A3205) ;?>" size="3">
      </td>
      <td width="25" height="51"></td>
      <td width="192" height="51"> GA 
        <input type="text" name="A3206" value="<?php echo($resultAGA->A3206) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200" height="51"> Pts 
        <input type="text" name="PTSA3205" value="<?php echo($resultPTSA->A3205) ;?>" size="2">
      </td>
      <td width="25" height="51"></td>
      <td width="192" height="51"> Pts 
        <input type="text" name="PTSA3206" value="<?php echo($resultPTSA->A3206) ;?>" size="2">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192"> 
        <?php	echo $clubA3206; ?>
      </td>
      <td width="25" height="51"></td>
      <td width="200"> 
        <?php	echo $clubA3205; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" height="51"> GA 
        <input type="text" name="R3206" value="<?php echo($resultRGA->R3206) ;?>" size="3">
      </td>
      <td width="25" height="51">&nbsp;</td>
      <td width="200" height="51"> GA 
        <input type="text" name="R3205" value="<?php echo($resultRGA->R3205) ;?>" size="3">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" height="51"> Pts 
        <input type="text" name="PTSR3206" value="<?php echo($resultPTSR->R3206) ;?>" size="2">
      </td>
      <td width="25" height="51">&nbsp;</td>
      <td width="200" height="51"> Pts 
        <input type="text" name="PTSR3205" value="<?php echo($resultPTSR->R3205) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">4</td>
      <td width="200">  
        <?php	echo $clubA3207; ?>
       </td>
      <td width="25">-</td>
      <td width="192">  
        <?php	echo $clubA3208; ?>
        </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200"> GA 
        <input type="text" name="A3207" value="<?php echo($resultAGA->A3207) ;?>" size="3">
        </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A3208" value="<?php echo($resultAGA->A3208) ;?>" size="3">
        </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200">  Pts 
        <input type="text" name="PTSA3207" value="<?php echo($resultPTSA->A3207) ;?>" size="2">
        </td>
      <td width="25"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSA3208" value="<?php echo($resultPTSA->A3208) ;?>" size="2">
        </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> 
        <?php	echo $clubA3208; ?>
        </td>
      <td width="25"></td>
      <td width="200">
        <?php	echo $clubA3207; ?>
       </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192"> GA 
        <input type="text" name="R3208" value="<?php echo($resultRGA->R3208) ;?>" size="3">
        </td>
      <td width="25"></td>
      <td width="200"> GA 
        <input type="text" name="R3207" value="<?php echo($resultRGA->R3207) ;?>" size="3">
        </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="192">  Pts 
        <input type="text" name="PTSR3208" value="<?php echo($resultPTSR->R3208) ;?>" size="2">
        </td>
      <td width="25"></td>
      <td width="200">  Pts 
        <input type="text" name="PTSR3207" value="<?php echo($resultPTSR->R3207) ;?>" size="2">
        </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">5</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3209; ?>
        </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC">  
        <?php	echo $clubA3210; ?>
        </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200"> GA 
        <input type="text" name="A3209" value="<?php echo($resultAGA->A3209) ;?>" size="3">
        </td>
      <td width="25"></td>
      <td width="192">GA 
        <input type="text" name="A3210" value="<?php echo($resultAGA->A3210) ;?>" size="3">
        </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="200"> 
        Pts 
        <input type="text" name="PTSA3209" value="<?php echo($resultPTSA->A3209) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="192"> Pts 
        <input type="text" name="PTSA3210" value="<?php echo($resultPTSA->A3210) ;?>" size="2">
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192"> 
        <?php	echo $clubA3210; ?>
        </td>
      <td width="25"></td>
      <td width="200"> 
        <?php	echo $clubA3209; ?>
        </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192"> GA 
        <input type="text" name="R3210" value="<?php echo($resultRGA->R3210) ;?>" size="3">
        </td>
      <td width="25">&nbsp;</td>
      <td width="200"> GA 
        <input type="text" name="R3209" value="<?php echo($resultRGA->R3209) ;?>" size="3">
        </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td bgcolor="#CCCCCC"></td>
      <td width="192"> 
        Pts 
        <input type="text" name="PTSR3210" value="<?php echo($resultPTSR->R3210) ;?>" size="2">
       </td>
      <td width="25"></td>
      <td width="200"> 
        Pts 
        <input type="text" name="PTSR3209" value="<?php echo($resultPTSR->R3209) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">6</td>
      <td width="200"> 
        <?php	echo $clubA3211; ?>
        </td>
      <td width="25">-</td>
      <td width="192">  
        <?php	echo $clubA3212; ?>
        </td>
    </tr>
    <tr align="center"> 
      <td width="24"></td>
      <td width="200">  GA 
        <input type="text" name="A3211" value="<?php echo($resultAGA->A3211) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3212" value="<?php echo($resultAGA->A3212) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3211" value="<?php echo($resultPTSA->A3211) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3212" value="<?php echo($resultPTSA->A3212) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3212; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3211; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3212" value="<?php echo($resultRGA->R3212) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3211" value="<?php echo($resultRGA->R3211) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3212" value="<?php echo($resultPTSR->R3212) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3211" value="<?php echo($resultPTSR->R3211) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">7</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3213; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3214; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3213" value="<?php echo($resultAGA->A3213) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3214" value="<?php echo($resultAGA->A3214) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3213" value="<?php echo($resultPTSA->A3213) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3214" value="<?php echo($resultPTSA->A3214) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3214; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3213; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="RGA3214" value="<?php echo($resultRGA->R3214) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="RGA3213" value="<?php echo($resultRGA->R3213) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3214" value="<?php echo($resultPTSR->R3214) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3213" value="<?php echo($resultPTSR->R3213) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">8</td>
      <td width="200"> 
        <?php	echo $clubA3215; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3216; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3215" value="<?php echo($resultAGA->A3215) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3216" value="<?php echo($resultAGA->A3216) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3215" value="<?php echo($resultPTSA->A3215) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3216" value="<?php echo($resultPTSA->A3216) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3216; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3215; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3216" value="<?php echo($resultRGA->R3216) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3215" value="<?php echo($resultRGA->R3215) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3216" value="<?php echo($resultPTSR->R3216) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3215" value="<?php echo($resultPTSR->R3215) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">9</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3217; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3218; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3217" value="<?php echo($resultAGA->A3217) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3218" value="<?php echo($resultAGA->A3218) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3217" value="<?php echo($resultPTSA->A3217) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3218" value="<?php echo($resultPTSA->A3218) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3218; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3217; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3218" value="<?php echo($resultRGA->R3218) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3217" value="<?php echo($resultRGA->R3217) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3218" value="<?php echo($resultPTSR->R3218) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3217" value="<?php echo($resultPTSR->R3217) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">10</td>
      <td width="200"> 
        <?php	echo $clubA3219; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3220; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3219" value="<?php echo($resultAGA->A3219) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3220" value="<?php echo($resultAGA->A3220) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3219" value="<?php echo($resultPTSA->A3219) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3220" value="<?php echo($resultPTSA->A3220) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3220; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3219; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3220" value="<?php echo($resultRGA->R3220) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3219" value="<?php echo($resultRGA->R3219) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3220" value="<?php echo($resultPTSR->R3220) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3219" value="<?php echo($resultPTSR->R3219) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">11</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3221; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3222; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3221" value="<?php echo($resultAGA->A3221) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3222" value="<?php echo($resultAGA->A3222) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3221" value="<?php echo($resultPTSA->A3221) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3222" value="<?php echo($resultPTSA->A3222) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3222; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3221; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3222" value="<?php echo($resultRGA->R3222) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3221" value="<?php echo($resultRGA->R3221) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3222" value="<?php echo($resultPTSR->R3222) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3221" value="<?php echo($resultPTSR->R3221) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">12</td>
      <td width="200"> 
        <?php	echo $clubA3223; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3224; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3223" value="<?php echo($resultAGA->A3223) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192"> GA 
        <input type="text" name="A3224" value="<?php echo($resultAGA->A3224) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3223" value="<?php echo($resultPTSA->A3223) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3224" value="<?php echo($resultPTSA->A3224) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3224; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3223; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3224" value="<?php echo($resultRGA->R3224) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3223" value="<?php echo($resultRGA->R3223) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3224" value="<?php echo($resultPTSR->R3224) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3223" value="<?php echo($resultPTSR->R3223) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">13</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3225; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3226; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3225" value="<?php echo($resultAGA->A3225) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3226" value="<?php echo($resultAGA->A3226) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3225" value="<?php echo($resultPTSA->A3225) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3226" value="<?php echo($resultPTSA->A3226) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3226; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3225; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3226" value="<?php echo($resultRGA->R3226) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3225" value="<?php echo($resultRGA->R3225) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3226" value="<?php echo($resultPTSR->R3226) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3225" value="<?php echo($resultPTSR->R3225) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">14</td>
      <td width="200"> 
        <?php	echo $clubA3227; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3228; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3227" value="<?php echo($resultAGA->A3227) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3228" value="<?php echo($resultAGA->A3228) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3227" value="<?php echo($resultPTSA->A3227) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3228" value="<?php echo($resultPTSA->A3228) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3228; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3227; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3228" value="<?php echo($resultRGA->R3228) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3227" value="<?php echo($resultRGA->R3227) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3228" value="<?php echo($resultPTSR->R3228) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3227" value="<?php echo($resultPTSR->R3227) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">15</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3229; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3230; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3229" value="<?php echo($resultAGA->A3229) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3230" value="<?php echo($resultAGA->A3230) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3229" value="<?php echo($resultPTSA->A3229) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3230" value="<?php echo($resultPTSA->A3230) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3230; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3229; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3230" value="<?php echo($resultRGA->R3230) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3229" value="<?php echo($resultRGA->R3229) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3230" value="<?php echo($resultPTSR->R3230) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3229" value="<?php echo($resultPTSR->R3229) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">16</td>
      <td width="200"> 
        <?php	echo $clubA3231; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3232; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3231" value="<?php echo($resultAGA->A3231) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3232" value="<?php echo($resultAGA->A3232) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3231" value="<?php echo($resultPTSA->A3231) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3232" value="<?php echo($resultPTSA->A3232) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3232; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3231; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3232" value="<?php echo($resultRGA->R3232) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3231" value="<?php echo($resultRGA->R3231) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3232" value="<?php echo($resultPTSR->R3232) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3231" value="<?php echo($resultPTSR->R3231) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">17</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3233; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3234; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3233" value="<?php echo($resultAGA->A3233) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3234" value="<?php echo($resultAGA->A3234) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3233" value="<?php echo($resultPTSA->A3233) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3234" value="<?php echo($resultPTSA->A3234) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3234; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3233; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3234" value="<?php echo($resultRGA->R3234) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3233" value="<?php echo($resultRGA->R3233) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3234" value="<?php echo($resultPTSR->R3234) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3233" value="<?php echo($resultPTSR->R3233) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">18</td>
      <td width="200"> 
        <?php	echo $clubA3235; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3236; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3235" value="<?php echo($resultAGA->A3235) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3236" value="<?php echo($resultAGA->A3236) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3235" value="<?php echo($resultPTSA->A3235) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3236" value="<?php echo($resultPTSA->A3236) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3236; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3235; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3236" value="<?php echo($resultRGA->R3236) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3235" value="<?php echo($resultRGA->R3235) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3236" value="<?php echo($resultPTSR->R3236) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3235" value="<?php echo($resultPTSR->R3235) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">19</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3237; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3238; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3237" value="<?php echo($resultAGA->A3237) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3238" value="<?php echo($resultAGA->A3238) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3237" value="<?php echo($resultPTSA->A3237) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3238" value="<?php echo($resultPTSA->A3238) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3238; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3237; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3238" value="<?php echo($resultRGA->R3238) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3237" value="<?php echo($resultRGA->R3237) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3238" value="<?php echo($resultPTSR->R3238) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3237" value="<?php echo($resultPTSR->R3237) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">20</td>
      <td width="200"> 
        <?php	echo $clubA3239; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3240; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3239" value="<?php echo($resultAGA->A3239) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3240" value="<?php echo($resultAGA->A3240) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3239" value="<?php echo($resultPTSA->A3239) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3240" value="<?php echo($resultPTSA->A3240) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3240; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3239; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3240" value="<?php echo($resultRGA->R3240) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3239" value="<?php echo($resultRGA->R3239) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3240" value="<?php echo($resultPTSR->R3240) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3239" value="<?php echo($resultPTSR->R3239) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">21</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3241; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3242; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3241" value="<?php echo($resultAGA->A3241) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3242" value="<?php echo($resultAGA->A3242) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3241" value="<?php echo($resultPTSA->A3241) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3242" value="<?php echo($resultPTSA->A3242) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3242; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3241; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3242" value="<?php echo($resultRGA->R3242) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3241" value="<?php echo($resultRGA->R3241) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3242" value="<?php echo($resultPTSR->R3242) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3241" value="<?php echo($resultPTSR->R3241) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">22</td>
      <td width="200"> 
        <?php	echo $clubA3243; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3244; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3243" value="<?php echo($resultAGA->A3243) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3244" value="<?php echo($resultAGA->A3244) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3243" value="<?php echo($resultPTSA->A3243) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3244" value="<?php echo($resultPTSA->A3244) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3244; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3243; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3244" value="<?php echo($resultRGA->R3244) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3243" value="<?php echo($resultRGA->R3243) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3244" value="<?php echo($resultPTSR->R3244) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3243" value="<?php echo($resultPTSR->R3243) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">23</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3245; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3246; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3245" value="<?php echo($resultAGA->A3245) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3246" value="<?php echo($resultAGA->A3246) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3245" value="<?php echo($resultPTSA->A3245) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3246" value="<?php echo($resultPTSA->A3246) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3246; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3245; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3246" value="<?php echo($resultRGA->R3246) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3245" value="<?php echo($resultRGA->R3245) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3246" value="<?php echo($resultPTSR->R3246) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3245" value="<?php echo($resultPTSR->R3245) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">24</td>
      <td width="200"> 
        <?php	echo $clubA3247; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3248; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3247" value="<?php echo($resultAGA->A3247) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3248" value="<?php echo($resultAGA->A3248) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3247" value="<?php echo($resultPTSA->A3247) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3248" value="<?php echo($resultPTSA->A3248) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3248; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3247; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3248" value="<?php echo($resultRGA->R3248) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3247" value="<?php echo($resultRGA->R3247) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3248" value="<?php echo($resultPTSR->R3248) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3247" value="<?php echo($resultPTSR->R3247) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">25</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3249; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3250; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3249" value="<?php echo($resultAGA->A3249) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3250" value="<?php echo($resultAGA->A3250) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3249" value="<?php echo($resultPTSA->A3249) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3250" value="<?php echo($resultPTSA->A3250) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3250; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3249; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3250" value="<?php echo($resultRGA->R3250) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3249" value="<?php echo($resultRGA->R3249) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3250" value="<?php echo($resultPTSR->R3250) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3249" value="<?php echo($resultPTSR->R3249) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">26</td>
      <td width="200"> 
        <?php	echo $clubA3251; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3252; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3251" value="<?php echo($resultAGA->A3251) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3252" value="<?php echo($resultAGA->A3252) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3251" value="<?php echo($resultPTSA->A3251) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3252" value="<?php echo($resultPTSA->A3252) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3252; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3251; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3252" value="<?php echo($resultRGA->R3252) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3251" value="<?php echo($resultRGA->R3251) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3252" value="<?php echo($resultPTSR->R3252) ;?>" size="2">
      </td>
      <td width="25"></td>
      <td width="200">Pts 
        <input type="text" name="PTSR3251" value="<?php echo($resultPTSR->R3251) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">27</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3253; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3254; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3253" value="<?php echo($resultAGA->A3253) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3254" value="<?php echo($resultAGA->A3254) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3253" value="<?php echo($resultPTSA->A3253) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3254" value="<?php echo($resultPTSA->A3254) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3254; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3253; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3254" value="<?php echo($resultRGA->R3254) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3253" value="<?php echo($resultRGA->R3253) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3254" value="<?php echo($resultPTSR->R3254) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3253" value="<?php echo($resultPTSR->R3253) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">28</td>
      <td width="200"> 
        <?php	echo $clubA3255; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3256; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3255" value="<?php echo($resultAGA->A3255) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3256" value="<?php echo($resultAGA->A3256) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3255" value="<?php echo($resultPTSA->A3255) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3256" value="<?php echo($resultPTSA->A3256) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3256; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3255; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3256" value="<?php echo($resultRGA->R3256) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3255" value="<?php echo($resultRGA->R3255) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3256" value="<?php echo($resultPTSR->R3256) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3255" value="<?php echo($resultPTSR->R3255) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">29</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3257; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3258; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3257" value="<?php echo($resultAGA->A3257) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3258" value="<?php echo($resultAGA->A3258) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3257" value="<?php echo($resultPTSA->A3257) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3258" value="<?php echo($resultPTSA->A3258) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3258; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3257; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3258" value="<?php echo($resultRGA->R3258) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3257" value="<?php echo($resultRGA->R3257) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3258" value="<?php echo($resultPTSR->R3258) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3257" value="<?php echo($resultPTSR->R3257) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">30</td>
      <td width="200"> 
        <?php	echo $clubA3259; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3260; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3259" value="<?php echo($resultAGA->A3259) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3260" value="<?php echo($resultAGA->A3260) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3259" value="<?php echo($resultPTSA->A3259) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3260" value="<?php echo($resultPTSA->A3260) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3260; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3259; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3260" value="<?php echo($resultRGA->R3260) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3259" value="<?php echo($resultRGA->R3259) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3260" value="<?php echo($resultPTSR->R3260) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3259" value="<?php echo($resultPTSR->R3259) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td rowspan="2" bgcolor="#CCCCCC">31</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3261; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">-</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3262; ?>
      </td>
    </tr>
    <tr align="center" bgcolor="#CCCCCC"> 
      <td width="200">  GA 
        <input type="text" name="A3261" value="<?php echo($resultAGA->A3261) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3262" value="<?php echo($resultAGA->A3262) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3261" value="<?php echo($resultPTSA->A3261) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSA3262" value="<?php echo($resultPTSA->A3262) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3262; ?>
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC"> 
        <?php	echo $clubA3261; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3262" value="<?php echo($resultRGA->R3262) ;?>" size="3">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">  
        GA 
        <input type="text" name="R3261" value="<?php echo($resultRGA->R3261) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td width="192" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3262" value="<?php echo($resultPTSR->R3262) ;?>" size="2">
      </td>
      <td width="25" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="200" bgcolor="#CCCCCC">Pts 
        <input type="text" name="PTSR3261" value="<?php echo($resultPTSR->R3261);?>" size="2">
        
    </tr>
    <tr align="center"> 
      <td width="24">32</td>
      <td width="200"> 
        <?php	echo $clubA3263; ?>
      </td>
      <td width="25">-</td>
      <td width="192"> 
        <?php	echo $clubA3264; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="A3263" value="<?php echo($resultAGA->A3263) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="A3264" value="<?php echo($resultAGA->A3264) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSA3263" value="<?php echo($resultPTSA->A3263) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSA3264" value="<?php echo($resultPTSA->A3264) ;?>" size="2">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192"> 
        <?php	echo $clubA3264; ?>
      </td>
      <td width="25">&nbsp;</td>
      <td width="200"> 
        <?php	echo $clubA3263; ?>
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">  GA 
        <input type="text" name="R3264" value="<?php echo($resultRGA->R3264) ;?>" size="3">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">  GA 
        <input type="text" name="R3263" value="<?php echo($resultRGA->R3263) ;?>" size="3">
      </td>
    </tr>
    <tr align="center"> 
      <td width="24">&nbsp;</td>
      <td width="192">Pts 
        <input type="text" name="PTSR3264" value="<?php echo($resultPTSR->R3264) ;?>" size="2">
      </td>
      <td width="25">&nbsp;</td>
      <td width="200">Pts 
        <input type="text" name="PTSR3263" value="<?php echo($resultPTSR->R3263) ;?>" size="2">
      </td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF0000">&nbsp;</td>
    </tr>
    <tr align="center" valign="top"> 
      <td colspan="4" bgcolor="#FF0000"> 
        <input type="submit" value="modifier" name="submit">
      </td>
    </tr>
    <tr align="center" valign="top" bgcolor="#00FFFF"> 
      <td colspan="4"><a href="accueilsaisiescore.php" target="_top"><b>Retour 
        &agrave; l'accueil</b></a></td>
    </tr>
  </table>  
		</form>
	<?php
	}
?>