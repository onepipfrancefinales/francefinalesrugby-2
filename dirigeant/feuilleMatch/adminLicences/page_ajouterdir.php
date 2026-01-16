<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="feuilleMatch.css"/>
</head>

<?php 

if (isset ($_POST['championnat'])) $championnat = $_POST['championnat']; else  $championnat ="Variable championnat non d&eacute;clar&eacute;e";


if (isset ($_GET['code_div'])) $code_div = $_GET['code_div'];			else $code_div= "Variable code_div non d&eacute;clar&eacute;e";
if (isset ($_GET['code_match'])) $code_match = $_GET['code_match'];		else $code_match = "Variable code_match non d&eacute;clar&eacute;e";
if (isset ($_GET['date'])) $date = $_GET['date'];						else $date= "Variable date non d&eacute;clar&eacute;e";
if (isset ($_GET['comite'])) $comite = $_GET['comite'];					else $comite = "Variable code comite d&eacute;clar&eacute;e";
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];					else $equipe= "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['equipeA'])) $equipeA = $_GET['equipeA'];				else $equipeA= "Variable code equipeA d&eacute;clar&eacute;e";
if (isset ($_GET['equipeB'])) $equipeB = $_GET['equipeB'];				else $equipeB= "Variable equipeB non d&eacute;clar&eacute;e";
if (isset ($_GET['terrain'])) $terrain = $_GET['terrain'];				else $terrain= "Variable terrain non d&eacute;clar&eacute;e";
if (isset ($_GET['connect'])) $connect = $_GET['connect'];				else $connect= "Variable connect non d&eacute;clar&eacute;e";
if (isset ($_GET['type']))  $type = $_GET['type'];						else $type= "Variable type non d&eacute;clar&eacute;e";
?>
<?php// echo $code_match ;?>
<?php// echo $equipe ;?>
<?php// echo $equipeA ;?>
<?php// echo $equipeB ;?>
<?php// echo $connect ;?>

<?php// echo $comite ;?>
<table width="100%" border="0" height="100%">
  <tr> 
    <td width="200" valign="top"> 
      <?php include "sommaire.php"; ?>
    </td>
    <td valign="top" height="199" width="83%"> 
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
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
        <?php $comite = $_GET['comite'];?>
        <?php $equipe = $_GET['equipe'];?>
        
      <p>&nbsp;</p>
<p><br>
</p>
<table width="800" border="2" cellspacing="1" cellpadding="1" bordercolor="#003366">
  <tr> 
    <td bgcolor="#FFFFFF" bordercolor="#003366"> 
      <h4>Ajout d'une licence dirigeant</h4>
    </td>
  </tr>
</table>
<form action="page_ajouterdir2.php?equipe=<?php echo $equipe ; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?> " method="POST">
  <p class="texte18"> <br>
   <fieldset id="fieldsetG"> 
   	<legend id="legendG"> Identification du dirigeant</legend>
	<br />
    Nom :  <input  name="nomdir" maxlength="30" type="text" required />
	<br /><br />
    Pr&eacute;nom : <input size="25"  name="prenomdir" maxlength="20" type="text" required />
    <br>
    
    <br>
    N&deg; de licence :  <input size="25" max=13 min=13 name="licencedir" type="text"  required />
    <br><br>
    </fieldset>
	</p>
  	
 
  <p class="texte18"> 
   <fieldset id="fieldsetG"> 
   	<legend id="legendG"> Fonction occup&eacute;e</legend>
	<br />
    <input type="checkbox" name="fonction" value="ENT">
    Entraineur 
    <input type="checkbox" name="fonction" value="ADJ">
    Adjoint
	 
<br /><br />
  
    <input type="checkbox" name="fonction" value="SOI">
    Soigneur 
    <input type="checkbox" name="fonction" value="MED">
    M&eacute;decin 
	
	<br /><br />

    <input type="checkbox" name="fonction" value="RES">
    Responsable
 
    <br /><br />
  
    <input type="checkbox" name="fonction" value="PRE">
    Pr&eacute;parateur physique 
  </fieldset>
	</p>
  <table width="344" border="1" bordercolor="#000000">
    <tr>
      <td bgcolor="#FF0000"> 
        <div align="center">
          <input type="submit" value="Valider" name="submit322" />
        </div>
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
      <p>&nbsp;</p>
    </td>
  </tr>
</table>
</body>
</html>
