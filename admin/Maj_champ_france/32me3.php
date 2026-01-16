<head>
<title>modification de données en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
<?php 
$niv=$_POST['niv']; 
$id=$_POST['id']; 
$annee=$_GET['annee']; 
?>

<?php echo $id; ?> - <?php echo $niv; ?> - <?php echo $annee; ?>

<?php $annee2=($annee.''."_2");
 
require ("../../connect/connection1.php");

?>
  <?php
  //récupération des valeurs des champs:
  
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

?>
  <font size="6"> 
  <?php echo $A3204;?>
  <?php echo $A3201;?>
  <br/>
  <?php echo $A3202;?>
  <br/>
  <?php echo $A3203;?>
  <br/>
  <br/>
  <br/>
  <br/>
  </font> <font size="4"><b>
<?php
  //récupération de l'identifiant de la personne:
  $id         = $_POST["id"] ;
//  echo $id;
 
//************  création de la requête SQL: ***************************
$sql = "	UPDATE bdpf$annee
            SET A3201='$A3201',A3202='$A3202',A3203='$A3203',A3204='$A3204',A3205='$A3205',A3206='$A3206',A3207='$A3207',A3208='$A3208',
				A3209='$A3209',A3210='$A3210',A3211='$A3211',A3212='$A3212',A3213='$A3213',A3214='$A3214',A3215='$A3215',A3216='$A3216',
			 	A3217='$A3217',A3218='$A3218',A3219='$A3219',A3220='$A3220',A3221='$A3221',A3222='$A3222',A3223='$A3223',A3224='$A3224',
			 	A3225='$A3225',A3226='$A3226',A3227='$A3227',A3228='$A3228',A3229='$A3229',A3230='$A3230',A3231='$A3231',A3232='$A3232',
		  		A3233='$A3233',A3234='$A3234',A3235='$A3235',A3236='$A3236',A3237='$A3237',A3238='$A3238',A3239='$A3239',A3240='$A3240',
				A3241='$A3241',A3242='$A3242',A3243='$A3243',A3244='$A3244',A3245='$A3245',A3246='$A3246',A3247='$A3247',A3248='$A3248',
				A3249='$A3249',A3250='$A3250',A3251='$A3251',A3252='$A3252',A3253='$A3253',A3254='$A3254',A3255='$A3255',A3256='$A3256',
				A3257='$A3257',A3258='$A3258',A3259='$A3259',A3260='$A3260',A3261='$A3261',A3262='$A3262',A3263='$A3263',A3264='$A3264'
           WHERE id = '$id' " ;

//**********  exécution de la requête SQL: ****************

$requete = mysql_query( $sql )   ;
 
//*********   affichage des résultats, pour savoir si la modification a march&eacute;: ******
  
if($requete)
  {
  	 echo("La modification a &eacute;t&eacute; correctement effectu&eacute;");
  }
else
  {
    echo("La modification à échou&eacute;") ;
  }
  
//*******************************************************
//*********************  Nouvelle base  ***************** 
  
//************  création de la requête SQL: ***************************

$sqlnvx = "	UPDATE bdpfScoresA
            SET A3201='$A3201',A3202='$A3202',A3203='$A3203',A3204='$A3204',A3205='$A3205',A3206='$A3206',A3207='$A3207',A3208='$A3208',
				A3209='$A3209',A3210='$A3210',A3211='$A3211',A3212='$A3212',A3213='$A3213',A3214='$A3214',A3215='$A3215',A3216='$A3216',
			 	A3217='$A3217',A3218='$A3218',A3219='$A3219',A3220='$A3220',A3221='$A3221',A3222='$A3222',A3223='$A3223',A3224='$A3224',
			 	A3225='$A3225',A3226='$A3226',A3227='$A3227',A3228='$A3228',A3229='$A3229',A3230='$A3230',A3231='$A3231',A3232='$A3232',
		  		A3233='$A3233',A3234='$A3234',A3235='$A3235',A3236='$A3236',A3237='$A3237',A3238='$A3238',A3239='$A3239',A3240='$A3240',
				A3241='$A3241',A3242='$A3242',A3243='$A3243',A3244='$A3244',A3245='$A3245',A3246='$A3246',A3247='$A3247',A3248='$A3248',
				A3249='$A3249',A3250='$A3250',A3251='$A3251',A3252='$A3252',A3253='$A3253',A3254='$A3254',A3255='$A3255',A3256='$A3256',
				A3257='$A3257',A3258='$A3258',A3259='$A3259',A3260='$A3260',A3261='$A3261',A3262='$A3262',A3263='$A3263',A3264='$A3264'
           WHERE id = '$id' " ;

//**********  exécution de la requête SQL: ****************

$requetenvx = mysql_query( $sqlnvx )   ;
 
//*********   affichage des résultats, pour savoir si la modification a march&eacute;: ******
  
if($requetenvx)
  {
  	 echo "<br />";
	 echo("La modification nvx a &eacute;t&eacute; correctement effectu&eacute;");
  }
else
  {
    echo("La modification à échouée") ;
  }  
  
  
  
?>
  </b></font> 
  
  
<?php
mysql_close(); // Déconnexion de MySQL
?>
</p>
<p> 
  
<a href=http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/accueilsaisiescore.php?annee=<?php echo $annee; ?> > Retour </a>
 
<p>&nbsp;

