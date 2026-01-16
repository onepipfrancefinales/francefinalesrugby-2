<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link type="text/css" rel="stylesheet" href="../feuilledestyle2.css"/>
</head>


<?php// echo $connect;?>
<?php// echo $comite;?>
<?php// $equipe_dom = $equipeA;?>
<?php// require ("../fonctions.php");?>
<?php// require ("../fonctionsA.php");?>
<?php// require ("../fonctionsB.php");?>
<?php// $bdcomite=("php".''.$comite.''."_joueurs");?>
<?php// $bdfeuilleA=("php".''.$comite.''."_feuilleA");?>
<?php// $bdfeuilleB=("php".''.$comite.''."_feuilleB");?>
<?php// $bdcomite=("php".''.$comite.''."_joueurs");?>
<?php //echo $bdcomite;?>
<?php// echo $equipe;?>
<?php// echo $comite;?>


<?php 
//$nb=mysql_query("SELECT SUM(photo) 
//from $bdcomite 
//where club=$equipe "); // Requête SQL
//$nb=mysql_fetch_array($nb);
//echo "$nb[0]"; 
?>


<? //echo $equipe;?>
<?// echo $comite;?>





<body >
<div > 
  <table width="894" border="0">
    <tr> 
      <td colspan="2" height="13"> 
        <div align="center">
          <?php require ("zone51ConsultationEquipeAB.php");?>
        </div>
      </td>
    </tr>
    <tr> 
      <td width="438"> 
        <?php require ("zone52ConsultationEquipeA.php");?>
      </td>
      <td width="446"> 
        <?php require ("zone52ConsultationEquipeB.php");?>
      </td>
    </tr>
  </table>
</div>


</body>
</html>
