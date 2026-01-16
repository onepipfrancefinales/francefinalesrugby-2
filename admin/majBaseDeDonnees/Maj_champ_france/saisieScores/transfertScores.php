<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
  <?php
$annee=$_GET['annee'];
$champ=$_GET['champ'];
$type=$_GET['type'];
$AR=$_GET['AR'];

echo  $annee ;
echo $champ;
echo $type;
echo $AR;

?>
  
<?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>

<?php
//*******************************************************
//*                                                     *
//*           32me de finale Elimination directe        *
//*                                                     *
//********************************************************

if ($type==32 and $AR==1)
	{
//r�cup�ration des valeurs des champs:
  
		$A3201 = $_POST['A3201'];
		$A3202 = $_POST['A3202'];
		$A3203 = $_POST['A3203'];
		$A3204 = $_POST['A3204'];
		
		$A3205 = $_POST['A3205'];  
		$A3206 = $_POST['A3206'];
		$A3207 = $_POST['A3207'];
		$A3208 = $_POST['A3208'];
		
		$A3209 = $_POST['A3209'];  
		$A3210 = $_POST['A3210'];
		$A3211 = $_POST['A3211'];
		$A3212 = $_POST['A3212'];
		
		$A3213 = $_POST['A3213'];  
		$A3214 = $_POST['A3214'];
		$A3215 = $_POST['A3215'];
		$A3216 = $_POST['A3216'];
		
		$A3217 = $_POST['A3217'];  
		$A3218 = $_POST['A3218'];
		$A3219 = $_POST['A3219'];
		$A3220 = $_POST['A3220'];
		
		$A3221 = $_POST['A3221'];  
		$A3222 = $_POST['A3222'];
		$A3223 = $_POST['A3223'];
		$A3224 = $_POST['A3224'];
		
		$A3225 = $_POST['A3225'];  
		$A3226 = $_POST['A3226'];
		$A3227 = $_POST['A3227'];
		$A3228 = $_POST['A3228'];
		
		$A3229 = $_POST['A3229'];  
		$A3230 = $_POST['A3230'];
		$A3231 = $_POST['A3231'];
		$A3232 = $_POST['A3232'];
		
		$A3233 = $_POST['A3233'];  
		$A3234 = $_POST['A3234'];
		$A3235 = $_POST['A3235'];
		$A3236 = $_POST['A3236'];
		
		$A3237 = $_POST['A3237'];  
		$A3238 = $_POST['A3238'];
		$A3239 = $_POST['A3239'];
		$A3240 = $_POST['A3240'];
		
		$A3241 = $_POST['A3241'];  
		$A3242 = $_POST['A3242'];
		$A3243 = $_POST['A3243'];
		$A3244 = $_POST['A3244'];
		
		$A3245 = $_POST['A3245'];  
		$A3246 = $_POST['A3246'];
		$A3247 = $_POST['A3247'];
		$A3248 = $_POST['A3248'];
		
		$A3249 = $_POST['A3249'];  
		$A3250 = $_POST['A3250'];
		$A3251 = $_POST['A3251'];
		$A3252 = $_POST['A3252'];
		
		$A3253 = $_POST['A3253'];  
		$A3254 = $_POST['A3254'];
		$A3255 = $_POST['A3255'];
		$A3256 = $_POST['A3256'];
		
		$A3257 = $_POST['A3257'];  
		$A3258 = $_POST['A3258'];
		$A3259 = $_POST['A3259'];
		$A3260 = $_POST['A3260'];
		
		$A3261 = $_POST['A3261'];  
		$A3262 = $_POST['A3262'];
		$A3263 = $_POST['A3263'];
		$A3264 = $_POST['A3264'];

echo $A3217;
echo $A3218;


//************  cr�ation de la requ�te SQL: ***************************
$sql = "	UPDATE bdpfScoresA
            SET A3201='$A3201',A3202='$A3202',A3203='$A3203',A3204='$A3204',A3205='$A3205',A3206='$A3206',A3207='$A3207',A3208='$A3208',
				A3209='$A3209',A3210='$A3210',A3211='$A3211',A3212='$A3212',A3213='$A3213',A3214='$A3214',A3215='$A3215',A3216='$A3216',
			 	A3217='$A3217',A3218='$A3218',A3219='$A3219',A3220='$A3220',A3221='$A3221',A3222='$A3222',A3223='$A3223',A3224='$A3224',
			 	A3225='$A3225',A3226='$A3226',A3227='$A3227',A3228='$A3228',A3229='$A3229',A3230='$A3230',A3231='$A3231',A3232='$A3232',
		  		A3233='$A3233',A3234='$A3234',A3235='$A3235',A3236='$A3236',A3237='$A3237',A3238='$A3238',A3239='$A3239',A3240='$A3240',
				A3241='$A3241',A3242='$A3242',A3243='$A3243',A3244='$A3244',A3245='$A3245',A3246='$A3246',A3247='$A3247',A3248='$A3248',
				A3249='$A3249',A3250='$A3250',A3251='$A3251',A3252='$A3252',A3253='$A3253',A3254='$A3254',A3255='$A3255',A3256='$A3256',
				A3257='$A3257',A3258='$A3258',A3259='$A3259',A3260='$A3260',A3261='$A3261',A3262='$A3262',A3263='$A3263',A3264='$A3264'
           WHERE division = $champ and annee=$annee" ;

//**********  ex�cution de la requ�te SQL: ****************

$requete = mysql_query( $sql )   ;
 
//*********   affichage des r�sultats, pour savoir si la modification a march&eacute;: ******
  
	if($requete)
	  	{
		 echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
	  	}
	else
	  	{
		echo("La modification a &eacute;chou&eacute;e") ;
	  	}
  
	}


//*******************************************************
//*                                                     *
//*           32me de finale ALLER RETOUR               *
//*                                                     *
//********************************************************

	
elseif ($type==32 and $AR==2)
{
//R�cupation des resultats des matchs ALLER
 
		$A3201 = $_POST['A3201'];
		$A3202 = $_POST['A3202'];
		$A3203 = $_POST['A3203'];
		$A3204 = $_POST['A3204'];
		
		$A3205 = $_POST['A3205'];  
		$A3206 = $_POST['A3206'];
		$A3207 = $_POST['A3207'];
		$A3208 = $_POST['A3208'];
		
		$A3209 = $_POST['A3209'];  
		$A3210 = $_POST['A3210'];
		$A3211 = $_POST['A3211'];
		$A3212 = $_POST['A3212'];
		
		$A3213 = $_POST['A3213'];  
		$A3214 = $_POST['A3214'];
		$A3215 = $_POST['A3215'];
		$A3216 = $_POST['A3216'];
		
		$A3217 = $_POST['A3217'];  
		$A3218 = $_POST['A3218'];
		$A3219 = $_POST['A3219'];
		$A3220 = $_POST['A3220'];
		
		$A3221 = $_POST['A3221'];  
		$A3222 = $_POST['A3222'];
		$A3223 = $_POST['A3223'];
		$A3224 = $_POST['A3224'];
		
		$A3225 = $_POST['A3225'];  
		$A3226 = $_POST['A3226'];
		$A3227 = $_POST['A3227'];
		$A3228 = $_POST['A3228'];
		
		$A3229 = $_POST['A3229'];  
		$A3230 = $_POST['A3230'];
		$A3231 = $_POST['A3231'];
		$A3232 = $_POST['A3232'];
		
		$A3233 = $_POST['A3233'];  
		$A3234 = $_POST['A3234'];
		$A3235 = $_POST['A3235'];
		$A3236 = $_POST['A3236'];
		
		$A3237 = $_POST['A3237'];  
		$A3238 = $_POST['A3238'];
		$A3239 = $_POST['A3239'];
		$A3240 = $_POST['A3240'];
		
		$A3241 = $_POST['A3241'];  
		$A3242 = $_POST['A3242'];
		$A3243 = $_POST['A3243'];
		$A3244 = $_POST['A3244'];
		
		$A3245 = $_POST['A3245'];  
		$A3246 = $_POST['A3246'];
		$A3247 = $_POST['A3247'];
		$A3248 = $_POST['A3248'];
		
		$A3249 = $_POST['A3249'];  
		$A3250 = $_POST['A3250'];
		$A3251 = $_POST['A3251'];
		$A3252 = $_POST['A3252'];
		
		$A3253 = $_POST['A3253'];  
		$A3254 = $_POST['A3254'];
		$A3255 = $_POST['A3255'];
		$A3256 = $_POST['A3256'];
		
		$A3257 = $_POST['A3257'];  
		$A3258 = $_POST['A3258'];
		$A3259 = $_POST['A3259'];
		$A3260 = $_POST['A3260'];
		
		$A3261 = $_POST['A3261'];  
		$A3262 = $_POST['A3262'];
		$A3263 = $_POST['A3263'];
		$A3264 = $_POST['A3264'];



//************  cr�ation de la requ�te SQL: ***************************
$sql = "	UPDATE bdpfScoresA
            SET A3201='$A3201',A3202='$A3202',A3203='$A3203',A3204='$A3204',A3205='$A3205',A3206='$A3206',A3207='$A3207',A3208='$A3208',
				A3209='$A3209',A3210='$A3210',A3211='$A3211',A3212='$A3212',A3213='$A3213',A3214='$A3214',A3215='$A3215',A3216='$A3216',
			 	A3217='$A3217',A3218='$A3218',A3219='$A3219',A3220='$A3220',A3221='$A3221',A3222='$A3222',A3223='$A3223',A3224='$A3224',
			 	A3225='$A3225',A3226='$A3226',A3227='$A3227',A3228='$A3228',A3229='$A3229',A3230='$A3230',A3231='$A3231',A3232='$A3232',
		  		A3233='$A3233',A3234='$A3234',A3235='$A3235',A3236='$A3236',A3237='$A3237',A3238='$A3238',A3239='$A3239',A3240='$A3240',
				A3241='$A3241',A3242='$A3242',A3243='$A3243',A3244='$A3244',A3245='$A3245',A3246='$A3246',A3247='$A3247',A3248='$A3248',
				A3249='$A3249',A3250='$A3250',A3251='$A3251',A3252='$A3252',A3253='$A3253',A3254='$A3254',A3255='$A3255',A3256='$A3256',
				A3257='$A3257',A3258='$A3258',A3259='$A3259',A3260='$A3260',A3261='$A3261',A3262='$A3262',A3263='$A3263',A3264='$A3264'
           WHERE division = '$champ' and annee=$annee" ;

//**********  ex�cution de la requ�te SQL: ****************

$requete= mysql_query( $sql )   ;
 
//*********   affichage des r�sultats, pour savoir si la modification a march&eacute;: ******
  
	if($requete)
	  	{
		echo "<br />";
		 echo("La modification des r&eacute;sultats Aller a &eacute;t&eacute; correctement effectu&eacute;e");
	  	}
	else
	  	{
		echo "<br />";
		echo("La modification des r&eacute;sultats Aller a &eacute;chou&eacute;e") ;
	  	}
		
		
		
//**************************************************************************************************************************		
//*************************       R�cupation des r�sultats des points terrain ALLER     ************************************

		$PTSA3201 = $_POST['PTSA3201'];
		$PTSA3202 = $_POST['PTSA3202'];
		$PTSA3203 = $_POST['PTSA3203'];
		$PTSA3204 = $_POST['PTSA3204'];
		
		$PTSA3205 = $_POST['PTSA3205'];  
		$PTSA3206 = $_POST['PTSA3206'];
		$PTSA3207 = $_POST['PTSA3207'];
		$PTSA3208 = $_POST['PTSA3208'];
		
		$PTSA3209 = $_POST['PTSA3209'];  
		$PTSA3210 = $_POST['PTSA3210'];
		$PTSA3211 = $_POST['PTSA3211'];
		$PTSA3212 = $_POST['PTSA3212'];
		
		$PTSA3213 = $_POST['PTSA3213'];  
		$PTSA3214 = $_POST['PTSA3214'];
		$PTSA3215 = $_POST['PTSA3215'];
		$PTSA3216 = $_POST['PTSA3216'];
		
		$PTSA3217 = $_POST['PTSA3217'];  
		$PTSA3218 = $_POST['PTSA3218'];
		$PTSA3219 = $_POST['PTSA3219'];
		$PTSA3220 = $_POST['PTSA3220'];
		
		$PTSA3221 = $_POST['PTSA3221'];  
		$PTSA3222 = $_POST['PTSA3222'];
		$PTSA3223 = $_POST['PTSA3223'];
		$PTSA3224 = $_POST['PTSA3224'];
		
		$PTSA3225 = $_POST['PTSA3225'];  
		$PTSA3226 = $_POST['PTSA3226'];
		$PTSA3227 = $_POST['PTSA3227'];
		$PTSA3228 = $_POST['PTSA3228'];
		
		$PTSA3229 = $_POST['PTSA3229'];  
		$PTSA3230 = $_POST['PTSA3230'];
		$PTSA3231 = $_POST['PTSA3231'];
		$PTSA3232 = $_POST['PTSA3232'];
		
		$PTSA3233 = $_POST['PTSA3233'];  
		$PTSA3234 = $_POST['PTSA3234'];
		$PTSA3235 = $_POST['PTSA3235'];
		$PTSA3236 = $_POST['PTSA3236'];
		
		$PTSA3237 = $_POST['PTSA3237'];  
		$PTSA3238 = $_POST['PTSA3238'];
		$PTSA3239 = $_POST['PTSA3239'];
		$PTSA3240 = $_POST['PTSA3240'];
		
		$PTSA3241 = $_POST['PTSA3241'];  
		$PTSA3242 = $_POST['PTSA3242'];
		$PTSA3243 = $_POST['PTSA3243'];
		$PTSA3244 = $_POST['PTSA3244'];
		
		$PTSA3245 = $_POST['PTSA3245'];  
		$PTSA3246 = $_POST['PTSA3246'];
		$PTSA3247 = $_POST['PTSA3247'];
		$PTSA3248 = $_POST['PTSA3248'];
		
		$PTSA3249 = $_POST['PTSA3249'];  
		$PTSA3250 = $_POST['PTSA3250'];
		$PTSA3251 = $_POST['PTSA3251'];
		$PTSA3252 = $_POST['PTSA3252'];
		
		$PTSA3253 = $_POST['PTSA3253'];  
		$PTSA3254 = $_POST['PTSA3254'];
		$PTSA3255 = $_POST['PTSA3255'];
		$PTSA3256 = $_POST['PTSA3256'];
		
		$PTSA3257 = $_POST['PTSA3257'];  
		$PTSA3258 = $_POST['PTSA3258'];
		$PTSA3259 = $_POST['PTSA3259'];
		$PTSA3260 = $_POST['PTSA3260'];
		
		$PTSA3261 = $_POST['PTSA3261'];  
		$PTSA3262 = $_POST['PTSA3262'];
		$PTSA3263 = $_POST['PTSA3263'];
		$PTSA3264 = $_POST['PTSA3264'];
		



//************  cr�ation de la requ�te SQL: ***************************
			
			$PTSA= $champ+500;
$sqlPTSA = "UPDATE bdpfScoresA
            SET A3201='$PTSA3201',A3202='$PTSA3202',A3203='$PTSA3203',A3204='$PTSA3204',A3205='$PTSA3205',A3206='$PTSA3206',A3207='$PTSA3207',A3208='$PTSA3208',
				A3209='$PTSA3209',A3210='$PTSA3210',A3211='$PTSA3211',A3212='$PTSA3212',A3213='$PTSA3213',A3214='$PTSA3214',A3215='$PTSA3215',A3216='$PTSA3216',
			 	A3217='$PTSA3217',A3218='$PTSA3218',A3219='$PTSA3219',A3220='$PTSA3220',A3221='$PTSA3221',A3222='$PTSA3222',A3223='$PTSA3223',A3224='$PTSA3224',
			 	A3225='$PTSA3225',A3226='$PTSA3226',A3227='$PTSA3227',A3228='$PTSA3228',A3229='$PTSA3229',A3230='$PTSA3230',A3231='$PTSA3231',A3232='$PTSA3232',
		  		A3233='$PTSA3233',A3234='$PTSA3234',A3235='$PTSA3235',A3236='$PTSA3236',A3237='$PTSA3237',A3238='$PTSA3238',A3239='$PTSA3239',A3240='$PTSA3240',
				A3241='$PTSA3241',A3242='$PTSA3242',A3243='$PTSA3243',A3244='$PTSA3244',A3245='$PTSA3245',A3246='$PTSA3246',A3247='$PTSA3247',A3248='$PTSA3248',
				A3249='$PTSA3249',A3250='$PTSA3250',A3251='$PTSA3251',A3252='$PTSA3252',A3253='$PTSA3253',A3254='$PTSA3254',A3255='$PTSA3255',A3256='$PTSA3256',
				A3257='$PTSA3257',A3258='$PTSA3258',A3259='$PTSA3259',A3260='$PTSA3260',A3261='$PTSA3261',A3262='$PTSA3262',A3263='$PTSA3263',A3264='$PTSA3264'
           WHERE division = $PTSA and annee=$annee" ;

//**********  ex�cution de la requ�te SQL: ****************

$requetePTSA = mysql_query( $sqlPTSA )   ;
 
//*********   affichage des r�sultats, pour savoir si la modification a march&eacute;e: ******
  
	if($requetePTSA)
	  	{
		echo "<br />";
		 echo("La modification des points terrain Aller a &eacute;t&eacute; correctement effectu&eacute;e");
	  	}
	else
	  	{
		echo "<br />";
		echo("La modification des points terrain Aller a &eacute;chou&eacute;e") ;
	  	}
  

//************************************************************************************************
//****************   R�cupation des resultats des matchs Retour   ********************************
 
		$R3201 = $_POST['R3201'];
		$R3202 = $_POST['R3202'];
		$R3203 = $_POST['R3203'];
		$R3204 = $_POST['R3204'];
		
		$R3205 = $_POST['R3205'];  
		$R3206 = $_POST['R3206'];
		$R3207 = $_POST['R3207'];
		$R3208 = $_POST['R3208'];
		
		$R3209 = $_POST['R3209'];  
		$R3210 = $_POST['R3210'];
		$R3211 = $_POST['R3211'];
		$R3212 = $_POST['R3212'];
		
		$R3213 = $_POST['R3213'];  
		$R3214 = $_POST['R3214'];
		$R3215 = $_POST['R3215'];
		$R3216 = $_POST['R3216'];
		
		$R3217 = $_POST['R3217'];  
		$R3218 = $_POST['R3218'];
		$R3219 = $_POST['R3219'];
		$R3220 = $_POST['R3220'];
		
		$R3221 = $_POST['R3221'];  
		$R3222 = $_POST['R3222'];
		$R3223 = $_POST['R3223'];
		$R3224 = $_POST['R3224'];
		
		$R3225 = $_POST['R3225'];  
		$R3226 = $_POST['R3226'];
		$R3227 = $_POST['R3227'];
		$R3228 = $_POST['R3228'];
		
		$R3229 = $_POST['R3229'];  
		$R3230 = $_POST['R3230'];
		$R3231 = $_POST['R3231'];
		$R3232 = $_POST['R3232'];
		
		$R3233 = $_POST['R3233'];  
		$R3234 = $_POST['R3234'];
		$R3235 = $_POST['R3235'];
		$R3236 = $_POST['R3236'];
		
		$R3237 = $_POST['R3237'];  
		$R3238 = $_POST['R3238'];
		$R3239 = $_POST['R3239'];
		$R3240 = $_POST['R3240'];
		
		$R3241 = $_POST['R3241'];  
		$R3242 = $_POST['R3242'];
		$R3243 = $_POST['R3243'];
		$R3244 = $_POST['R3244'];
		
		$R3245 = $_POST['R3245'];  
		$R3246 = $_POST['R3246'];
		$R3247 = $_POST['R3247'];
		$R3248 = $_POST['R3248'];
		
		$R3249 = $_POST['R3249'];  
		$R3250 = $_POST['R3250'];
		$R3251 = $_POST['R3251'];
		$R3252 = $_POST['R3252'];
		
		$R3253 = $_POST['R3253'];  
		$R3254 = $_POST['R3254'];
		$R3255 = $_POST['R3255'];
		$R3256 = $_POST['R3256'];
		
		$R3257 = $_POST['R3257'];  
		$R3258 = $_POST['R3258'];
		$R3259 = $_POST['R3259'];
		$R3260 = $_POST['R3260'];
		
		$R3261 = $_POST['R3261'];  
		$R3262 = $_POST['R3262'];
		$R3263 = $_POST['R3263'];
		$R3264 = $_POST['R3264'];



//************  cr�ation de la requ�te SQL: ***************************
$sql = "	UPDATE bdpfScoresR
            SET R3201='$R3201',R3202='$R3202',R3203='$R3203',R3204='$R3204',R3205='$R3205',R3206='$R3206',R3207='$R3207',R3208='$R3208',
				R3209='$R3209',R3210='$R3210',R3211='$R3211',R3212='$R3212',R3213='$R3213',R3214='$R3214',R3215='$R3215',R3216='$R3216',
			 	R3217='$R3217',R3218='$R3218',R3219='$R3219',R3220='$R3220',R3221='$R3221',R3222='$R3222',R3223='$R3223',R3224='$R3224',
			 	R3225='$R3225',R3226='$R3226',R3227='$R3227',R3228='$R3228',R3229='$R3229',R3230='$R3230',R3231='$R3231',R3232='$R3232',
		  		R3233='$R3233',R3234='$R3234',R3235='$R3235',R3236='$R3236',R3237='$R3237',R3238='$R3238',R3239='$R3239',R3240='$R3240',
				R3241='$R3241',R3242='$R3242',R3243='$R3243',R3244='$R3244',R3245='$R3245',R3246='$R3246',R3247='$R3247',R3248='$R3248',
				R3249='$R3249',R3250='$R3250',R3251='$R3251',R3252='$R3252',R3253='$R3253',R3254='$R3254',R3255='$R3255',R3256='$R3256',
				R3257='$R3257',R3258='$R3258',R3259='$R3259',R3260='$R3260',R3261='$R3261',R3262='$R3262',R3263='$R3263',R3264='$R3264'
           WHERE division = '$champ' and annee=$annee" ;

//**********  ex�cution de la requ�te SQL: ****************

$requete= mysql_query( $sql )   ;
 
//*********   affichage des r�sultats, pour savoir si la modification a march&eacute;: ******
  
	if($requete)
	  	{
		echo "<br />";
		 echo("La modification des r&eacute;sultats Retour a &eacute;t&eacute; correctement effectu&eacute;e");
	  	}
	else
	  	{
		echo "<br />";
		echo("La modification des r&eacute;sultats Retour a &eacute;chou&eacute;e") ;
	  	}




//*****************************************************************************************************
//********************    R�cupation des r�sultats des points terrain Retour   ************************

		$PTSR3201 = $_POST['PTSR3201'];
		$PTSR3202 = $_POST['PTSR3202'];
		$PTSR3203 = $_POST['PTSR3203'];
		$PTSR3204 = $_POST['PTSR3204'];
		
		$PTSR3205 = $_POST['PTSR3205'];  
		$PTSR3206 = $_POST['PTSR3206'];
		$PTSR3207 = $_POST['PTSR3207'];
		$PTSR3208 = $_POST['PTSR3208'];
		
		$PTSR3209 = $_POST['PTSR3209'];  
		$PTSR3210 = $_POST['PTSR3210'];
		$PTSR3211 = $_POST['PTSR3211'];
		$PTSR3212 = $_POST['PTSR3212'];
		
		$PTSR3213 = $_POST['PTSR3213'];  
		$PTSR3214 = $_POST['PTSR3214'];
		$PTSR3215 = $_POST['PTSR3215'];
		$PTSR3216 = $_POST['PTSR3216'];
		
		$PTSR3217 = $_POST['PTSR3217'];  
		$PTSR3218 = $_POST['PTSR3218'];
		$PTSR3219 = $_POST['PTSR3219'];
		$PTSR3220 = $_POST['PTSR3220'];
		
		$PTSR3221 = $_POST['PTSR3221'];  
		$PTSR3222 = $_POST['PTSR3222'];
		$PTSR3223 = $_POST['PTSR3223'];
		$PTSR3224 = $_POST['PTSR3224'];
		
		$PTSR3225 = $_POST['PTSR3225'];  
		$PTSR3226 = $_POST['PTSR3226'];
		$PTSR3227 = $_POST['PTSR3227'];
		$PTSR3228 = $_POST['PTSR3228'];
		
		$PTSR3229 = $_POST['PTSR3229'];  
		$PTSR3230 = $_POST['PTSR3230'];
		$PTSR3231 = $_POST['PTSR3231'];
		$PTSR3232 = $_POST['PTSR3232'];
		
		$PTSR3233 = $_POST['PTSR3233'];  
		$PTSR3234 = $_POST['PTSR3234'];
		$PTSR3235 = $_POST['PTSR3235'];
		$PTSR3236 = $_POST['PTSR3236'];
		
		$PTSR3237 = $_POST['PTSR3237'];  
		$PTSR3238 = $_POST['PTSR3238'];
		$PTSR3239 = $_POST['PTSR3239'];
		$PTSR3240 = $_POST['PTSR3240'];
		
		$PTSR3241 = $_POST['PTSR3241'];  
		$PTSR3242 = $_POST['PTSR3242'];
		$PTSR3243 = $_POST['PTSR3243'];
		$PTSR3244 = $_POST['PTSR3244'];
		
		$PTSR3245 = $_POST['PTSR3245'];  
		$PTSR3246 = $_POST['PTSR3246'];
		$PTSR3247 = $_POST['PTSR3247'];
		$PTSR3248 = $_POST['PTSR3248'];
		
		$PTSR3249 = $_POST['PTSR3249'];  
		$PTSR3250 = $_POST['PTSR3250'];
		$PTSR3251 = $_POST['PTSR3251'];
		$PTSR3252 = $_POST['PTSR3252'];
		
		$PTSR3253 = $_POST['PTSR3253'];  
		$PTSR3254 = $_POST['PTSR3254'];
		$PTSR3255 = $_POST['PTSR3255'];
		$PTSR3256 = $_POST['PTSR3256'];
		
		$PTSR3257 = $_POST['PTSR3257'];  
		$PTSR3258 = $_POST['PTSR3258'];
		$PTSR3259 = $_POST['PTSR3259'];
		$PTSR3260 = $_POST['PTSR3260'];
		
		$PTSR3261 = $_POST['PTSR3261'];  
		$PTSR3262 = $_POST['PTSR3262'];
		$PTSR3263 = $_POST['PTSR3263'];
		$PTSR3264 = $_POST['PTSR3264'];
		

 

//************  cr�ation de la requ�te SQL: ***************************
$PTSR= $champ+500;
$sqlPTSR = "UPDATE bdpfScoresR
            SET R3201='$PTSR3201',R3202='$PTSR3202',R3203='$PTSR3203',R3204='$PTSR3204',R3205='$PTSR3205',R3206='$PTSR3206',R3207='$PTSR3207',R3208='$PTSR3208',
				R3209='$PTSR3209',R3210='$PTSR3210',R3211='$PTSR3211',R3212='$PTSR3212',R3213='$PTSR3213',R3214='$PTSR3214',R3215='$PTSR3215',R3216='$PTSR3216',
			 	R3217='$PTSR3217',R3218='$PTSR3218',R3219='$PTSR3219',R3220='$PTSR3220',R3221='$PTSR3221',R3222='$PTSR3222',R3223='$PTSR3223',R3224='$PTSR3224',
			 	R3225='$PTSR3225',R3226='$PTSR3226',R3227='$PTSR3227',R3228='$PTSR3228',R3229='$PTSR3229',R3230='$PTSR3230',R3231='$PTSR3231',R3232='$PTSR3232',
		  		R3233='$PTSR3233',R3234='$PTSR3234',R3235='$PTSR3235',R3236='$PTSR3236',R3237='$PTSR3237',R3238='$PTSR3238',R3239='$PTSR3239',R3240='$PTSR3240',
				R3241='$PTSR3241',R3242='$PTSR3242',R3243='$PTSR3243',R3244='$PTSR3244',R3245='$PTSR3245',R3246='$PTSR3246',R3247='$PTSR3247',R3248='$PTSR3248',
				R3249='$PTSR3249',R3250='$PTSR3250',R3251='$PTSR3251',R3252='$PTSR3252',R3253='$PTSR3253',R3254='$PTSR3254',R3255='$PTSR3255',R3256='$PTSR3256',
				R3257='$PTSR3257',R3258='$PTSR3258',R3259='$PTSR3259',R3260='$PTSR3260',R3261='$PTSR3261',R3262='$PTSR3262',R3263='$PTSR3263',R3264='$PTSR3264'
           WHERE division = $PTSR and annee=$annee" ;

//**********  ex�cution de la requ�te SQL: ****************

$requetePTSR = mysql_query( $sqlPTSR )   ;
 
//*********   affichage des r�sultats, pour savoir si la modification a march&eacute;: ******

  
	if($requetePTSR)
	  	{
		echo "<br />";
		 echo("La modification des points terrain Retour a &eacute;t&eacute; correctement effectu&eacute;e");
	  	}
	else
	  	{
		echo "<br />";
		echo("La modification des points terrain Retour a &eacute;chou&eacute;e") ;
	  	}
  

//********************************************************




}	
	
	
	
//*******************************************************
//*                                                     *
//*           16me de finale Elimination directe        *
//*                                                     *
//********************************************************	
	
	
	

elseif ($type==16 and $AR==1)
{
	//r�cup�ration des valeurs des champs:
  
		$A1601 = $_POST['A1601'];
		$A1602 = $_POST['A1602'];
		$A1603 = $_POST['A1603'];
		$A1604 = $_POST['A1604'];
		
		$A1605 = $_POST['A1605'];  
		$A1606 = $_POST['A1606'];
		$A1607 = $_POST['A1607'];
		$A1608 = $_POST['A1608'];
		
		$A1609 = $_POST['A1609'];  
		$A1610 = $_POST['A1610'];
		$A1611 = $_POST['A1611'];
		$A1612 = $_POST['A1612'];
		
		$A1613 = $_POST['A1613'];  
		$A1614 = $_POST['A1614'];
		$A1615 = $_POST['A1615'];
		$A1616 = $_POST['A1616'];
		
		$A1617 = $_POST['A1617'];  
		$A1618 = $_POST['A1618'];
		$A1619 = $_POST['A1619'];
		$A1620 = $_POST['A1620'];
		
		$A1621 = $_POST['A1621'];  
		$A1622 = $_POST['A1622'];
		$A1623 = $_POST['A1623'];
		$A1624 = $_POST['A1624'];
		
		$A1625 = $_POST['A1625'];  
		$A1626 = $_POST['A1626'];
		$A1627 = $_POST['A1627'];
		$A1628 = $_POST['A1628'];
		
		$A1629 = $_POST['A1629'];  
		$A1630 = $_POST['A1630'];
		$A1631 = $_POST['A1631'];
		$A1632 = $_POST['A1632'];

echo $A1601.''."<br />";
echo $A1602.''."<br />";

  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresA
            SET  A1601='$A1601',A1602='$A1602',A1603='$A1603',A1604='$A1604',A1605='$A1605',A1606='$A1606',A1607='$A1607',A1608='$A1608',
				 A1609='$A1609',A1610='$A1610',A1611='$A1611',A1612='$A1612',A1613='$A1613',A1614='$A1614',A1615='$A1615',A1616='$A1616',
				 A1617='$A1617',A1618='$A1618',A1619='$A1619',A1620='$A1620',A1621='$A1621',A1622='$A1622',A1623='$A1623',A1624='$A1624',
				 A1625='$A1625',A1626='$A1626',A1627='$A1627',A1628='$A1628',A1629='$A1629',A1630='$A1630',A1631='$A1631',A1632='$A1632'
		  WHERE division = $champ and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
		{
		echo("La modification a �t� correctement effectu�e");
		}
  else
		{
		echo("La modification � �chou�e") ;
		}


	mysql_close(); 
}



//*******************************************************
//*                                                     *
//*           16me de finale ALLER RETOUR               *
//*                                                     *
//********************************************************


elseif ($type==16 and $AR==2)
{


//********************************************************************************
// ******************* R�cup�ration des scores des matchs ALLER (16me)***********
	 

		$A1601 = $_POST['A1601'];
		$A1602 = $_POST['A1602'];
		$A1603 = $_POST['A1603'];
		$A1604 = $_POST['A1604'];
		
		$A1605 = $_POST['A1605'];  
		$A1606 = $_POST['A1606'];
		$A1607 = $_POST['A1607'];
		$A1608 = $_POST['A1608'];
		
		$A1609 = $_POST['A1609'];  
		$A1610 = $_POST['A1610'];
		$A1611 = $_POST['A1611'];
		$A1612 = $_POST['A1612'];
		
		$A1613 = $_POST['A1613'];  
		$A1614 = $_POST['A1614'];
		$A1615 = $_POST['A1615'];
		$A1616 = $_POST['A1616'];
		
		$A1617 = $_POST['A1617'];  
		$A1618 = $_POST['A1618'];
		$A1619 = $_POST['A1619'];
		$A1620 = $_POST['A1620'];
		
		$A1621 = $_POST['A1621'];  
		$A1622 = $_POST['A1622'];
		$A1623 = $_POST['A1623'];
		$A1624 = $_POST['A1624'];
		
		$A1625 = $_POST['A1625'];  
		$A1626 = $_POST['A1626'];
		$A1627 = $_POST['A1627'];
		$A1628 = $_POST['A1628'];
		
		$A1629 = $_POST['A1629'];  
		$A1630 = $_POST['A1630'];
		$A1631 = $_POST['A1631'];
		$A1632 = $_POST['A1632'];

echo "scoreA : ".''.$A1601.''."<br />";
echo "scoreA : ".''.$A1602.''."<br />";


  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresA
            SET  A1601='$A1601',A1602='$A1602',A1603='$A1603',A1604='$A1604',A1605='$A1605',A1606='$A1606',A1607='$A1607',A1608='$A1608',
				 A1609='$A1609',A1610='$A1610',A1611='$A1611',A1612='$A1612',A1613='$A1613',A1614='$A1614',A1615='$A1615',A1616='$A1616',
				 A1617='$A1617',A1618='$A1618',A1619='$A1619',A1620='$A1620',A1621='$A1621',A1622='$A1622',A1623='$A1623',A1624='$A1624',
				 A1625='$A1625',A1626='$A1626',A1627='$A1627',A1628='$A1628',A1629='$A1629',A1630='$A1630',A1631='$A1631',A1632='$A1632'
		  WHERE division = $champ and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
		{
		echo("La modification a �t� correctement effectu�e");
		}
  else
		{
		echo("La modification � �chou�e") ;
		}

//********************************************************************************
// ******************* R�cup�ration des scores des matchs RETOUR (16me)***********
	 
		$R1601 = $_POST['R1601'];
		$R1602 = $_POST['R1602'];
		$R1603 = $_POST['R1603'];
		$R1604 = $_POST['R1604'];
		
		$R1605 = $_POST['R1605'];  
		$R1606 = $_POST['R1606'];
		$R1607 = $_POST['R1607'];
		$R1608 = $_POST['R1608'];
		
		$R1609 = $_POST['R1609'];  
		$R1610 = $_POST['R1610'];
		$R1611 = $_POST['R1611'];
		$R1612 = $_POST['R1612'];
		
		$R1613 = $_POST['R1613'];  
		$R1614 = $_POST['R1614'];
		$R1615 = $_POST['R1615'];
		$R1616 = $_POST['R1616'];
		
		$R1617 = $_POST['R1617'];  
		$R1618 = $_POST['R1618'];
		$R1619 = $_POST['R1619'];
		$R1620 = $_POST['R1620'];
		
		$R1621 = $_POST['R1621'];  
		$R1622 = $_POST['R1622'];
		$R1623 = $_POST['R1623'];
		$R1624 = $_POST['R1624'];
		
		$R1625 = $_POST['R1625'];  
		$R1626 = $_POST['R1626'];
		$R1627 = $_POST['R1627'];
		$R1628 = $_POST['R1628'];
		
		$R1629 = $_POST['R1629'];  
		$R1630 = $_POST['R1630'];
		$R1631 = $_POST['R1631'];
		$R1632 = $_POST['R1632'];

echo "scoreR : ".''.$R1601.''."<br />";
echo "scoreR : ".''.$R1602.''."<br />"; 


  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresR
            SET  R1601='$R1601',R1602='$R1602',R1603='$R1603',R1604='$R1604',R1605='$R1605',R1606='$R1606',R1607='$R1607',R1608='$R1608',
				 R1609='$R1609',R1610='$R1610',R1611='$R1611',R1612='$R1612',R1613='$R1613',R1614='$R1614',R1615='$R1615',R1616='$R1616',
				 R1617='$R1617',R1618='$R1618',R1619='$R1619',R1620='$R1620',R1621='$R1621',R1622='$R1622',R1623='$R1623',R1624='$R1624',
				 R1625='$R1625',R1626='$R1626',R1627='$R1627',R1628='$R1628',R1629='$R1629',R1630='$R1630',R1631='$R1631',R1632='$R1632'
		  WHERE division = $champ and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
		{
		echo("La modification a �t� correctement effectu�e");
		}
  else
		{
		echo("La modification � �chou�e") ;
		}
//**********************************************************************************
// *************  R�cup�ration de spoints terrain des matchs ALLER (16me)   ********

		$PTSA1601 = $_POST['PTSA1601'];
		$PTSA1602 = $_POST['PTSA1602'];
		$PTSA1603 = $_POST['PTSA1603'];
		$PTSA1604 = $_POST['PTSA1604'];
		
		$PTSA1605 = $_POST['PTSA1605'];  
		$PTSA1606 = $_POST['PTSA1606'];
		$PTSA1607 = $_POST['PTSA1607'];
		$PTSA1608 = $_POST['PTSA1608'];
		
		$PTSA1609 = $_POST['PTSA1609'];  
		$PTSA1610 = $_POST['PTSA1610'];
		$PTSA1611 = $_POST['PTSA1611'];
		$PTSA1612 = $_POST['PTSA1612'];
		
		$PTSA1613 = $_POST['PTSA1613'];  
		$PTSA1614 = $_POST['PTSA1614'];
		$PTSA1615 = $_POST['PTSA1615'];
		$PTSA1616 = $_POST['PTSA1616'];
		
		$PTSA1617 = $_POST['PTSA1617'];  
		$PTSA1618 = $_POST['PTSA1618'];
		$PTSA1619 = $_POST['PTSA1619'];
		$PTSA1620 = $_POST['PTSA1620'];
		
		$PTSA1621 = $_POST['PTSA1621'];  
		$PTSA1622 = $_POST['PTSA1622'];
		$PTSA1623 = $_POST['PTSA1623'];
		$PTSA1624 = $_POST['PTSA1624'];
		
		$PTSA1625 = $_POST['PTSA1625'];  
		$PTSA1626 = $_POST['PTSA1626'];
		$PTSA1627 = $_POST['PTSA1627'];
		$PTSA1628 = $_POST['PTSA1628'];
		
		$PTSA1629 = $_POST['PTSA1629'];  
		$PTSA1630 = $_POST['PTSA1630'];
		$PTSA1631 = $_POST['PTSA1631'];
		$PTSA1632 = $_POST['PTSA1632'];

echo "ptsA : ".''.$PTSA1601.''."<br />";
echo "ptsA : ".''.$PTSA1602.''."<br />";  



  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresA
            SET  A1601='$PTSA1601',A1602='$PTSA1602',A1603='$PTSA1603',A1604='$PTSA1604',A1605='$PTSA1605',A1606='$PTSA1606',A1607='$PTSA1607',A1608='$PTSA1608',
				 A1609='$PTSA1609',A1610='$PTSA1610',A1611='$PTSA1611',A1612='$PTSA1612',A1613='$PTSA1613',A1614='$PTSA1614',A1615='$PTSA1615',A1616='$PTSA1616',
				 A1617='$PTSA1617',A1618='$PTSA1618',A1619='$PTSA1619',A1620='$PTSA1620',A1621='$PTSA1621',A1622='$PTSA1622',A1623='$PTSA1623',A1624='$PTSA1624',
				 A1625='$PTSA1625',A1626='$PTSA1626',A1627='$PTSA1627',A1628='$PTSA1628',A1629='$PTSA1629',A1630='$PTSA1630',A1631='$PTSA1631',A1632='$PTSA1632'
		  WHERE division = $champ+500 and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
		{
		echo("La modification a �t� correctement effectu�e");
		}
  else
		{
		echo("La modification � �chou�e") ;
		}
		
		
//**********************************************************************************		
// ******************* R�cup�ration des Points terrain des matchs RETOUR (16me)*****
	 
		$PTSR1601 = $_POST['PTSR1601'];
		$PTSR1602 = $_POST['PTSR1602'];
		$PTSR1603 = $_POST['PTSR1603'];
		$PTSR1604 = $_POST['PTSR1604'];
		
		$PTSR1605 = $_POST['PTSR1605'];  
		$PTSR1606 = $_POST['PTSR1606'];
		$PTSR1607 = $_POST['PTSR1607'];
		$PTSR1608 = $_POST['PTSR1608'];
		
		$PTSR1609 = $_POST['PTSR1609'];  
		$PTSR1610 = $_POST['PTSR1610'];
		$PTSR1611 = $_POST['PTSR1611'];
		$PTSR1612 = $_POST['PTSR1612'];
		
		$PTSR1613 = $_POST['PTSR1613'];  
		$PTSR1614 = $_POST['PTSR1614'];
		$PTSR1615 = $_POST['PTSR1615'];
		$PTSR1616 = $_POST['PTSR1616'];
		
		$PTSR1617 = $_POST['PTSR1617'];  
		$PTSR1618 = $_POST['PTSR1618'];
		$PTSR1619 = $_POST['PTSR1619'];
		$PTSR1620 = $_POST['PTSR1620'];
		
		$PTSR1621 = $_POST['PTSR1621'];  
		$PTSR1622 = $_POST['PTSR1622'];
		$PTSR1623 = $_POST['PTSR1623'];
		$PTSR1624 = $_POST['PTSR1624'];
		
		$PTSR1625 = $_POST['PTSR1625'];  
		$PTSR1626 = $_POST['PTSR1626'];
		$PTSR1627 = $_POST['PTSR1627'];
		$PTSR1628 = $_POST['PTSR1628'];
		
		$PTSR1629 = $_POST['PTSR1629'];  
		$PTSR1630 = $_POST['PTSR1630'];
		$PTSR1631 = $_POST['PTSR1631'];
		$PTSR1632 = $_POST['PTSR1632'];
		
		
echo "ptsR : ".''.$PTSR1601.''."<br />";
echo "ptsR : ".''.$PTSR1602.''."<br />";

  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresR
            SET  R1601='$PTSR1601',R1602='$PTSR1602',R1603='$PTSR1603',R1604='$PTSR1604',R1605='$PTSR1605',R1606='$PTSR1606',R1607='$PTSR1607',R1608='$PTSR1608',
				 R1609='$PTSR1609',R1610='$PTSR1610',R1611='$PTSR1611',R1612='$PTSR1612',R1613='$PTSR1613',R1614='$PTSR1614',R1615='$PTSR1615',R1616='$PTSR1616',
				 R1617='$PTSR1617',R1618='$PTSR1618',R1619='$PTSR1619',R1620='$PTSR1620',R1621='$PTSR1621',R1622='$PTSR1622',R1623='$PTSR1623',R1624='$PTSR1624',
				 R1625='$PTSR1625',R1626='$PTSR1626',R1627='$PTSR1627',R1628='$PTSR1628',R1629='$PTSR1629',R1630='$PTSR1630',R1631='$PTSR1631',R1632='$PTSR1632'
		  WHERE division = $champ + 500 and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
		{
		echo("La modification a �t� correctement effectu�e");
		}
  else
		{
		echo("La modification � �chou�e") ;
		}


}

	
//*******************************************************
//*                                                     *
//*           8me de finale Elimination directe         *
//*                                                     *
//********************************************************
	
elseif ($type==8 and $AR==1)
{
 
	 
	 
//********  r�cup�ration des r�sultats des rencontres  *********
  
		$A8001 = $_POST['A8001'];
		$A8002 = $_POST['A8002'];
		$A8003 = $_POST['A8003'];
		$A8004 = $_POST['A8004'];
		
		$A8005 = $_POST['A8005'];  
		$A8006 = $_POST['A8006'];
		$A8007 = $_POST['A8007'];
		$A8008 = $_POST['A8008'];
		
		$A8009 = $_POST['A8009'];  
		$A8010 = $_POST['A8010'];
		$A8011 = $_POST['A8011'];
		$A8012 = $_POST['A8012'];
		
		$A8013 = $_POST['A8013'];  
		$A8014 = $_POST['A8014'];
		$A8015 = $_POST['A8015'];
		$A8016 = $_POST['A8016'];

 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresA
            SET  A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004', A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',
				 A8009='$A8009', A8010='$A8010', A8011='$A8011', A8012='$A8012', A8013='$A8013', A8014='$A8014', A8015='$A8015', A8016='$A8016'
		  WHERE division = '$champ' and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo("La modification a �t� correctement effectu�e");
		}
	  else
		{
		echo("La modification � �chou�e") ;
		}
	
}


//*******************************************************
//*                                                     *
//*           8me de finale ALLER RETOUR                *
//*                                                     *
//********************************************************


elseif ($type==8 and $AR==2)
{

//********************************************************************************
// ******************* R�cup�ration des scores des matchs ALLER (8me)***********
	 
		$A8001 = $_POST['A8001'];
		$A8002 = $_POST['A8002'];
		$A8003 = $_POST['A8003'];
		$A8004 = $_POST['A8004'];
		
		$A8005 = $_POST['A8005'];  
		$A8006 = $_POST['A8006'];
		$A8007 = $_POST['A8007'];
		$A8008 = $_POST['A8008'];
		
		$A8009 = $_POST['A8009'];  
		$A8010 = $_POST['A8010'];
		$A8011 = $_POST['A8011'];
		$A8012 = $_POST['A8012'];
		
		$A8013 = $_POST['A8013'];  
		$A8014 = $_POST['A8014'];
		$A8015 = $_POST['A8015'];
		$A8016 = $_POST['A8016'];

 		echo $A8001;
			echo $A8002;
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresA
            SET  A8001='$A8001', A8002='$A8002', A8003='$A8003', A8004='$A8004', A8005='$A8005', A8006='$A8006', A8007='$A8007', A8008='$A8008',
				 A8009='$A8009', A8010='$A8010', A8011='$A8011', A8012='$A8012', A8013='$A8013', A8014='$A8014', A8015='$A8015', A8016='$A8016'
		  WHERE division = '$champ' and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}


//********************************************************************************
// ******************* R�cup�ration des scores des matchs RETOUR (8me)***********
	 
		$R8001 = $_POST['R8001'];
		$R8002 = $_POST['R8002'];
		$R8003 = $_POST['R8003'];
		$R8004 = $_POST['R8004'];
		
		$R8005 = $_POST['R8005'];  
		$R8006 = $_POST['R8006'];
		$R8007 = $_POST['R8007'];
		$R8008 = $_POST['R8008'];
		
		$R8009 = $_POST['R8009'];  
		$R8010 = $_POST['R8010'];
		$R8011 = $_POST['R8011'];
		$R8012 = $_POST['R8012'];
		
		$R8013 = $_POST['R8013'];  
		$R8014 = $_POST['R8014'];
		$R8015 = $_POST['R8015'];
		$R8016 = $_POST['R8016'];

 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresR
            SET  R8001='$R8001', R8002='$R8002', R8003='$R8003', R8004='$R8004', R8005='$R8005', R8006='$R8006', R8007='$R8007', R8008='$R8008',
				 R8009='$R8009', R8010='$R8010', R8011='$R8011', R8012='$R8012', R8013='$R8013', R8014='$R8014', R8015='$R8015', R8016='$R8016'
		  WHERE division = '$champ' and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}

//********************************************************************************
// ******************* R�cup�ration points TERRAIN des matchs ALLER (8me)***********
	
		$PTSA8001 = $_POST['PTSA8001'];
		$PTSA8002 = $_POST['PTSA8002'];
		$PTSA8003 = $_POST['PTSA8003'];
		$PTSA8004 = $_POST['PTSA8004'];
		
		$PTSA8005 = $_POST['PTSA8005'];  
		$PTSA8006 = $_POST['PTSA8006'];
		$PTSA8007 = $_POST['PTSA8007'];
		$PTSA8008 = $_POST['PTSA8008'];
		
		$PTSA8009 = $_POST['PTSA8009'];  
		$PTSA8010 = $_POST['PTSA8010'];
		$PTSA8011 = $_POST['PTSA8011'];
		$PTSA8012 = $_POST['PTSA8012'];
		
		$PTSA8013 = $_POST['PTSA8013'];  
		$PTSA8014 = $_POST['PTSA8014'];
		$PTSA8015 = $_POST['PTSA8015'];
		$PTSA8016 = $_POST['PTSA8016'];

 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresA
            SET  A8001='$PTSA8001', A8002='$PTSA8002', A8003='$PTSA8003', A8004='$PTSA8004', A8005='$PTSA8005', A8006='$PTSA8006', A8007='$PTSA8007', A8008='$PTSA8008',
				 A8009='$PTSA8009', A8010='$PTSA8010', A8011='$PTSA8011', A8012='$PTSA8012', A8013='$PTSA8013', A8014='$PTSA8014', A8015='$PTSA8015', A8016='$PTSA8016'
		  WHERE division = $champ + 500 and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}
		
		
//********************************************************************************
// ******************* R�cup�ration points TERRAIN des matchs RETOUR (8me)***********
		
		$PTSR8001 = $_POST['PTSR8001'];
		$PTSR8002 = $_POST['PTSR8002'];
		$PTSR8003 = $_POST['PTSR8003'];
		$PTSR8004 = $_POST['PTSR8004'];
		
		$PTSR8005 = $_POST['PTSR8005'];  
		$PTSR8006 = $_POST['PTSR8006'];
		$PTSR8007 = $_POST['PTSR8007'];
		$PTSR8008 = $_POST['PTSR8008'];
		
		$PTSR8009 = $_POST['PTSR8009'];  
		$PTSR8010 = $_POST['PTSR8010'];
		$PTSR8011 = $_POST['PTSR8011'];
		$PTSR8012 = $_POST['PTSR8012'];
		
		$PTSR8013 = $_POST['PTSR8013'];  
		$PTSR8014 = $_POST['PTSR8014'];
		$PTSR8015 = $_POST['PTSR8015'];
		$PTSR8016 = $_POST['PTSR8016'];

 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresR
          SET  R8001='$PTSR8001', R8002='$PTSR8002', R8003='$PTSR8003', R8004='$PTSR8004', R8005='$PTSR8005', R8006='$PTSR8006', R8007='$PTSR8007', R8008='$PTSR8008',
			   R8009='$PTSR8009', R8010='$PTSR8010', R8011='$PTSR8011', R8012='$PTSR8012', R8013='$PTSR8013', R8014='$PTSR8014', R8015='$PTSR8015', R8016='$PTSR8016'
		  WHERE division = $champ + 500 and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}
			
}

//*******************************************************
//*                                                     *
//*           Quarts de finale Elimination directe      *
//*                                                     *
//********************************************************

elseif ($type==4 and $AR==1)
	{

	//r�cup�ration des valeurs des champs:
		  
		$A4001 = $_POST['A4001'];
		$A4002 = $_POST['A4002'];
		$A4003 = $_POST['A4003'];
		$A4004 = $_POST['A4004'];
		
		$A4005 = $_POST['A4005'];  
		$A4006 = $_POST['A4006'];
		$A4007 = $_POST['A4007'];
		$A4008 = $_POST['A4008'];
		
		$A2001 = $_POST['A2001'];
		$A2002 = $_POST['A2002'];
		$A2003 = $_POST['A2003'];
		$A2004 = $_POST['A2004'];
		
		$A1001 = $_POST['A1001'];
		$A1002 = $_POST['A1002'];
	
		echo $A4003 ;
		echo $A4004 ;
		
		
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 

		   
		$sql = "UPDATE bdpfScoresA
				SET  A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
					 A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008',
					 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',
					 A1001='$A1001', A1002='$A1002'
				WHERE division = $champ and annee = $annee " ;
		 
	//ex�cution de la requ�te SQL:
		$requete = mysql_query( $sql )   ;
		 
		 
	//affichage des r�sultats, pour savoir si la modification a march�e:
		  if($requete)
				{
				echo("La modification a &eacute;t&eacute;  correctement effectu&eacute;e");
				}
		  	else
				{
				echo("La modification a �chou&eacute; ") ;
				}
		mysql_close(); 
	}

//*******************************************************
//*                                                     *
//*          Quarts de finale ALLER RETOUR              *
//*                                                     *
//********************************************************
elseif ($type==4 and $AR==2)
{

//********************************************************************************
// ******************* R�cup�ration des scores des matchs ALLER (Quarts)***********
	 
		$A4001 = $_POST['A4001'];
		$A4002 = $_POST['A4002'];
		$A4003 = $_POST['A4003'];
		$A4004 = $_POST['A4004'];
		
		$A4005 = $_POST['A4005'];  
		$A4006 = $_POST['A4006'];
		$A4007 = $_POST['A4007'];
		$A4008 = $_POST['A4008'];
		
		 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresA
            SET  	A4001='$A4001', A4002='$A4002', A4003='$A4003', A4004='$A4004',
					A4005='$A4005', A4006='$A4006', A4007='$A4007', A4008='$A4008'
	        WHERE 	division = '$champ' and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}


//********************************************************************************
// ******************* R�cup�ration des scores des matchs RETOUR (Quarts)***********
	 
		$R4001 = $_POST['R4001'];
		$R4002 = $_POST['R4002'];
		$R4003 = $_POST['R4003'];
		$R4004 = $_POST['R4004'];
		
		$R4005 = $_POST['R4005'];  
		$R4006 = $_POST['R4006'];
		$R4007 = $_POST['R4007'];
		$R4008 = $_POST['R4008'];
		
		

 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresR
            SET  R4001='$R4001', R4002='$R4002', R4003='$R4003', R4004='$R4004', 
				 R4005='$R4005', R4006='$R4006', R4007='$R4007', R4008='$R4008'
			WHERE division = '$champ' and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}

//********************************************************************************
// ******************* R�cup�ration points TERRAIN des matchs ALLER (Quarts)***********
	
		$PTSA4001 = $_POST['PTSA4001'];
		$PTSA4002 = $_POST['PTSA4002'];
		$PTSA4003 = $_POST['PTSA4003'];
		$PTSA4004 = $_POST['PTSA4004'];
		
		$PTSA4005 = $_POST['PTSA4005'];  
		$PTSA4006 = $_POST['PTSA4006'];
		$PTSA4007 = $_POST['PTSA4007'];
		$PTSA4008 = $_POST['PTSA4008'];
		 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresA
            SET  	A4001='$PTSA4001', A4002='$PTSA4002', A4003='$PTSA4003', A4004='$PTSA4004',
					A4005='$PTSA4005', A4006='$PTSA4006', A4007='$PTSA4007', A4008='$PTSA4008'
			WHERE division = $champ + 500 and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}
		
		
//********************************************************************************
// ******************* R�cup�ration points TERRAIN des matchs RETOUR (Quarts)***********
		
		$PTSR4001 = $_POST['PTSR4001'];
		$PTSR4002 = $_POST['PTSR4002'];
		$PTSR4003 = $_POST['PTSR4003'];
		$PTSR4004 = $_POST['PTSR4004'];
		
		$PTSR4005 = $_POST['PTSR4005'];  
		$PTSR4006 = $_POST['PTSR4006'];
		$PTSR4007 = $_POST['PTSR4007'];
		$PTSR4008 = $_POST['PTSR4008'];
		 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresR
          SET  	R4001='$PTSR4001', R4002='$PTSR4002', R4003='$PTSR4003', R4004='$PTSR4004',
				R4005='$PTSR4005', R4006='$PTSR4006', R4007='$PTSR4007', R4008='$PTSR4008'
		  WHERE division = $champ + 500 and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}

}	

//*******************************************************
//*                                                     *
//*          Demi de finale Elimination directe         *
//*                                                     *
//********************************************************


elseif ($type==2 and $AR==1)
	{
	
	//********************************************************************************
// ******************* R�cup�ration des scores des matchs (DEMI)***********
	 
		$A2001 = $_POST['A2001'];
		$A2002 = $_POST['A2002'];
		$A2003 = $_POST['A2003'];
		$A2004 = $_POST['A2004'];
		
		$A1001 = $_POST['A1001'];
		$A1002 = $_POST['A1002'];
		
		 
  //cr�ation de la requ�te SQL:
  $sql = "	UPDATE bdpfScoresA
            SET  	A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004',  
					A1001='$A1001', A1002='$A1002'
			WHERE division = $champ and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}
	
	}
	
//*******************************************************
//*                                                     *
//*          Demi  finale ALLER RETOUR                  *
//*                                                     *
//********************************************************
	
elseif ($type==2 and $AR==2)
{
//********************************************************************************
// ******************* R�cup�ration des scores des matchs ALLER (demi)***********
	 
		$A2001 = $_POST['A2001'];
		$A2002 = $_POST['A2002'];
		$A2003 = $_POST['A2003'];
		$A2004 = $_POST['A2004'];
		
		$A1001 = $_POST['A1001'];
		$A1002 = $_POST['A1002'];
		
	echo $A2001;
	echo $A2002;	
 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresA
            SET 	 A2001='$A2001', A2002='$A2002', A2003='$A2003', A2004='$A2004', 
					 A1001='$A1001', A1002='$A1002'
			WHERE division = $champ and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}


//********************************************************************************
// ******************* R�cup�ration des scores des matchs RETOUR (DEMI)***********
	 
		$R2001 = $_POST['R2001'];
		$R2002 = $_POST['R2002'];
		$R2003 = $_POST['R2003'];
		$R2004 = $_POST['R2004'];
		
		$R1001 = $_POST['R1001'];
		$R1002 = $_POST['R1002'];
		
		 
		echo $R2001;
		echo $R2002; 
		 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresR
            SET  	R2001='$R2001', R2002='$R2002', R2003='$R2003', R2004='$R2004',  
					R1001='$R1001', R1002='$R1002'
			WHERE division = '$champ' and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}

//********************************************************************************
// ******************* R�cup�ration points TERRAIN des matchs ALLER (DEMI)***********
	
		$PTSA2001 = $_POST['PTSA2001'];
		$PTSA2002 = $_POST['PTSA2002'];
		$PTSA2003 = $_POST['PTSA2003'];
		$PTSA2004 = $_POST['PTSA2004'];
		
		$PTSA1001 = $_POST['PTSA1001'];
		$PTSA1002 = $_POST['PTSA1002'];
		
		 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresA
            SET  	A2001='$PTSA2001', A2002='$PTSA2002', A2003='$PTSA2003', A2004='$PTSA2004',
					A1001='$PTSA1001', A1002='$PTSA1002'
			WHERE division = $champ + 500 and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}
		
		
//********************************************************************************
// ******************* R�cup�ration points TERRAIN des matchs RETOUR (DEMI)***********
		
		$PTSR2001 = $_POST['PTSR2001'];
		$PTSR2002 = $_POST['PTSR2002'];
		$PTSR2003 = $_POST['PTSR2003'];
		$PTSR2004 = $_POST['PTSR2004'];
		
		$PTSR1001 = $_POST['PTSR1001'];
		$PTSR1002 = $_POST['PTSR1002'];
		
		 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpfScoresR
          SET  	R2001='$PTSR2001', R2002='$PTSR2002', R2003='$PTSR2003', R2004='$PTSR2004',
		  		R1001='$PTSR1001', R1002='$PTSR1002'
		  WHERE division = $champ + 500 and annee=$annee" ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
	  if($requete)
		{
		echo "<br />";
		echo("La modification a &eacute;t&eacute; correctement effectu&eacute;e");
		}
	  else
		{
		echo "<br />";	
		echo("La modification � �chou&eacute;") ;
		}
			


}		
	
elseif ($type==1 and $AR==1)
	{
	
	}
	
elseif ($type==1 and $AR==2)
{



}		

?>
   </p>
<p> <a href=accueilsaisiescore.php?annee=<?php echo $annee; ?>>Retour </a> 
<p>&nbsp;

