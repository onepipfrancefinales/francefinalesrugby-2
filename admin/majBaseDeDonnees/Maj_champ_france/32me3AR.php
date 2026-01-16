<head>
<title>modification de donn�es en PHP :: partie2</title>
<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<p> 
<?php $niv=$_POST['niv']; ?>
<?php $id=$_POST['id']; ?>
<?php echo $id; ?><?php echo $niv; ?>



<?php $annee=$_GET['annee']; ?>
<?php $annee=2018; ?>
<?php $annee2=($annee.''."_2"); ?> 

<?php $id=$_POST['id']; ?>
 
  <?php
mysql_connect("sql.franceserv.fr", "onepip-france", "Lavelan1969&"); 
mysql_select_db("onepip-france-db1"); 
?>
  <?php
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

?>

  <?php
  //r�cup�ration des valeurs des champs:
  
$Apts3201 = $_POST['Apts3201'];
$Apts3202 = $_POST['Apts3202'];
$Apts3203 = $_POST['Apts3203'];
$Apts3204 = $_POST['Apts3204'];

$Apts3205 = $_POST['Apts3205'];  
$Apts3206 = $_POST['Apts3206'];
$Apts3207 = $_POST['Apts3207'];
$Apts3208 = $_POST['Apts3208'];

$Apts3209 = $_POST['Apts3209'];  
$Apts3210 = $_POST['Apts3210'];
$Apts3211 = $_POST['Apts3211'];
$Apts3212 = $_POST['Apts3212'];

$Apts3213 = $_POST['Apts3213'];  
$Apts3214 = $_POST['Apts3214'];
$Apts3215 = $_POST['Apts3215'];
$Apts3216 = $_POST['Apts3216'];

$Apts3217 = $_POST['Apts3217'];  
$Apts3218 = $_POST['Apts3218'];
$Apts3219 = $_POST['Apts3219'];
$Apts3220 = $_POST['Apts3220'];

$Apts3221 = $_POST['Apts3221'];  
$Apts3222 = $_POST['Apts3222'];
$Apts3223 = $_POST['Apts3223'];
$Apts3224 = $_POST['Apts3224'];

$Apts3225 = $_POST['Apts3225'];  
$Apts3226 = $_POST['Apts3226'];
$Apts3227 = $_POST['Apts3227'];
$Apts3228 = $_POST['Apts3228'];

$Apts3229 = $_POST['Apts3229'];  
$Apts3230 = $_POST['Apts3230'];
$Apts3231 = $_POST['Apts3231'];
$Apts3232 = $_POST['Apts3232'];

$Apts3233 = $_POST['Apts3233'];  
$Apts3234 = $_POST['Apts3234'];
$Apts3235 = $_POST['Apts3235'];
$Apts3236 = $_POST['Apts3236'];

$Apts3237 = $_POST['Apts3237'];  
$Apts3238 = $_POST['Apts3238'];
$Apts3239 = $_POST['Apts3239'];
$Apts3240 = $_POST['Apts3240'];

$Apts3241 = $_POST['Apts3241'];  
$Apts3242 = $_POST['Apts3242'];
$Apts3243 = $_POST['Apts3243'];
$Apts3244 = $_POST['Apts3244'];

$Apts3245 = $_POST['Apts3245'];  
$Apts3246 = $_POST['Apts3246'];
$Apts3247 = $_POST['Apts3247'];
$Apts3248 = $_POST['Apts3248'];

$Apts3249 = $_POST['Apts3249'];  
$Apts3250 = $_POST['Apts3250'];
$Apts3251 = $_POST['Apts3251'];
$Apts3252 = $_POST['Apts3252'];

$Apts3253 = $_POST['Apts3253'];  
$Apts3254 = $_POST['Apts3254'];
$Apts3255 = $_POST['Apts3255'];
$Apts3256 = $_POST['Apts3256'];

$Apts3257 = $_POST['Apts3257'];  
$Apts3258 = $_POST['Apts3258'];
$Apts3259 = $_POST['Apts3259'];
$Apts3260 = $_POST['Apts3260'];

$Apts3261 = $_POST['Apts3261'];  
$Apts3262 = $_POST['Apts3262'];
$Apts3263 = $_POST['Apts3263'];
$Apts3264 = $_POST['Apts3264'];

?>




  <font size="6"> 
  <?php echo $A3204;?>
  <?php echo $A3201;?>
  <br/>
  <?php echo $A3202;?>
  <br/>
  <?php echo $A3203;?>
  <br/>
 
  </font> <font size="4"><b>
  <?php
  //r�cup�ration de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE bdpf$annee
            SET  A3201='$A3201',A3202='$A3202',A3203='$A3203',A3204='$A3204',A3205='$A3205',A3206='$A3206',A3207='$A3207',A3208='$A3208',
				 A3209='$A3209',A3210='$A3210',A3211='$A3211',A3212='$A3212',A3213='$A3213',A3214='$A3214',A3215='$A3215',A3216='$A3216',
				 A3217='$A3217',A3218='$A3218',A3219='$A3219',A3220='$A3220',A3221='$A3221',A3222='$A3222',A3223='$A3223',A3224='$A3224',
				 A3225='$A3225',A3226='$A3226',A3227='$A3227',A3228='$A3228',A3229='$A3229',A3230='$A3230',A3231='$A3231',A3232='$A3232',
		  		 A3233='$A3233',A3234='$A3234',A3235='$A3235',A3236='$A3236',A3237='$A3237',A3238='$A3238',A3239='$A3239',A3240='$A3240',
				 A3241='$A3241',A3242='$A3242',A3243='$A3243',A3244='$A3244',A3245='$A3245',A3246='$A3246',A3247='$A3247',A3248='$A3248',
				 A3249='$A3249',A3250='$A3250',A3251='$A3251',A3252='$A3252',A3253='$A3253',A3254='$A3254',A3255='$A3255',A3256='$A3256',
				 A3257='$A3257',A3258='$A3258',A3259='$A3259',A3260='$A3260',A3261='$A3261',A3262='$A3262',A3263='$A3263',A3264='$A3264'
           WHERE id = 160 " ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql )   ;
  
  
   //cr�ation de la requ�te SQL:
  $sql2 = "UPDATE bdpf$annee
            SET  A3201='$Apts3201',A3202='$Apts3202',A3203='$Apts3203',A3204='$Apts3204',A3205='$Apts3205',A3206='$Apts3206',A3207='$Apts3207',A3208='$Apts3208',
			     A3209='$Apts3209',A3210='$Apts3210',A3211='$Apts3211',A3212='$Apts3212',A3213='$Apts3213',A3214='$Apts3214',A3215='$Apts3215',A3216='$Apts3216',
				 A3217='$Apts3217',A3218='$Apts3218',A3219='$Apts3219',A3220='$Apts3220',A3221='$Apts3221',A3222='$Apts3222',A3223='$Apts3223',A3224='$Apts3224',
				 A3225='$Apts3225',A3226='$Apts3226',A3227='$Apts3227',A3228='$Apts3228',A3229='$Apts3229',A3230='$Apts3230',A3231='$Apts3231',A3232='$Apts3232',
		  		 A3233='$Apts3233',A3234='$Apts3234',A3235='$Apts3235',A3236='$Apts3236',A3237='$Apts3237',A3238='$Apts3238',A3239='$Apts3239',A3240='$Apts3240',
				 A3241='$Apts3241',A3242='$Apts3242',A3243='$Apts3243',A3244='$Apts3244',A3245='$Apts3245',A3246='$Apts3246',A3247='$Apts3247',A3248='$Apts3248',
				 A3249='$Apts3249',A3250='$Apts3250',A3251='$Apts3251',A3252='$Apts3252',A3253='$Apts3253',A3254='$Apts3254',A3255='$Apts3255',A3256='$Apts3256',
				 A3257='$Apts3257',A3258='$Apts3258',A3259='$Apts3259',A3260='$Apts3260',A3261='$Apts3261',A3262='$Apts3262',A3263='$Apts3263',A3264='$Apts3264'
           WHERE id = 130 " ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query( $sql2 )   ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
  {
 
    echo("La modification a �t� correctement effectu�e");
 
  }
  else
  {
    echo("La modification � �chou�e") ;
  }
?>
  </b></font> 
  <?php

mysql_close(); // D�connexion de MySQL
?>
</p>
<p> 
  <?php
echo "<a href=http://francefinalesrugby.franceserv.com/admin/Maj_champ_france/accueilsaisiescore.php> Retour </a>";
 ?>
<p>&nbsp;

