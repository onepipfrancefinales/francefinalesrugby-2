<?php
session_start ();

if (isset($_SESSION['login']) && isset($_SESSION['pwd']) && isset($_SESSION['id'])) {
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="../feuilledestyle.css"/>
</head>
<?php
if (isset ($_GET['equipe'])) $equipe = $_GET['equipe'];					else $equipe= "Variable equipe non d&eacute;clar&eacute;e";
if (isset ($_GET['connect'])) $connect = $_GET['connect'];				else $connect= "Variable connect non d&eacute;clar&eacute;e";
if (isset ($_GET['type']))  $type = $_GET['type'];						else $type= "Variable type non d&eacute;clar&eacute;e";
if (isset ($_GET['comite'])) $comite = $_GET['comite'];					else $comite = "Variable code comite d&eacute;clar&eacute;e";
if (isset ($_GET['id_equipe'])) $id_equipe = $_GET['id_equipe'];        else $id_equipe= "Variable equipe non d&eacute;clar&eacute;e";

?>

<form name="form" method="post" action="modifMDP2.php"> 

  <table width="80%" border="0" align="center">
    <tr> 
      <td colspan="3"> 
        <h4>Changement de votre mot de passe</h4>
      </td>
    </tr>
    <tr> 
      <td width="44%">&nbsp;</td>
      <td width="19%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
    </tr>
    <tr> 
      <td width="44%">&nbsp;</td>
      <td width="19%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
    </tr>
    <tr> 
      <td width="44%"> 
        <div class="label">Saisir votre identifiant :</div>
      </td>
      <td width="19%"> 
        <div align="center"> 
          <input type="text" name="identifiant" maxlength="5" required="test">
        </div>
      </td>
      <td width="37%">&nbsp;</td>
    </tr>
    <tr> 
      <td width="44%"> 
        <div class="label">Saisir votre ancien mot de passe :</div>
      </td>
      <td width="19%"> 
        <div align="center"> 
          <input type="text" name="ancMdp" required="test">
        </div>
      </td>
      <td width="37%">&nbsp;</td>
    </tr>
    <tr> 
      <td width="44%"> 
        <div class="label">Saisir votre nouveau mot de passe :</div>
      </td>
      <td width="19%"> 
        <div align="center"> 
          <input type="text" name="newMdp" required="test">
        </div>
      </td>
      <td width="37%">&nbsp;</td>
    </tr>
    <tr> 
      <td width="44%">&nbsp;</td>
      <td width="19%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
    </tr>
    <tr> 
      <td width="44%">&nbsp;</td>
      <td width="19%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="3" height="60"> 
        <div align="center"> 
          <hr />
          <p><font face="Arial, Helvetica, sans-serif">Une fois valid&eacute; 
            votre nouveau mot de passe,<br>
            vous serez redirig&eacute; sur la page d'accueil pour connecter &agrave; 
            nouveau </font><br>
            <br>
          <hr/>
        </div>
      </td>
    </tr>
    <tr> 
      <td width="44%">&nbsp;</td>
      <td width="19%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
    </tr>
    <tr> 
      <td width="44%">&nbsp;</td>
      <td width="19%"> 
        <div align="center"> 
          <input type="submit" name="Submit" value="Valider">
        </div>
      </td>
      <td width="37%">&nbsp;</td>
    </tr>
    <tr> 
      <td width="44%">&nbsp;</td>
      <td width="19%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
    </tr>
    <tr> 
      <td width="44%">&nbsp;</td>
      <td width="19%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="3">
        <div align="center"><font face="Arial, Helvetica, sans-serif"><a href="page_liste_compet1.php?id_equipe=<?php echo $id_equipe;?>&type=<?php echo $type;?>&connect=<?php echo $connect;?>&comite=<?php echo $comite;?>&equipe=<?php echo $equipe;?>"><b>Revenir 
          &agrave; la page pr&eacute;c&eacute;dente, sans rien changer</b></a></font></div>
      </td>
    </tr>
    <tr> 
      <td colspan="3"> 
        <H4>&nbsp;</H4>
      </td>
    </tr>
    <tr> 
      <td width="44%">&nbsp;</td>
      <td width="19%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
    </tr>
  </table>
</form>

<?php





?>
<?php
}

?>