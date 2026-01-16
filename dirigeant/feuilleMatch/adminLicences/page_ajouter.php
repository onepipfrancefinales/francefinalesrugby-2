<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../feuilleMatch.css"/>
<link type="text/css" rel="stylesheet" href="../feuilledestyle.css"/>
<!--
<link type="text/css" rel="stylesheet" href="feuilleMatch.css"/>
-->

</head>

<?php 

if (isset ($_POST['championnat'])) $championnat = $_POST['championnat'];  else $championnat ="Variable championnat non d&eacute;clar&eacute;e";
if (isset($_POST['nom'])) $nom = $_POST['nom']; else $nom="";
if (isset($_POST['nom_cache'])) $nom_cache = $_POST['nom_cache']; else $nom_cache="";
if (isset($_POST['prenom'])) $prenom = $_POST['prenom']; else $prenom="";
if (isset($_POST['date_naissance'])) $date_naissance = $_POST['date_naissance']; else $date_naissance="";
if (isset($_POST['position_terrain'])) $position_terrain = $_POST['position_terrain']; else  $position_terrain="";
if (isset($_POST['type_licence'])) $type_licence = $_POST['type_licence']; else  $type_licence="";
if (isset($_POST['premiereLigne'])) $premiereLigne = $_POST['premiereLigne']; else $premiereLigne="";
if (isset($_POST['comite'])) $comite = $_POST['comite']; else $comite="";
if (isset($_POST['club'])) $club = $_POST['club']; else $club="";
if (isset($_POST['photo'])) $photo = $_POST['photo']; else $photo="";
if (isset($_POST['id_perso'])) $id_perso = $_POST['id_perso']; else $id_perso="";
if (isset($_POST['id'])) $id = $_POST['id']; else $id="";

//if (isset ($_GET['code_div'])) $code_div = $_GET['code_div'];			else $code_div= "Variable code_div non d&eacute;clar&eacute;e";
//if (isset ($_GET['code_match'])) $code_match = $_GET['code_match'];		else $code_match = "Variable code_match non d&eacute;clar&eacute;e";
//if (isset ($_GET['terrain'])) $terrain = $_GET['terrain'];				else $terrain= "Variable terrain non d&eacute;clar&eacute;e";

if (isset ($_GET['date'])) $date = $_GET['date'];						else $date= "Variable date non d&eacute;clar&eacute;e";
if (isset ($_GET['comite'])) $comite = $_GET['comite'];					else $comite = "Variable code comite d&eacute;clar&eacute;e";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];					else $equipe= "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['equipeA'])) $equipeA = $_GET['equipeA'];				else $equipeA= "Variable code equipeA d&eacute;clar&eacute;e";
if (isset ($_GET['equipeB'])) $equipeB = $_GET['equipeB'];				else $equipeB= "Variable equipeB non d&eacute;clar&eacute;e";
if (isset ($_GET['connect'])) $connect = $_GET['connect'];				else $connect= "Variable connect non d&eacute;clar&eacute;e";
if (isset ($_GET['type']))  $type = $_GET['type'];						else $type= "Variable type non d&eacute;clar&eacute;e";


// echo $code_match ;
// echo $equipe ;
// echo $equipeA ; 
// echo $equipeB ;
// echo $connect ;
// echo $comite ;
?>

<table width="100%" border="0" height="100%">
  <tr> 
    <td rowspan="2" valign="top"> 
      <?php include "sommaire.php"; ?>
    </td>
    <td valign="top" height="199" width="83%">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top" height="199" width="83%"> 
      <p>
      <p>
      <p>
      <p>
      <p> 
      <table width="800" border="0">
        <tr> 
          <td width="388" height="31"> 
            <div align="center"> 
              <h4><font face="Arial, Helvetica, sans-serif"><a href="page_ajouter.php?equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Ajouter 
                une licence de joueur</a></font></h4>
            </div>
          </td>
          <td width="402" height="31"> 
            <div align="center"> 
              <h4><font face="Arial, Helvetica, sans-serif"><a href="page_ajouterdir.php?equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">Ajouter 
                une licence de dirigeant</a></font></h4>
            </div>
          </td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p> 
       

<? //echo $equipe;?>
<? //echo $comite;?>
<br>
<br>
<br>
<br>
<table width="800" border="2" cellspacing="1" cellpadding="1" bordercolor="#003366">
  <tr> 
    <td bgcolor="#FFFFFF" bordercolor="#003366"> 
      <h4>Ajout d'une licence joueur</h4>
    </td>
  </tr>
</table>
<form action="page_ajouter2.php?equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" method="POST">
  <p> <br>
    <br>
    <font size="4"><b><font face="Arial, Helvetica, sans-serif"> Nom</font></b></font> 
    <font face="Arial, Helvetica, sans-serif"> : 
    <input name="nom" maxlength="30" type="text"  required />
    <b><font size="4">Pr&eacute;nom</font></b></font><b><font size="4">: </font></b> 
    <input name="prenom" maxlength="20" type="text"  required />
    
  <br>
    <br />
    <br />
   
  
        <p class="texte18"> N&deg; de licence : 
          <input  name="licence" maxlength="13" type="number"  required/>
          <font size="2">(13 caract&egrave;res)</font><br>
          <br>
		  	<!--
          Cat&eacute;gorie de licence : 
          <select name="couleur" size="1">
            <option value=""></option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
          </select>
          <br>
          <br>
          Premiere Ligne : 
          <input type="checkbox" name="premiereLigne" value="1">
          Oui 
          <input type="checkbox" name="premiereLigne" value="0">
          Non </P>
    
  <p class="nomJoueur">Cat&eacute;gorie de licence :<b> A </b>pour blanche, <b>B</b> 
    pour orange, <b>C </b>pour blanche/jaune. 
  <p class="texte18">
		Tutorat <input type="checkbox" name="tutorat" value="1">   Oui
	</p>
	-->
  <table width="775" border="0">
    <tr>
      <td> 
        <div align="center">
          <input type="submit" value="Valider" name="submit3222" />
        </div>
      </td>
    </tr>
	
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br>
</p>

<p>&nbsp;</p>

      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </td>
  </tr>
</table>
</body>
</html>
