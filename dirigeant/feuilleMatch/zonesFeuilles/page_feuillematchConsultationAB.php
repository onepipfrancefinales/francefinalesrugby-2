<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="../feuilledestyle2.css"/>
<link type="text/css" rel="stylesheet" href="../feuilledestyle.css"/>
<link rel="stylesheet" href="print.css" type="text/css" media="print" />
</head>
<?php $terrain = $_POST['terrain'];?>

<?php $connect = $_GET['connect'];?>
<?php $code_match = $_GET['code_match'];?>
<?php $comite = $_GET['comite'];?>
<?php $equipe = $_GET['equipe'];?>
<?php $equipeA = $_GET['equipeA'];?>
<?php $equipeB = $_GET['equipeB'];?>

<?php $equipe_dom = $equipeA;?>

<?php $bdcomite=("php".''.$comite.''."_joueurs");?>
<?php $bdfeuilleA=("php".''.$comite.''."_feuilleA");?>
<?php $bdfeuilleB=("php".''.$comite.''."_feuilleB");?>

<?php require ("../fonctions.php");?>
<?php require ("../fonctionsA.php");?>
<?php require ("../fonctionsB.php");?>


<?php// echo $code_match ;?>
<?php// echo $terrain ;?>
<?php// echo $comite ;?>
<?php// echo $equipe ;?>
<?php// echo $equipeA ;?>
<?php// echo $equipeB ;?>

<table width="841" border="0">
  <tr>
    <td valign="top" width="835">
      <?php include "feuilleMatchConsultationAB.php"; ?>
	  
	  <?php $connect = $_GET['connect'];?>

<?php $comite = $_GET['comite'];?>
    </td>
  </tr>
  <tr> 
    <td valign="top" width="835">&nbsp; </td>
  </tr>
</table>
<table width="842" border="0" height="145">
  <tr > 
    <td valign="top" align="left" colspan="2"> 
      <hr />
    </td>
  </tr>
  <tr > 
    <td valign="top" align="left" width="552">&nbsp;</td>
    <td valign="top" align="left" width="280">&nbsp;</td>
  </tr>
  <tr > 
    <td valign="top" align="left" width="552" bgcolor="#CCCCCC"> 
      <h4><a href="../connexion/page_liste_compet1.php?type=S1&equipe=<?php echo $equipe; ?>&comite=<?php echo $comite ; ?>&connect=<?php echo $connect ;?>" target="_top">RETOUR 
        ACCUEIL</a></h4>
    </td>
    <td valign="top" align="left" width="280" bgcolor="#CCCCCC"> 
      <h4><a href="../connexion/page_FM.php"><font face="Arial, Helvetica, sans-serif"><b>DECONNEXION</b></font></a></h4>
    </td>
  </tr>
  <tr > 
    <td valign="top" align="left" width="552" bgcolor="#FFFFFF">&nbsp;</td>
    <td valign="top" align="left" width="280" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr > 
    <td valign="top" align="left" width="552" bgcolor="#CCCCCC" height="45"> 
      <h4> 
        <div align="center"> 
          <form>
            <input type="button" value="Imprimer" onClick="window.print()" name="Bouton2">
          </form>
        </div>
      </h4>
    </td>
    <td valign="top" align="left" width="280" height="45">
<div align="center"></div>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
